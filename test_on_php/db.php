<?php
require 'libs/rb.php';
R::setup(  'mysql:host=127.0.0.1:3306;dbname=test','root', '' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();
