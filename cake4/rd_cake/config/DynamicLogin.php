<?php

$config = array();

//The "Custom" theme will still redirect to the browser detection page but will redirect based on the page settings defined in the DB

$config['DynamicLogin']['theme']['Custom'] = array();

$config['DynamicLogin']['theme']['Default'] = [
	'coova_desktop'		=> '/login/bootstrap5/index.html',
	'coova_mobile'		=> '/login/bootstrap5/index.html',
	'mikrotik_desktop'	=> '/login/bootstrap5/index.html',
	'mikrotik_mobile'	=> '/login/bootstrap5/index.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index.html',
];



$config['DynamicLogin']['theme']['Webix'] = [
	'coova_desktop'		=> '/login/cp/index.html',
	'coova_mobile'		=> '/login/cp/index.html',
	'mikrotik_desktop'	=> '/login/cp/index.html',
	'mikrotik_mobile'	=> '/login/cp/index.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index.html',
];


$config['DynamicLogin']['theme']['Black Aqua Green'] = [
	'coova_desktop'		=> '/login/cp/index_black_aqua_green.html',
	'coova_mobile'		=> '/login/cp/index_black_aqua_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_black_aqua_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_black_aqua_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_aqua_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_aqua_green.html',
];

$config['DynamicLogin']['theme']['Black Blue and Red'] = [
	'coova_desktop'		=> '/login/cp/index_black_blue_red.html',
	'coova_mobile'		=> '/login/cp/index_black_blue_red.html',
	'mikrotik_desktop'	=> '/login/cp/index_black_blue_red.html',
	'mikrotik_mobile'	=> '/login/cp/index_black_blue_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_blue_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_blue_red.html',
];

$config['DynamicLogin']['theme']['Black Red Green'] = [
	'coova_desktop'		=> '/login/cp/index_black_red_green.html',
	'coova_mobile'		=> '/login/cp/index_black_red_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_black_red_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_black_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_red_green.html',
];

$config['DynamicLogin']['theme']['Blue Green Grey'] = [
	'coova_desktop'		=> '/login/cp/index_blue_green_grey.html',
	'coova_mobile'		=> '/login/cp/index_blue_green_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_blue_green_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_blue_green_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_blue_green_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_blue_green_grey.html',
];

$config['DynamicLogin']['theme']['Blue Red Grey'] = [
	'coova_desktop'		=> '/login/cp/index_blue_red_grey.html',
	'coova_mobile'		=> '/login/cp/index_blue_red_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_blue_red_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_blue_red_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_blue_red_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_blue_red_grey.html',
];

$config['DynamicLogin']['theme']['Darkgrey Blue Green'] = [
	'coova_desktop'		=> '/login/cp/index_darkgrey_blue_green.html',
	'coova_mobile'		=> '/login/cp/index_darkgrey_blue_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_darkgrey_blue_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_darkgrey_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_darkgrey_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_darkgrey_blue_green.html',
];

$config['DynamicLogin']['theme']['Darkgrey Red Green'] = [
	'coova_desktop'		=> '/login/cp/index_darkgrey_red_green.html',
	'coova_mobile'		=> '/login/cp/index_darkgrey_red_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_darkgrey_red_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_darkgrey_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_darkgrey_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_darkgrey_red_green.html',
];


$config['DynamicLogin']['theme']['Lightgrey Blue Green'] = [
	'coova_desktop'		=> '/login/cp/index_lightgrey_blue_green.html',
	'coova_mobile'		=> '/login/cp/index_lightgrey_blue_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_lightgrey_blue_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_lightgrey_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lightgrey_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lightgrey_blue_green.html',
];

$config['DynamicLogin']['theme']['Lightgrey Red Green'] = [
	'coova_desktop'		=> '/login/cp/index_lightgrey_red_green.html',
	'coova_mobile'		=> '/login/cp/index_lightgrey_red_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_lightgrey_red_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_lightgrey_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lightgrey_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lightgrey_red_green.html',
];

$config['DynamicLogin']['theme']['Lime Grey Red'] = [
	'coova_desktop'		=> '/login/cp/index_lime_grey_red.html',
	'coova_mobile'		=> '/login/cp/index_lime_grey_red.html',
	'mikrotik_desktop'	=> '/login/cp/index_lime_grey_red.html',
	'mikrotik_mobile'	=> '/login/cp/index_lime_grey_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lime_grey_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lime_grey_red.html',
];

$config['DynamicLogin']['theme']['Navy Lime Red'] = [
	'coova_desktop'		=> '/login/cp/index_navy_lime_red.html',
	'coova_mobile'		=> '/login/cp/index_navy_lime_red.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_navy_lime_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_navy_lime_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_navy_lime_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_navy_lime_red.html',
];

$config['DynamicLogin']['theme']['Navy Red Green'] = [
	'coova_desktop'		=> '/login/cp/index_navy_red_green.html',
	'coova_mobile'		=> '/login/cp/index_navy_red_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_navy_lime_red.html',
	'mikrotik_mobile'	=> '/login/cp/index_navy_lime_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_navy_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_navy_red_green.html',
];


