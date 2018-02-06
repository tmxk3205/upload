<?php
class ControllerEventTheme extends Controller {
	public function index(&$route, &$args, &$template) {
		// This is only here for compatibility with old templates
		if (substr($route, -4) == 'tpl') {
			$view = substr($route, 0, -4);
		}

		if (is_file(DIR_TEMPLATE . $route . '.twig')) {
			$this->config->set('template_engine', 'twig');
		} elseif (is_file(DIR_TEMPLATE . $route . '.tpl')) {
			$this->config->set('template_engine', 'template');
		}
	}
}
