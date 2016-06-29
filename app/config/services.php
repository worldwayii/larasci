<?php

return array(

    /*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

    'mailgun' => array(
        'domain' => 'robosyslive.com',
        'secret' => 'key-44yuwzjc920rdahdig2p3p0s3ohnah75',
    ),

    'mandrill' => array(
        'secret' => '',
    ),

    'stripe' => array(
        'model'  => 'User',
        'secret' => '',
    ),
    
    /**
     * Facebook
     */
    'Facebook' => array(
        'client_id'     => '110000582741437',
        'client_secret' => '6bedbc336a7fcc6a877d4eb96c4d08b6',
        'scope'         => array('user'),
    ),	
);
