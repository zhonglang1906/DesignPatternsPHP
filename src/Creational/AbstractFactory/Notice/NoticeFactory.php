<?php

namespace Zhonglang\DesignPatternsPhp\Creational\AbstractFactory\Notice;


interface NoticeFactory
{
    public function createNoticeSender(): NoticeSender;
}