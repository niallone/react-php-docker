<?php
/**
 * App Class file
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

namespace App\Api;

use App\AppCore;
use App\Api\Transformer\AmazonSesTransformer;

/**
 * App Class
 *
 * @category App
 * @package  react-php-docker
 * @author   Niall Heffernan <niall@studionone.com.au>
 * @license  Studio None https://www.studionone.com.au/
 * @link     https://www.studionone.com.au/
 */
abstract class BaseController extends IntaCore
{
    /**
     * Construct
     *
     * @return void
     */
    public function __construct(AmazonSesTransformer $amazonSes)
    {
        parent::__construct($amazonSes);
        return;
    }
}
