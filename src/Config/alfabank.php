<?php
return [
    'pay_test_mode' => env('pay_test_mode', true),
    'TEST_GETAWAY_URL' => env('TEST_GETAWAY_URL', 'https://web.rbsuat.com/ab/rest/'),
    'GETAWAY_URL' => env('GETAWAY_URL', 'https://pay.alfabank.ru/payment/rest/') ,
    'RETURN_URL' => env('RETURN_URL', '/'),
];
