<?php

namespace App\Mailer;

use Psr\Log\LoggerInterface;

class Emailer
{
    // let's inject our new parameter
    public function __construct(string $mySweetParam, LoggerInterface $logger)
    {
        $logger->alert('BOOM!');
        $logger->debug($mySweetParam);

        dump($mySweetParam);
    }
    // Let's use a PHP 7 feature, and declare a return type on our method signature
    public function create() : \Swift_Message

    {

    }
}