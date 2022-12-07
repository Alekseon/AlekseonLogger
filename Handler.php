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
    const DEFAULT_FILENAME = 'alekseon.log';
    /**
     * @var string 
     */
    protected $fileName = self::DEFAULT_FILENAME;

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
     * @param null $fileName
     */
    public function setFileName($fileName = null)
    {
        if (!$fileName) {
            $fileName = self::DEFAULT_FILENAME;
        }
        
        $this->fileName = BP . DIRECTORY_SEPARATOR . '/var/log/' . $fileName;
        $this->stream = $this->fileName;
        $this->url = $this->fileName;
    }
}