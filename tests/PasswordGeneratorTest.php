<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 21/11/2014
 * Time: 15:35
 */

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Checks if generated password has the correct length.
     *
     * @throws \Exception
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength = mb_strlen($password);

        $this->assertEquals($length,$passwordLength);
    }


} 