<?php
	error_reporting(0);
	session_start();

	include 'class.php';
	include 'config.php';

	$lg = $_request['lg'];

	switch($lg){
		case "daftar":
				# code...
				require "form_daftar/index.php";
				break;	

				case "home":
				require "home.php";
				break;

				default:
				require "form_login/index.php";
				break;
	}
	?>