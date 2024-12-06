<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./view/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="./view/css/all.css" rel="stylesheet" type="text/css" media="all">
    <link href="./view/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="./view/css/responsives.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="./view/css/font-awesome.min.css">
    <link href="./view/css/cf-stylesheet.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>
<style>
   /* CSS cho phần tử chứa account icon */
.search.fixacc {
    position: relative;
}

/* Dropdown menu ẩn mặc định */
.dropdown-menu {
    display: none; /* Ẩn menu khi chưa hover */
    position: absolute;
    top: 30px; /* Điều chỉnh khoảng cách từ icon */
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 10;
}

.dropdown-menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.dropdown-menu ul li {
    padding: 8px 16px;
}

.dropdown-menu ul li a {
    text-decoration: none;
    color: #333;
    display: block;
}

.dropdown-menu ul li a:hover {
    background-color: pink;
}

/* Hiển thị dropdown khi hover vào icon tài khoản hoặc dropdown */
.search.fixacc:hover .dropdown-menu,
.cart-head:hover + .dropdown-menu {
    display: block;
}


</style>
<body>

    <body class="stBody stHome index">


        <div class="wrapper">
            <!-- /header -->
            <header class="no-index ">
                <div class="container">
                    <div class="row row-ibl mid">

                        <a class="cart-head visible-xs" href="/cart" style="position:relative;">
                            <img src="./images/shopping-bag-2x.png" style="padding-top:4px;" alt="cart" title="Cart">
                            <span class="hd-cart-count">0</span>
                        </a>


                        <div class="col-md-2 col-xs-12 centermb">

                            <a class="logo" title="" href="index.php?act=trangchu">

                                <img src="./view/images/logo.jpg" alt="logo ">

                            </a>
                        </div>
                        <div class="col-md-10 col-xs-12 text-right hidden-xs hidden-sm">
                            <nav class="main-nav">
                                <ul id="menu-main-menu" class="">




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=trangchu" title="Trang chủ">Trang chủ</a>
                                        <ul class="sub-menu">






                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=gioithieu" title="Giới thiệu">Giới thiệu</a>
                                        <ul class="sub-menu">






                                        </ul>
                                    </li>

                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=shop" title="Trang chủ">Shop</a>
                                        <ul class="sub-menu">






                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=ruouvang" title="Shop ">Rượu Vang </a>
                                        <!-- <ul class="sub-menu">
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="shop-verus?q=collections:2362410%20AND%20vendor:(Verus)&amp;page=1" title="Verus">Verus</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="shop-verus?q=collections:2362410%20AND%20vendor:(Minirus)&amp;page=1" title="Minirus">Minirus</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="shop-verus?q=collections:2362410%20AND%20vendor:(Merchandise)&amp;page=1" title="Merchandise">Merchandise</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/rebel-nerd" title="Rebel Nerd">Rebel Nerd</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
            
            
            
            
            
                                        </ul> -->
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=ruoumanh" title="Bộ sưu tập">Rượu Mạnh</a>
                                        <!-- <ul class="sub-menu">
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/world-cup-2022" title="World Cup 2022">World Cup 2022</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/verus-x-lien-quan-1" title=" x Liên Quân"> x Liên Quân</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/verus-x-biti-s-hunter" title=" x Biti's Hunter"> x Biti's Hunter</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
                                            
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/zodiac-12-cung-hoang-dao" title="Zodiac / 12 Cung Ho�&nbsp;ng Đạo">Zodiac / 12 Cung Ho�&nbsp;ng Đạo</a>
                                                <ul class="sub-menu">
                                                    
            
                                                </ul>
            
                                            </li>
                                            
                                            
            
            
            
            
            
                                        </ul> -->
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="index.php?act=lienhe" title="Liên hệ">Liên hệ</a>
                                        <ul class="sub-menu">






                                        </ul>
                                    </li>





                                </ul>
                            </nav>
                            <div class="search" id="sea">
                                <button type="button" data-show="#search" id="search-des">
                                    <img src="./view/images/iconfinder-search-858732.png" alt="search" title="Search"
                                        style="
                padding-top: 3px;
            ">
                                </button>
                                <div class="ct">


                                    <form class="search-fr" action="index.php?act=product">
                                        <div class="form-input">
                                            <input name="kw" id="search" placeholder="Tìm kiếm..." value="" type="text"
                                                required="required">
                                            <button type="submit" name="timkiem">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          
                            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                
                <div class="search fixacc">
                                <a class="cart-head" href="index.php?act=login" style="position:relative;">
                                    <img src="./view/images/iconfinder-41-user-2123927.png" alt="Account"
                                        title="Account" style="padding-top: 6px;margin-right: 8px;">
                                </a>
                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu">
                                    <ul>
                                        <li style="background-color:black ; color:white ; margin-top:-5px ; boder-radius:10px" >Xin Chào <?= $hoten ?></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="index.php?act=mybill">Đơn Hàng</a></li>

                                        <li><a href="index.php?act=logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
           
            <?php
            } else {
                ?>
            <div class="search fixacc">
                                <a class="cart-head" href="index.php?act=login" style="position:relative;">
                                    <img src="./view/images/iconfinder-41-user-2123927.png" alt="Account"
                                        title="Account" style="padding-top: 6px;margin-right: 8px;">
                                </a>
                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="index.php?act=login">Profile</a></li>
                                        <li><a href="index.php?act=mybill">Đơn Hàng</a></li>

                                        <li><a href="index.php?act=logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>

                <?php
            }
            ?>
                           



                            <div class="search">
                                <a class="cart-head" href="index.php?act=viewcart" style="position:relative;">
                                    <img src="./view/images/shopping-bag-2x.png" alt="Cart" title="Cart" style="padding-top: 2px; margin-left: 0.5px
            ">
                                    <span class="hd-cart-count"> </span>
                                </a>

                            </div>





                        </div>
                    </div>
                </div>
                 <div class="sub-head">
                    <button class="snav-btn">
                        <i></i>
                        <i></i>
                        <i></i>
                    </button>
                    <div class="main">
                        <div class="bar">
                            <a class="nv-logo" href="/" title="">
                                <img style="max-width: 90px;" src="images/logo.png" alt="logo ">
                            </a>
                            <form class="search-fr" action="/search">
                                <input name="q" id="search2" placeholder="Tìm kiếm..." value="" type="text"
                                    required="required">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>



                            <nav>
                                <ul id="menu-main-menu2">




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="/">Trang chủ</a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="/about-us">Giới thiệu</a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="/shop-verus">Shop </a>
                                        <ul class="sub-menu">


                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a
                                                    href="shop-verus?q=collections:2362410%20AND%20vendor:(Verus)&amp;page=1">Verus</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a
                                                    href="shop-verus?q=collections:2362410%20AND%20vendor:(Minirus)&amp;page=1">Minirus</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a
                                                    href="shop-verus?q=collections:2362410%20AND%20vendor:(Merchandise)&amp;page=1">Merchandise</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/rebel-nerd">Rebel Nerd</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>







                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="/shop-verus">Bộ sưu tập</a>
                                        <ul class="sub-menu">


                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/world-cup-2022">World Cup 2022</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/verus-x-lien-quan-1"> x Liên Quân</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/verus-x-biti-s-hunter"> x Biti's Hunter</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>



                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                <a href="/zodiac-12-cung-hoang-dao">Zodiac / 12 Cung Ho�&nbsp;ng Đạo</a>
                                                <ul class="sub-menu">


                                                </ul>

                                            </li>







                                        </ul>
                                    </li>




                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                        <a href="/contact">Liên hệ</a>
                                        <ul class="sub-menu">






                                        </ul>
                                    </li>







                                    <li class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            href="/?act=login"> Register / Sign in</a></li>



                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

