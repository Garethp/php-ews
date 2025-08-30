<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\Type;
use garethp\ews\API\Enumeration;
use garethp\ews\API\XmlObject;
use PHPUnit\Framework\TestCase;
use Mockery;
use DateTime;
use PHPUnit\Framework\Attributes\DataProvider;

class TypeTest extends TestCase
{
    private $typeMock;

    public function getTypeMock()
    {
        if (!$this->typeMock) {
            $object = Mockery::mock('garethp\ews\API\Type')->makePartial();
            $this->typeMock = $object;
        }

        return $this->typeMock;
    }

    public function testSetCasting()
    {
        $calendarItem = new Type\CalendarItemType();
        $dateTime = $calendarItem->setStart('2015-07-01')
            ->getStart();

        $this->assertEquals(new \DateTime('2015-07-01'), $dateTime);
    }

    public function testBuildFromArray()
    {
        $array = array(
            'One' => 'One',
            'Two' => 'Two',
            'Three' => array('1', '2', '3'),
            'Four' => array('FourOne' => 1, 'FourTwo' => 2, 'FourThree' => 3)
        );

        $excepted = new XmlObject();
        $excepted->One = 'One';
        $excepted->Two = 'Two';
        $excepted->Three = array('1', '2', '3');
        $excepted->Four = new XmlObject();
        $excepted->Four->FourOne = 1;
        $excepted->Four->FourTwo = 2;
        $excepted->Four->FourThree = 3;

        $actual = Type::buildFromArray($array);

        $this->assertEquals($excepted, $actual);

        $calendarItem = Type\CalendarItemType::buildFromArray(array(
            'Subject' => 'Test'
        ));

        $calendarControl = new Type\CalendarItemType();
        $calendarControl->setSubject('Test');

        $this->assertEquals($calendarControl, $calendarItem);
    }

    #[DataProvider('arrayAssocProvider')]
    public function testArrayIsAssoc($array, $expected)
    {
        $type = $this->getTypeMock();
        $isAssoc = $type->arrayIsAssoc($array);

        $this->assertEquals($expected, $isAssoc);
    }

    #[DataProvider('toStringProvider')]
    public function testToString($string, $expected)
    {
        $type = $this->getTypeMock();
        $type->_ = $string;
        $this->assertEquals($expected, $type->__toString());
        $this->assertEquals($expected, (string) $type);
    }

    public function testClone()
    {
        $start = new DateTime('8:00 AM');
        $end = new DateTime('9:00 AM');

        $request = array(
            'Items' => array(
                'CalendarItem' => array(
                    'Start' => $start->format('c'),
                    'End' => $end->format('c'),
                    'Body' => array(
                        'BodyType' => Enumeration\BodyTypeType::HTML,
                        '_value' => 'This is <b>the</b> body'
                    ),
                    'ItemClass' => Enumeration\ItemClassType::APPOINTMENT,
                    'Sensitivity' => Enumeration\SensitivityChoicesType::NORMAL,
                    'Categories' => array('Testing', 'php-ews'),
                    'Importance' => Enumeration\ImportanceChoicesType::NORMAL
                )
            ),
            'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
        );

        $request = Type::buildFromArray($request);

        $this->assertEquals($request, clone $request);
    }

    public function testGetNonNullItems()
    {
        $type = Type::buildFromArray([
            'test' => 'test',
        ]);
        $type->_value = 'value';

        $this->assertSame(['Test' => 'test'], $type->getNonNullItems());
        $this->assertSame(['Test' => 'test', '_value' => 'value'], $type->getNonNullItems(true));
    }

    public static function arrayAssocProvider()
    {
        return array(
            array(array(), false),
            array(array(1,2,3), false),
            array(array('One', 'Two', 'Three'), false),
            array(array('One'=>1, 'Two'=>2, 'Three'=>3), true),
            array(array('One'=>1, '2', '3'), true)
        );
    }

    public static function toStringProvider()
    {
        return array(
            array(null, ''),
            array(false, ''),
            array(1, ''),
            array(new \stdClass(), ''),
            array('one', 'one')
        );
    }

    public static function magicIsDataProvider()
    {
        return array(
            array(
                array( 'someTrueValue' => true ),
                'someTrueValue',
                true
            ),

            array(
                array( 'isSomeFalseValue' => false ),
                'isSomeFalseValue',
                false
            )
        );
    }

    public static function magicExceptionProvider()
    {
        return array (
            array('getSomeValue'),
            array('setSomeValue', 'value'),
            array('setSomeValue'),
            array('addSomeValue', 'value'),
            array('isSomeValue')
        );
    }
}
