<?php
    $CURR_PATH = "../../";
    $PAGE_TITLE = " - Login";
    $navbarNotReq = true;
    $EXTRAS = '';
    require_once $CURR_PATH."includes/header.php";
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src=<?php echo $CURR_PATH."static/images/login.svg"?> alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                        </div>
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="username">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>