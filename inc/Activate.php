<?php
/**
 * @package  LC Plugin
 */
namespace Inc;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}