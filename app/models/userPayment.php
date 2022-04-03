<?php

namespace coding\app\models;

class Payment extends Model{
    function __construct()
    {
        parent::$tblName="user_payment_methods";
    }
}
?>