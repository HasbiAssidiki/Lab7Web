# Lab7Web
```
Nama    : Hasbi Assidiki
NIM     : 312210448
Kelas   : TI.22.A4
```

## **Latihan**

- **PHP Dasar**
  
![php_dasar](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/94a074a5-880f-4046-a43f-7d39370d7594)  

- **Variable PHP**
  
![variable_php](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/ea0b0186-f0ad-42ee-9f7c-75df3abdaa8e)   

- **Predefine Variable $_GET**

 ![Predifine](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/ea682936-f187-4db8-906e-05bf73754884)  

- **Membuat Form Input**
  
![Form Input](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/20b43d5b-d99c-4855-90f6-275095930085)  

- **Operator**
  
![Operator](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/d0f94ab8-ce12-4b23-8cb8-4758601994e2)  

- **Kondisi If**
  
![Kondisi If](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/cdfaa581-7487-4dc9-b9db-ac570382c0e7)  

- **Kondisi Switch**
  
![kondisi switch](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/b7b14b28-9384-48a3-bd19-0d1bc2c5bbf4)  

- **Perulangan For**
  
![perulangan for](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/711f2a34-4691-4c67-aca1-191283246be5)  

- **Perulangan While**
  
![perulangan while](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/2661fdfc-f7d4-4ebe-b565-30ef6582474a)  

- **Perulangan dowhile**
  
![perulangan dowhile](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/0b573406-2582-40d9-b8e3-f74c5a12d3ec)  

## **Tugas**
> Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

```php
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
```

- **Output**
  
![Tugas'](https://github.com/HasbiAssidiki/Lab7Web/assets/115614317/e6a27ef2-b574-46a2-b88a-44596b1ace00)  
