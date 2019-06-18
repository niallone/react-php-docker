<?php
/**
 * App Config Loader Class File
 *
 * PHP version 7
 *
 * @category  Nonepaper
 * @package   NonepaperConfig
 * @author    Niall Heffernan <niall@studionone.com.au>
 * @copyright 2017 Studio None
 * @license   Studio None https://www.studionone.com.au/
 * @link      https://www.studionone.com.au/
 */

namespace App\Api\Container;

/**
 * App Config Loader Class
 *
 * @category Nonepaper
 * @package  NonepaperConfig
 * @author   Niall Heffernan <niall@studionone.com.au>
 * @license  Studio None https://www.studionone.com.au/
 * @link     https://www.studionone.com.au/
 */

class ConfigLoader
{
    /**
     * Initialise
     *
     * @return void
     */
    public static function initialise()
    {
        return include('/config/config.php');
    }
}
