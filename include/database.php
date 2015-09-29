<?php
/**
 * Created by PhpStorm.
 * User: henno
 * Date: 29.09.15
 * Time: 13:55
 */

// Connect database
$db = mysqli_connect('127.0.0.1', 'root', '', 'cleanblog') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");