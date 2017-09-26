<?php

/**
 * Created by PhpStorm.
 * User: che
 * Date: 26.09.2017
 * Time: 14:11
 */
class Config
{
    private $token = "";
    private $user = "";

    public function getToken()
        {
            return $this->token;
        }
    public function getUser()
        {
            return $this->user;
        }
}