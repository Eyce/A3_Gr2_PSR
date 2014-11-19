<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 18/11/2014
 * Time: 15:44
 */

namespace OKLM\StringGenerator;

class PasswordGenerator
{

    /**
     * @var string
     */
    private static $password_strength_easy = 'azertyuiopqsdfghjklmwxcvbn';
    /**
     * @var string
     */
    private static $password_strength_medium = 'AZERTYUIOPQSDFGHJKLMWXCVBN1234567890';
    /**
     * @var string
     */
    private static $password_strength_hard = '$£€&#@%!§?+~^-_*éè';



    /**
     * Generate a weak password
     */
    const PASSWORD_EASY = 1;
    /**
     * Generate a normal password
     */
    const PASSWORD_MEDIUM = 2;
    /**
     * Generate a strong password
     */
    const PASSWORD_HARD = 3;



    /**
     *
     */
    public function __construct()
    {
    }



    /**
     * @param int $length
     * @param int $strength
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function generate($length = 10, $strength = self::PASSWORD_MEDIUM)
    {
        $char = '';

        if(!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ])) {
            throw new \Exception("Invalid password strength !");
        }



        switch ($strength)
        {
            case self::PASSWORD_EASY:
                $char .= self::$password_strength_easy;
                break;
            case self::PASSWORD_MEDIUM:
                $char .= self::$password_strength_easy . self::$password_strength_medium;
                break;
            case self::PASSWORD_HARD:
                $char .= self::$password_strength_easy . self::$password_strength_medium . self::$password_strength_hard;
                break;
        }



        $generatedPassword = '';

        for ($i = 0; $i < $length; $i++)
        {
            $generatedPassword.= mb_substr($char, mt_rand(0,mb_strlen($char)-1), 1);
        }

        return $generatedPassword;
    }
} 