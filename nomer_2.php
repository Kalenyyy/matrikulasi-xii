<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n</title>
</head>

<body>
    <h1>Nomer 2</h1>
    <form action="" method="post">
        nilai 1:<input type="text" name="nilai1">
        nilai 2:<input type="text" name="nilai2">
        nilai 3:<input type="text" name="nilai3">
        <button type="submit" name="nomer_2">submit</button>
    </form>
    <?php
        if (isset($_POST['nomer_2'])) {
            $a;
            $b;
            $c;
            $max;

            $a = $_POST['nilai1'];
            $b = $_POST['nilai2'];
            $c = $_POST['nilai3'];
            if ($a > $b) {
                if ($a > $c) {
                    $max = $a;
                } else {
                    $max = $c;
                }
            } else {
                if ($c > $b) {
                    $max = $c;
                } else {
                    $max = $b;
                }
            }
            echo "nilai yang paling besar adalah = $max";
        }
    ?>
    
</body>

</html>