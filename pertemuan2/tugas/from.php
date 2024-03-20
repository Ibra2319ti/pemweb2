<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-4">
            <form>
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
                </div>
        </div> 
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="mata_kuliah" name="mata_kuliah" placeholder="pilihmatakuliah" type="text" class="form-control" required="required">
                        <option value="">Pilih Mata Kuliah</option>
                        <option value="pemweb">Pemweb</option>
                        <option value="DDP">DDP</option>
                        <option value="UIUX">UIUX</option>
                    </select>
                </div>
        </div> 
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai Uts" type="number" class="form-control" required="required">
                </div>
        </div>
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai Uas" type="number" class="form-control" required="required">
                </div>
        </div>
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="Number" class="form-control" required="required">
                </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$mata_kuliah = $_POST['mata_kuliah'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

echo "Nama : $nama <br>";
echo "Mata Kuliah : $mata_kuliah <br>";
echo "Nilai UTS : $nilai_uts <br>";
echo "Nilai UAS : $nilai_uas <br> ";
echo "Nilai Tugas : $nilai_tugas <br>";


switch ($total_nilai) {
    case $total_nilai >= 85:
        echo "Grade A";
        break;
    case  $total_nilai >= 70:
        echo "Grade B";
        break;
    case  $total_nilai <= 60:
        echo "Grade C";
        break;
    case  $total_nilai >= 40:
        echo "Grade D";
        break;
    default:
        echo "Grade E";
        break;
}

}else {

}