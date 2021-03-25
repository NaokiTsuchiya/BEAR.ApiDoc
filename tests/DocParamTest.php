<?php

declare(strict_types=1);

namespace BEAR\ApiDoc;

use BEAR\ApiDoc\Fake\Ro\FakeIndex;
use PHPUnit\Framework\TestCase;
use ReflectionParameter;

class DocParamTest extends TestCase
{
    public function testFromParameter(): void
    {
        $param = new ReflectionParameter([FakeIndex::class, 'onGet'], 'id');
        $docParam = new DocParam($param, new TagParam('', ''));
        $this->assertInstanceOf(DocParam::class, $docParam);
        $this->assertSame('id', $docParam->name);
        $this->assertSame('string', $docParam->type);
        $this->assertFalse($docParam->isOptional);
    }
}