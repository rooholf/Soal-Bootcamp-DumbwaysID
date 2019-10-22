
<html>
  <body>
   
        <form action="1.php" method="get" > 
        Nama : <input type="text" name="nama" ><br>
        Nim : <input type="number" name="nim"><br>
        Absen : <input type="number" name="absen"> (dari 14x pertemuan)<br>
        Tugas : <input type="text" name="tugas"><br> 
        uts : <input type="text" name="uts"> <br>
        uas : <input type="text" name="uas"> <br>
            <input type="submit"><br>
        </form>
        <?php

        $absen = $_GET["absen"]/14*10;
        $tugas = $_GET["tugas"]*0.2;
        $uts = $_GET["uts"]*0.3;
        $uas = $_GET["uas"]*0.4;
        $total = $absen+$tugas+$uts+$uas;
        
        if ($absen == 0 || $tugas == 0 || $uts == 0 || $uas == 0) {
          $hasil = "E";
        }else {
          if ($total >= 80) {
            $hasil = "A";
          }elseif ($total<=79 && $total>70) {
            $hasil = "B";
          }elseif ($total<=69 && $total>60) {
            $hasil = "C";
          }elseif ($total<=59 && $total>50) {
            $hasil = "D";
          }else {
            $hasil="E";
          }
        }
        ?>

    Nama : <?php echo $_GET["nama"] ?><br>
    Nim : <?php echo  $_GET["nim"]?><br>
    Hasil Akhir : <?php echo $hasil?><br>

  
  </body>
</html>
