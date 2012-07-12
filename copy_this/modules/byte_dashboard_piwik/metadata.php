<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'byte_dashboard_piwik',
    'title'        => 'Piwik Daschboard',
    'description'  => array(
		'de'=>'Zeigt das Piwik Dashboard im Admin-Bereich.',
		'en'=>'Shows Piwik Daschboard in Admin Area.',
	),
	'thumbnail'    => 'picture.png',
    'version'      => '1.0.0',
    'author'       => '@byte',
    'url'          => '',
    'email'        => '',
    'extend'       => array(
        'oxAdminView'   => 'byte_dashboard_piwik/byte_dashboard_piwik',
    ),
    'templates' => array(
		'byte_dashboard_piwik.tpl' => 'out\admin\tpl\byte_dashboard_piwik.tpl'
	)
);