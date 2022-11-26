<?php
    include "Class/Sekolah.php";
    include "Class/Siswa.php";

    //Open JSON file
    // $kelas = array();
    // $jmlhsiswa = 34;
    // $jsonde = file_get_contents('Data/Data Decode.json');
    // $datajson = json_decode($jsonde);

    //Open and Close CSV
    // $csv = $file;
    // $file_pointer = fopen($csv, 'w');
    // fclose($file_pointer);

    //Open CSV and Convert it to PHP
    function convertcsv(){
        if (($csv = fopen("Data/K1.csv", "r")) !== FALSE) 
        {
            while (($csvcontainer = fgetcsv($csv, 1000, ",")) !== FALSE) 
            {        
                $csvdata[] = $csvcontainer; 
            }
    
            fclose($csv);
            return $csvdata;
        }
        else{
            echo "CSV data is NULL";
        }
    }

    //Make objects
    function makeobjects($jmlhsiswa){
        for ($index = 0; $index < $jmlhsiswa; $index ++){
            $kelas[$index] = new siswa();
        }
        return $kelas;
    }

    //Inject data from CSV to PHP Objects
    function inject_csvtophp($kelas, $jmlhsiswa, $datacsv){
        for ($index = 0; $index < $jmlhsiswa; $index ++){
            $kelas[$index]->no_siswa = $datacsv[$index + 2][0];
            $kelas[$index]->nama_siswa = $datacsv[$index + 2][1];
        }
    }

    // Inject data from JSON to PHP Objects
    function inject_jsontophp($kelas, $jmlhsiswa, $jsondata){
        for ($index = 0; $index < $jmlhsiswa; $index ++){
            $kelas[$index]->no_siswa = $jsondata[$index]->no;
            $kelas[$index]->nama_siswa = $jsondata[$index]->nama;
        }
    }

    //Inject data from JSON to CSV
    function inject_jsontocsv($kelas,$file){
        $container = array();
        for ($index = 0; $index < count($kelas); $index ++){
            $container[$index] = array ($kelas[$index]->no_siswa, $kelas[$index]->nama_siswa, $kelas[$index]->usia_siswa);
        }
        $csv = $file;
        $file_pointer = fopen($csv, 'w');
    
        foreach($container as $i){    
            // Write the data to the CSV file
            fputcsv($file_pointer, $i);
        }
        fclose($file_pointer);
    }
    
    //Inject data form PHP to JSON
    function inject_phptojson($arrayjson){
        $jsonen = json_encode($arrayjson);
    
        file_put_contents("Data/Data Encode.json", $jsonen);
    }
    
    //Echo Perkenalan
    function perkenelansiswa($kelas){
        for ($nomor = 0; $nomor < count($kelas); $nomor += 1){
            echo $kelas[$nomor]->perkenalan() ."<br>";
        }
    }
?>