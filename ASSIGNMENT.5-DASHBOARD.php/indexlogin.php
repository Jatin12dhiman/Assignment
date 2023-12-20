    <?php
    include "header.php";
  include("config/config.php");


    ?>
    <div class="container">
        <div class="left">
            <img src="images/storysetpik.png" alt="">
            </div>
        
        <div class="right">
            <!-- <div class="logincard"> -->
        
                   <form  class="logincard">
                    <h1>Login</h1>
                    <h3>Welcome Back!Log in to your account</h3>
                <div class="email">
                    <h2><label for="email">Email</label></h2>
                    <input type="email" name="email" placeholder="example@gmail.com" id="email"><br>
                </div>
                <div class="email">
                    <h2><label for="password">Password</label></h2>
                        <input type="password" name="password" placeholder="Enter Your Password" id="email"><br>
                </div>
                   <div><input type="checkbox" name="Remember me" id=""><label for="Remember me" > Remember me &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </label><a href="https://www.google.com" id="forp">Forget Password?</a></div>
                    <button id="button"><b>Sign In</b></button>
                <h3 id="sign"><a href="#" id="sign">Sign In With</a></h3>
                <h3>Don't have account?<a href="https://www.google.com" id="creat">Create Account</a></h3>
                
                </form>
            <!-- </div> -->
            
            </div>
        </div>
        <?php
        include "footer.php"
        ?>

        <!-- 1.header.php
        2.footer.php
        3.config/config.php
        4.assets folder
        5.admin folder
        6.admin/dashboard.php
        8.admin/role_manage.php
        7.admin/role.php/ table
        9.admin/employee.php
        10.admin/employee_name.php
         -->
    
    

    
