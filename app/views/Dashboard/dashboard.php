<?php require VIEW."\\Dashboard\\layout\\header.php" ?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4 " style="height:80vh">
       <div class="row">
            <div class="col-md-3">
                <div class="card shadow-2-strong my-3 rounded-0 bg-warning" >
                    <div class="card-body">
                        <div class="d-flex align-items-center text-white">
                            <i class="fas fa-tachometer-alt fa-fw me-3 fa-2xl"></i>
                            <p class="text-uppercase mb-2"><strong>Category</strong></p>
                        </div>
                        <hr />
                        <p class="text-white">
                            <strong>
                              All Category 
                            </strong>
                            <?= $categoryCount?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-2-strong my-3 rounded-0 bg-dark" >
                    <div class="card-body">
                         <div class="d-flex align-items-center text-white">
                            <i class="fas fa-tachometer-alt fa-fw me-3 fa-2xl"></i>
                            <p class="text-uppercase mb-2"><strong>Category</strong></p>
                        </div>
                        <hr />
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-2-strong my-3 rounded-0 bg-danger" >
                    <div class="card-body">
                         <div class="d-flex align-items-center text-white">
                            <i class="fas fa-tachometer-alt fa-fw me-3 fa-2xl"></i>
                            <p class="text-uppercase mb-2"><strong>Category</strong></p>
                        </div>
                        <hr />
                  
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-2-strong my-3 rounded-0 bg-info" >
                    <div class="card-body">
                         <div class="d-flex align-items-center text-white">
                            <i class="fas fa-tachometer-alt fa-fw me-3 fa-2xl"></i>
                            <p class="text-uppercase mb-2"><strong>Category</strong></p>
                        </div>
                        <hr />
                   
                    </div>
                </div>
            </div>
       </div>
    </div>
</main>

<?php require VIEW."\\Dashboard\\layout\\footer.php" ?>
