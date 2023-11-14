<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Dasar</title>
</head>
<body>
    <form action="" method="post" class="form-example">
        <label for="name">Nama : </label>
        <input type="text" name="name" id="name" required /><br>

        <label for="date">Tanggal Lahir : </label>
        <input type="date" name="date" id="date" required /><br>

        <label for="jobs">Pilih Pekerjaan : </label>
        <select name="jobs" id="job-select" required>
            <option value="">--Pekerjaan--</option>
            <option value="Operator Produksi">Operator Produksi</option>
            <option value="Operator Komputer">Operator Komputer</option>
            <option value="IT support">IT support</option>
        </select>
        <input type="submit" value="Kirim" />
    </form>
    <?php
        if (isset($_POST['name'], $_POST['date'], $_POST['jobs'])) {
            echo "Nama         : " . $_POST['name'] . "<br>";
            echo "Tanggal lahir: " . $_POST['date'] . "<br>";
            $age = floor((strtotime(date('d-m-Y')) - strtotime($_POST['date']))/(60*60*24*365));
            echo "Umur         : " . $age . " tahun <br>";
            echo "Pekerjaan: " . $_POST['jobs'] . "<br>";
            if($_POST['jobs'] == "Operator Produksi") {
                echo "Kisaran gaji: Rp. 5.000.000 - Rp. 6.000.000";
            } elseif ($_POST['jobs'] == "Operator Komputer") {
                echo "Kisaran gaji: Rp. 7.000.000 - Rp. 8.000.000";
            } elseif ($_POST['jobs'] == "IT support") {
                echo "Kisaran gaji: Rp. 5.000.000 - Rp. 7.000.000";
            } else {
                echo "not found";
            }
        }
    ?>  
</body>
</html>