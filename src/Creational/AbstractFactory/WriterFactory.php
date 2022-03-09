<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory;

interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;

    public function createJsonWriter(): JsonWriter;
}