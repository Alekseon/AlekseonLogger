# AlekseonLogger
With this tool you can easy add some logs in magento 2 in any place in code just by adding line:
`\Alekseon\Logger\Logger::info($message, $fileName);`

* $message, can be any string 
* $fileName, is optional, if its not provided then log file is: "alekseon.log"

Your log will in file /var/log/$fileName

### Available methods

\Alekseon\Logger\Logger::info($message, $fileName = null)
\Alekseon\Logger\Logger::debug($message, $fileName = null)
\Alekseon\Logger\Logger::notice($message, $fileName = null)
\Alekseon\Logger\Logger::warning($message, $fileName = null)
\Alekseon\Logger\Logger::error($message, $fileName = null)
\Alekseon\Logger\Logger::critical($message, $fileName = null)
\Alekseon\Logger\Logger::alert($message, $fileName = null)
\Alekseon\Logger\Logger::emergency($message, $fileName = null)
