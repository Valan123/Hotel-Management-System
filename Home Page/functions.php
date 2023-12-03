<?php

require("db_connect.php");

function getUsersData($id)
{
    $arrary = array();
    $q = mysql_query("SELECT * FROM 'register' WHERE 'id'=".$id);
    while($r= mysql_fetch_assoc($q))
    {
        $arrary['id'] = $r['id'];
        $arrary['first_name'] = $r['username'];
        $arrary['last_name'] = $r['last_name'];
        $arrary['username'] = $r['username'];
        $arrary['phone_number'] = $r['phone_number'];
        $arrary['password'] = $r['password'];

    }
    return $arrary;
}
function getId($username)
{
    $q = mysql_query("SELECT 'id' FROM 'register' WHERE 'username'=.$username");
    while($r = mysql_fetch_assoc($q))
    {
        return $r['id'];
    }
}