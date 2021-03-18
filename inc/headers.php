<?php
echo header("Access-Control-Allow-Origin: *");
echo header("Access-Control-Allow-Credentials: true");
echo header("Access-Control-Methods: POST, OPTIONS");
echo header("Access-Control-Allow-Headers: Accept, Content-Type, Access-Control-Allow-Header");
echo header("Content-Type: application/json");
echo header("Access-Control-Max-Age:3600");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS"){
    return 0;
}