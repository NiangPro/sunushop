<?php

//suppression de la variable
unset($_SESSION['user']);

//destruction de la session
session_destroy();

return header("Location:?page=login");

require_once("views/logout.php");