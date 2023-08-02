<?php 
include('functions/userfunctions.php');
if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in";
    header('location: index.php');
    exit();

}
include('includes/header.php')   ?>
    <div class="py-5">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-4">
                    <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-warning alert-dismissible fade show position:absolute;" role="alert" style="width:100%;">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                unset($_SESSION['message']);
                endif; ?>
            <div class="card shadow" style="background: #FFF;">
                <div class="card-header" style="background:#FFF;">
                    <h3 class="fw-bold text-center py-1">Login</h3>

                </div>
                <div class="card-body" style="height:400px;">
                        <form action="functions/authcode.php" method="POST" >
                                
                                <div class="mb-3 mt-2">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" style="height:60px;">
                                  
                                </div>
                                <div class="mb-3 mt-2">
                                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" style="height:60px;">
                                </div>
                                
                                
                               
                                <button type="submit" name="login_btn"  class="btn mx-auto d-block mt-5 fw-bold px-5" style="background: pink;height:60px;">Login</button>
                        </form>
                </div>
            </div>
                
        </div>
        </div>
        </div>
    </div>
<?php include('includes/footer.php')   ?>
