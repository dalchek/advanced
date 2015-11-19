<?php # Script 6.2 - Triangle.php
/*
 * This page defines the Triangle class.
 * The class contains two attributes:
 * - private $_sides (array)
 * - private $_perimeter (number)
 * The class contain tree method
 * - __constructor()
 * - getArea()
 * - getPerimeter()
 */

class Triangle extends Shape {
    
    // Declare the attributes:
    private $_sides = array();
    private $_perimeter = NULL;
    
    // Constructor:
    function __construct($s0 = 0, $s1 = 1, $s2 = 2) {
        // Store the values in the array
        $this->_sides[] = $s0;
        $this->_sides[] = $s1;
        $this->_sides[] = $s2;
        
        // Calculate the perimeter:
        $this->_perimeter = array_sum($this->_sides);
    } // End of constructor
    
    // Method to calculate and return the area:
    public function getArea() {
        
        // Calculate and return the area:
        return (SQRT(
        ($this->_perimeter/2)*
        (($this->_perimeter/2) - $this->_sides[0])*
        (($this->_perimeter/2) - $this->_sides[1])*
        (($this->_perimeter/2) - $this->_sides[2])
        ));
    } // End of getArea() method
    
    public function getPerimeter() {
        return $this->_perimeter;
    } // End of getPerimeter() method
} // End of triangle subclass
?>
