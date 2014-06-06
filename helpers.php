<?php

//declarando una funcion
	function view($template, $vars = array()) 
	{
		extract($vars);
		
		require "views/$template.tpl.php";
	}

	function controller($name)
	{
		if (empty($name))
		{
			$name = 'index';
		}

		$file = "controllers/$name.php";
		if (file_exists($file))
		{
			require $file;
		}

		else
		{
			$name = '404';

		}

		
	}