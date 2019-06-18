<?php
/**
 * Intadoc loader file
 *
 * PHP version 7
 *
 * @category  NoneCore
 * @package   Nonepaper
 * @author    Niall Heffernan <niall@studionone.com.au>
 * @copyright 2019 Studio None
 * @license   Studio None https://www.studionone.com.au/
 * @link      https://www.studionone.com.au/
 */
// Load dependencies..
require_once 'vendor/autoload.php';

// Load classes..
spl_autoload_register(
    function ($class) {
        $filename = __DIR__ . '/app/classes' . '/' . str_replace('\\', '/', $class) . '.class.php';
        if (!file_exists($filename)) {
            return false;
        }
        include $filename;
        return true;
    }
);