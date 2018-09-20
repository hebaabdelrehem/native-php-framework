<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$config = array();
///////////////////   MiNative License   ///////////////////

$config['licensekey'] = "";

///////////////////   Database Details   ///////////////////

// The host you want to connect to.

$config['DB_host'] = "localhost";

// The database username.

$config['DB_user'] = "root";

// The database password.

$config['DB_password'] = "";

// The database name.

$config['DB_name'] = "minative";

// The server port.

$config['DB_port'] = "3306"; 

// The database charset.

$config['charset'] = "utf8";

///////////////////   Definitions   ///////////////////

define("HOST", $config['DB_host']);
define("DBuser", $config['DB_user']);
define("DBpass", $config['DB_password']);
define("DBname", $config['DB_name']);
define("PORT", $config['DB_port']);
define("Charset", $config['charset']);
define("LICENSE", $config['licensekey']);
define("SECURE", FALSE);

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////