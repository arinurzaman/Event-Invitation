<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "invitation");

//variabel qrcode 
$qrcode = $_GET['qrcode'];

//mengambil data
$query = mysqli_query($koneksi, "select * from users where qrcode='$qrcode'");
$userid = mysqli_fetch_array($query);
$data = array(
            'qrcode'     =>  @$userid['qrcode'],        
            'name'       =>  @$userid['name'],
            'email'      =>  @$userid['email'],);
           
//tampil data
echo json_encode($data);
?>