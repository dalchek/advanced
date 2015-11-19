<?php # Script 4.3 - Rectangle.php
    /* This page defines the Rectabgle class.
     * The class contains two attributes: width and height.
     * The class contains four method:
     * - __construct()
     * - setSize()
     * - getSize()
     * - getPerimeter()
     * - isSquare()
     */

     class Rectangle {
         
         // Use the debug trait:
         use tDebug;
         
         // Declare the attributes:
         public $width = 0;
         public $height = 0;
         
         function __construct($w = 0, $h = 0) {
             $this->width = $w;
             $this->height = $h;
         }

         // Method to set the dimensions:
         function setSize($w = 0, $h = 0) {
             $this->width = $w;
             $this->height = $h;
         } // End of setSize method
         
         // Method to calculate and return the area.
         function getArea() {
             return($this->width * $this->height);
         } // End of getArea method
         
         // Method to calculate and return the perimeter.
         function getPerimeter() {
             return(($this->width + $this->height) * 2);
         }
         
         // Method to determine if the rectange 
         // is also a square.
         function isSquare() {
             if($this->width == $this->height) {
                 return TRUE; // square
             } else {
                 return FALSE; // Not a square
             }
         }
         
     } // End of Rectangle class
?>
