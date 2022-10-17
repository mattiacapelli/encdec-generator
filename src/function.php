<?php

class encdeckey {

    private $split_lenght = array (
        "random" => 8,
        "userid" => 4,
    );
    private $split_clientuser = array(
        "user" => "usrky", //User Key Identificator
        "server" => "srvky", //Server Key Identificator 
    ); 

    private function randstringSplit()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $charsLenght = strlen($chars);
        $randString = "";
        for ($i = 0; $i < $this->split_lenght["random"]; $i++) {
            $randString .= $chars[rand(0, $charsLenght - 1)];
        }
        return $randString;
    }
    
    private function useridSplit($string)
    {
        $userid = preg_replace("/[aeiou]/", "", $string);
        $userid = str_split($userid, $string);
        return $userid;
    }


}



?>