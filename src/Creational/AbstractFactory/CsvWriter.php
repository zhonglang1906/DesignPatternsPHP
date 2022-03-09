<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}