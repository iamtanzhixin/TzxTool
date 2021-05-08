<?php
/**
 * Created by PhpStorm.
 * User: tzx
 * Date: 2021-05-06 16:01
 */
class IndexController extends BaseController {
	public function actionIndex() {
		$this->render('index/index');
	}
}