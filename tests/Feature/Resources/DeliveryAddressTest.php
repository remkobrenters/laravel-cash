<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests\Feature\Resources;

use Webparking\LaravelCash\Resources\DeliveryAddress;
use Webparking\LaravelCash\Tests\TestCase;

final class DeliveryAddressTest extends TestCase
{
    /**
     * @param string[] $attributes
     *
     * @dataProvider deliveryAddressProvider
     */
    public function testCanFillTheResourceFromMappings(array $attributes): void
    {
        $resource = (new DeliveryAddress())->fill($attributes);

        $this->assertEquals($attributes, $resource->getAttributes());
    }

    /**
     * @return iterable<string[]>
     */
    public function deliveryAddressProvider(): iterable
    {
        yield [
            [
                'relationNumber' => 'ABCDEF',
                'deliveryAddressSerialNumber' => 'ABCDEF',
                'description' => 'This is a test delivery address.',
                'name' => 'Test B.V.',
                'attentionOf' => 'John Doe',
                'address' => 'Teststraat 12',
                'postalCodeCity' => '1234AB Test',
                'country' => 'Nederland',
                'countryCode' => 'NL',
                'phoneNumber' => '0612345678',
                'comments' => 'Dit is een test',
                'globalLocationNumber' => 'ABCDEFGHIJKLM',
            ]
        ];
    }
}
