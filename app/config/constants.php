<?php

return array(
    'status' => [
        'inactive'  => 0,
        'active'    => 1,
        'ban'       => 2,
    ],
    'payments' => [
        'success'   => 1,
        'pending'   => 2,
        'failed'    => 3,
    ],
    'roles' => [
        'admin'     => 1,
        'mclient'   => 2,
        'user'      => 3,
    ],
    'activity' => [
        'user'      => 1,
        'business'  => 2,
    ],
    'login' => [
        'facebook'  => 1,
        'email'     => 2,
    ],
    'default_hotspot_profile' => 'users',
    'default_hotspot_server' => 'hotspot1',
    'default_hotspot_limit' => '256K/2048K',
    'default_hotspot_users' => 1,
    'default_hotspot_timeout' => '5m',
);
