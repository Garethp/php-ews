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
     * Test calendar functionality with different timezone configurations
     */
    public function testCalendarTimezoneHandling()
    {
        $client = $this->getClient();
        
        // Create event with explicit timezone
        $start = new \DateTime('2015-07-01 14:00:00', new \DateTimeZone('Europe/Paris'));
        $end = new \DateTime('2015-07-01 15:00:00', new \DateTimeZone('Europe/Paris'));
        
        $items = $client->createCalendarItems([
            'Subject' => 'Timezone Test Event',
            'Start' => $start->format('c'),
            'End' => $end->format('c'),
            'Location' => 'Paris Office'
        ]);
        
        $this->assertNotEmpty($items, 'Should create calendar items with timezone info');
        
        $retrievedItems = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertNotEmpty($retrievedItems, 'Should retrieve calendar items with timezone');
        
        $event = $retrievedItems[0];
        $this->assertEquals('Timezone Test Event', $event->getSubject());
        $this->assertNotNull($event->getStart(), 'Event should have start time');
        $this->assertNotNull($event->getEnd(), 'Event should have end time');
    }

    /**
     * Test calendar with international characters and Unicode handling
     */
    public function testCalendarInternationalCharacters()
    {
        $client = $this->getClient();
        
        $start = new \DateTime('2015-07-01 16:00:00');
        $end = new \DateTime('2015-07-01 17:00:00');
        
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
}
