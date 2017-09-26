<?php

/**
 * Created by PhpStorm.
 * User: che
 * Date: 26.09.2017
 * Time: 14:11
 */
class Config
{
    private $token = "7be80753195a2de690c4fcf35a8059c457a3a8540d0c61c742bd9aa14aa685ddd1e04401c1d5c37b6b318";
    private $user = "133852802";

    public function getToken()
        {
            return $this->token;
        }
    public function getUser()
        {
            return $this->user;
        }
}