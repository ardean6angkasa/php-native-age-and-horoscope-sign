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
  <script language=Javascript>
    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }

    var jmlhari_di_bulan = Array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

    function byId(id) {
      return document.getElementById ? document.getElementById(id) : document.all[id];
    }

    function populateDays(month) {
      var days = jmlhari_di_bulan[month];
      document.forms[0].tanggal.options.length = 0;
      if (month == 2) {
        thn_lhr = document.forms[0].tahun.value;
        if (thn_lhr % 4 == 0) {
          if (thn_lhr % 100 == 0) {
            if (thn_lhr % 400 == 0) { days = 29; }
          }
          else { days = 29; }
        }
      }
      for (i = 1; i <= days; i++) {
        var option = document.createElement('option');
        option.text = option.value = i;
        try { byId('days').add(option, null); }
        catch (e) { byId('days').add(option); }
      }
    }
  </script>
</head>

<body onload="document.forms[0].nama.focus()">
  <br>
  <br>
  <div class="container">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
      echo "<script>alert('Isi data dengan BENAR!')</script>";
    }
    ?>
    <form action="koneksi.php" method="post">

      <label>Nama :</label>
      <input type="text" placeholder="Tulis Nama Anda" name="nama" required>
      <br>
      <br>
      <label>Tanggal Lahir :</label>
      <input onchange="populateDays(document.forms[0].bulan.value)" onkeypress="return isNumberKey(event)" name="tahun"
        size=4 placeholder="Tahun" maxlength=4>
      /
      <select onclick="populateDays(document.forms[0].bulan.value)"
        onchange="populateDays(document.forms[0].bulan.value)" name="bulan" style="width:100px">
        <option value="">--</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
      /
      <select id="days" name="tanggal" style="width:60px">
        <option></option>
      </select>
      <br>
      <br>
      <input type="submit" class="btn btn-success" name="cari" value="Submit" />
      <input type="reset" class="btn btn-danger" value="Reset" />
    </form>

  </div>
</body>