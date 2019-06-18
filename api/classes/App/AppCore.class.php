<?php
/**
 * AppCore File
 *
 * PHP version 7
 *
 * @category  App
 * @package   react-php-docker
 * @author    Niall Heffernan <niall@studionone.com.au>
 * @copyright 2019 Studio None
 * @license   Studio None https://www.studionone.com.au/
 * @link      https://www.studionone.com.au/
 */

namespace App;

use App\Api\Exception\AppException;
use App\Api\Transformer\AmazonSesTransformer;

/**
 * App Class Doc Comment
 *
 * @category App
 * @package  react-php-docker
 * @author   Niall Heffernan <niall@studionone.com.au>
 * @license  Studio None https://www.studionone.com.au/
 * @link     https://www.studionone.com.au/
 */
abstract class AppCore
{
    private const DEBUG_MODE = true;
    private const LOG_DATA_EMAIL = 'email@example.com';
    protected $logDataArray = [];
    protected $amazonSes;

    /**
     * Construct
     *
     * @param Gateway $services Config DI container
     *
     * @return void
     */
    public function __construct(AmazonSesTransformer $amazonSes)
    {
        if (self::DEBUG_MODE) {
            $this->debugInit();
        }
        $this->amazonSes = $amazonSes;
        return;
    }

    /**
     * Log Data
     *
     * @param array $data Data to be saved to log memory
     *
     * @return void
     */
    protected function logData(array $data) : void
    {
        $this->logDataArray[] = $data;
    }

    /**
     * Send Log
     *
     * @return void
     */
    protected function sendLog($style = 'debug', $subject = 'Nonepaper Log', $email = true)
    {
        try {
            if (!empty($this->logDataArray)) {
                if ($style === 'debug') {
                    ob_start();
                    var_dump($this->logDataArray);
                    $logContent = ob_get_contents();
                    ob_end_clean();
                } elseif ($style === 'pretty') {
                    ob_start();
                    var_export($this->logDataArray);
                    $logContent = ob_get_contents();
                    ob_end_clean();
                }
                if ($email) {
                    $this->amazonSes->sendEmail(self::LOG_DATA_EMAIL, $subject, $logContent);
                } else {
                    return $logContent;
                }
                $this->logDataArray = array();
            }
            return;
        } catch (NonepaperException $e) {
            throw $e;
        }
        return;
    }

    /**
     * Debug function
     *
     * @return void
     */
    private function debugInit() : void
    {
        error_reporting(E_ALL|E_STRICT);
        ini_set('display_errors', '1');
        return;
    }
}
