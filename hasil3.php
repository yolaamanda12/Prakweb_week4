<?php
// Menangkap Value form berdasarkan unique name & simpan ke dalam variable
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$nilai = 0;

foreach ($skill as $data ) {
    switch ($data) {
        case 'html' :
        case 'css' :
            $nilai += 10;
            break;
            default:
                # code...
                break;
               
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'js' :
        case 'rwd' :
        
            $nilai += 20;
            break;
            default:
                # code...
                break;
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'php' :
        case 'java' :
        
            $nilai += 30;
            break;
            default:
                # code...
                break;
    }
}
foreach ($skill as $data ) {
    switch ($data) {
        case 'phyton' :
        
            $nilai += 50;
            break;
            default:
                # code...
                break;
    }
}
// tampilkan value ke dalam  web browser
echo "<h4>Informasi Yang Dikirim : </h4>";
echo "<br>Nim : $nim ";
echo "<br>Nama : $nama ";
echo "<br>Jenis Kelamin : $jk ";
echo "<br>Program Studi : $prodi ";
echo "<br>Skill : ";
foreach ($skill as $data) {
    echo $data . ", ";
}
echo "<br>Domisili : $domisili ";
echo "<br>Email : $email ";
echo "<br>Nilai : $nilai ";