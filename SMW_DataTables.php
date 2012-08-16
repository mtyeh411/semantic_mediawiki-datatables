<?php

/**
 * This is an additional SMW result printer format.
 *
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$wgExtensionCredits['semantic'][] = array(
	'path' => __FILE__,
	'name' => 'SMW Data Tables Printer',
	'version' => '0.0',
	'author' => '[http://github.com/mtyeh411 Matt Yeh]',
);

$wgAutoloadClasses['SMWDataTable'] = dirname( __FILE__ ) . '/SMW_QP_DataTable.php';


$wgResourceModules['ext.smw.datatables.core'] = array(
	'styles' => array(
		'resources/datatables/media/css/jquery.dataTables.css',
	),	
	'scripts' => array( 
		'resources/datatables/media/js/jquery.dataTables.js', 
		'resources/js/SMW_DataTables.js',
	),
	'localBasePath' => dirname( __FILE__ ), 
	'remoteExtPath' => 'SMW_DataTables',
);

$smwgResultFormats['datatable'] = 'SMWDataTable';
