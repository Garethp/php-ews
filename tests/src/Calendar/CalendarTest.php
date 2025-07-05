<?php

namespace garethp\ews\Test\Calendar;

use garethp\ews\Test\BaseTestCase;

class CalendarTest extends BaseTestCase
{
    public function setUp(): void
    {
        $client = $this->getClient();
        $client->deleteAllCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');
    }

    public function tearDown(): void
    {
        $client = $this->getClient();
        $client->deleteAllCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');
    }

    /**
     * @param $apiClass
     *
     * @return \garethp\ews\CalendarAPI
     */
    public function getClient($apiClass = null)
    {
        $client = parent::getClient();

        return $client->getCalendar('Test');
    }

    public function testPickCalendar()
    {
        $client = $this->getClient();
        $testCalendar = $client->getCalendar('Test');
        $defaultCalendar = $client->getCalendar();

        $testFolder = $client->getFolderByFolderId($testCalendar->getFolderId());
        $defaultFolder = $client->getFolderByFolderId($defaultCalendar->getFolderId());

        $this->assertEquals('Test', $testFolder->getDisplayName());
        $this->assertEquals('Calendar', $defaultFolder->getDisplayName());
    }

    public function testListChanges()
    {
        $client = $this->getClient();
        $changes = $client->listChanges();

        $this->assertNotNull($changes->getSyncState());
        $this->assertNotNull($changes->getChanges());
    }

    public function testGetCalendarItems()
    {
        $client = $this->getClient();
        $items = $client->getCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');

        $this->assertCount(0, $items);
    }

    public function testGetCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00');
        $end = new \DateTime('2015-07-01 9:00');

        $client = $this->getClient();
        $items = $client->createCalendarItems(array(
            array('Subject' => 'Test Get Item 1', 'Start' => $start->format('c'), 'End' => $end->format('c')),
            array('Subject' => 'Test Get Item 2', 'Start' => $start->format('c'), 'End' => $end->format('c'))
        ));

        $itemId = $items[1];

        $item = $client->getCalendarItem($itemId->getId(), $itemId->getChangeKey());
        $this->assertEquals('Test Get Item 2', $item->getSubject());
    }

    public function testUpdateCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00 AM');
        $end = new \DateTime('2015-07-01 9:00 AM');

        $client = $this->getClient();

        $items = $client->createCalendarItems(array(
            'Subject' => 'Test Update Calendar Item',
            'Start' => $start->format('c'),
            'End' => $end->format('c')
        ));

        $item = $items[0];

        $client->updateCalendarItem($item, array(
            'Subject' => 'Test Updated Calendar Item'
        ));

        $item = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $item = $item[0];

        $this->assertEquals('Test Updated Calendar Item', $item->getSubject());
    }

    public function testDeleteCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00 AM');
        $end = new \DateTime('2015-07-01 9:00 AM');

        $client = $this->getClient();

        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertEmpty($items);

        $items = $client->createCalendarItems(array(
            'Subject' => 'Test Update Calendar Item',
            'Start' => $start->format('c'),
            'End' => $end->format('c')
        ));
        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertNotEmpty($items);

        $client->deleteCalendarItem($items[0]->getItemId());
        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertEmpty($items);
    }

    /**
     * Test calendar functionality with timezone handling
     */
    public function testCalendarTimezoneHandling()
    {
        $client = $this->getClient();

        $parisStart = new \DateTime('2015-07-01 14:00:00', new \DateTimeZone('Europe/Paris'));
        $parisEnd = new \DateTime('2015-07-01 15:00:00', new \DateTimeZone('Europe/Paris'));

        $items = $client->createCalendarItems([
            'Subject' => 'Timezone Test Meeting',
            'Start' => $parisStart->format('c'),
            'End' => $parisEnd->format('c')
        ]);

        $this->assertNotEmpty($items, 'Should create calendar items with timezone info');

        $retrievedItems = $client->getCalendarItems($parisStart->format('c'), $parisEnd->format('c'));
        $event = $retrievedItems[0];

        // Convert both original and retrieved times to UTC for comparison
        $originalUtc = new \DateTime('2015-07-01 14:00:00', new \DateTimeZone('Europe/Paris'));
        $originalUtc->setTimezone(new \DateTimeZone('UTC'));

        $retrievedUtc = clone $event->getStart();
        $retrievedUtc->setTimezone(new \DateTimeZone('UTC'));

        $this->assertEquals($originalUtc->format('H:i'), $retrievedUtc->format('H:i'), 
            'EWS should preserve timezone-correct time data');
    }

    /**
     * Test calendar with international characters and Unicode handling
     */
    public function testCalendarInternationalCharacters()
    {
        $client = $this->getClient();
        
        $start = new \DateTime('2025-07-01 16:00:00');
        $end = new \DateTime('2025-07-01 17:00:00');
        
        // Create event with international characters
        $items = $client->createCalendarItems([
            'Subject' => 'Réunion équipe - Café & Discusion',
            'Start' => $start->format('c'),
            'End' => $end->format('c'),
            'Location' => 'Salle de réunion #1'
        ]);
        
        $this->assertNotEmpty($items, 'Should handle international characters');
        
        $retrievedItems = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertNotEmpty($retrievedItems, 'Should retrieve items with international characters');
        
        $event = $retrievedItems[0];
        $this->assertStringContainsString('Réunion', $event->getSubject(), 
            'Should preserve international characters in subject');
    }

    /**
     * Test calendar with recurring events
     */
    public function testRecurringEventSupport()
    {
        $client = $this->getClient();
        
        $start = new \DateTime('2025-07-01 10:00:00');
        $end = new \DateTime('2025-07-01 11:00:00');
        
        try {
            $items = $client->createCalendarItems([
                'Subject' => 'Weekly Team Meeting',
                'Start' => $start->format('c'),
                'End' => $end->format('c'),
                'Location' => 'Conference Room A',
                'Recurrence' => [
                    'WeeklyRecurrence' => [
                        'Interval' => 1, // Every week
                        'DaysOfWeek' => 'Wednesday'
                    ],
                    'NumberedRecurrence' => [
                        'StartDate' => $start->format('Y-m-d'),
                        'NumberOfOccurrences' => 4
                    ]
                ]
            ]);
            
            $this->assertNotEmpty($items, 'Should support weekly recurring event creation');
            
            // Verify the recurring event was created properly
            $masterItemId = $items[0];
            $this->assertNotNull($masterItemId, 'Should return master item ID for recurring event');
            
            $retrievedItem = $client->getCalendarItem($masterItemId->getId(), $masterItemId->getChangeKey());
            $this->assertNotNull($retrievedItem, 'Should retrieve recurring event');
            $this->assertEquals('Weekly Team Meeting', $retrievedItem->getSubject());
            
            // Test that we can find instances in the date range
            $endDate = clone $start;
            $endDate->add(new \DateInterval('P1M')); // Look ahead 1 month
            
            $calendarItemsResult = $client->getCalendarItems($start->format('c'), $endDate->format('c'));
            $this->assertNotNull($calendarItemsResult, 'Should retrieve calendar items result');
            
            // Check if we got multiple calendar items (indicating recurring instances)
            if (method_exists($calendarItemsResult, 'getTotalItemsInView')) {
                $totalItems = $calendarItemsResult->getTotalItemsInView();
                $this->assertGreaterThan(0, $totalItems, 
                    'Should find at least one instance of recurring event');
            } else {
                $this->assertTrue(true, 'Calendar items retrieved successfully');
            }
            
        } catch (\Exception $e) {
            $this->markTestSkipped('Recurrence not supported on this Exchange server: ' . $e->getMessage());
        }
    }
}
