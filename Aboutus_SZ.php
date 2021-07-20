<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Aboutus_SZ.css">
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
                        <li><a class="Page_Active" href="Aboutus_SZ.php">ABOUTUS</a></li>
                        <li><a href="Login_SZ.php">LOGIN</a></li>
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
                <h1>Meet Our Team</h1>
            </div>
            <!-- content-meet -->

            <div class="content-teams">
                <div class="content-team-grid">

                    <div class="content-teams-items">
                        <img src="fronk_aboutus.jpg">
                        <h2>SAHARAT PENWIJIT</h2>
                        <p>60364997 Saharat Penwijit</p>
                        <div class="cr">
                            <a href="#">FRANCE</a>
                        </div>
                    </div>

                    <div class="content-teams-items">
                        <img src="nack_aboutus.jpg">
                        <h2>WIRAWAT MANPHUM</h2>
                        <p>60364492 Wirawat Manphum</p>
                        <div class="cr">
                            <a href="#">NACK</a>
                        </div>
                    </div>

                    <div class="content-teams-items">
                        <img src="ko_aboutus.jpg">
                        <h2>SORRAWICH YOOBOON</h2>
                        <p>60364942 Sorrawich Yooboon</p>
                        <div class="cr">
                            <a href="#">KO</a>
                        </div>
                    </div>

                </div>
                <!-- content-teams-grid -->
            </div>
            <!-- content-teams -->
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