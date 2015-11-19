<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SimpleXML Parser</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/* This script will parse an XML file
* It uses tha simpleXML library, a DOM parser.
*/
// Read the file:
$xml = simplexml_load_file('books4.xml');
	
// iterate to each book
foreach($xml->book as $book) {

	// Print the title
	echo "<div><h2>$book->title";

	// Check for an edition 
	if(isset($book->title['edition'])) {
                echo " (Edition {$book->title['edition']}";
	} // END if -edition

	echo "</h2>";
	// Print the author(s):
	foreach($book->author as $author) {
		echo "<span class=\"label\">Author</span>: $author <br>";
	} // end foreach author

	// Print the other book info:
	echo "<span class=\"label\">Published</span>: $book->year <br>";

	if(isset($book->pages)) {
		echo "<span class=\"label\">Pages</span>: $book->pages <br>";
	} // end of if -pages

	// Print each chapter:
	if(isset($book->chapter)) {
		echo 'Table of Contents <ul>';
		foreach($book->chapter as $chapter) {
			echo '<li>';
			if(isset($chapter['number'])) {
                            echo "Chapter {$chapter['number']}:";
			}
			echo $chapter;

			if(isset($chapter['pages'])) {
                            echo " <span style=\"font-style: italic; font-size: 12px; color: red;\">({$chapter['pages']} Pages)</span>";
			}
			echo '</li>';

		} // .foreach -chapter
                echo '</ul>';
	} // END if -chapter


	// Handle the cover:
	if(isset($book->cover)) {

		// Get the image info
		$image = @getimagesize($book->cover['filename']);

		// Make the image HTML
		echo "<img src=\"{$book->cover['filename']}\" $image[3] border=\"0\" /><br>";
	} //.if -cover

	// Close the book's DIV tag
	echo '</div>';
	// PRint the other book info
} // end foreach loop

?>
</body>
</html>			