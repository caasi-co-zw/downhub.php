<?php 

if(!defined('DOWNHUB_CONFIG')){
    define('DOWNHUB_CONFIG',[]);
}

namespace Caasi\Downhub;

class Download {
    private $config = [];

    public function __construct(){
        $this->config = DOWNHUB_CONFIG;
    }

    /**
     * Returns the API Token key
     *
     * @return string|null
     */
    private function getApiToken(){
        return $this->config['token']??null;
    }
}