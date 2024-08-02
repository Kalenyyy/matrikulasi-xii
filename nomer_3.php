<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nomer 3</title>
</head>

<body>
    <form action="" method="post">
        Jam: <input type="number" name="jam"><br><br>
        Menit: <input type="number" name="menit"><br><br>
        Detik: <input type="number" name="detik"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = (int)$_POST['jam'];
        $menit = (int)$_POST['menit'];
        $detik = (int)$_POST['detik'];

        // Fungsi untuk mengkonversi jam, menit, dan detik ke total detik
        function konversiWaktu($jam, $menit, $detik)
        {
            $totalDetik = $jam * 3600;
            $totalDetik += $menit * 60;
            $totalDetik += $detik;

            return $totalDetik;
        }

        $totalDetik = konversiWaktu($jam, $menit, $detik);
        echo "Total detik = $totalDetik";
    }
    ?>

</body>

</html>