<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/declare(strict_types=1);

namespace BricksFramework\Exception;

class Exception extends \Exception
{
    protected $dataStack = [];

    public function setData(string $name, $value) : void
    {
        $this->dataStack[$name] = $value;
    }

    public function getData(string $name)
    {
        if (!isset($this->dataStack[$name])) {
            return null;
        }
        return $this->dataStack[$name];
    }
}
