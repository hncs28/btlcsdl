<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
        <title>Web phim demo</title>
        <link rel="stylesheet" id="fontawesome-pro-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/fontawesome/css/all.min.css?ver=5.15.1"/>
        <link rel="stylesheet" id="owl-carousel-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/css/front.owl.min.css?ver=2.5.5" />
        <link rel="stylesheet" id="google-fonts-css" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700&#038;ver=2.5.5"/>
        <link rel="stylesheet" id="scrollbar-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/css/front.crollbar.min.css?ver=2.5.5" />
        <link rel="stylesheet" id="dooplay-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/css/front.style.min.css?ver=2.5.5" />
        <link rel="stylesheet" id="dooplay-color-scheme-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/css/colors.dark.min.css?ver=2.5.5"/>
        <link rel="stylesheet" id="dooplay-responsive-css" href="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/css/front.mobile.min.css?ver=2.5.5" />
        <script type="text/javascript" src="https://phimmoiyyy.net/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="https://phimmoiyyy.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/js/lib/owlcarousel.js?ver=2.5.5" id="owl-carousel-js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/41f5e993c5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/stylea.css">

    </head>
    <div id="theh1">
        <h1></h1>
    </div>
    <body class="home blog">
        <div id="dt_contenedor">
            <header id="header" class="main">
                <div class="hbox">
                    <div class="fix-hidden">
                        <div class="logo">
                            <a href="index.php">
                               <img src="remove.png"></img>
                            </a>
                        </div>
                        <div class="head-main-nav">
                            <div class="menu-header-container">
                                <ul id="main_header" class="main-header">
                                    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
                                        <a href="index.php">Trang chủ
                                        </a>
                                    </li>
                                    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
                                        <a href="adminlogin.php">Quản lý phim
                                        </a>
                                    </li>
                                    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
                                        <a href="themphim.php">Thêm yêu cầu phim 
                                        </a>
                                    
                                 
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="headitems ">
                            <div id="advc-menu" class="search">
                                <form action="trangtimkiem.php" method="GET">
                                    <input type="text" placeholder="Tìm kiếm..." id="search" name="search" minlength="2" oninput="searchMovies()" onkeyup="searchMovies()" onclick="searchMovies()" required>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="live-search ltr"></div>
                </div>
            </header>
            <div class="fixheadresp">
                <header class="responsive">
                    <div class="nav">
                        <a class="aresp nav-resp"></a>
                    </div>
                    <div class="search">
                        <a class="aresp search-resp"></a>
                    </div>
                    <div class="logo">
                        <a href="#/">
                           <h1>Web phim</h1>
                        </a>
                    </div>
                </header>
                <div class="search_responsive">
                    <form method="get" id="form-search-resp" class="form-resp-ab" action="#">
                        <input type="text" placeholder="Tìm kiếm..." name="s" id="ms" value autocomplete="off">
                        <button type="submit" class="search-button">
                            <span class="fas fa-search"></span>
                        </button>
                    </form>
                    <div class="live-search"></div>
                </div>
                
                <div id="arch-menu" class="menuresp">
                    <div class="menu">
                        <div class="menu-header-container">
                            <ul id="main_header" class="resp">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
                                    <a href="#" aria-current="page">Trang chủ</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13">
                                    <a href="#">Thể loại</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13">
                                    <a href="#">Quốc gia</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
                                    <a href="#">Phim lẻ</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10">
                                    <a href="#">Phim bộ</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
                                    <a href="#" aria-current="page">Đăng nhập</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contenedor">
                <div class="login_box">
                    <div class="box">
                        <a id="c_loginbox">
                            <i class="fas fa-times"></i>
                        </a>
                        <h3>Login to your account</h3>
                        <form method="post" id="dooplay_login_user">
                            <fieldset class="user">
                                <input type="text" name="log" placeholder="Username">
                            </fieldset>
                            <fieldset class="password">
                                <input type="password" name="pwd" placeholder="Password">
                            </fieldset>
                            <label>
                                <input name="rmb" type="checkbox" id="rememberme" value="forever" checked>Remember Me
                            </label>
                            <fieldset class="submit">
                                <input id="dooplay_login_btn" data-btntext="Log in" type="submit" value="Log in">
                            </fieldset>
                            <a class="register" href="#/gioi-thieu?action=sign-in">Register a new account</a>
                            <label>
                                <a class="pteks" href="#/wp-login.php?action=lostpassword">Lost your password?</a>
                            </label>
                            <input type="hidden" name="red" value="https://phimmoiyyy.net/">
                            <input type="hidden" name="action" value="dooplay_login">
                        </form>
                    </div>
                </div>
                <div class="module_home_ads" style=" background: #0f0f0fe6;"></div>
                <div class="module">
                    <div class="content right normal">
                        <div id="slider-movies-tvshows" class="animation-1 slider">
                            <article class="item" id="post-60199">
                                <div class="image">
                                    <a href="trangthongtin.php?title=One%20Piece">
                                        <img src="Poster/op.jpg" />
                                    </a>
                                    <a href="#">
                                        <div class="data">
                                            <h3 class="title">One Piece</h3>
                                            <span>2023</span>
                                        </div>
                                    </a>
                                    <div class="trangthaislider">HD Vietsub</div>
                                </div>
                            </article>
                            
                            <article class="item" id="post-60199">
                                <div class="image">
                                    <a href="trangthongtin.php?title=Kamen%20Rider%20Geats">
                                        <img src="Poster/geats.jpg" />
                                    </a>
                                    <a href="#">
                                        <div class="data">
                                            <h3 class="title">Kamen Rider Geats</h3>
                                            <span>2023</span>
                                        </div>
                                    </a>
                                    <div class="trangthaislider">HD Vietsub</div>
                                </div>
                            </article>

                            <article class="item" id="post-60199">
                                <div class="image">
                                    <a href="trangthongtin.php?title=Jujutsu%20Kaisen">
                                        <img src="Poster/ju.jpg" />
                                    </a>
                                    <a href="trangthongtin.php?title=Jujutsu%20Kaisen">
                                        <div class="data">
                                            <h3 class="title">Jujutsu Kaisen</h3>
                                            <span>2023</span>
                                        </div>
                                    </a>
                                    <div class="trangthaislider">HD Vietsub</div>
                                </div>
                            </article>
                            
                            <article class="item" id="post-60199">
                                <div class="image">
                                    <a href="trangthongtin.php?title=The%20Avengers:%20Endgame">
                                        <img src="Poster/end.jpg" />
                                    </a>
                                    <a href="#">
                                        <div class="data">
                                            <h3 class="title">The Avengers: Endgame</h3>
                                            <span>2023</span>
                                        </div>
                                    </a>
                                    <div class="trangthaislider">HD Vietsub</div>
                                </div>
                            </article>
                            
                        </div>
                        
                       

                        
