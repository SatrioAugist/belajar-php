<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="EX. Satrio" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11rpl2" /><br>
    <input type="number" name="nis" placeholder="Ex. 12100707" /><br>

    <br>
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"] ) ) {
        echo "<hr>";
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["nis"];
        
        echo "Nama Lengkap : $nama <br>";
        echo "Kelasnya : $kelas <br> ";
        echo "NIS Siswa : $nis <br>";
    
    }


?>