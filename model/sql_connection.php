<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=db_1', 'root', '');
}
catch(Exeption $e)
{
	die ('Erreur : ' . $e->getMessage());
}
m
