<?php

// sanitize inputs 
function val_sanitize($value)
{
    return trim(htmlspecialchars(htmlentities($value)));
}


// required 
function required($value)
{
    if (empty($value)) {
        return false;
    }
    return true;
}


// space value validation


// empty value validation
function valuesempty($arry)
{
    foreach ($arry as $key => $value) {
        if ($value != '') {
            return false;
        }
    }
    return true;
}


// minimum value validation
function minVal($value, int $length)
{
    if (strlen($value) < $length) {
        return false;
    }
    return true;
}

// maximum value validation
function maxVal($value, int $length)
{
    if (strlen($value) > $length) {
        return false;
    }
    return true;
}

// equal value validation
function equalval($value, int $length)
{
    if (strlen($value) === $length) {
        return false;
    }
    return true;
}

// string value validation 
function val_string($value)
{
    if (preg_match("/[a-zA-Z ,1-9]+$/", $value)) {
        return true;
    }
    return false;
}

// email validation 
function emailVal($value)
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

// numeric value validation
function numericVal($value)
{
    if (!is_numeric($value)) {
        return false;
    }
    return true;
}

// integer value validation
function integerVal($value)
{
    if (!is_int($value)) {
        return false;
    }
    return true;
}

// decimal value validation
function decimalVal($value)
{
    if (!is_float($value)) {
        return false;
    }
    return true;
}

// file check if file 
function val_file($value)
{
    if (isset($_FILES[$value])) {
        return true;
    }
    return false;
}

//Check if the request is 'POST Value'
function requestPostVal()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        return false;
    }
    return true;
}

//Check if the request is 'GET Value'
function requestGetVal()
{
    if ($_SERVER['REQUEST_METHOD'] != 'GET') {
        return false;
    }
    return true;
}

//Check if it is an array
function arrayVal($value)
{
    if (!is_array($value)) {
        return false;
    }
    return true;
}


// password validation preg_match
function passVal($value)
{
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $value)) {
        return false;
    }
    return true;
}
