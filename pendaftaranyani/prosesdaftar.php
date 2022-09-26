<?php
echo "Nama Lengkap: ";
if (isset($_POST['nama'])) {
echo $_POST['nama'];
}echo "<br>";

echo "tempat lahir: ";
if (isset($_POST['tempat'])) {
echo $_POST['tempat'];
}
echo "<br>";

echo "tanggal lahir: ";
if (isset($_POST['tanggal'])) {
echo $_POST['tanggal'];
}
echo "<br>";

echo "jenis kelamin: ";
if (isset($_POST['sex'])) {
echo $_POST['sex'];
}
echo "<br>";

echo "alamat: ";
if (isset($_POST['alamat'])) {
echo  $_POST['alamat'];
}
echo "<br>";

echo "agama: ";
if (isset($_POST['religion'])) {
echo  $_POST['religion'];
echo "<br>";
}

?>