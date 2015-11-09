<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'mongo',
	'mongo'	 => array(
		'default' => array(
			'hostname' => 'localhost',
			'database' => 'blog',
			'username' => 'user',
			'password' => 'pass',
		),
	),
);
