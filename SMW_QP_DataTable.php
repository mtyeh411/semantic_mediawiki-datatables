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
		$this->params['class'] = $this->params['class'] . ' dataTable';
		$this->params['headers'] = 'show';
		return parent::getResultText($res, SMW_OUTPUT_HTML );
	}
}
