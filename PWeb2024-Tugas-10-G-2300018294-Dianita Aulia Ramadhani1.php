<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pweb Percabangan dan perulangan</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function clearform(){
            document.getElementById("baris").value = "";
        }
    </script>
</head>
<body>
<div class="container1">
    <h1>Piramida Segitiga Bintang</h1>
<form method="POST">
    <label for="baris">Masukkan Tinggi Segitiga: </label>
    <input type="number" name="baris" min="1" required>
    <input type="submit" value="Buat Piramida">
</form>
<div class="result2">
    <?php include 'perulangan.php'?>
</div>
</div>
</body>
</html>