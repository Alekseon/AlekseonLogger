<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
namespace Alekseon\Logger;

/**
 * Class Logger
 * @package Alekseon\Logger
 */
class Logger
{
    /**
     * @param $message
     * @param int $level
     * @param null $fileName
     */
    static function log($message, $level = \Monolog\Logger::INFO, $fileName = null)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $logger = $objectManager->create('Psr\Log\LoggerInterface');
        $handler = $objectManager->create('Alekseon\Logger\HandlerFactory')->create($fileName);
        $logger->setHandlers([$handler]);
        $logger->log($level, $message);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function info($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::INFO, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function debug($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::DEBUG, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function notice($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::NOTICE, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function warning($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::WARNING, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function error($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::ERROR, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function critical($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::CRITICAL, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function alert($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::ALERT, $fileName);
    }

    /**
     * @param $message
     * @param null $fileName
     */
    static function emergency($message, $fileName = null)
    {
        self::log($message, \Monolog\Logger::EMERGENCY, $fileName);
    }
}
