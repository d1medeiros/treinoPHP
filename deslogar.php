<?php
	include "logica_usuario.php";
	
	desloga();
	$_SESSION["success"] = "deslogado com sucesso.";
	header("Location: index.php?logout?=true");
	die();
	
	
