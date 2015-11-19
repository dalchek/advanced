<?php // - rss.php
/* This script will create an RSS feed.
 *The feed content will be based upon an array.
 */

// Send the Content-type header:
header('Content-type: text/xml');

// Create the initial RSS code:
echo '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>
<title>Larry Ullman&apos;s Important Things</title>
<description>The most recent things Larry has been writing about</description>
<link>http://LarryUllman.com/</link>
';

// Manufacture the date:
$data = array(
	0 => array(
		'title' => 'SSH Authentication', 
		'description' => 'The wonderful hostin company tha I use', 
		'link' => 'http://www.larryullman.com/2012/05/25/ssh-key-authentication/', 
		'pubDate' => '1337930580' 
		),
	1 => array(
		'title' => 'What it means to be a writer, Part 1', 
		'description' => 'A little while back, I had a series of emails', 
		'link' => 'http://www.larryullman.com/2012/05/23/what-it-means-to-be-a-writer-part-1-defining-your-book/', 
		'pubDate' => '1337683425'
		),
	2 => array(
		'title' => 'Learn to Write', 
		'description' => 'There was a recent posting by', 
		'link' => 'http://www.larryullman.com/2012/05/18/learn-to-write/', 
		'pubDate' => '1337331033'
		)
	);

// Loop through the data:
foreach($data as $item) {
	// Print each record as an item:
	echo '<item>
	<title>' . htmlentities($item['title']) . '</title>
	<description>' . htmlentities($item['description']) . '...</description>
	<link>' . $item['link'] . '</link>D
	<guid>' . $item['link'] . '</guid>
	<pubDate>' . date('r', $item['pubDate']) . '</pubDate>
	</item>';
}

// Complete the channel and rss elements:
echo '</channel>
</rss>';
?>