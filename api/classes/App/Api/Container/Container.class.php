<?php
/**
 * App Container Class File
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

namespace App\Api\Container;

use League\Container\Container as BaseContainer;
use League\Container\ReflectionContainer;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequestFactory;

/**
 * App Container Class
 *
 * @category App
 * @package  react-php-docker
 * @author   Niall Heffernan <niall@studionone.com.au>
 * @license  Studio None https://www.studionone.com.au/
 * @link     https://www.studionone.com.au/
 */
class Container extends BaseContainer
{
    /**
     * Invoke
     *
     * @return void
     */
    public function __invoke()
    {
        // Stuff..
        $this->delegate(
            new ReflectionContainer
        );
        $this->share('emitter', SapiEmitter::class);
        $this->share('request', function () {
            return ServerRequestFactory::fromGlobals(
                $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
            );
        });
        $this->share('response', Response::class);
        $this->share('config', ConfigLoader::initialise());

        return $this;
    }
}
