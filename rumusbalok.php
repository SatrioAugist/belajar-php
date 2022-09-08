<form action="rumusbalok.php" method="POST">
    <h1>Rumus Volume Balok</h1>
    <p>Panjang :</p>
    <p>Lebar :</p>
    <p>Tinggi :</p>
    <input type="number" name="Panjang" placeholder="EX. 8" /><br>
    <input type="number" name="Lebar" placeholder="EX. 6" /><br>
    <input type="number" name="Tinggi" placeholder="EX. 4" /><br>

    <input type="submit" name="proses" value="Cari Volume Balok"
     />
</form>

<?php
  if( isset($_POST["proses"] ) ) {
    echo "<hr>";
    $panjang = $_POST["Panjang"];
    $lebar = $_POST["Lebar"];
    $tinggi = $_POST["Tinggi"];
    $volume = $panjang * $lebar * $tinggi;
   
    echo "Panjang  : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Volume Balok = : $volume <br>";

}
 
 

?>