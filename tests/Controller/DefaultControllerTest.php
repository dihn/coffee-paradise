<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 15/04/2018
 * Time: 16:47
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{

    private $client = null;

    public function setUp() {
        $this->client = static::createClient();
    }

    public function testHomePageStatusOkay() {
        // arrange
        $url = '/';
        $httpMethod = 'GET';
        $client = static::createClient();

        // assert
        $client->request($httpMethod, $url);

        // act
       $this->assertSame(
           Response::HTTP_OK,
           $client->getResponse()->getStatusCode()
       );
    }
}