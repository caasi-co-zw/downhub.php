<?php 

namespace Caasi\Downhub;

/**
 * Basic configurations for the library.
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/downhub.php 
 */
class Config {
    public $token;
    public $username;

    public function setToken($token){
        $this->token = $token;
        return $this;
    }

    public function setUsername($username){
        $this->username = $username;
        return $this;
    }
}
