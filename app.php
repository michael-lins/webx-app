<?php
require 'vendor/autoload.php';

use Longanime\Webx\App;

// Create the new application
$app = new App( "NameCrudApp" );

// Configure the actions for this app
require_once "actions.php";

/**
 * Start up the application
 */
$app->start();




// just debugs
// echo "<b><b><b>Current Action</b>: ". $app->getCurrentAction()->getName();
// echo "<br>Name pk: ". $app->getCurrentAction()->getPK();
// echo "<br>Name: ". $app->getCurrentAction()->searchByPk( $app->getCurrentAction()->getPK() );