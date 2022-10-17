<?php

/*

    This file contains the class to generate a splitted encryption key
    ------------------------------------------------------------------
    
    Documentation: https://github.com/mattiacapelli/encdec-generator

    ------------------------------------------------------------------

*/

class encdeckey {

    private $split_lenght = array (
        "random" => 8,
        "userid" => 4,
    );
    private $split_client = array(
        "user" => "usrk", //User Key Identificator
        "server" => "srvk", //Server Key Identificator 
    ); 

    private function randstringSplit()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&/()=?^*+";
        $charsLenght = strlen($chars);
        $randString = "";
        for ($i = 0; $i < $this->split_lenght["random"]; $i++) {
            $randString .= $chars[rand(0, $charsLenght - 1)];
        }
        return $randString;
    }
    
    private function useridSplit($string)
    {
        $elabstring = preg_replace('#[aeiou\s]+#i', '', $string);
        //take the first 4 chars
        $elabstring = substr($elabstring, 0, $this->split_lenght["userid"]);
            
    }

    public function generateKey($username)
    {
        $randstringserver = $this->randstringSplit();
        $randstringuser = $this->randstringSplit();
        $userid = $this->useridSplit($username);
        $key = array (
            "server" => $this->split_client["server"] . $userid . $randstringserver,
            "user" => $this->split_client["user"] . $userid . $randstringuser,
            "full" => $this->split_client["server"] . $userid . $randstringserver . $this->split_client["user"] . $userid . $randstringuser,
        );
        
        return $key;
    }
}
?>