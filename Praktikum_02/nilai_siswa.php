<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_akhir = (0.3 * $nilai_uts + 0.3 * $nilai_uas + 0.35 * $nilai_tugas);

if($nilai_akhir > 55){
    $status = "Lulus";
}else{
    $status = "Tidak Lulus";
}

if ($nilai_akhir >= 76 && $nilai_akhir <= 85) {
    $grade = "A";}
elseif ($nilai_akhir >= 66 && $nilai_akhir <= 75) {
    $grade = "B";}
elseif ($nilai_akhir >= 56 && $nilai_akhir <= 65) {
    $grade = "C";}
elseif($nilai_akhir >= 36 && $nilai_akhir <= 55){
    $grade = "D";}
elseif($nilai_akhir >= 0 && $nilai_akhir <= 35){
    $grade = "E";}
else {
    $grade = "F";
}

switch ($grade) {
    case 'A':
        $predikat = 'Sangat memuaskan';
        break;    
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    case 'F':
        $predikat = 'Tidak ada';
        break;    
}


// MENCETAK HASIL
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;

    // Mencetak Nilai Akhir, Status, Grade, dan Predikat
    echo '<br/>Nilai Akhir : ' . $nilai_akhir;
    echo '<br/>Status: ' . $status;
    echo '<br/>Grade: ' . $grade;
    echo '<br/>Predikat: ' . $predikat;
}