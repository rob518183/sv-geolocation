<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sv-geolocation/2.0.1',
	array(
		// Identification
		//
		'label' => 'Geolocation',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'(combodo-location-hierarchy/1.0.0 & itop-structure/3.2.0)||itop-structure/3.2.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.sv-geolocation.php',
			'geomap.class.inc.php',
			'interactiveform.class.inc.php',
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			'data.sample.locations.xml',
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			'provider' => 'MapLibre',
			'api_key' => null,
			'default_latitude' => 45.157389,
			'default_longitude' => 5.748830,
			'default_zoom' => 17,
			'staticmapurl' => null,
			'style' => null,
			'display_coordinates' => true,
		),
	)
);

?>
