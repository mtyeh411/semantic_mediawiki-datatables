<?php

/**
 * A query printer for DataTables using the DataTables jQuery library.
 *
 * @author mtyeh411
 */

class SMWDataTable extends SMWTableResultPrinter {

	/**
	 * @see SMWResultPrinter::getName()
 	 */
	public function getName() {
		return "datatable"; //TODO
	}

	/**
	 * @see SMWResultPrinter::getResultText()
	 */	
	public function getResultText( SMWQueryResult $res, $outputmode) {
		global $wgOut;
		$wgOut->addModules( 'ext.smw.datatables.core' );
		$html = DOMDocument::loadHTML(parent::getResultText($res, SMW_OUTPUT_HTML));
		$finder = new DOMXPath( $html );
		foreach( $finder->query('//table') as $table ) {
			$table->setAttribute( 'class', 'dataTable' );
		}
		return $html->saveHTML();
	}
}
