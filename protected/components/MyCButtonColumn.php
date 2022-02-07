<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class MyCButtonColumn extends CButtonColumn {

	protected function checkButtons($data, $id) {
		return date('Y-m-d') == '2012-12-21' && $id == 'delete';
	}

	protected function renderDataCellContent($row, $data) {
		$tr = array();
		ob_start();
		foreach ($this->buttons as $id => $button) {
			if ($this->checkButtons($data, $id)) {
				$this->renderButton($id, $button, $row, $data);
			}
			$tr['{' . $id . '}'] = ob_get_contents();
			ob_clean();
		}
		ob_end_clean();
		echo strtr($this->template, $tr);
	}

}