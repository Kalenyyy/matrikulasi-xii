
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
</head>
<body>
    <form action="" method="post">
        Total Detik: <input type="text" name="TotalDetik">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $totalDetik = (int)$_POST['TotalDetik'];

        function konversiWaktu($totalDetik) {
            $jam = floor($totalDetik / 3600);
            $sisaDetik = $totalDetik % 3600;
            $menit = floor($sisaDetik / 60);
            $detik = $sisaDetik % 60;

            return [
                'jam' => $jam,
                'menit' => $menit,
                'detik' => $detik
            ];
        }

        $hasil = konversiWaktu($totalDetik);
        echo "Total waktu adalah = {$hasil['jam']} jam {$hasil['menit']} menit {$hasil['detik']} detik";
    }
    ?>
</body>
</html>