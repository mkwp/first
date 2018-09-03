<?php

class Koneksi{

public function __construct() {

$this->db = new PDO('mysql:host=localhost;dbname=combo_box','root',''); }


public function tampil() {

	$sql="SELECT * from mahasiswa";
	$query= $this->db->query($sql);
	return $query;
} }
?>