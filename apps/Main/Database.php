<?php
/* welcome to Ex-database
* ii merupakan random DB
* kalian bisa edit melalui composer dsb
* Author @ Eggy fachrurrozy
*/
class Database{
    private static $_instance = null,
    private $mysqli;

    public function __construct()
    $this->mysqli = new mysqli('localhost','root','','');

}