<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\Logger;

use Magento\Framework\Filesystem\DriverInterface;

/**
 * Class Handler
 * @package Alekseon\Logger
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $fileName = '/var/log/alekseon.log';

    public function setFileName($fileName)
    {
        $this->fileName = BP . DIRECTORY_SEPARATOR . '/var/log/' . $fileName;
        \Monolog\Handler\StreamHandler::__construct($this->fileName, $this->loggerType);
    }
}