<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{
    public function write($line): string
    {
        return join(',', $line) . "\n";
    }
}