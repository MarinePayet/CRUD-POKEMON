<?php

class Types
{
    private $nameType;

    public function getNameType(){
        return $this->nameType;
    }

    public function FunctionName(string $nameType)
    {
        $this->nameType = $nameType;
    }





}