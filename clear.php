<?php
session_start();

if (isset($_SESSION['history'])) {
    $_SESSION['history'] = array();
}
session_write_close();
include "table.php";
