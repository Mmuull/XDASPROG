<?php
        include "Convert Machine.php";

        //Take HTML Form Data
        $nama = $_GET["nama"];
        $usia = $_GET["usia"];

        //Locate the CSV file
        $csvfile = "Data/Data Encode.csv";
        
        //Convert CSV to PHP array
        $container = inject_csvtophp($csvfile);

        //Push the data
        $cont = array(count($container) + 1,$nama,$usia);
        array_push($container, $cont);
        
        // Convert PHP array to CSV
        inject_phptocsv($container, $csvfile); // Put it into CSV

        header("Location:Form.php");
        exit();
    ?>