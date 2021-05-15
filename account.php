<?php 
$titel = "Tài Khoản";
include 'view/masster/head.php'; 
?>
    <div class="container">
        <?php require_once 'view/masster/menu.php'; ?>
    </div>
    <!-- ------------Account-page------------------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Đăng nhập</span>
                            <span onclick="register()">Đăng ký</span>
                            <hr id="Indicator">
                            <span style="color: red"><?php if (isset($err)) {
                                echo $err;
                            }; ?></span><span style="color: green"><?php if (isset($tc)) {
                                echo $tc;
                            } ?></span>
                        </div>

                        <form id="LoginForm" method="POST">
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="password" name="Password" placeholder="Password" >
                            <button type="submit" class="btn" name="Login">Login</button>
                            <a href="admin/index.php">Forgot password</a>
                        </form>

                        <form id="RegForm" method="POST">
                            <input type="text" name="Username" placeholder="Username" required>
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="password" name="Password" placeholder="Password" required>
                            <button type="submit" class="btn" name="Register">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------footer----------- -->

    
        <!-- ------------------- js for Account form-------------- -->

        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register() {
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";

            }
            function login() {
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }


        </script>

<?php include 'view/masster/footer.php'; ?>