<?php require VIEW."\\Dashboard\\layout\\header.php" ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4" style="height:80vh">
    <div class="card p-3 rounded-0">
        <h2>add new categorys</h2>
        <form action="<?=URL.'/category/store'?>" method="post">
            <div class="mb-3">
                <p class="text-warning"><?= $_SESSION['error'][0]?></p>
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <p class="text-warning"><?= $_SESSION['error'][1]?></p>
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="btnons d-flex justify-content-between">
                <div class="left">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary mx-3">Reset</button>
                </div>
                <div class="right">
                    <button type="button" class="btn btn-danger" onclick="window.history.back()" >cancel</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</main>

<?php require VIEW."\\Dashboard\\layout\\footer.php" ?>
