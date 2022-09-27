<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['editSeries'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        session_start();
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di editProfilePage.php disetiap input
        $genre = $_POST['changeSGenre'];
        $realese = $_POST['changeSRealese'];
        $name = $_POST['changeSName'];
        $episode = $_POST['changeSEpisode'];
        $season = $_POST['changeSSeason'];
        $synopsis = $_POST['changeSSynopsis'];
        // $data = mysqli_query($con,"select * from users where phonenum like '%".$phonenum."%'");
        // $data2 = mysqli_query($con,"select * from users where email like '%".$email."%'");
        // $membership = $_POST['changeMembership'];

        foreach($genre as $gen){
            $resultGen .= $gen.", ";
        }

        $query = mysqli_query($con,
            "UPDATE series 
            SET name = '$name', genre = '$resultGen', realese = '$realese', episode = '$episode', season = '$season', synopsis = '$synopsis'
            WHERE id = ".$_SESSION["series"]["id"]);
            
        if($query){
            $takeData = mysqli_query($con, "SELECT * FROM series WHERE id = ".$_SESSION['series']['id']);
            $series = mysqli_fetch_assoc($takeData);
            $_SESSION['series'] = $series;
            echo
                '<script>
                alert("Update Series Success");
                window.location = "../page/listSeriesPage.php"
                </script>';
        }else{
            echo
            '<script>
                alert("Update Series Failed");
                </script>';
        }
    }else{
        echo
        '<script>
        window.history.back()
    </script>';
}