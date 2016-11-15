<?php 
// Pet Maske, Implementiert im Hauptseitendesign

require 'layout/header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<h1>Add your Pet! Squirrel!</h1>

			<form action="pets_new.php" method="POST">
				<div class="form-group">
					<label for="pet-name" class="control-label">Pet Name</label> <input
						type="text" name="name" id="pet-name" class="form-control" />
				</div>
				<div class="form-group">
					<label for="pet-breed" class="control-label">Breed</label> <input
						type="text" name="breed" id="pet-breed" class="form-control" />
				</div>
				<div class="form-group">
					<label for="pet-weight" class="control-label">Weight</label> <input
						type="number" name="weight" id="pet-weight" class="form-control" />
				</div>
				<div class="form-group">
					<label for="pet-age" class="control-label">Age</label> <input
						type="number" name="age" id="pet-age" class="form-control" />
				</div>
				<div class="form-group">
					<label for="pet-bio" class="control-label">Pet Bio</label>
					<textarea name="bio" id="pet-bio" class="form-control"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-heart"></span> Add
				</button>

			</form>

		</div>
	</div>
</div>
<br />
<br />

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = isset($_POST['name']) ? $_POST['name']:"Unnamed doge.";
	$breed = isset($_POST['breed']) ? $_POST['breed']:"Breed unavailable.";
	$age = isset($_POST['age']) ? $_POST['age']:"Age unavailable.";
	$weight = isset($_POST['weight']) ? $_POST['weight']:"Weight unavailable.";
	$bio = isset($_POST['bio']) ? $_POST['bio']:"Bio unavailable.";
	$newPet = array('name'=>$name, 'breed'=>$breed, 'age'=>$age, 'weight'=>$weight, 'bio'=>$bio, 'filename'=>'');

// 	$pets = getPetsJSON();
// 	$pets [] = $newPet;
// 	savePetJSON( $pets );
		
	savePet($newPet);
	header('Location: /knpPhp/index.php');
}
?>

<?php require 'layout/footer.php';?>