<?php include 'php/login_form_handler.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login | Food Waste Management System</title>
    <?php require 'links.php'; ?>

</head>

<body>
    <script>
        swal({
            title: "Good job!",
            text: "<?php echo $_SESSION['alert']; ?>",
            // text: "Login Creadentials :",
            // text: "Email: " + "<?php echo $_SESSION['email']; ?>",
            // text: "Password: " + "<?php echo $_SESSION['password']; ?>",
            icon: "success",
            button: "Ok",
        });
    </script>
    <!-- Header -->
    <header>
        <?php include'navbar.php'; ?>
    </header>

    <!-- Main -->
    <main>

        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-2">
                        <div class="row g-0">

                            <div class="col-xl-8">
                                <div class="card-body p-md-5 text-black">
                                    <h2 class="mb-4 ms-3 fw-bolder heading">Log In</h2>
                                    <form action="" method="post">



                                        <!-- <div class="form-outline mb-4 ps-3 pt-3">
                                            <label class="form-label" for="type">Login Type</label>
                                            <?php
                                            // require_once 'php/dbconfig.php';

                                            // $query = "SELECT name,id FROM users ORDER BY ID DESC LIMIT  0,6";
                                            // $result = mysqli_query($conn, $query) or die(mysqli_error($conn) . "[" . $query . "]"); 
                                            ?>

                                            <select name="categories">
                                                <?php //while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value=" <?php //$row['path']; 
                                                                ?> ">
                                                    <?php //echo $row['name']; 
                                                    ?>
                                                </option>
                                                <?php
                                                //}
                                                ?>
                                            </select>?>
                                            <div class="text-danger">

                                                <?php //if (in_array("Email already in use", $error_array)) echo "Email already in use";
                                                ?>
                                            </div>
                                        </div> -->

                                        <div class="form-outline mb-4 ps-3 pt-3">
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" value="<?php if (isset($_SESSION['email'])) {
                                                                                                                                            echo $_SESSION['email'];
                                                                                                                                        } ?>" required />
                                            <label class="form-label" for="email">Email Id</label>
                                            <div class="alert alert-danger" role="alert">

                                                <?php if (in_array("Email or password was incorrect", $error_array)) echo "Email or password was incorrect";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 ps-3 pt-3">
                                            <input type="password" id="password" class="form-control form-control-lg" name="log_password" value="" required />
                                            <label class="form-label" for="password">Password</label>
                                            <div class="alert alert-danger" role="alert">
                                                <?php if (in_array("Email or password was incorrect", $error_array)) echo "Email or password was incorrect"; ?>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-dark btn-lg capsule-btn">Reset
                                                all</button>
                                            <button type="submit" class="btn btn-primary btn-lg ms-2 capsule-btn" name="log_button">Login Now</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <img src="images/login-right.jpg" style="height: 100vh;" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->


</body>

</html>