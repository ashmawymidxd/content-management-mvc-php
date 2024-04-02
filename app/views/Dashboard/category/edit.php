<?php require VIEW."\\Dashboard\\layout\\header.php" ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4" style="height:80vh">
    <div class="card p-3 rounded-0">
        <h2>update categorys</h2>
        <form action="<?=URL.'/category/updateCategory'?>" method="post">
            <input type="hidden" name="id" value="<?= $category[0]['id'] ?>">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $category[0]['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= $category[0]['description'] ?>">
            </div>
            <div class="btnons d-flex justify-content-between">
                <div class="left">
                    <button type="submit" class="btn btn-primary">Update</button>
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
