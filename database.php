<?php
// Connect to the data base //
try{
	$db = new PDO("mysql:host=localhost;dbname=shirts4mike", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch(Exception $e) {
	echo "Couldn't connect to the database!";
	exit;
}
// End connect to the database //


// Using to query//
try {
	$results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
} catch(Exception $e) {
	echo "Data couldn't be retrieved from the database";
	exit;
}
// End query //
$products = $results->fetchAll(PDO::FETCH_ASSOC);
