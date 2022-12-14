<?php 

namespace Caasi\Downhub;

if(!defined('DOWNHUB_CONFIG')){
    define('DOWNHUB_CONFIG',new Configurations());
}

class Download {
    /**
     * Undocumented variable
     *
     * @var Configurations
     */
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
