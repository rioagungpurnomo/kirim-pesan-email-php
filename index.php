<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kirim Email</title>
</head>

<body>
    <h1>Kirim Email</h1>
    <form method="POST" action="proses.php">
        Email Tujuan: <input type="email" name="email" id="email"><br><br>
        Judul Pesan: <input type="text" name="judul" id="judul"><br><br>
        Pesan: <textarea name="pesan" id="pesan" rows="8" cols="20"></textarea><br><br>
        <button type="submit" name="submit">Kirim Email!</button>
    </form>
</body>

</html>