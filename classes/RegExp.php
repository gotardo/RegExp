<?php 
    /**
     * 
     * @package     RegExp
     * @author      Gotardo González <contacto@gotardo.es>
     * @copyright   2012 Gotardo González <contacto@gotardo.es>
     * @license     http://opensource.org/licenses/mit-license.php MIT License
     * @version     0.0.1
     * @since 0.0.1
     */

    class RegExp {
        
        /**
         * Regular expression for emails
         */
        const EMAIL         = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
        
        /*
         * Regular expression for URLs
         */
        const URL           = '^(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)( [a-zA-Z0-9\-\.\?\,\'\/\\\+&amp;%\$#_]*)?$';
        
        /*
         * Regular expression for Spanish CIF
         */
        const SPANISH_CIF   = '^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)? [0-9A-Z]|\d{8}(-|\.)?[A-Z])$';
        
        /*
         * Regular expression for Spanish telephone numbers
         */
        const SPANISH_PHONE = '^[0-9]{2,3}-? ?[0-9]{6,7}$';

        
        /**
         * Checks if a given string is a valid email
         * @param string $string The email to check
         * @return bool Returns true if $string is an email or false in case tha $string is not a valid email
         */
        static public function isEmail($string) {
            
            if (preg_match(self::EMAIL, $string))
                return true;
            else 
                return false;
            
        }        
        
        /**
         * Extracts an array of URLs found in an HTML string
         * @param string $link The HTML string wich contents one or mor links you need to extract
         * @return array Array containing the URLs found in $string
         */
        static public function getLinkURL($string) {
            $match  = NULL;
            $urls   = array();

            if (preg_match('/<a href="(.+)"/', $string, $match)) {
               $urls[] = $match[1];
            }
            
            return $urls;
        }
        
        
        /**
         * Extracts an array of link captions found in an HTML string
         * @param string $string The HTML string wich contents one or mor links you need to extract
         * @return array Array containing the captions of the links found in $string
         */        
        static public function getLinkCaption($string) {
            return null;
        }
        
    }
?>