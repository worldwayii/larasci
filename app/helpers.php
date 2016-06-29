<?php

if ( ! function_exists('prep_url'))
{
    /**
     * Prep URL
     *
     * Simply adds the http:// part if no scheme is included
     *
     * @param   string  the URL
     * @return  string
     */
    function prep_url($str = '')
    {
        if ($str === 'http://' OR $str === '')
        {
            return '';
        }
        $url = parse_url($str);
        if ( ! $url OR ! isset($url['scheme']))
        {
            return 'http://'.$str;
        }
        return $str;
    }
}

if(!function_exists('startswith'))
{
    //simple function to check if string starts with char/word
    function startswith($haystack, $needle) {
        return substr($haystack, 0, strlen($needle)) === $needle;
    }
}

if(!function_exists('decodeGender'))
{
    //simple function to get gender by char
    function decodeGender($gender = null) {
        switch($gender){
            case 'M':
                return 'Male';
            case 'F':
                return 'Female';
            default:
                return 'Unknown';
        }
    }
}

if(! function_exists('price_to_string'))
{
    /**
     * Formats prices in the form of 100K or 10M
     * @param  mixed $num The actual price
     * @return string The formatted price
     */
    function price_to_string($num)
    {
        $units = [
            'M' => '1000000',
            'K' => '1000',
        ];

        $num = intval($num);

        foreach ($units as $unit => $value) {
            if (is_int($num / $value)) {
                return $num / $value . $unit;
            }
        }   
    }

    /**
     * Converts a string based price to decimal form
     * @param  string $string The price in string form
     * @return string The converted value
     */
    function str_to_price($string)
    {
        $units = [
            'M' => '1000000',
            'K' => '1000',
        ];

        $unit = substr($string, -1);

        if (!array_key_exists($unit, $units)) {
            return 'ERROR!';
        }

        return $string * $units[$unit];
    }
}

if(! function_exists('pingAddress'))
{
    function pingAddress($ip)
    {
        $errstr;
        $errno;
        $fsock = @fsockopen($ip, 8728, $errno, $errstr, 5);
        if ( ! $fsock )
        {
            return 'Offline';
        }
        else
        {
            fclose($fsock);
            return 'Online';
        }
    }
}

if(! function_exists('byte_format'))
{
    /**
     * Formats bytes in the form of 100KB or 10MB
     * @param  mixed $num The actual bytes
     * @return string The formatted bytes
     */
    function byte_format($num)
    {
        $units = [
            'GB' => '1073741824',
            'MB' => '1048576',
            'KB' => '1024',
        ];

        $num = intval($num);


        foreach ($units as $unit => $value) {
            if (intval($num / $value) > 0) {
                return number_format($num / $value, 2) . $unit;
            }
        }

        //return last
        return number_format($num / $value, 2) . $unit;
    }

    /**
     * Converts a string based byte to proper form
     * @param  string $string The bytes in string form
     * @return string The converted value
     */
    function string_to_bytes($string)
    {
        $units = [
            'GB' => '1073741824',
            'MB' => '1048576',
            'KB' => '1024',
        ];

        $unit = substr($string, -2);

        if (!array_key_exists($unit, $units)) {
            return 'ERROR!';
        }

        return $string * $units[$unit];
    }
}