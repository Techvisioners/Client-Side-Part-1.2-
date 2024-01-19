<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>MMC</title>
 
    <!-- Linking of icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Path file of CSS -->
    <link rel="stylesheet" href="../CSS/Sidebar.css">

    <!-- Icon by page -->
    <link rel="icon" type="image/png" href="../Images/LogoMMC.png">
</head>
<body>

    <!-- Sidebar -->
    <aside class="Sidebar"> 
        <div class="logo">
            <img src="../Images/LogoMMC.png" alt="Logo of MMC">     
            <h2>MMC</h2>
        </div>

        <ul class="folio"> <!-- Links --> 
            <h3>Main Menu</h3>
            <li class="dash">
                <span class="material-symbols-outlined">bar_chart_4_bars</span> 
                <a href="#">Dashboard</a>
            </li>

            <li class="donate">
                <span class="material-symbols-outlined">diversity_3</span> 
                <a href="#">Donate</a>
            </li>

            <h3>Services</h3>
            <li class="trans" id="transactionToggle">
                <span class="material-symbols-outlined">receipt_long</span> 
                <a href="#">Transactions</a> <i class="material-symbols-outlined"> arrow_drop_down</i>
            </li>

            <ul class="sub-menu">
                <li><span class="material-symbols-outlined">water_drop</span><a href="#">Baptism </a></li>
                <li><span class="fa-solid fa-cross"></span><a href="#">Wake</a></li>
            </ul>

            <h3>My Account</h3>
            <li class="acc" id="myAccountToggle">
                <span class="material-symbols-outlined">account_circle</span> 
                <a href="#">Accounts </a>
            </li>

            <!-- Change to Sub-Menu 2 --> 
            <ul class="sub-menu2"> 
                <li><span class="material-symbols-outlined">manage_accounts</span><a href="#"> My Account </a></li>
            </ul>

            <li class="set">
                <span class="material-symbols-outlined">toggle_on</span> 
                <a href="#">Settings</a>
            </li>
            
            <li class="btnLog">
                <span class="material-symbols-outlined">logout</span> 
                <a href="#">Logout</a>
            </li>
        </ul>
    </aside>


        <!-- JavaScript -->
        <script>
            // JavaScript function to toggle the visibility of the sub-menu for Transactions
            document.getElementById('transactionToggle').addEventListener('click', function() {
                var subMenu = document.querySelector('.folio .trans + .sub-menu');
                subMenu.style.display = (subMenu.style.display === 'none' || subMenu.style.display === '') ? 'block' : 'none';
            });

            // JavaScript function to toggle the visibility of the sub-menu2 for My Account
            document.getElementById('myAccountToggle').addEventListener('click', function() {
                var subMenu2 = document.querySelector('.sub-menu2');
                subMenu2.style.display = (subMenu2.style.display === 'none' || subMenu2.style.display === '') ? 'block' : 'none';
            });
        </script>



</body>
</html>
