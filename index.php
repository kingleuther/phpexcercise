<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
require('vendor/autoload.php');


use Tmjp\ToyotaModel;
use Tmjp\HyundaiModel;
use Tmjp\OwnCarModel;
use Tmjp\OwnCar;
use Tmjp\Toyota;
use Tmjp\Cars;
$toyota = new Toyota();
$vios = new ToyotaModel('Vios');
$innova = new ToyotaModel('Innova');
$civic = new HyundaiModel('Civic');
$revo = new ToyotaModel('Revo');
$owncar= new OwnCarModel($civic);
$myowncar= new OwnCar();
echo "
<table class = 'table table-striped'>
<tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Wheels</th>
    <th>Transmission</th>
    <th>Seats</th>
    <th>Entry</th>

</tr>";

echo "<tr>";
echo "<td>".$vios->brand()."</td>";
echo "<td>".$vios->showModel()."</td>";
echo "<td>".$vios->wheels()."</td>";
echo "<td>".$vios->transmission()."</td>";
echo "<td>".$vios->seats()."</td>";
echo "<td>".$vios->entry()."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".$innova->brand()."</td>";
echo "<td>".$innova->showModel()."</td>";
echo "<td>".$innova->wheels()."</td>";
echo "<td>".$innova->transmission()."</td>";
echo "<td>".$innova->seats()."</td>";
echo "<td>".$innova->entry()."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".$civic->brand()."</td>";
echo "<td>".$civic->showModel()."</td>";
echo "<td>".$civic->wheels()."</td>";
echo "<td>".$civic->transmission()."</td>";
echo "<td>".$civic->seats()."</td>";
echo "<td>".$civic->entry()."</td>";
echo "</tr></table>";
echo "<br>";
echo "
<label class = 'for-usr'>MY OWN CAR</label>
<table class = 'table table-striped'>
<tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Wheels</th>
    <th>Transmission</th>
    <th>Seats</th>
    <th>Entry</th>
    <th>Color</th>
    <th>Aircon Type</th>    
</tr>";
echo "<tr>";
echo "<td>".$owncar->showModel()['brand']."</td>";
echo "<td>".$owncar->showModel()['model']."</td>";
echo "<td>".$owncar->showModel()['wheels']."</td>";
echo "<td>".$owncar->showModel()['transmission']."</td>";
echo "<td>".$owncar->showModel()['seats']."</td>";
echo "<td>".$owncar->showModel()['entry']."</td>";
echo "<td>".$myowncar->color()."</td>";
echo "<td>".$myowncar->aircon()."</td>";
echo "</tr></table>";


