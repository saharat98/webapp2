<?php
  session_start();
 ?>
<?php

   require('Back_Connection.php');
   //------------------------------รับข้อมูล Log In จากผู้ใช้------------------------------
   $customer_id = mysqli_real_escape_string($con,$_POST['customer_id']);
   $customer_pass = mysqli_real_escape_string($con,$_POST['customer_pass']);
   $customer_pass = md5($customer_pass);

   $sql = "SELECT * FROM signup WHERE customer_id=? AND customer_pass=?";
   $stmt = mysqli_prepare($con,$sql);
   mysqli_stmt_bind_param($stmt,"ss",$customer_id,$customer_pass);
   mysqli_execute($stmt);
   $result_user = mysqli_stmt_get_result($stmt);
   if($result_user->num_rows == 1){
     session_start();
     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
     $_SESSION['name'] = $row_user['name'];
     header("Location:ShopOnline_Index.php");
   }else?>
     <script>
     alert("Username or Password is INCORRECT!!!");
     </script>
     <a href="ShopOnline_Login.php">Click here to return to Log In</a>
   <?php}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Login_SZ.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetZero_MainMenu</title>
</head>
<body>
    <header>

        <div class="hamburger" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <nav>
            <div class="container">

                <div class="nav-grid">
                    <div class="logo">
                        <h1>SETZERO</h1>
                        <span>We LOVE Pet </span>
                    </div>
                    <ul class="menu">
                        <li><a href="MainMenu_SZ.php">HOME</a></li>
                        <li><a href="AD_SZ.php">ADOPT</a></li>
                        <li><a href="TC_SZ.php">TAKECARE</a></li>
                        <li><a href="Aboutus_SZ.php">ABOUTUS</a></li>
                        <li><a class="Page_Active" href="Login_SZ.php">LOGIN</a></li>
                        <li><a href="Register_SZ.php">REGISTER</a></li>
                         <li><a href="Profile_SZ.php">Profile</a></li>

                    </ul>
                </div>
            </div>
            <!-- END NAV GRID -->
        </nav>
        <!-- END NAV -->
    </header>
    <!-- END HEADER -->
    <section class="content">
        <div class="container">

            <div class="content-meet">
                <h1>Login</h1>
            </div>
            <div class="content-login">
                <div class="content-login-grid">
                    <div class="content-login-items">
                        <i class="fa fa-user-circle" aria-hidden="true"></i><br>
                        <span>USERNAME</span><br>
                        <input type="text" placeholder="username"><br>
                        <span>PASSWORD</span><br>
                        <input type="text" placeholder="password"><br>
                    </div>
                </div>
            </div>
            <!-- content-Login -->

        </div>
        <!-- container -->
    </section>
    <!-- content -->

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-items">
                        <h3>From The Blog</h3>
                        <h4>ขั้นตอนการใช้งาน</h4>
                        <span class="admin"><a href="#">Admin</a> พวกเรา SETZERO</span><br>
                        <span class="date">Wednesday,1th April 2020</span>
                        <p>สมัครสมาชิกและเข้าสู่ระบบเพื่อเข้าใช้งานเว็บไซต์ โพสต์เพื่อหาสัตว์เลี้ยงที่ต้องการดูแลหรือต้องการฝากเลี้ยงสัตว์เลี้ยง
                        แสดงความคิดเห็นเกี่ยวกับการรับเลี้ยงหรือฝากเลี้ยงและติดต่อกัน รับสัตว์เลี้ยงหรือฝากเลี้ยงได้เลยตามที่ติดต่อกันไว้!!!</p>
                        <a href="MainMenu_SZ.php">ดูเพิ่มเติม >></a>
                </div>
                
                <div class="footer-items">
                    <h3>Quick Liks</h3>
                    <ul>
                        <li><a href="MainMenu_SZ.php">Mainmenu</a></li>
                        <li><a href="MainMenu_SZ.php">Home</a></li>
                        <li><a href="AD_SZ.php">Adopt</a></li>
                        <li><a href="TC_SZ.php">Takecare</a></li>
                        <li><a href="Aboutus_SZ.php">Aboutus</a></li>
                        <li><a href="Login_SZ.php">Login</a></li>
                        <li><a href="Register_SZ.php">Register</a></li>
                    </ul>
                </div>

                <div class="footer-items">
                    <h3>ข่าวล่าสุด</h3>
                    <p><a href="#">ยอดผู้ป่วยติดเชื้อโควิด-19 </a>ทั่วโลกตาย 3.7 หมื่นศพติดเชื้อโควิด ระบาดไปทั่ว 60 กว่าจังหวัดของไทย</p>
                    <p><a href="#">เด็กเสียชีวิต</a>สลด เด็กชายวัย 13 ปีเสียชีวิตเพราะโควิด-19 อายุน้อยสุดในอังกฤษ</p>
                </div>

                <div class="footer-items">
                    <h3>Contact us</h3>
                    <form action="">
                        <input type="text" name="username" placeholder="Full name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer -->

    <div class="copyright">
        <div class="container">
            <div class="copyright-grid">
                <div class="copytext">
                    <p>MADE BY Wirawat,Sorrawich,Saharat</p>
                </div>
                <div class="credits">
                    <p>@SETZERO</p>
                </div>
            </div>
        </div>
    </div>

    <script src="MainMenu_Jquery_SZ.js"></script>
    <script src="MainMenu_Script_SZ.js"></script>
</body>
</html>