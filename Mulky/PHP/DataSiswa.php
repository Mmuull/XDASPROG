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
        $edit = false;
    ?>
    <div class="content">
        <div class="table">
            <table>
                <tr>
                    <th class="nomor">Nomor</th>
                    <th class="nama">Nama</th>
                    <th class="usia">Usia</th>
                </tr>
                <?php
                    for ($index = 0; $index < count($kelas); $index++){
                        echo 
                        '<tr>
                            <td class="nomor">'.$kelas[$index][0].'</td>
                            <td class="nama">'.$kelas[$index][1].'</td>
                            <td class="usia">'.$kelas[$index][2].'</td>'
                        ;
                        if ($edit == true){
                            echo '<td class="edit"><img src="" alt=""></td>';
                        }
                        echo '<tr>';
                    }
                    if ($edit == true){}
                ?>    
            </table>
        </div>
        <div class="buttonleft">
            <a href="#"><button class="button">Edit</button></a>
            <a href="Form.php"><button class="button">Back</button></a>
        </div>
    </div>
</body>
</html>