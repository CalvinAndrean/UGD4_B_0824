<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addMovie'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['nameMovie'];
        $genre = $_POST['genreMovie'];
        $realese = $_POST['realeseMovie'];
        $season = $_POST['seasonMovie'];
        $synopsis = $_POST['synopsisMovie'];
            
        $query = mysqli_query($con,
        "INSERT INTO movies(id, name, genre, realese, season, synopsis)
        VALUES
        (0, '$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            echo
                '<script>
                alert("Add Movie Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Add Movie Failed");
                </script>';
        }
    // Melakukan insert ke databse dengan query dibawah ini
        
    }else{
        echo
        '<script>
        alert("Ga kepencet");
        window.history.back()
    </script>';
}