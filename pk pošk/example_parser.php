<?php
if( isset($_POST['n']) && isset($_POST['pr']) && isset($_POST['id']) && isset($_POST['gd']) &&isset($_POST['pn']) && isset($_POST['tel']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$pr = $_POST['pr'];
    $id = $_POST['id'];
    $gd = $_POST['gd'];
    $pn = $_POST['pn'];
    $tel = $_POST['tel'];
    $e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "pk_posk@net.hr";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '
    <b>Ime:</b> '.$n.' <br> 
    <b>Prezime:</b> '.$pr.' <br>
    <b>Ime djeteta:</b> '.$id.' <br>
    <b>Godište djeteta:</b> '.$gd.' <br>
    <b>Dijete je: </b> '.$pn.' <br>
    <b>Telefon / Mobitel:</b> '.$tel.' <br>
    <b>Email:</b> '.$e.'
    <p>'.$m.'</p>
    ';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "Došlo je do pogreške. Molimo pokušajte kasnije ili nazovite.";
	}
}
?>