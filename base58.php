<?php

if (false === function_exists('base58_encode'))
{
    function base58_encode($string)
    {
        return StephenHill\StaticBase58::encode($string);
    }
}

if (false === function_exists('base58_decode'))
{
    function base58_decode($string)
    {
        return StephenHill\StaticBase58::decode($string);
    }
}

if (false === class_exists('Base58', true))
{
    class Base58
    {
        public static function encode($string)
        {
            return StephenHill\StaticBase58::encode($string);
        }

        public static function decode($string)
        {
            return StephenHill\StaticBase58::decode($string);
        }
    }
}
