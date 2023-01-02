<!DOCTYPE html>
<html lang="en">
<head>
    <title>Challenge</title>
    <style></style>
    <link rel="stylesheet" href="Form.css">
    <link rel="stylesheet" href="DataSiswa.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color:whitesmoke;">      
    <fieldset>
        <div class="top">
            <a href="#"><img src="Media/Image/Banner.jpg" alt="banner-alfalah"></a>
            <h2 style="text-align: center;">INPUT DATA SISWA</h2>
        </div>
        <form action="Inject data.php" method="get">
            <div class="input">
                <label for="nama">Nama<span style="color: red;">*</span></label><br>
                <input class="text" type="text" name="nama" id="nama" placeholder="Nama anda" value="" required><br><br>
            </div>
            <div class="input">
                <label for="usia">Usia<span style="color: red;">*</span></label><br>  
                <input class="text" type="number" name="usia" id="usia" placeholder="6 - 18" value="" min="6" max="18" required><br>
            </div>
            <div class="bottom">
            </div>
            <div class="buttonleft">
                <a href="DataSiswa.php"><input type="button" class="button" value="Lihat Data"></a>
            </div>
            <div class="buttonright">
                <input class="button" type="submit" value="Submit"><br>
            </div>
        </form>
    </fieldset>
</body>
</html>