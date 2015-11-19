<?php # Script 4.1 - HelloWorld.php
    /**
     * This page defines the HelloWorld class.
     *
     * Written for Chapter 4, "Basic Object-Oriented Programming"
     * of the book "PHP Advanced and Object-Oriented Programming"
     * @author Dalibor Vlatkovic <dalibor.vlatkovic@gmail.com>
     * @copyright 2014
     */

class HelloWorld {
      /**
       * Function that says "Hello, world!" in different languages.
       * @param string $language Default is "English"
       * @returns void
       */
    function sayHello($language = 'English') {
        
        // Put the greeting with P tags:
        echo '<p>';
        
        // Print a message specific to a language:
        switch($language) {
            case 'Dutch':
                echo 'Hallo, wereld!';
                break;
            case 'French':
                echo 'Bonjour, monde!';
                break;
            case 'German':
                echo 'Hallo, Welt!';
                break;
            case 'Italian':
                echo 'Ciao, mondo!';
                break;
            case 'Spanish':
                echo 'Hola, mundo!';
                break;
            case 'English':
            default:
                echo 'Hello, World!';
                break;
        } // End of swithc
        
        // Close the HTML paragraph:
        echo '</p>';
    } // ENd of sayHello method
} // ENd of class HelloWorld
