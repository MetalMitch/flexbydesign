<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexByDesign | Terms</title>
    <link rel="stylesheet" href="../css/main.min.css">
</head>
<body>
    <div class="nav" id="mainNav">
        <a href="#home" class="logo nohov"
            ><img src="../img/logo/full-land-color.png" alt="Flex By Design Logo"
        /></a>
        <!-- <a href="#locations"
            >Locations 
            <img src="img/icons/flexibility.svg" class="flexicon"></img
        ></a> -->
        <a href="http://flexbydesign.blog" target="_blank">Blog <!--<i class="fab fa-wordpress-simple"></i>--></a>
        <a href="../contact/">Get Started <!--<img src="img/icons/connection.svg" class="flexicon"></img
        >--></a>
        <a href="/faqs/">FAQs</a>
        <!-- <a href="#login">Log In <img src="img/icons/employee.svg" class="flexiconlrg"></img
        ></a> -->
        <a href="javascript:void(0);" class="icon nohov scroll" onclick="navBar()"
            ><i class="fas fa-bars"></i
        ></a>
    </div>
    <div class="content">
        <form action="sendmail.php" method="post" class="form">
            <label for="firstname">First Name</label><br>
            <input type="text" id="firstname" name="firstname" required="required"><br>
            <label for="lastname">Last Name</label><br>
            <input type="text" id="lastname" name="lastname" required="required"><br>
            <label for="email">Email Address</label><br>
            <input type="text" id="email" name="email" required="required"><br>
            <label for="more">More About You</label><br>
            <textarea name="more" id="more" required="required"></textarea><br>
            <label for="how">How did you hear about flex By Design?</label><br>
            <select id="how" name="how[]">
                <option selected disabled value="">-Please Select-</option>
                <option value="Contacted by Team">Contacted by Team</option>
                <option value="Word of Mouth">Word of Mouth</option>
                <option value="Facebook">Facebook</option>
                <option value="Twitter">Twitter</option>
                <option value="LinkedIn">LinkedIn</option>
                <option value="Instagram">Instagram</option>
                <option value="Google">Google</option>
            </select><br><br>
            <button type="submit" class="btn" name="action">Subscribe</button>
        </form>
    </div>
    <footer>
      <div class="footer-nav">
        <div><a href="../underconstruction/">About</a></div>
        <div><a href="../faqs/">FAQs</a></div>
        <div><a href="../contact/">Contact Us</a></div>
        <div><a href="../underconstruction/">Our Team</a></div>
        <div><a href="../underconstruction/">Locations</a></div>
        <div><a href="../terms-of-use/">Terms of Use</a></div>
        <div><a href="../underconstruction/">Community</a></div>
        <div><a href="../careers/">Careers</a></div>
        <div><a href="../privacy/">Privacy Policy</a></div>
      </div>
      <div class="footer-links">
        <div class="social">
          <a href="https://www.facebook.com/FlexByDesign/"
            ><i class="fab fa-facebook-f"></i
          ></a>
        </div>
        <div class="social">
          <a href="https://www.linkedin.com/company/flexbydesign"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div>
        <div class="social">
          <a href="https://www.instagram.com/flexbydesign"
            ><i class="fab fa-instagram"></i
          ></a>
        </div>
        <div class="social">
          <a href="https://twitter.com/FlexByDesign"
            ><i class="fab fa-twitter"></i
          ></a>
        </div>
        <div id="findus">Find Us On</div>
      </div>
      <div class="footer-bottom">
        <img src="../img/logo/full-land-white.png" alt="Flex By Design Logo" />
        <div>&copy; 2020 Flex By Design All rights reserved</div>
      </div>
    </footer>
    <script src="../js/navbar.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="https://kit.fontawesome.com/8c45af64ed.js"></script>
  </body>
</html>
