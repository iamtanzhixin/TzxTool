<?php
/**
 * Created by PhpStorm.
 * User: tzx
 * Date: 2021-05-06 16:09
 * @param string $file_name
 */
function __autoload($file_name = '') {
	$file_info  = pathinfo($file_name);
	$class_name = strtolower($file_info['filename']);
	if (strpos($class_name, 'controller')) {
		$file = __DIR__ . '/controller/' . str_replace('controller', '', $class_name) . '.php';
		if (file_exists($file)) {
			include_once $file;
		}
	} elseif (strpos($class_name, 'model')) {
		$file = __DIR__ . '/model/' . str_replace('model', '', $class_name) . '.php';
		if (file_exists($file)) {
			include_once $file;
		}
	}
}

/*spl_autoload_register(function ($class) {
	$class_name = strtolower($class);
	$path_info = pathinfo($class_name);
	if (strpos($path_info['filename'], 'controller')) {
		$file = __DIR__ . '/controller/' . str_replace('controller', '', $path_info['filename']) . '.php';
		if (file_exists($file)) {
			include_once $file;
			echo __NAMESPACE__;
		}
	} elseif (strpos($path_info['filename'], 'model')) {
		$file = __DIR__ . '/model/' . str_replace('model', '', $path_info['filename']) . '.php';
		if (file_exists($file)) {
			include_once $file;
		}
	}
});*/