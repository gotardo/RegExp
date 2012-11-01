<?php

    require_once('../classes/RegExp.php');  
    
    class RegExpTest extends PHPUnit_Framework_TestCase {  

        
        private $links;
        
        function setup(){
            $this->links = array(
                'Hola, aquí no hay ninguna URL',
                'Hola, haz click <a href="http://aqui.es">aquí</a>',
                "Hola, haz click <a href='http://aqui.es'>aquí</a> y <a href='http://otroaqui.es'>aquí</a>"
            );                
            
        }
        /**
         * Test RegExp::isEmail function
         */
        function testisEmail() {
            //NOT emails
            $this->assertEquals(false, RegExp::isEmail("NOT AN EMAIL"));
            $this->assertEquals(false, RegExp::isEmail("@gotardo.es"));
            $this->assertEquals(false, RegExp::isEmail("contacto.es@"));
            
            
            //Real emails
            $this->assertEquals(true, RegExp::isEmail("contacto@gotardo.es"));
            $this->assertEquals(true, RegExp::isEmail("contacto@gotardo.com.es"));
            $this->assertEquals(true, RegExp::isEmail("gotardo.gonzalez@gotardo.com.es"));
        }
         
        function test_getLinkURL(){ 
            foreach ($this->links as $link) {
                $urls = RegExp::getLinkURL($link);
                
                $this->assertTrue($urls);  
            }    
         }
         
        function testgetLinkCaption() {
            foreach ($this->links as $link) {
                $urls = RegExp::getLinkCaption($link);
                $this->assertTrue($urls);  
            }  
        }
    }  
    
    
?>
