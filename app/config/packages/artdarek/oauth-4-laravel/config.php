<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '110000582741437',
            'client_secret' => '6bedbc336a7fcc6a877d4eb96c4d08b6',
            'scope'         => array('email', 'user_birthday'),
        ),		

	)

);