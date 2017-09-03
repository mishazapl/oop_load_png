<?php
namespace liw\app;

trait ValidatorPng
{
    public function validPng($files)
    {
        if (preg_match("/.png/", "$files")) {
            return true;
        } else {
            return false;
        }
    }
}