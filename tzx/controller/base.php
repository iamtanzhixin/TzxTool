<?php
/**
 * Created by PhpStorm.
 * User: tzx
 * Date: 2021-05-06 16:04
 */
class BaseController {
	public function __construct() {

	}

	public function render($tpl = '', $data = array()) {
		$file = dirname(__DIR__) . '/html/' . $tpl . '.html';
		if (file_exists($file)) {
			ob_start();
			extract($data);
			include $file;
			$str = ob_get_contents();
			ob_end_clean();

			echo $str;
		} else {
			echo 'view not found';
		}

		exit();
	}

	public function renderJson($data = array()) {
		if (!is_array($data)) {
		    $data = array($data);
		}

		echo json_encode($data);
		exit();
	}
}