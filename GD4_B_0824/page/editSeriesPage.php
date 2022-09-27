<?php
    include('../component/sidebar.php');
    // session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryEdit = mysqli_query($con, "SELECT * FROM series WHERE id='$id'");
    }
    $series = mysqli_fetch_assoc($queryEdit);
    $_SESSION['series'] = $series;
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>Edit Series</h4> 
        </div>
        <hr>
        <form method ="POST" action="../process/editSeriesProcess.php" class="form-group">
            <div class="row">
                <div class="form-group">
                    <label for="" class="formlabel">Name</label>
                    <?php
                        $var = $_SESSION['series']['name'];
                        echo
                            '<input type="text" class="form-control" id="changeSName" name="changeSName" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="changeSGenre[]" id="changeSGenre" multiple>
                        <option value="Romance">Romance</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Family">Family</option>
                    </select>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Year Realese</label>
                    <?php
                        $var = $_SESSION['series']['realese'];
                        echo
                            '<input type="text" class="form-control" id="changeSRealese" name="changeSRealese" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Episode</label>
                    <?php
                        $var = $_SESSION['series']['episode'];
                        echo
                            '<input type="number" class="form-control" id="changeSEpisode" name="changeSEpisode" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Season</label>
                    <?php
                        $var = $_SESSION['series']['season'];
                        echo
                            '<input type="number" class="form-control" id="changeSSeason" name="changeSSeason" value=' . $var . '>'
                    ?>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Synopsis</label>
                    <?php
                        $var = $_SESSION['series']['synopsis'];
                        echo
                            '<input type="text" class="form-control" id="changeSSynopsis" name="changeSSynopsis" value=' . $var . '>'
                    ?>
                </div>

                <div class="col gy-3">
                    <button class="btn btn-primary" type="submit" name="editSeries">Edit Series</button>
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