<!--------------------------------------- Phim lẻ mới cập nhật --------------------------------------------->
                        <header>
                            <h2>Phim lẻ</h2>
                            <div class="nav_items_module">
                                <a class="btn prevf">
                                    <i class="fas fa-caret-left"></i>
                                </a>
                                <a class="btn nextf">
                                    <i class="fas fa-caret-right"></i>
                                </a>
                            </div>
                        </header>
                        <div id="featload" class="load_modules">Loading..</div>
                        <div id="featured-titles" class="items featured">
                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/amazing spi.png" alt="poster-image">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="#">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=The%20Amazing%20Spider-Man">The Amazing Spider-man</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>
                          
                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/no way home.png" alt="poster-image">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="trangthongtin.php?title=Spider-Man:%20No%20Way%20Home">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=Spider-Man:%20No%20Way%20Home">Spider-man No Way Home</a>
                                    </h3>
                                    <span>2021</span>
                                </div>
                            </article>
                            
                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/Cap1.png" alt="">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="trangthongtin.php?title=Captain%20America:%20The%20First%20Avenger">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=Captain%20America:%20The%20First%20Avenger">Captain America 1</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>
                            
                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/endgame.png" alt="">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="trangthongtin.php?title=The%20Avengers:%20Endgame">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=The%20Avengers:%20Endgame">The Avengers: End Game</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>

                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/spi1.jpg" alt="">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="#">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=Spider-man%201">Spider-man 1</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>

                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/spi2.png" alt="">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="#">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=Spider-Man%202">Spider-man 2</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>

                            <article id="post-featured-54297" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/far from home.png" alt="">
                                    <div class="trangthai">Phim lẻ</div>
                                    <div class="featu">NỔI BẬT</div>
                                    <a href="#">
                                    </a>
                                </div>
                                <div class="data dfeatur">
                                    <h3>
                                        <a href="trangthongtin.php?title=Spider-Man:%20Far%20from%20Home">Spider-man: Far From Home</a>
                                    </h3>
                                    <span>2023</span>
                                </div>
                            </article>
                        </div>
                        

<!--------------------------------------- Phim lẻ mới cập nhật -------------------------------------------------------------->
                        

