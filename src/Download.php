<?php 

namespace Caasi\Downhub;

use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;

/**
 * Download your repositories.
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/downhub.php
 */
class Download {
    private $config = [];

    /**
     * Set your configurations 
     *
     * @param Configurations $config
     */
    public function __construct($config = null){
        if($config){
            $this->config = $config;
        }
    }

    public function getRepositories(){}
    public function downloadZip(){}
    public function downloadTarball(){}
}
