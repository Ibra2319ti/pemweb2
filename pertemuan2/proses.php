<?php 
if (isset($_GET['submit'])) {
    $nama = $_POST['nama'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST[ 'nilai_tugas'];

    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matakuliah <br> ";
    echo "Nilai UTS :  $nilai_uts <br>";
    echo "Nilai UAS : $nilai_uas <br>";
    echo "Nilai Tugas :  $nilai_tugas <br>";
} else {
    echo "<script>alert('kamu harus isi terlebih dahulu!')</script>";
    echo '<meta http-equic="refresh" contont="0; url=form.php">';
}
?>