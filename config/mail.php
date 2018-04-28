<?php

return [



    'driver' => env('MAIL_DRIVER', 'mailgun'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 465),
    'from' => ['address' => 'sales@bestassignmentexperts.com', 'name' => 'BEST ASSIGNMENT EXPERTS'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];
