<?php

namespace Caasi\Downhub;

class Repository {
    private $owner;
    private $name;
    private $branch;
    private $is_private;

    public function __construct(){
        $this->is_private = false;
    }

    public setOwner($owner){
        $this->owner = $owner;
        return $this;
    }
    public setRepositoryName($name){
        $this->name = $name;
        return $this;
    }
    public setBranchName($branch){
        $this->branch = $branch;
        return $this;
    }
    public function setVisibility($visibility){
        $this->is_private = $visibility;
        return $this;
    }
    public function isPrivateRepository(){}
}