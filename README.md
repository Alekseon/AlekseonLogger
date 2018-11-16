# AlekseonLogger
With this tool you can easy add some logs in magento 2 in any place in code just by adding line:

`\Alekseon\Logger\Logger::info($message, $fileName);`

* $message, can be any string 
* $fileName, is optional, if its not provided then log file is: "alekseon.log"

Your log will in file /var/log/$fileName

### Installation

composer require alekseon/logger

### Available methods

* info($message, $fileName = null)
* debug($message, $fileName = null)
* notice($message, $fileName = null)
* warning($message, $fileName = null)
* error($message, $fileName = null)
* critical($message, $fileName = null)
* alert($message, $fileName = null)
* emergency($message, $fileName = null)
