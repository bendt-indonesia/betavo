<?php

namespace App\Bendt;

use Naucon\File\FileReader;
use Naucon\File\FileWriter;

class BendtServices
{
    public static function check_composer_package($package_name)
    {
        try {
            $fileObject = new FileReader(base_path('composer.json'), 'r', true);
            foreach ($fileObject as $line) {
                if (strpos($line, self::quote($package_name,'"')) !== false) {
                    return true;
                }
            }
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function check_should_update_composer_json() {
        try {
            $fileObject = new FileReader(base_path('composer.json'), 'r', true);
            $update = true;
            foreach ($fileObject as $line) {
                if (strpos($line, '"app/Helper.php"') !== false) {
                    $update = false;
                    break;
                }
            }
            if($update) {
                self::update_composer_json();
                return true;
            }

            return false;
        } catch (\Exception $e) {
            var_dump($e);
        }
    }

    public static function update_composer_json()
    {
        try {
            $str = '';
            $fileObject = new FileReader(base_path('composer.json'), 'r', true);
            $skip = false;
            foreach ($fileObject as $line) {
                if ($skip === false) {
                    $str .= $line . PHP_EOL;
                    if (strpos($line, '"autoload"') !== false) {
                        $skip = true;
                        $str .= self::autoload();
                    }
                } else if (strpos($line, '"autoload-dev"') !== false) {
                    $skip = false;
                    $str .= self::t(1).'},' . PHP_EOL; //end autoload
                    $str .= $line . PHP_EOL;
                }
            }

            $newComposer = new FileWriter(base_path('composer.json'), 'w+');
            $newComposer->write($str);
        } catch (\Exception $e) {
            var_dump($e);
        }
    }

    public static function autoload()
    {

        $str =  self::t(2) . '"psr-4": {' . PHP_EOL;
        $str .= self::t(3) . '"App\\\\": "app/"' . PHP_EOL;
        $str .= self::t(2) . '},' . PHP_EOL;
        $str .= self::t(2) . '"classmap": [' . PHP_EOL;
        $str .= self::t(3) . '"database/seeds",' . PHP_EOL;
        $str .= self::t(3) . '"database/factories"' . PHP_EOL;
        $str .= self::t(2) . '],' . PHP_EOL;
        $str .= self::t(2) . '"files": [' . PHP_EOL;
        $str .= self::t(3) . '"app/Helper.php"' . PHP_EOL;
        $str .= self::t(2) . ']' . PHP_EOL;

        return $str;
    }

    public static function t($int) {
        $str = "";
        for($i = 0; $i < $int; $i++) $str .= "\t";
        return $str;
    }

    public static function quote($string, $quotedBy = "'")
    {
        return $quotedBy . $string . $quotedBy;
    }
}
