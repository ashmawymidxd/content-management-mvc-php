<?php require VIEW."\\Dashboard\\layout\\header.php" ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4 " style="height:80vh">
        <a href="<?=URL.'/category/create'?>" class="btn btn-primary">create New Category</a>
        <div class="card rounded-0 my-3 p-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categorys as $category): ?>
                        <tr>
                            <td><?= $category['name'] ?></td>
                            <td><?= $category['description'] ?></td>
                            <td>
                                <a href="edit/<?= $category['id'] ?>" class="btn btn-primary">edit</a>
                                <a href="destroy/<?= $category['id'] ?>" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
    </div>
</main>

<?php require VIEW."\\Dashboard\\layout\\footer.php" ?>