$config['DynamicLogin']['theme']['Orange Blue Green'] = [
	'coova_desktop'		=> '/login/cp/index_orange_blue_green.html',
	'coova_mobile'		=> '/login/cp/index_orange_blue_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_orange_blue_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_orange_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_orange_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_orange_blue_green.html',
];

$config['DynamicLogin']['theme']['Orange Blue Grey'] = [
	'coova_desktop'		=> '/login/cp/index_orange_blue_grey.html',
	'coova_mobile'		=> '/login/cp/index_orange_blue_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_orange_blue_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_orange_blue_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_orange_blue_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_orange_blue_grey.html',
];

$config['DynamicLogin']['theme']['Pink Blue Green'] = [
	'coova_desktop'		=> '/login/cp/index_pink_blue_green.html',
	'coova_mobile'		=> '/login/cp/index_pink_blue_green.html',
	'mikrotik_desktop'	=> '/login/cp/index_pink_blue_green.html',
	'mikrotik_mobile'	=> '/login/cp/index_pink_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_pink_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_pink_blue_green.html',
];

$config['DynamicLogin']['theme']['Red Blue Grey'] = [
	'coova_desktop'		=> '/login/cp/index_red_blue_grey.html',
	'coova_mobile'		=> '/login/cp/index_red_blue_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_red_blue_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_red_blue_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_red_blue_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_red_blue_grey.html',
];

$config['DynamicLogin']['theme']['Red Green Blue'] = [
	'coova_desktop'		=> '/login/cp/index_red_green_blue.html',
	'coova_mobile'		=> '/login/cp/index_red_green_blue.html',
	'mikrotik_desktop'	=> '/login/cp/index_red_green_blue.html',
	'mikrotik_mobile'	=> '/login/cp/index_red_green_blue.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_red_green_blue.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_red_green_blue.html',
];

$config['DynamicLogin']['theme']['Softgreen'] = [
	'coova_desktop'		=> '/login/cp/index_softgreen.html',
	'coova_mobile'		=> '/login/cp/index_softgreen.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_turqois_grey_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_turqois_grey_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_turqois_grey_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_turqois_grey_red.html',
];

$config['DynamicLogin']['theme']['Softpink Grey Lime'] = [
	'coova_desktop'		=> '/login/cp/index_softpink_grey_lime.html',
	'coova_mobile'		=> '/login/cp/index_softpink_grey_lime.html',
	'mikrotik_desktop'	=> '/login/cp/index_softpink_grey_lime.html',
	'mikrotik_mobile'	=> '/login/cp/index_softpink_grey_lime.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_softpink_grey_lime.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_softpink_grey_lime.html',
];

$config['DynamicLogin']['theme']['Turqois Grey Red'] = [
	'coova_desktop'		=> '/login/cp/index_turqois_grey_red.html',
	'coova_mobile'		=> '/login/cp/index_turqois_grey_red.html',
	'mikrotik_desktop'	=> '/login/cp/index_turqois_grey_red.html',
	'mikrotik_mobile'	=> '/login/cp/index_turqois_grey_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_turqois_grey_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_turqois_grey_red.html',
];


$config['DynamicLogin']['theme']['Winered Green Grey'] = [
	'coova_desktop'		=> '/login/cp/index_winered_green_grey.html',
	'coova_mobile'		=> '/login/cp/index_winered_green_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_winered_green_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_winered_green_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_winered_green_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_winered_green_grey.html',
];

$config['DynamicLogin']['theme']['Woodgreen Red Grey'] = [
	'coova_desktop'		=> '/login/cp/index_woodgreen_red_grey.html',
	'coova_mobile'		=> '/login/cp/index_woodgreen_red_grey.html',
	'mikrotik_desktop'	=> '/login/cp/index_woodgreen_red_grey.html',
	'mikrotik_mobile'	=> '/login/cp/index_woodgreen_red_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_woodgreen_red_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_woodgreen_red_grey.html',
];


$config['DynamicLogin']['ruckus']['northbound']['password'] = 'stayoutnow123!';

$config['DynamicLogin']['i18n'][0]     = ['name' => 'English',     'id' => 'en_GB',   'active' => true];
$config['DynamicLogin']['i18n'][1]     = ['name' => 'French',      'id' => 'fr_FR',   'active' => true];
$config['DynamicLogin']['i18n'][2]     = ['name' => 'Italian',     'id' => 'it_IT',   'active' => true];
$config['DynamicLogin']['i18n'][3]     = ['name' => 'Spanish',     'id' => 'es_ES',   'active' => true];
$config['DynamicLogin']['i18n'][4]     = ['name' => 'Afrikaans',   'id' => 'af_ZA',   'active' => true];
$config['DynamicLogin']['i18n'][5]     = ['name' => 'Arabic',      'id' => 'ar_AR',   'active' => true];
$config['DynamicLogin']['i18n'][6]     = ['name' => 'Dutch (Netherland)',      'id' => 'nl_NL',   'active' => true];
$config['DynamicLogin']['i18n'][7]     = ['name' => 'Dutch (Belgium)',      'id' => 'nl_BE',   'active' => true];
$config['DynamicLogin']['i18n'][8]     = ['name' => 'German',      'id' => 'de_DE',   'active' => true];


return $config;

?>
