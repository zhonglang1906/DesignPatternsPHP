<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}