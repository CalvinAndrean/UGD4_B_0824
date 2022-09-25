<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>Profile</h4> 
        </div>
        <hr>
        <form action="" class="form-group">
            <div class="row">
                <div class="form-group">
                    <label for="" class="formlabel">Name</label>
                    <?php
                        $var = $_SESSION['user']['name'];
                        echo
                            '<input type="text" class="form-control" id="changeName" name="changeName" disabled value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Email</label>
                    <?php
                        $var = $_SESSION['user']['email'];
                        echo
                            '<input type="email" class="form-control" id="changeEmail" name="changeEmail" disabled value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Password</label>
                        <?php
                        $var = $_SESSION['user']['password'];
                        echo
                            '<input type="password" class="form-control" id="changePass" name="changePass" disabled placeholder=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Phone Number</label>
                    <?php
                        $var = $_SESSION['user']['phonenum'];
                        echo
                            '<input type="text" class="form-control" id="changePNum" name="changePNum" disabled value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Job</label>
                    <?php
                        $var = $_SESSION['user']['job'];
                        echo
                            '<input type="text" class="form-control" id="changeJob" name="changeJob" disabled placeholder=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Membership</label>
                    <?php
                        $var = $_SESSION['user']['membership'];
                        echo
                            '<input type="text" class="form-control" id="changeMembership" name="changeMembership" disabled placeholder=' . $var . '>'
                    ?>
                </div>
            </div>
        </form>
            </tbody>
        </table>
    </div>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    </body>
</html>