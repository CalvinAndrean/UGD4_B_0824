<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addSeries'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['nameSeries'];
        $genre = $_POST['genreSeries'];
        $realese = $_POST['realeseSeries'];
        $episode = $_POST['episodeSeries'];
        $season = $_POST['seasonSeries'];
        $synopsis = $_POST['synopsisSeries'];

        foreach($genre as $gen){
            $resultGen .= $gen.", ";
        }
            
        $query = mysqli_query($con,
        "INSERT INTO series(id, name, genre, realese, episode, season, synopsis)
        VALUES
        (0, '$name', '$resultGen', '$realese', '$episode', '$season', '$synopsis')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            echo
                '<script>
                alert("Add Series Success");
                window.location = "../page/listSeriesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Add Series Failed");
                </script>';
        }
    // Melakukan insert ke databse dengan query dibawah ini
        
    }else{
        echo
        '<script>
        alert("Ga kepencet");
        // window.history.back()
    </script>';
}