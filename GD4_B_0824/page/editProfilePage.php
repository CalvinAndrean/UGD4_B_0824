<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>Edit Profile</h4> 
        </div>
        <hr>
        <form method ="POST" action="../process/editProfileProcess.php" class="form-group">
            <div class="row">
                <div class="form-group">
                    <label for="" class="formlabel">Name</label>
                    <?php
                        $var = $_SESSION['user']['name'];
                        echo
                            '<input type="text" class="form-control" id="changeName" name="changeName" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Email</label>
                    <?php
                        $var = $_SESSION['user']['email'];
                        echo
                            '<input type="email" class="form-control" id="changeEmail" name="changeEmail" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Password</label>
                        <input type="pass" class="form-control" id="changePass" name="changePass">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Phone Number</label>
                    <?php
                        $var = $_SESSION['user']['phonenum'];
                        echo
                            '<input type="text" class="form-control" id="changePNum" name="changePNum" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Job</label>
                    <select class="form-select" aria-label="Default select example" name="changeJob" id="changeJob">
                        <option value="Student">Student</option>
                        <option value="College Student">College Student</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Membership</label>
                    <?php
                        $var = $_SESSION['user']['membership'];
                        echo
                            '<input type="text" class="form-control" id="changeMembership" name="changeMembership" disabled placeholder=' . $var . '>'
                    ?>
                </div>
                <div class="col gy-3">
                    <button class="btn btn-primary" type="submit" name="editProfile">Edit Profile</button>
                </div>
            </div>
        </form>
    </div>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    </body>
</html>