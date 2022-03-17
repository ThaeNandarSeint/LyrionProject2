<?php

function connect()
{
    $connection = new mysqli('localhost', 'root', null, 'school');
    if ($connection->connect_errno) {
        return false;
    } else {
        return $connection;
    }
}
