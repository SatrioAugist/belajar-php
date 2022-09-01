<?php
    // Percabangan (IF ELSE)
    $nilai = 75;
   
        echo "Nilai Kamu = $nilai <br>";
        echo "Maka Status Kamu = ";

    if ($nilai > 75) {
            echo "Lulus Beneran";
    } else if ($nilai == 75){
        echo "Lulus KKM";
    }
     else {
        echo "Tidak Lulus";
    }

    echo "<hr>";

    $nilai_web = 78;
    $nilai_pbo = 80;

    echo "Nilai web kamu = $nilai_web <br>";
    echo "Nilai pbo kamu = $nilai_pbo <br>";
    echo "Hasil kelulusan kamu =";
    if ($nilai_web >= 80 && $nilai_pbo >= 80){
        echo "Lulus Nilai Produktif 2 Mapel";
    }else if ($nilai_web >= 80 || $nilai_pbo >=80) {
        echo "Lulus Nilai Produktif Salah Satu Mapel";
    } else{
        echo "Tidak Lulus Nilai Produktif";
    }

    echo "<hr>";

    // Perulangan (While, Do While, For)
    $i = 1;
    while ($i < 5) {
        echo "Hello Word ! Ke - $i <br>";
        $i++;
    }
    
    echo "<hr>";

    $no = 1;
    do {
        echo "Halo Guys ! <br> ";
        $no++;
    }while ($no < 5);

    echo "<hr>";

    $nomor = 1;
    for ($nomor; $nomor < 5; $nomor++){
        echo "Arigatou ! <br>";
    }

    echo "<hr>";

    // Pratikum IF didalam FOR
    echo "Case 1 : Menentukan Angka Ganjil dan Genap <br> ";
    $angka = 1;
    for ($angka; $angka <= 10; $angka++){
       if ($angka % 2 == 0) {
        echo "$angka = Bilangan Genap <br>";
       }
       else {
        echo "$angka = Bilangan Ganjil <br>";
       }
    }

     echo "<hr>";
    //Pratikum FOR dalam FOR
    echo "Case 2 : Angka Berulang <br>";
    $x = 1;
    $y = 1;
    for ($x; $x <= 9; $x++){
        for ($y = $x; $y <= 9; $y++ ){
            echo $y ;
        }
        echo "<br>";
        
    }

?>