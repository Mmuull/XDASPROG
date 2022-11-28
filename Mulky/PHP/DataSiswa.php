<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
    <style></style>
    <link rel="stylesheet" href="DataSiswa.css">
    <!-- <link rel="stylesheet" href="Form.css"> -->
</head>
<body>
        
<?php
        include "Convert Machine.php";
        $csvfile = 'Data/Data Encode.csv';
        $kelas = inject_csvtophp($csvfile);
    ?>
    <div class="content">
        <div class="table">
            <table>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Usia</th>
                </tr>
                <?php
                    for ($index = 0; $index < count($kelas); $index++){
                        echo 
                        "<tr>
                            <td class='nomor'>".$kelas[$index][0]."</td>
                            <td class='nama'>".$kelas[$index][1]."</td>
                            <td class='usia'>".$kelas[$index][2]."</td>
                        <tr>"
                        ;
                    }
                ?>    
            </table>
        </div>
        <div class="keterangan">
            <?php echo "Jumlah siswa : ".count($kelas); ?>
        </div>
        <div class="buttonleft">
            <a href="Form.php"><button class="button">Back</button></a>
        </div>
    </div>
</body>
</html>