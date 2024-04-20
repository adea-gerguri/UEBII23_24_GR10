<header>   
    <nav>
    <h1 style="margin-left: 100vh; position:absolute;margin-top: 10px;">RHAE</h1>
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><i class="bi bi-list"></i></a></li>
        <li>MEN</li>
            <li><a href="../MenPage/menSweaters.php">SWEATERS</a></li>
            <li><a href="../MenPage/menTshirts.php">T SHIRTS</a></li>
            <li><a href="../MenPage/menShoes.php">SHOES</a></li>
            <li><a href="../MenPage/menPants.php">PANTS</a></li>
            <BR></BR>
        <li>WOMEN</li>
        <li><a href="../WomanPage/dress.php">DRESS</a></li>
        <li><a href="../WomanPage/bags.php">BAGS</a></li>
        <li><a href="../WomanPage/casual.php">CASUALS</a></li>
      
        <BR></BR>
        <li>KIDS</li>
        <li><a href="../KidsPage/kidsHoodies.php">HOODIES</a></li>
        <li><a href="../KidsPage/kidsJacketCoats.php">JACKETS N' COATS</a></li>
        <li><a href="../KidsPage/kidsShoes.php">SHOES</a></li>
        <li><a href="../HolidaySpecials/holidaySpecials.php">HOLIDAY SPECIALS</a></li>
    </ul>
    <ul>
        
        <li><a href="../HomePage/index.php">HOME</a></li>
        <li><a href="../AboutUs/Aboutus.php">ABOUT</a></li>
        <?php
        // var_dump($_SESSION);
           
            session_start();
            
            // Check if user is logged in
            if(isset($_SESSION['user_name'])) {
                // Display user's name
                echo '<a href="../user/user.php"><li style="margin-top:25px;">' . $_SESSION['user_name'] . '</li></a>';
                echo '<a href="../signUp/logout.php"><i class="bi bi-box-arrow-left"></i></a>';
            } else {
                // If user is not logged in, display login link
                echo '<li><a href="../signUp/signUp.php" target="_self"><i class="bi bi-person-circle"></i></a></li>';
            }
            ?>
    
<!-- 
        <li><a href="../signUp/signUp.php" target="_self"><i class="bi bi-person-circle"></i></a></li> -->
        <li><a href="../Cart/cart.html" onclick="viewCart()"><i class="bi bi-bag"></i></a></li>
        <li onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
    </ul>
</nav>
</header>


