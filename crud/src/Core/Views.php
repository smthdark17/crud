<?php

namespace App\Core;

class Views
{
	protected const TEMPLATES_PATH = '/crud/templates/';


	public static function render(string $name, array $data = []): void
	{
		$templatesDir = $_SERVER['DOCUMENT_ROOT'] . static::TEMPLATES_PATH;

		include $templatesDir . 'header.php';
		include $templatesDir . 'body.php';
		include $templatesDir . $name . '.php';
		include $templatesDir . 'footer.php';

	}

}

