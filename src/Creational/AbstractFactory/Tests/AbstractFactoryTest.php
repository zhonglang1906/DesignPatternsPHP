<?php

declare(strict_types=1);

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\Tests;

use PHPUnit\Framework\TestCase;
use Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\CsvWriter;
use Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\JsonWriter;
use Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\UnixWriterFactory;
use Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\WinWriterFactory;
use Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\WriterFactory;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}