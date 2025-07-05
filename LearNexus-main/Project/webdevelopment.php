<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_content.css">
</head>

<body>
    <div class="h1">
        <img src="LearNexus-removebg-preview.png" alt="logo" id="logo">
        <?php
        // Start the session
        session_start();
        
        // Check if the user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // If logged in, redirect to majorproj.html
            echo '<a href="majorproj.html"><button>Home</button></a>';
        } else {
            // If not logged in, redirect to minorproj.html
            echo '<a href="minorproj.html"><button>Home</button></a>';
        }
        ?>
    </div>

    <div class="bdy">
        <div class="lftmrgn">
            <ul>
                <a href="#" class="active" id="active">
                    <li id="subsc">
                        <p style="font-size:30px"> 🧾INDEX🧾</p><span id="boom"><img src="pen.png" width="30" height="40"></span>
                    </li>
                </a>
                <a href="#" class="active" id="active">
                    <li>Web Development</li>
                </a>
                <a href="#" class="active" id="active">
                    <li> HTML</li>
                </a>
                <a href="#" class="active" id="active">
                    <li>CSS</li>
                </a>
                <a href="#" class="active" id="active">
                    <li>JavaScript</li>
                </a>
                <a href="#" class="active" id="active">
                    <li> PHP</li>
                </a>
                <a href="#" class="active" id="active">
                    <li>SQL</li>
                </a>
                <a href="#" class="active" id="active">
                    <li>Bootstap Basics</li>
                </a>
            </ul>
        </div>

        <div class="cntnt">
            <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0"> What is Web Development</span>


            Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites.
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20231205165904/web-development-image.webp" alt="" id="frstpic">

            The word Web Development is made up of two words, that is:
            <ul>
                <li><span style="font-weight: 600;">Web:</span>It refers to websites, web pages or anything that works over the internet.</li>
                <li><span style="font-weight: 600;">Development:</span>It refers to building the application from scratch.</li>
            </ul>
            Web Development can be classified into two ways:
            <ul>
                <li id="scndlst">Front-End Development</li>
                <li id="scndlst"> Back-End Development</li>
            </ul>

            <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0"> Front-End Development</span>
            The part of a website where the user interacts directly is termed as front end. It is also referred to as the ‘client side’ of the application.<br>
            <!-- section 2-->
            <div class="sec2">
                <div class="hdng1">Frontend Roadmap</div>
                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20220825163009/Front-End-Frameworks-and-Libraries1.png" alt="">
                <div class="hdng1">Popular Frontend Technologies</div>
                <ul>
                    <li><a href="#"><span style="font-weight: 600; color:#2c7da0">HTML:</span></a> HTML stands for HyperText Markup Language. It is used to design the front end portion of web pages using markup language. It acts as a skeleton for a website since it is used to make the structure of a website.</li>
                    <li><a href="#"><span style="font-weight: 600; color:#2c7da0">CSS:</span></a>Cascading Style Sheets fondly referred to as CSS is a simply designed language intended to simplify the process of making web pages presentable. It is used to style our website.</li>
                    <li><a href="#"><span style="font-weight: 600; color:#2c7da0">JavaScript:</span></a>JavaScript is a scripting language used to provide a dynamic behavior to our website.</li>
                    <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Bootstrap:</span></a> Bootstrap is a free and open-source tool collection for creating responsive websites and web applications. It is the most popular CSS framework for developing responsive, mobile-first websites. Nowadays, the websites are perfect for all browsers (IE, Firefox, and Chrome) and for all sizes of screens (Desktop, Tablets, Phablets, and Phones). </li>
                </ul>

                <!-- third section-->
                <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0"> Back-End Development</span>
                Backend is the server side of a website. It is part of the website that users cannot see and interact with. It is the portion of software that does not come in direct contact with the users. It is used to store and arrange data.
                <div class="sec2">
                    <div class="hdng1">Backend Roadmap</div>
                    <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210309162115/Backend-design-roadmap.jpeg" alt="">
                    <div class="hdng1">Popular Frontend Technologies</div>
                    <ul>
                        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">PHP:</span></a> PHP is a server-side scripting language designed specifically for web development.</li>
                        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Java:</span></a>Java is one of the most popular and widely used programming languages. It is highly scalable.</li>
                        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Python:</span></a> Python is a programming language that lets you work quickly and integrate systems more efficiently.</li>
                        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Node.Js:</span></a> Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside a browser. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
