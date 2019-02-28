<?php
	$config['header'] = "Install Script for your Projekt";
	$config['applicationPath'] = "/";
	$config['database_file'] = "/config/database.php";
	
	// INTRODUCTION
	$introduction = array();
	$introduction["product"] = "PHP Install Script";
	$introduction["productVersion"] = "1.0 Beta";
	$introduction["company"] = "Software ....Synthese";

	// SERVER REQUIREMENTS
	$requirements = array();
	$requirements["phpVersion"] = "5.5";
	$requirements["extensions"] = array("mysqli", "pcre");

	// FILE PERMISSIONS
	// r = readable, w = writable, x = executable
	$filePermissions = array();
	$filePermissions["/config/database.php"] = "rwx";
	$filePermissions["tmp"] = "rwx";