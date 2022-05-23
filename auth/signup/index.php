<?php
    $CURR_PATH = "../../";
    $PAGE_TITLE = " - Sign up";
    $navbarNotReq = true; 
    $EXTRAS = '';
    require_once $CURR_PATH."includes/header.php";
?>
<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                            <?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>

                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                        name="name" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Your Email</label>

                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                        name="email" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                        name="pass" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg"
                                        name="conf_pass" required />
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                        name="submit">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                        href="../login/index.php" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>