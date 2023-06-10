<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Card design</title>
    <style>

      form {
        background-color: #4654e1;
        width: 800px;
        height: 44px;
        border-radius: 5px;
        display:flex;
        flex-direction:row;
        align-items:center;
      }

      input {
        all: unset;
        font: 16px system-ui;
        color: #fff;
        height: 100%;
        width: 100%;
        padding: 6px 10px;
      }

      ::placeholder {
        color: #fff;
        opacity: 0.7; 
      }

      #svg {
        color: #fff;
        fill: currentColor;
        width: 24px;
        height: 24px;
        padding: 10px;
      }

      button {
        all: unset;
        cursor: pointer;
        width: 44px;
        height: 44px;
      }
    </style>

</head>

<body>

    <div class="container">

        <nav>
            <img class="logo" src="images/main-logo.png" alt="logo">

            <ul>

                <li><a href="#">product</a></li>
                <li><a href="#">special navigaton</a></li>
                <li><a href="#">resources</a></li>
                <li><a href="#">register/login</a></li>

            </ul>

            <div class="icon">

                <a href="#"><img src="images/bell-fill.svg" alt="bell"></a>
                <a href="#"><img src="images/cart4.svg" alt="cart"></a>

            </div>

        </nav>


        <div class="topic">
      
            <img src="images/person-circle.svg" alt="user-logo">
            <h2>Account</h2>
            <div>
            <form role="search" id="form">
                <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
                <button>
                    <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
                </button>
                </form>
                <script>
                const f = document.getElementById('form');
                const q = document.getElementById('query');
                const google = 'https://www.google.com/search?q=site%3A+';
                const site = 'pagedart.com';

                function submitted(event) {
                    event.preventDefault();
                    const url = google + site + '+' + q.value;
                    const win = window.open(url, '_blank');
                    win.focus();
                }

                f.addEventListener('submit', submitted);
                </script>
            </div>

        </div>
 

        <div class="card-content">


            <div class="card">
                <div class="card-image1">
                    <h3>Get help with an item<br>that has not arrived</h3>
                    <p>If the seller doesn't ship the product within the time frame promised when you brought it
              ,you can cancel the order.if you never received your order and the charge appears on your
                ceditcard statements,you can dispute it as a builling error.</p>
                    <a href="#">Read more</a>
                </div>
            </div>


            <div class="card">
                <div class="card-image2">
                    <h3>Return an item for <br> refund</h3>
                    <p>Select the item you want to return,and choose an option from the 
                 Reason for return menu.Choose how to process your return.Choose to issue 
                a refund or replacement ,if applicable.</p>
                    <a href="#">Read more</a>
                </div>
            </div>


            <div class="card">
                <div class="card-image3">
                    <h3>Ask to step in and<br>help for buyers</h3>
                    <p>How to ask us to step in Find the item in your Purchases. Select See request 
                    details (if your item didn't arrive) or See return details (if you're trying to return an item). 
                     Select Ask eBay to step in and help. Select a reason from the dropdown menu, 
                    then select Confirm. Go to Purchases</p>
                    <a href="#">Read more</a>
                </div>
            </div>


            <div class="card">
                <div class="card-image4">
                    <h3>Check the status of<br>Your request</h3>
                    <p>This is perhaps the best way to go about getting those pesky status updates and is a 
                     standard practice in business communication. It's simple, straightforward, and doesn't 
                     involve sending an essay-length email. "Can you please update me?"</p>
                    <a href="#">Read more</a>
                </div>
            </div>


            <div class="card">
                <div class="card-image5">
                    <h3>Appeal the outcome<br>of a chase as a buyer</h3>
                    <p>Appeal the outcome of a case as a buyer. Information you may need when appealing. 
                    How to appeal a decision. If you don't agree with our resolution when we've 
                    stepped in to help </p>
                    <a href="#">Read more</a>
                </div>
            </div>


            <div class="card">
                <div class="card-image6">
                    <h3>Return shipping for<br>buyers</h3>
                    <p>There are several ways you can send an item back to the seller. If the seller is 
                    responsible for the return shipping costs, they'll let you know</p>
                    <a href="#">Read more</a>
                </div>
            </div>


        </div>

        <div class="wetchat">

            <a href="#">

                <img src="images/wechat.svg" alt="wechat">

                <div class="help-desk">

                    <h2>Need More Help</h2>
                    <h4>Contact Us</h4>
                    <p>Get the help you need from our automated assistment <br> or contact an agent</p>

                </div>

            </a>

        </div>

        <div class="footer">

            <div class="footer-item">

                <ul>
    
                    <li><a href="#">Site map</a></li>
                    <li><a href="#">Security center</a></li>
                    <li><a href="#">Annoucment</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">F & Q</a></li>
    
                </ul>
    
                <div class="footer-icon">
    
                    <a href="#"><img src="images/google.svg" alt="google"></a>
                    <a href="#"><img src="images/instagram.svg" alt="instagram"></a>
                    <a href="#"><img src="images/twitter.svg" alt="twitter"></a>
                    <a href="#"><img src="images/facebook.svg" alt="facebook"></a>
    
                </div>
    
            </div>
    
            <footer>Copyright © 1995-2023 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Payments Terms of Use, Cookies, Your Privacy Choices and AdChoice</footer>
    

        </div>
        
</body>

</html>