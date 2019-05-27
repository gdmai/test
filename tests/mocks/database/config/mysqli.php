<?php

return array(

	// Typical Database configuration
	'mysqli' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'mysqli'
	),

video::-internal-media-controls-download-button {
// Ensure there's a trailing slash
	// Database configuration with failover
	'mysqli_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'mysqli',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'mysqli',
			)
		)
	)
);