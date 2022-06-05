
    <section id="nav">
        <nav class="nav">
            <div class="logo"><a href="index.php"><img src="assets/img/landing/LOGO.png" alt="LOGO"></a></div>
            <div class="search-container">
                <form action="" method="get">
                    <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="tom-container">
                <a href="#"><div class="tom"><i class="fas fa-th"></i></div></a>
                <a href="keranjang/"><div class="tom"><i class="fa-solid fa-shopping-cart"></i></div></a>
                <?php 
                    if(isset($_SESSION['customer_status'])){
                    $id_customer = $_SESSION['customer_id'];
                    $customer = mysqli_query($koneksi,"select * from customer where customer_id='$id_customer'");
                    $c = mysqli_fetch_assoc($customer);
                    ?> 
                    <a class="tom-after" style="color:white;" href="login"><?php echo $c['customer_nama']; ?></a>
                     <?php
                }else{
                ?> 
                <a href="login"><div class="tom"><i class="fa-solid fa-user"></i></div></a> <?php
                }
                ?>
            </div>
            <div class="con-ham"><div class="hamburger"><i class="fa-solid fa-bars"></i></div></div>
        </nav>
        <div class="nav-mobile">
            <div class="nav-mobile-container">
                <div class="tom-container-mobile">
                    <a href="login.php"><div class="tom"><i class="fa-solid fa-user"></i></div></a>
                    <a href="keranjang/"><div class="tom"><i class="fa-solid fa-shopping-cart"></i></div></a>
                    <a href="#"><div class="tom"><i class="fas fa-th"></i></div></a>
                </div>
                <div class="con-close"><div class="close"><i class="fas fa-times"></i></div></div>
                <div class="search-container-mobile">
                    <form action="" method="get">
                        <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                        <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/nav.js"></script>