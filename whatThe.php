<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylish.css">
    <link rel = "icon" href = "public/images/half-sun-svgrepo-com.ico" type = "image/x-icon">
    <title>Sunny Smart Farm</title>
</head>
<body>
    <div class="crown">
        <div id="crownLogo">
            <svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" fill="currentColor" class="bi bi-brightness-alt-high" viewBox="0 0 16 16" padding="1vw" style="filter: drop-shadow(10px 5px 4px #5a554b);">
                <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4zm0 1a3 3 0 0 1 2.959 2.5H5.04A3 3 0 0 1 8 8z"/>
            </svg>
            <h1>Sunny smart farm</h1>
        </div>
        <div id="crownPages">
            <a href="index.html" id="whitePages">Home</a>
            <a href="dashboard.html" id="whitePages">SmartFarm IOT Dashboard</a>
            <a href="store.html" id="whitePages">Store</a>
            <a href="article.html" id="whitePages">Article</a>
            <svg id="whitePages"
              width="24px"
              height="24px"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z"
                fill="currentColor"
              />
              <path
                d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z"
                fill="currentColor"
              />
              <path
                d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
                fill="currentColor"
              />
            </svg>
            <h2 id="login" onclick="popupLogin()"></h2>


        </div>
    </div>
    <div class="headBanner">
        <svg xmlns="http://www.w3.org/2000/svg" width="20%" height="20%" fill="currentColor" class="bi bi-brightness-alt-high" viewBox="0 0 16 16" padding="1vw" id="textShade"style="filter: drop-shadow(10px 5px 4px #5a554b);">
            <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4zm0 1a3 3 0 0 1 2.959 2.5H5.04A3 3 0 0 1 8 8z"/>
        </svg>
        <h1 id="textShade">Sunny smart farm official website</h1>
    </div>
    <div class="anno">
        <div id="pointer"><h1 id="center">ประชาสัมพันธ์</h1> </div>
        <div id="what">.</div>
    </div>
    <div id="pointer"><div id="ORpointer"><h1 id="center">บทความเกษตร</h1></div></div>
    <div class="stuff">    
        <div id="topics">
            <img src="public/images/farmtutorial.jpg" alt=""class="pager" onclick="reArt()">
            <div style="align-self: center;display: flex;">พื้นฐาน smart farm <br>
                สิ่งสำคัญในการทำ smartfarm 
                ทั้งsoftware และ hardware 
                รวมถึงการดูแลระบบโดยรวม</div>
        </div>
        <div id="topics">
            <img src="public/images/dash2.jpg" alt=""class="pager" onclick="reArt()">
            <div style="align-self: center;display: flex;">dashboard ตรวจสถานะ <br>
                เรียนรู้การจัดทำdashboard 
                เพื่อติดตามสถานะของพืช
                ผ่านเพจ smartFarmIOT</div>
        </div>
        <div id="topics">
            <img src="public/images/dash.png" alt=""class="pager" onclick="reArt()">
            <div style="align-self: center;display: flex;flex-wrap: wrap;">โดรนทางการเกษตร <br>
                การประยุกต์โดรนเพื่อการเกษตร
                และการดูแลพืชผล</div>
        </div>
    </div>
    <div id="pointer"><div id="ORpointer"><h1 id="center">Smart Farm</h1></div></div>
    <div class="stuff" >
        <div id="topics" onclick="reIOT()">
            <img src="public/images/dash.png" alt=""class="pager" style="filter:invert(1);">
            <div class="pager" style="background: rgb(14, 107, 179);opacity: 0.3;position: absolute;top: 1620px"></div>
            <h1 style="position: relative;bottom: 50%;color: white;align-content: center;">SmartFarmIOT <br>dashboard page</h1>
        </div>
        <div id="topics" onclick="reStore()">
            <img src="public/images/sell.png" alt=""class="pager" >
            <div class="pager" style="background: orangered;opacity: 0.5;position: absolute;top: 1615px"></div>
            <h1 style="position: relative;bottom: 50%;color: white;">ร้านค้าอุปกรณ์ <br>IOT Smartfarm</h1>
        </div>
    </div>

    <div class="loginForm">
        <form action="whatThe.php" method="get">
            <h1>Login</h1>
            <input type="text" name="Username" placeholder="Username" required>
            <input type="text" name="Password" placeholder="Password" required>
            <div style="display: flex;flex-direction: row; padding: 10px;">
                <input type="checkbox" id="remember" label="Remember password?">
                <label for="remember">Remember password</label>
            </div>
                <input type="submit" title="submit">
            <h2 style="padding-top: 20px;">dont have an account? <a onclick="switcher()">Register</a></h2>
            <h4 onclick="closeAll()">close page</h4>
        </form>
    </div>
    <div class="regForm">
        <form action="#">
            <h1>Register</h1>
            <input type="text" name="Username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="email" name="email" placeholder="Email" required>
            
                <input type="submit" title="submit">
            <h2 style="padding-top: 20px;">already have an account? <a onclick="switcher()">Login</a></h2>
            <h4 onclick="closeAll()">close page</h4>
        </form>
    </div>

    <div class="copyright">
        Copyright © 2022 CE KMITL. All Rights Reserved.
    </div>
    <?php
        $User = array("Login");
        echo $User[0];
        echo $Username;
    ?>
</body>
<script src="mario.js"></script>
</html>