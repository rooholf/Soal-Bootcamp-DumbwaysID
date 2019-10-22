<html>
<body>
    <form action="2.php" method="get">
        masukan nominal : <input type="number" name="uang">
        <input type="submit">
    </form>
        <?php 
            $uang = $_GET["uang"];
    $u100 = intdiv($uang, 100);
    $uang =  $uang%100;
    $u50 = intdiv($uang, 50);
    $uang = $uang%50;
    $u20 = intdiv($uang, 20);
    $u10 = $uang%20/10;

        
        ?>
    Pecahan yang Anda dapat : <br>
        Rp. 100.000 = <?php echo $u100?><br>
        Rp. 50.000 = <?php echo $u50?><br>
        Rp. 20.000 = <?php echo $u20?><br>
        Rp. 10.000 = <?php echo $u10?>

</body>
</html>