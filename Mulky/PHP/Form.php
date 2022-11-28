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
            <a href="#"><img src="Media/Banner.jpg" alt="banner-alfalah"></a>
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
                <!-- <input type="checkbox" id="showpassword" onclick="myFunction()" style="vertical-align: bottom;"> -->
                <!-- <label for="showpassword" style="font-size: 12px;">Lihat Password</label>   -->
            </div>
            <div class="bottom">
                <!-- <p>Belum menjadi member? <a href="ChallengeForm2.html">Daftar</a></p> -->
            </div>
            <div class="buttonleft">
                <a href="DataSiswa.php"><input type="button" class="button" value="Lihat Data"></a>
            </div>
            <div class="buttonright">
                <!-- <input type="checkbox" name="remember" id="remember">
                <label for="remember">Ingat Saya</label> -->
                <input class="button" type="submit" value="Submit"><br>
            </div>
        </form>
    </fieldset>

    <script>
        function msg(){
            alert("Terima Kasih Anda sudah Login")
        }
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>