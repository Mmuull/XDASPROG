<?php
    include "Class/Sekolah.php";
    include "Class/Siswa.php";

    //Open JSON file
    // $kelas = array(); object format
    // $jmlhsiswa = 34;
    // $jsonde = file_get_contents('Data/Data Decode.json');
    // $datajson = json_decode($jsonde);

    //Open and Close CSV
    // $csv = $array(); default format
    // $file_pointer = fopen($csv, 'w');
    // fclose($file_pointer);

    //Make objects
    function makeobjects($kelas,$jmlhsiswa){
        for ($index = 0; $index < $jmlhsiswa; $index ++){
            $kelas[$index] = new Siswa();
        }
        return $kelas;
    }

    // -----------------------------------------------------------------------------------------------------
    // INJECT DATA

    //Inject data from CSV to PHP Objects
    function inject_csvtophp($csvfile){
        //Open and Close CSV
        $csv = $csvfile;
        $openfile = fopen($csv,'r');
        $container = array();

        if ($openfile !== NULL) 
        {
            while (($data = fgetcsv($openfile, 1000, ",")) !== FALSE) 
            {        
                $container[] = $data; 
            }
            fclose($openfile);
        }
        else{
            echo "Container = NULL";
            return NULL;
        }
        return $container;
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

    //Inject from PHP to CSV
    function inject_phptocsv($container,$csvfile){
        $csv = $csvfile;
        $file_pointer = fopen($csv, 'w');
    
        foreach($container as $i){    
            // Write the data to the CSV file
            fputcsv($file_pointer, $i);
        }
        fclose($file_pointer);
    }
    
    //Inject data form PHP to JSON
    function inject_phptojson($jsonarray){
        $jsonen = json_encode($jsonarray);
    
        file_put_contents("Data/Data Encode.json", $jsonen);
    }

    // -----------------------------------------------------------------------------------------------------
    // 
    
    //Echo Perkenalan
    function perkenelansiswa($kelas){
        for ($nomor = 0; $nomor < count($kelas); $nomor += 1){
            echo $kelas[$nomor]->perkenalan() ."<br>";
        }
    }
?>