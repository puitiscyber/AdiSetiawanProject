<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style type="text/css">
* {
    box-sizing: border-box;
}

body {
    background-color: rgba(81, 86, 87, 0.535);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    height: 100%;
    text-align: center;
}

.container{
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    color: whitesmoke;
}
</style>

</head>
<body>
  <h1>Aplikasi penghitung huruf/character dalam suatu kalimat</h1>
<div class="container">
  <form action="#" method="get">
    <label for="kalimat">Masukkan Kalimat</label>
    <input type="text" name="kalimat" id="kalimat">
    <br>
    <label for="huruf">Masukkan huruf yang ingin dicari jumlahnya</label>
    <input type="text" name="huruf" id="huruf">
    <button type="submit">Submit</button>
  </form>
</div>

<?php
$string = $_GET['kalimat'];
$huruf = $_GET['huruf'];
$result = substr_count($string, $huruf); 
echo "Kalimat : $string <br>";
echo "Hasil hitung : huruf '$huruf' Muncul Sebanyak $result kali";
?>

</body>
</html>