<!DOCTYPE html>
<html>

<head>
    <title>Usia dan Zodiac</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h4 class="container">
        <?php
        include_once "config.php";
        if (isset($_POST['cari'])) {
            $namanya = $_POST['nama'];
            $tgl = $_POST['tanggal'];
            $bln = $_POST['bulan'];
            $thn = $_POST['tahun'];
            if (empty($tgl) || empty($bln) || empty($thn)) {
                header('Location: index.php?error=1');
                exit;
            } else {
                $utahun = date("Y") - $thn;
                $ubulan = date("m") - $bln;
                $uhari = date("j") - $tgl;

                if ($uhari < 0) {
                    $uhari = date("t", mktime(0, 0, 0, $bln - 1, date("m"), date("Y"))) - abs($uhari);
                    $ubulan = $ubulan - 1;
                }
                if ($ubulan < 0) {
                    $ubulan = 12 - abs($ubulan);
                    $utahun = $utahun - 1;
                }

                $usia = $utahun . " Tahun, <br>" . $ubulan . " Bulan, <br>" . $uhari . " Hari <br>";
                echo ("<br><br>Halo " . $namanya . ",");
                echo ("<br>Usia Anda saat ini adalah:<br>" . $usia);

                $birthMonth = $bln;
                $birthDay = $tgl;

                $query = mysqli_query($db, "SELECT * FROM tzodiak");
                while ($row = mysqli_fetch_assoc($query)) {
                    $startMonth = date("m", strtotime($row['awal']));
                    $startDay = date("d", strtotime($row['awal']));
                    $endMonth = date("m", strtotime($row['akhir']));
                    $endDay = date("d", strtotime($row['akhir']));

                    if (($birthMonth == $startMonth && $birthDay >= $startDay) || ($birthMonth == $endMonth && $birthDay <= $endDay)) {
                        $zodiacSign = $row['nama_zodiak'];
                        break;
                    }
                }

                if (isset($zodiacSign)) {
                    echo ("<br>Bintang Anda adalah<br>");
                    echo $zodiacSign;
                }
            }
        }
        ?>
    </h4>
</body>