<?php require 'layout/header.php';?>

<div class="container">

	<div class="starter-template">
		<h1>My Pets</h1>
		<p class="lead"><?php echo getMottoDesTages (); ?></p>



		<table width="50%" border="0">
<?php

//  $pets = getPetsJSON();
$pets = getPets();


foreach ( $pets as $pet ) {
	?>
	<tr>
				<td><img src="/knpPhp/images/<?php echo $pet['filename']; ?>"
					class="img-rounded"></td>
				<td>
					<h2>
						<a href="show.php?id=<?php echo $pet['id'] ?>">
						   <?php echo $pet['name']; ?>
    					</a>
					</h2>
	<?php
	echo $pet ['name'] . '<br />';
	echo $pet ['breed'] . '<br />';
	echo $pet ['age'] . '<br />';
	echo $pet ['weight'] . ' kg<br />';
	echo $pet ['bio'] . '<br />';
	echo $pet ['filename'] . '<br />';
	?>
	</td>
			</tr>
<?php
}
?>
</table>

	</div>
</div>
<!-- /.container -->



<?php require 'layout/footer.php';?>

