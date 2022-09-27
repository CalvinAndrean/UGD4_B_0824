<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="body d-flex justify-content-between">
            <h4>ADD SERIES</h4>
            <a href="../page/listSeriesPage.php"><i class="fa-solid fa-arrow-left" style="color: black">back</i></a>
        </div>
        <hr>
        <form method ="POST" action="../process/addSeriesProcess.php" class="form-group">
            <div class="row">
                <div class="form-group">
                    <label for="" class="formlabel">Name</label>
                    <input type="text" class="form-control" id="nameSeries" name="nameSeries">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genreSeries[]" id="genreSeries" multiple>
                        <option value="Romance">Romance</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Family">Family</option>
                    </select>
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Year Realese</label>
                    <input type="text" class="form-control" id="realeseSeries" name="realeseSeries">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Episode</label>
                        <input type="number" class="form-control" id="episodeSeries" name="episodeSeries">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Season</label>
                        <input type="number" class="form-control" id="seasonSeries" name="seasonSeries">
                </div>

                <div class="form-group gy-3">
                    <label for="" class="formlabel">Synopsis</label>
                    <input type="text" class="form-control" id="synopsisSeries" name="synopsisSeries">
                </div>
                <div class="col gy-3">
                    <button class="btn btn-primary" type="submit" name="addSeries">Add Series</button>
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