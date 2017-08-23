<?php

$host = 'localhost';
$db = 'test_db';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

if ($pdo) { echo "You have connected to the database: " . $db . ".\r\n";}
else {echo "Error";}

/* This works
$stmt = $pdo->query('SELECT username, pass FROM author');
foreach ($stmt as $row)
{
	echo $row['username'] . "\n";
	echo $row['pass'] . "\n";
}
*/

/* This works too
$stmt = $pdo->prepare("INSERT INTO author (username, pass) VALUES (?, ?)");
$stmt->execute(array("User3", "rand"));
*/

/*All well and good
$stmt = $pdo->prepare("INSERT INTO blogPost (authorId, text, time) VALUES (?, ?, ?)");
$stmt->execute(array(4, "Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus",
	"2016-02-23 05:12:45"));
*/

/* Perfect!
$stmt = $pdo->prepare("INSERT INTO comment (authorId, blogId, time) VALUES (?, ?, ?)");
$stmt->execute(array(1, 3, "2017-010-03 05:12:45"));
*/

$stmt = $pdo->prepare("SELECT comment.id AS Comment_ID, author.username, comment.text FROM comment JOIN author 
										ON comment.authorId=author.id WHERE author.id =:id");
$stmt->execute(array('id' => 1));
foreach ($stmt as $row) {
	echo $row['Comment_ID'] . "\r\n";
	echo $row['username'] . "\r\n";
	echo $row['text'] . "\r\n";
}
