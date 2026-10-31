<?php

namespace garethp\ews\Test;

use garethp\ews\API\Type\ItemAttachmentType;
use garethp\ews\API\Type\ItemType;

class BuildableTraitTest extends BaseTestCase
{
    public function testStrictBuildFromArrayResolvesTypedSetter()
    {
        $attachment = ItemAttachmentType::buildFromArray([
            'Item' => ['Subject' => 'Test Subject'],
        ], true);

        $this->assertInstanceOf(ItemType::class, $attachment->getItem());
        $this->assertEquals('Test Subject', $attachment->getItem()->getSubject());
    }
}
