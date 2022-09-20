<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        
        $query = "
            DELETE FROM datadiri
            WHERE nis = '$nis';
            ";

        include ('./inputconfig.php');
        $delete = mysqli_query($mysqli, $query);

            if ($delete){
                echo "
                <script>
                alert('Data Berhasil Dihapus');
                window.location= 'inputdatadiri.php';
                </script>
                ";
            }else{
                echo "
                <script>
                alert('Data Gagal');
                window.location= 'inputdatadiri.php';
                </script>
                ";
       }

    }
?>