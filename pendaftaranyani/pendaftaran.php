<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h3>Pendaftaran Siswa Baru SMKN 1 SAYUNG </h3>
    <form action="prosesdaftar.php" method="post">
    <table border=0>
    <tr>
   <td> Nama Lengkap:</td>
    <td><input type="text" name="nama" /></td>
</tr>
<tr>
    <td>Tempat Lahir: </td>
    <td><input type="text" name="tempat" /></td>
</tr>
<tr>
   <td> Tanggal Lahir: </td>
    <td><input type="date" name="tanggal" /></td>
</tr>
<tr>
    <td>Jenis Kelamin:</td>
    <td><input type="radio"  name="sex" Value ="Pria" />Pria </td>
    <td><input type="radio"  name="sex" Value ="Wanita" />Wanita </td>
</tr>
<tr>
    <td>Alamat:</td>
    <td><input type="text-area" name="alamat" /></td>
</tr>
<tr>
    <td>Agama:</td>
   <td> <select name="religion">
<option value="Islam">Islam
<option value="Kristen">Kristen
<option value="Budha">Budha
<option value="Hindhu">Hindhu
<option Value="Katolik">Katolik
</select> </td>
</tr>
<tr>
  <td><input type="reset" value="ulangi" /></td>
  <td><input type="submit" value="submit"/></td>
</tr>
</form>
</body>
</html>