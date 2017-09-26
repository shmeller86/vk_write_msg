<?php
/**
 * Created by PhpStorm.
 * User: che
 * Date: 26.09.2017
 * Time: 14:21
 */

namespace app;


class Api
{
    private $token;
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        $json = file_get_contents('https://api.vk.com/method/messages.getDialogs?count=100&unread=0&&access_token='.$this->token.'&v=5.30');
        return json_decode($json,true);
    }

}