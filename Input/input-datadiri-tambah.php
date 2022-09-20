<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nama">Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex. Farel Vandin"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input type="date" name="tanggal_lahir" /> <br>

    <label for="nilai" >Nilai:</label><br>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <a href="inputdatadiri.php"> Kembali </a>
</form>

<?php
    if( isset($_POST["simpan"])){
        $nis= $_POST["nis"];
        $nama= $_POST["nama"];
        $tanggal_lahir= $_POST["tanggal_lahir"];
        $nilai= $_POST["nilai"];

        echo $nis . "<br>";
        echo $nama . "<br>";
        echo $tanggal_lahir . "<br>";
        echo $nilai . "<br>";

        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO datadiri VALUES
        ('$nis', '$nama', '$tanggal_lahir', '$nilai');
        ";

        include ('./inputconfig.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            window.location= 'inputdatadiri.php';
            </script>
            ";
      }
    }
?>