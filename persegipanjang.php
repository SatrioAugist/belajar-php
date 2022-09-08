<form action="persegipanjang.php" method="POST">
    <h1>Rumus Luas dan Keliling Persegi Panjang</h1>
    <p>Panjang :</p>
    <p>Lebar :</p>
    <input type="number" name="Panjang" placeholder="EX. 6" /><br>
    <input type="number" name="Lebar" placeholder="EX. 4" /><br>

    <input type="submit" name="proses" value="Cari luas dan keliling persegi Panjang"
     />
</form>

<?php
  if( isset($_POST["proses"] ) ) {
    echo "<hr>";
    $panjang = $_POST["Panjang"];
    $lebar = $_POST["Lebar"];
    $luas = $panjang * $lebar;
    $keliling = ($panjang + $lebar) * 2;
   
    echo "Panjang  : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luas Persegi Panjang : $luas <br>";
    echo "Keliling Persegi Panjang: $keliling <br>";

}
 
 

?>