<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\Logger;

/**
 * Class HandlerFactory
 * @package Alekseon\Logger
 */
class HandlerFactory
{
    /**
     * HandlerFactory constructor.
     * @param Handler $loggerHandler
     */
    public function __construct(
        Handler $loggerHandler
    )
    {
        $this->loggerHandler = $loggerHandler;
    }

    /**
     * @return mixed
     */
    public function create($fileName = null)
    {
        $this->loggerHandler->setFileName($fileName);
        return $this->loggerHandler;
    }
}
