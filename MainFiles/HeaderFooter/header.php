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
        <li><a href="../WomanPage/shoes/shoes.php">SHOES</a></li>
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
session_start();
if (isset($_SESSION['user_fullname'])) {
    // If user is logged in, display dropdown
        echo '<li class="dropdown" style="margin-left:-200px;">';
        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $_SESSION['user_fullname'] . '<b class="caret"></b></a>';
        echo '<ul class="dropdown-menu">';
        echo '<li><a href="../signUp/logout.php">Logout</a></li>';
        echo '</ul>';
        echo '</li>';
    }

?>
    

        <li style="margin-top:-75px; margin-right:-30px;"><a href="../signUp/logout.php" target="_self"></a><i class="bi bi-box-arrow-left"></i></li>

        <li><a href="../signUp/signUp.php" target="_self"><i class="bi bi-person-circle"></i></a></li>
        <li><a href="../Cart/cart.html" onclick="viewCart()"><i class="bi bi-bag"></i></a></li>
        <li onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
    </ul>
</nav>
</header>


