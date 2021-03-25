<?php

declare(strict_types=1);

namespace BEAR\ApiDoc;

use PHPUnit\Framework\TestCase;

use function file_get_contents;
use function json_decode;

class JsonSchemaTest extends TestCase
{
    public function testNewInstance(): void
    {
        $jsonFile = __DIR__ . '/Fake/var/schema/response/ticket.json';
        $jsonSchema = new Schema(json_decode((string) file_get_contents($jsonFile)));
        $this->assertInstanceOf(Schema::class, $jsonSchema);
    }
}