<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\Notice;

class MailNoticeSender implements NoticeSender
{

    public function send(array $data): bool
    {
        return true;
    }
}