<!--------------------------------------- Phim mới mới cập nhật ---------------------------------------------------------->
                        <header>
                            <h2>Phim bộ </h2>
                        </header>
                        <div id="tvload" class="load_modules">Loading..</div>
                        <div id="dt-tvshows" class="items normal">
                            <article id="post-56812" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/gotchard.jpg" alt="">
                                    <div class="trangthai">Hot</div>
                                    <a href="trangthongtin.php?title=Kamen%20Rider%20Gotchard">
                                        <div class="see play1"></div>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="trangthongtin.php?title=Kamen%20Rider%20Gotchard">Kamen Rider Gotchard</a>
                                    </h3>
                                    <span>
                                        <span>2023 </span>
                                    </span>
                                </div>
                            </article>

                            <article id="post-56812" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/w.jpg" alt="">
                                    <div class="trangthai">Hot</div>
                                    <a href="trangthongtin.php?title=Kamen%20Rider%20W">
                                        <div class="see play1"></div>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="trangthongtin.php?title=Kamen%20Rider%20W">Kamen Rider W</a>
                                    </h3>
                                    <span>
                                        <span>2009 </span>
                                    </span>
                                </div>
                            </article>
                            <article id="post-56812" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/tet.jpg" alt="">
                                    <div class="trangthai">Hot</div>
                                    <a href="#">
                                        <div class="see play1"></div>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="#">Tết ở làng địa ngục</a>
                                    </h3>
                                    <span>
                                        <span>2023 </span>
                                    </span>
                                </div>
                            </article>
                            <article id="post-56812" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/witch.jpg" alt="">
                                    <div class="trangthai">Hot</div>
                                    <a href="#">
                                        <div class="see play1"></div>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="#">Mobile Suit Gundam: The Witch From Mercury</a>
                                    </h3>
                                    <span>
                                        <span>2023 </span>
                                    </span>
                                </div>
                            </article>

                            <article id="post-56812" class="item tvshows">
                                <div class="poster">
                                    <img src="Poster/visao.png" alt="">
                                    <div class="trangthai">Hot</div>
                                    <a href="trangthongtin.php?title=Vì%20sao%20đưa%20anh%20tới">
                                        <div class="see play1"></div>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="trangthongtin.php?title=Vì%20sao%20đưa%20anh%20tới">Vì sao đưa anh tới</a>
                                    </h3>
                                    <span>
                                        <span>2013 </span>
                                    </span>
                                </div>
                            </article> 
                        </div>
                        
                        
<!------------------------------------------------- Right side bar -------------------------------------------------->
                    <div class="sidebar right scrolling">
                        <div class="fixed-sidebar-blank">
                            <div class="dt_mainmeta">
                            </div>
                                <aside id="dtw_content-3" class="widget doothemes_widget">
                                <div class="dtw_content">
                                    <h2 style="color: white;">Phim hot trong tuần</h2>
                                    <br>
                                    <article class="w_item_b" id="post-60493">
                                        <a href="trangthongtin.php?title=Spider-man%201">
                                            <div class="image">
                                                <img src="Poster/spi1.jpg" alt=""/>
                                            </div>
                                            <div class="data">
                                                <h3>Spider-man 1</h3>
                                                <div class="wextra">
                                                    <b>10</b>
                                                    <span class="year">2002</span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>

                                    <article class="w_item_b" id="post-60493">
                                        <a href="trangthongtin.php?title=Kamen%20Rider%20Gotchard">
                                            <div class="image">
                                                <img src="Poster/gotchard.jpg" alt=""/>
                                            </div>
                                            <div class="data">
                                                <h3>Kamen Rider Gotchard</h3>
                                                <div class="wextra">
                                                    <b>10</b>
                                                    <span class="year">2023</span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>

                                    <article class="w_item_b" id="post-60493">
                                        <a href="#">
                                            <div class="image">
                                                <img src="Poster/witch.jpg" alt=""/>
                                            </div>
                                            <div class="data">
                                                <h3>Mobile Suit Gundam: The Witch from Mercury</h3>
                                                <div class="wextra">
                                                    <b>10</b>
                                                    <span class="year">2022</span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>

                                    <article class="w_item_b" id="post-60493">
                                        <a href="trangthongtin.php?title=Kamen%20Rider%20W">
                                            <div class="image">
                                                <img src="Poster/w.jpg" alt=""/>
                                            </div>
                                            <div class="data">
                                                <h3>Kamen Rider W</h3>
                                                <div class="wextra">
                                                    <b>10</b>
                                                    <span class="year">2011</span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                   
                                </div>
                        </div>
                    </div>
                </div>
            </div>



<!---------------------------------------- Chân trang ------------------------------------------->
            <footer class="main">
                <div class="fbox">
                    <div class="fcmpbox">
                        <div class="primary">
                            <div class="columenu">
                                <div class="item">
                                    <h3>Phim mới</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Khoa Học</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Kinh Dị</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Chiếu Rạp</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Hình Sự</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Hành Động</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <h3>Phim hay</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Âu Mỹ</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Hàn Quốc</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Trung Quốc</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Nhật Bản</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Phim Thái Lan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <h3>Thông tin</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Giới thiệu</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Liên hệ chúng tôi</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Điều khoản sử dụng</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Chính sách riêng tư</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Khiếu nại bản quyền</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fotlogo">
                                <div class="logo">
                                    <h1>Web phim của các con giời</h1>
                                </div>
                                <div class="text">
                                    <p>
                                    Trang xem phim Online với giao diện mới được bố trí và thiết kế thân thiện với người dùng. Được thiết kế bởi các con giời nhóm 1.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="copy">© webfilmcsdl</div>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="https://phimmoiyyy.net/wp-content/themes/phimmoi/assets/js/front.scripts.min.js?ver=2.5.5" id="scripts-js"></script>
 
    </body>
</html>
