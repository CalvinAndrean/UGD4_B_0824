<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['editProfile'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di editProfilePage.php disetiap input
        $email = $_POST['changeEmail'];
        $password = password_hash($_POST['changePass'], PASSWORD_DEFAULT);
        $name = $_POST['changeName'];
        $phonenum = $_POST['changePNum'];
        echo
            '<script>
            alert("name : ") '.$name.
            '</script>';
        // $data = mysqli_query($con,"select * from users where phonenum like '%".$phonenum."%'");
        // $data2 = mysqli_query($con,"select * from users where email like '%".$email."%'");
        // $membership = $_POST['changeMembership'];
        session_start();

        $query = mysqli_query($con,
            "UPDATE users 
            SET name = '$name', email = '$email', password = '$password', phonenum = '$phonenum', job = '$job'
            WHERE id = ".$_SESSION["user"]["id"]);
            
        if($query){
            $takeData = mysqli_query($con, "SELECT * FROM users WHERE id = ".$_SESSION['user']['id']);
            $user = mysqli_fetch_assoc($takeData);
            $_SESSION['user'] = $user;
            echo
                '<script>
                alert("Update Profile Success");
                window.location = "../page/profile.php"
                </script>';
        }else{
            echo
            '<script>
                alert("Update Profile Failed");
                </script>';
        }
    }else{
        echo
        '<script>
        window.history.back()
    </script>';
}