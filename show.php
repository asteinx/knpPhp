<?php
//Zeigt Einzelergebnis an, Implementiert im Hauptseitendesign
?>
<?php require 'layout/header.php'; ?>


<?php 
require_once 'lib/functions.php';
$id = $_GET['id'];
$pet = getPet($id);
// var_dump($pet);die();
?>

<h1>Meet <?php echo $pet['name']; ?></h1>

<div class="container">
    <div class="row">
        <div class="col-xs-3 pet-list-item">
            <img src="/knpPhp/images/<?php echo $pet['filename'] ?>" class="pull-left img-rounded" />
        </div>
        <div class="col-xs-6">
            <p>
                <?php echo $pet['bio']; ?>
            </p>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Breed</th>
                        <td><?php echo $pet['breed']; ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php echo $pet['age']; ?></td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td><?php echo $pet['weight']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>