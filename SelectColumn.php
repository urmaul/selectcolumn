<?php

Yii::import('zii.widgets.grid.CDataColumn');

class SelectColumn extends CDataColumn
{
	
	/**
	 * @var array value => label
	 */
	public $labels;
	
	public function init()
	{
		$this->filter = $this->labels;
	}
	
	protected function renderDataCellContent($row, $data)
	{
		ob_start();
		parent::renderDataCellContent($row, $data);
		$content = ob_get_clean();
		
		echo isset($this->labels[$content]) ? $this->labels[$content] : $content;
	}
	
}
