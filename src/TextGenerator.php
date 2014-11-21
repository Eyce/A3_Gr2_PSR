<?php
/**
 * Created by PhpStorm.
 * User: François PEUREUX
 * Date: 19/11/2014
 * Time: 14:14
 */

namespace OKLM\StringGenerator;


class TextGenerator {

    private static $wordLibrary = "Lorem ipsum Nullam maximus leo urna a fermentum neque fringilla quis Maecenas eu ligula sit amet risus posuere porttitor ut in dui Aenean sed erat nec enim ornare rhoncus ut ut elit Proin varius lobortis eros a dignissim orci lobortis vitae Nam euismod sagittis risus id ultrices Ut ut orci ex Phasellus sem dui auctor eget ligula ac vestibulum dictum arcu Donec ac maximus diam ac maximus ante dolor sit amet consectetur adipiscing elit. Praesent posuere interdum nisi a pellentesque";

    public function __construct()
    {

    }
    public static function generate($wordsNumber = 120, $paragraphNumber = 5)
    {
        $wordArray =explode(' ',self::$wordLibrary);
        $generatedText='';

        for($z = 0; $z < count($wordArray); $z++)
        {
            $wordArray[$z]=strtolower($wordArray[$z]);
        }

        for ($i = 0; $i < $paragraphNumber; $i++)
        {
            //New paragraph
            $generatedText .= "<p>";
            for ($j = 0; $j < $wordsNumber; $j++)
            {
                if($j == 0) //First word of a paragraph
                {
                    $assignedWord = array_rand($wordArray);
                    $generatedText .= ucfirst(strtolower($wordArray[$assignedWord]));
                }
                else if (mt_rand(0,20) == 1) //New sentence
                {
                    $generatedText .= '. ';
                    $assignedWord = array_rand($wordArray);
                    $generatedText .= ucfirst(strtolower($wordArray[$assignedWord]));
                }
                else //Any other word
                {
                    $generatedText .= ' ';
                    $assignedWord = array_rand($wordArray);
                    $generatedText .= strtolower($wordArray[$assignedWord]);
                }
            }
            //End of paragraph
            $generatedText .= '.</p>';
        }
        $generatedText.='.';

        return $generatedText;
    }
}