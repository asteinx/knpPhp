<?php
// Benutzt von header.php
function getMottoDesTages() {
	$index = rand ( 0, 2 );
	$motto = array (
			'Alles wird gut, dank Wuffi!',
			'Wir lieben Cate ;-)',
			'Our doge is da best!' 
	);
	return $motto [$index];
}
function getPets($limit = null) {
	// $petsJson = file_get_contents ( 'data/pets.json' );
	// $pets = json_decode ( $petsJson, true );
	// $pets = array_reverse ( $pets );
	$pdo = getConnection ();
	$query = 'SELECT * FROM PET';
	if ($limit != null) {
		$query = $query . ' LIMIT :limitStmt';
	}
	// $res =$pdo->query($query);
	// $rows = $res->fetchAll();
	$stmt = $pdo->prepare ( $query );
	$stmt->bindParam ( 'limitStmt', $limit, PDO::PARAM_INT );
	$stmt->execute ();
	$rows = $stmt->fetchAll ();
	return $rows;
}
function getPetsJSON($limit = null) {
	$petsJson = file_get_contents ( 'data/pets.json' );
	$pets = json_decode ( $petsJson, true );
	return $pets;
}
function getPet($id) {
	$pdo = getConnection ();
	// $query = 'SELECT * FROM PET WHERE ID=\''.$id.'\'';
	$query = 'SELECT * FROM PET WHERE ID=:idStmt';
	// $res = $pdo->query ( $query );
	// $pet = $res->fetch ();
	$stmt = $pdo->prepare ( $query );
	$stmt->bindParam ( 'idStmt', $id, PDO::PARAM_INT );
	$stmt->execute ();
	$pet = $stmt->fetch ();
	return $pet;
}
function savePetJSON($petsToSave) {
	$json = json_encode ( $petsToSave, JSON_PRETTY_PRINT );
	file_put_contents ( 'data/pets.json', $json );
}
function savePet($petsToSave) {
	$pdo = getConnection ();
	// array(6) { ["name"]=> string(4) "Nina" ["breed"]=> string(9) "Nacktmull" ["age"]=> string(0) "" ["weight"]=> string(3) "322" ["bio"]=> string(4) "sfdg" ["filename"]=> string(0) "" }
	$query = 'INSERT INTO PET (name, breed, age, weight, bio, filename) VALUES ("' . $petsToSave ['name'] . '", "' . $petsToSave ['breed'] . '", ' . $petsToSave ['age'] . ', ' . $petsToSave ['weight'] . ', "' . $petsToSave ['bio'] . '", "' . $petsToSave ['filename'] . '");';
	$pdo->query ( $query );
	// var_dump($query);
	// die();
// 	$res = $pdo->query ( $query );
	// $res->execute(); //Achtung merken, so was hier erzeugt double-posts! Weil schon $pdo->query ( $query ); reichte
}
function getConnection() {
	$config = require_once 'lib/config.php';
	// var_dump($config);
	// die();
	
	// $pdo = new PDO('mysql:dbname=air_pup;host=localhost', 'root', null);
	$pdo = new PDO ( $config ['database_dsn'], $config ['database_user'], $config ['database_pass'] );
	$pdo->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	return $pdo;
}