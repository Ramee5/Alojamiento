<?php
//recibir los datos de form html

$ciudad = $_POST['ciudad'];
$checkin = $_POST['fecha_ingreso'];
$checkout = $_POST['fecha_salida'];
$huespedes = $_POST['huespedes'];

echo("Se ha realizado una reserva en la ciudad de " .$ciudad);
echo("Se ha realizado una reserva para " .$huespedes. "personas");
echo("Se ha realizado una reserva para el check-in en" .$checkin);
$noches = $checkout - $checkin;
echo("Se ha realizado una reserva para" .$noches. "noches");  

$fecha_inicio = new DateTime($checkin);
$fecha_salida = new DateTime($checkout);

$noches = $fecha_inicio->diff($fecha_salida);

$diasDiferencia = $noches->days;

echo("<br>Se ha realizado una reserva para " .$diasDiferencia. "noches");

?>