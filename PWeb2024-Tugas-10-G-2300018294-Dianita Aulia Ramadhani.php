<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pweb Percabangan dan perulangan</title>
    <link rel="stylesheet" href="style1.css">
    <script>
        function clearform(){
            document.getElementById("nilai").value = "";
        }
    </script>
</head>
<body>
    <div class="container">
    <h1>Penentuan Nilai</h1>
   <form method="POST">
    <label for="nilai">Masukkkan Nilai Anda: </label>
    <input type="number" id="nilai" name="nilai" required>
    <input type="submit" value="Submit">
   </form>
<div class="result1">
    <?php include 'percabangan.php'?>
</div>
</div>
</body>
</html>