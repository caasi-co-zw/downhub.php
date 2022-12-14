<?php 

namespace Caasi\Downhub;

/**
 * Download your repositories.
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/downhub.php
 */
class Download {
    /**
     * Undocumented variable
     *
     * @var Configurations
     */
    private $config = [];

    /**
     * Set your configurations 
     *
     * @param Configurations $config
     * @return this
     */
    public function __construct($config = null){
        if($config){
            $this->config = $config;
        }
    }
}
