<?php

namespace Caasi\Downhub;

class Repository {
    private $owner;
    private $name;
    private $branch;

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
}