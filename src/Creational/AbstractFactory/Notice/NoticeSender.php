<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\Notice;

interface NoticeSender
{
    public function send(array $data): bool;
}