<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>ADD MOVIE</h4>
            <a href="../page/listMoviesPage.php"><i class="fa-solid fa-arrow-left" style="color: black">back</i></a>
        </div>
        <hr>
        <form method ="POST" action="../process/addMoviesProcess.php" class="form-group">
            <div class="row">
                <div class="form-group">
                    <label for="" class="formlabel">Name</label>
                    <input type="text" class="form-control" id="nameMovie" name="nameMovie">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genreMovie" id="genreMovie">
                        <option value="Horror">Horror</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Family">Family</option>
                    </select>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Realese</label>
                    <input type="text" class="form-control" id="realeseMovie" name="realeseMovie">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Season</label>
                        <input type="text" class="form-control" id="seasonMovie" name="seasonMovie">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Synopsis</label>
                    <input type="text" class="form-control" id="synopsisMovie" name="synopsisMovie">
                </div>
                <div class="col gy-3">
                    <button class="btn btn-primary" type="submit" name="addMovie">Add Movie</button>
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