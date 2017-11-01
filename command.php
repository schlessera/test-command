<?php namespace AlainSchlesser\TestCommand;

if ( ! defined( 'WP_CLI' ) ) {
	return;
}

$autoloader = __DIR__ . '/vendor/autoload.php';
if ( is_readable( $autoloader ) ) {
	include $autoloader;
}

\WP_CLI::add_command(
	'test-command',
	'AlainSchlesser\TestCommand\TestCommand'
);
