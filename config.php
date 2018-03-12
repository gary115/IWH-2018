<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
$con=mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($con,'forum');

//Username of the Administrator
$admin='root';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>