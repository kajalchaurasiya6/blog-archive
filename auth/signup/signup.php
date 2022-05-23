
  <?php
  session_start();
  // require_once(realpath(dirname(__FILE__) . '/config/db.php'));
  require_once('../../config/db.php');
  // include('./config/db.php');
  if (isset($_POST['submit'])) {
    if (
      isset(
        $_POST['name'],
        $_POST['email'],
        $_POST['pass'],
        $_POST['conf_pass'],
        $_POST['userpp'],
        $_POST['created_at']
      ) && !empty($_POST['name']) &&
      !empty($_POST['email']) && !empty($_POST['pass']) == !empty($_POST['conf_pass']) && !empty($_POST['created_at'])
    ) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $password = trim($_POST['conf_pass']);
      $userpp = trim($_POST['userpp']);
      $created = trim($_POST['created_at']);
      $hashpassword = password_hash($password, PASSWORD_BCRYPT);
      $date = date('Y-m-d H:i:s');
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = 'select * from members where email = :email';
        $stmt = $pdo->prepare($sql);
        $p = ['email' => $email];
        $stmt->execute($p);

        if ($stmt->rowCount() == 0) {
          $sql = "insert into members (user_name , user_pp , user_email, `password`, created_at) values(:name,:userpp,:email,:pass,:created_at)";

          try {
            $handle = $pdo->prepare($sql);
            $params = [
              ':name' => $Name,
              ':email' => $email,
              ':pass' => $hashPassword,
              ':created_at' => $date,
              ':userpp' => $userpp
            ];

            $handle->execute($params);

            $success = 'User has been created successfully';
          } catch (PDOException $e) {
            $errors[] = $e->getMessage();
          }
        } else {
          $valFirstName = $name;
          $valEmail = '';
          $valPassword = $password;

          $errors[] = 'Email address already registered';
        }
      } else {
        $errors[] = "Email address is not valid";
      }
    } else {
      if (!isset($_POST['name']) || empty($_POST['name'])) {
        $errors[] = ' username is required';
      } else {
        $valName = $_POST['name'];
      }

      if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors[] = 'Email is required';
      } else {
        $valEmail = $_POST['email'];
      }

      if (!isset($_POST['pass']) || empty($_POST['pass'])) {
        $errors[] = 'Password is required';
      }
      elseif($_POST['pass'] != $_POST['conf_pass']){
       $errors[] = 'confirm password should be same as password';
      }
       else {
        $valPassword = $_POST['pass'];
      }
    }
  }
  ?>
  <!-- TODO -->
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
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
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>

                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pass" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="conf_pass" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">user-pp:</label>
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="userpp" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">created-at:</label>
                    <input type="datetime-local" id="form3Example3cg" class="form-control form-control-lg" name="created_at" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="../login/index.php" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>