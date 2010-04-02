<?php
class Util
{
    public static function removeInvalidChar($str, $enc = 'UTF-8')
    {
        $str = strtolower($str);
        $chars = array(
            'a' => '/&agrave;|&aacute;|&acirc;|&atilde;|&auml;|&aring;/',
            'c' => '/&ccedil;/',
            'e' => '/&egrave;|&eacute;|&ecirc;|&euml;/',
            'i' => '/&igrave;|&iacute;|&icirc;|&iuml;/',
            'n' => '/&ntilde;/',
            'o' => '/&ograve;|&oacute;|&ocirc;|&otilde;|&ouml;/',
            'u' => '/&ugrave;|&uacute;|&ucirc;|&uuml;/',
            'y' => '/&yacute;|&yuml;/',
            'a.' => '/&ordf;/',
            'o.' => '/&ordm;/',
        );

        $slug = preg_replace($chars, array_keys($chars), htmlentities($str,ENT_NOQUOTES, $enc));
        
        return str_replace(' ','-', $slug);
    }
}
