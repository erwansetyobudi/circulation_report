<?php
/**
 * Plugin Name: Circulation Report
 * Plugin URI: https://github.com/idoalit/circulation_report
 * Description: SLiMS Plugin to show circulation report based on month and year. This plugin dedicated to anfadilah.
 * Version: 0.0.1
 * Author: Erwan Setyo Budi
 * Author URI: https://github.com/erwansetyobudi
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus
$plugin->registerMenu('reporting', 'Circulation Statistics', __DIR__ . '/index.php');
