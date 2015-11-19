<?php

// This page defines the RectangleTest class

// Need the Rectangle class in order to work:
require('rectangle.php');

// Define the class:
class RectangleTest extends PHPUnit_Framework_TestCase {

	// Test the GetArea() method
	function testGetArea() {
		// Need a Rectangle:
		$r = new Rectangle(8,9);

		// The assertion tests the math:
		$this->assertEquals(72, $r->getArea());
	} // . testGETArea() method
} // .RectangleTest class
?>