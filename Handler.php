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

    /**
     * Handler constructor.
     * @param \Magento\Framework\Filesystem\Driver\File $filesystem
     * @param null $filePath
     * @param null $fileName
     */
    public function __construct(
        \Magento\Framework\Filesystem\Driver\File $filesystem,
        $filePath = null,
        $fileName = null
    ) {
        parent::__construct($filesystem, $filePath, $fileName);
    }

    /**
     * @param $fileName
     * @throws \Exception
     */
    public function setFileName($fileName)
    {
        $this->fileName = BP . DIRECTORY_SEPARATOR . '/var/log/' . $fileName;
        \Monolog\Handler\StreamHandler::__construct($this->fileName, $this->loggerType);
    }
}