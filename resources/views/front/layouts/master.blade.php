
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlmystore.justthemevalley.com/Version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 02:09:13 GMT -->
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>MyStore premium HTML5 &amp; CSS3 template</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-line-icons.css') }}" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.transitions.css') }}">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" media="all">

<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}" >

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

<!-- Mean Menu CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/meanmenu.min.css') }}">

<!-- nivo-slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-slider.css') }}">

<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all">
</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-5 col-xs-6"> 
              <!-- Default Welcome Message --> 
              <span class="phone hidden-xs hidden-sm"><i class="fa fa-phone fa-lg"></i> +123.456.789</span>
              <div class="welcome-msg hidden-xs">Welcome to MyStore! </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="{{ asset('assets/images/flag-default.jpg') }}" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img src="{{ asset('assets/images/flag-english.jpg') }}" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img src="{{ asset('assets/images/flag-default.jpg') }}" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="{{ asset('assets/images/flag-german.jpg') }}" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="{{ asset('assets/images/flag-brazil.jpg') }}" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="{{ asset('assets/images/flag-chile.jpg') }}" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="{{ asset('assets/images/flag-spain.jpg') }}" alt="flag"> <span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-6 col-md-6 col-sm-7 col-xs-6 text-right">
              <div class="links">
                <div class="jtv-user-info">
                  <div class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account </span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="account_page.html">Account</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li class="divider"></li>
                      <li><a href="account_page.html">Log In</a></li>
                      <li><a href="account_page.html">Sign Up</a></li>
                    </ul>
                  </div>
                </div>
                <div class="services hidden-xs"><a title="servicesg" href="#">Services</a></div>
                <div class="myaccount hidden-xs"><a title="My Account" href="#">My Support</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="{{ asset('assets/images/logo.png') }}"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6"> 
            <!-- Search -->
            
            <div class="top-search">
              <div id="search">
                <form>
                  <div class="input-group">
                    <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                      <option>All Categories</option>
                      <option>women</option>
                      <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                      <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                      <option>&nbsp;&nbsp;&nbsp;Top</option>
                      <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                      <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                      <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                      <option>Men</option>
                      <option>Electronics</option>
                      <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                      <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                    </select>
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
            
            <!-- End Search --> 
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-12 top-cart">
            <div class="link-wishlist"> <a href="#"> <span class="wishlist-count">3</span> <i class="fa fa-heart fa-lg"></i> </a> </div>
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                  <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner"><span class="cart-title">Shopping Cart</span> <span class="cart-total">4 Item(s): $520.00</span></div>
                  </a></div>
                <div>
                  <div class="top-cart-content">
                    <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                    <ul id="cart-sidebar" class="mini-products-list">
                      <li class="item odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('assets/images/products/img07.jpg') }}" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p>
                          <strong>1</strong> x <span class="price">$20.00</span> </div>
                      </li>
                      <li class="item even"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('assets/images/products/img08.jpg') }}" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Consectetur utes anet adipisicing elit</a> </p>
                          <strong>1</strong> x <span class="price">$230.00</span> </div>
                      </li>
                      <li class="item last odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('assets/images/products/img10.jpg') }}" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Sed do eiusmod tempor incidist</a> </p>
                          <strong>2</strong> x <span class="price">$420.00</span> </div>
                      </li>
                    </ul>
                    <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                    <div class="actions">
                      <button onclick="location.href='checkout.html'" class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                      <button onclick="location.href='shopping_cart.html'"  class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Start Menu Area -->
  <div class="menu-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 hidden-xs">
          <div class="main-menu">
            <nav>
              <ul>
                <li class="active custom-menu"><a href="index.html">Home</a>
                  <ul class="dropdown">
                    <li><a href="http://htmlmystore.justthemevalley.com/Version1/index.html">Home Version 1</a></li>
                    <li><a href="http://htmlmystore.justthemevalley.com/Version2/index.html">Home Version 2</a></li>
                    <li><a href="index.html">Home Version 3</a></li>
                    <li><a href="http://htmlmystore.justthemevalley.com/Version4/index.html">Home Version 4</a></li>
                    <li><a href="http://htmlmystore.justthemevalley.com/Version5/index.html">Home Version 5</a></li>
                    <li><a href="http://htmlmystore.justthemevalley.com/RTL Version/index.html">RTL Version</a></li>
                  </ul>
                </li>
                <li class="megamenu"><a href="shop_grid.html">Men</a>
                  <div class="mega-menu"> <span> <a class="mega-title" href="#">Clothing </a> <a href="shop_grid.html">Casual shirt</a> <a href="shop_grid.html">Trousers</a> <a href="shop_grid.html">Suits & Blazers </a> <a href="shop_grid.html">Sportswear </a> </span> <span> <a class="mega-title" href="#">Jewellery </a> <a href="shop_grid.html">Gold</a> <a href="shop_grid.html">Platinum</a> <a href="shop_grid.html">Rings </a> <a href="shop_grid.html">Neckwear </a> </span> <span> <a class="mega-title" href="#">Shoes </a> <a href="shop_grid.html">Sports & Outdoor</a> <a href="shop_grid.html">Mocassins</a> <a href="shop_grid.html">Sneakers </a> <a href="shop_grid.html">Formal Shoes </a> </span> <span class="mega-menu-img hidden-sm"> <a href="shop_grid.html"><img src="{{ asset('assets/images/menu-img1.jpg') }}" alt="Bannar 1"></a> </span> <span> <a class="mega-title" href="#">Eyewear </a> <a href="shop_grid.html">Backpacks</a> <a href="shop_grid.html">Ray-Ban</a> <a href="shop_grid.html">Opium </a> <a href="shop_grid.html">Joe Black </a> </span> <span> <a class="mega-title" href="#">Watches </a> <a href="shop_grid.html">Fastrack </a> <a href="shop_grid.html">Timex </a> <a href="shop_grid.html">Citizen</a> <a href="shop_grid.html">Titan </a> </span> <span> <a class="mega-title" href="#">Accessories </a> <a href="shop_grid.html">Handbags</a> <a href="shop_grid.html">Sunglasses</a> <a href="shop_grid.html">Clutches </a> <a href="shop_grid.html">Backpacks </a> </span> </div>
                </li>
                <li class="megamenu"><a href="shop_grid.html">Women</a>
                  <div class="mega-menu"> <span class="mega-menu-img left hidden-sm"> <a href="shop_grid.html"><img src="{{ asset('assets/images/menu-img2.jpg') }}" alt="Bannar 2"></a> </span> <span> <a class="mega-title" href="#">Clothing </a> <a href="shop_grid.html">Casual shirt</a> <a href="shop_grid.html">Trousers</a> <a href="shop_grid.html">Suits & Blazers </a> <a href="shop_grid.html">Sportswear </a> </span> <span> <a class="mega-title" href="#">Jewellery </a> <a href="shop_grid.html">Gold</a> <a href="shop_grid.html">Platinum</a> <a href="shop_grid.html">Rings </a> <a href="shop_grid.html">Neckwear </a> </span> <span> <a class="mega-title" href="#">Shoes </a> <a href="shop_grid.html">Sports & Outdoor</a> <a href="shop_grid.html">Mocassins</a> <a href="shop_grid.html">Sneakers </a> <a href="shop_grid.html">Formal Shoes </a> </span> <span> <a class="mega-title" href="#">Eyewear </a> <a href="shop_grid.html">Backpacks</a> <a href="shop_grid.html">Ray-Ban</a> <a href="shop_grid.html">Opium </a> <a href="shop_grid.html">Joe Black </a> </span> <span> <a class="mega-title" href="#">Watches </a> <a href="shop_grid.html">Fastrack </a> <a href="shop_grid.html">Timex </a> <a href="shop_grid.html">Citizen</a> <a href="shop_grid.html">Titan </a> </span> <span> <a class="mega-title" href="#">Accessories </a> <a href="shop_grid.html">Handbags</a> <a href="shop_grid.html">Sunglasses</a> <a href="shop_grid.html">Clutches </a> <a href="shop_grid.html">Backpacks </a> </span> </div>
                </li>
                <li class="megamenu"><a href="shop_grid.html">Children</a>
                  <div class="mega-menu"> <span> <a class="mega-title" href="#">Baby clothing </a> <a href="shop_grid.html">Casual shirt</a> <a href="shop_grid.html">Trousers</a> <a href="shop_grid.html">Suits & Blazers </a> <a href="shop_grid.html">Sportswear </a> </span> <span> <a class="mega-title" href="#">Boys </a> <a href="shop_grid.html">Clothing</a> <a href="shop_grid.html">Shoes</a> <a href="shop_grid.html">Watches </a> <a href="shop_grid.html">Sunglasses </a> </span> <span> <a class="mega-title" href="#">Girls </a> <a href="shop_grid.html">Baby Girl</a> <a href="shop_grid.html">Shoes</a> <a href="shop_grid.html">Watches </a> <a href="shop_grid.html">Sunglasses </a> </span> <span class="mega-menu-img hidden-sm"> <a href="shop_grid.html"><img src="{{ asset('assets/images/menu-img3.jpg') }}" alt="Bannar 3"></a> </span> </div>
                </li>
                <li class="megamenu"><a href="shop_grid.html">Pages</a>
                  <div class="mega-menu"> <span> <a class="mega-title" href="#">Shop Pages </a> <a href="shop_grid.html"> Shop grid </a> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> <a href="shop_list.html"> Shop list </a> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> <a href="shop_grid_full_width.html"> Shop Full width </a> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </span> <span> <a class="mega-title" href="#">Ecommerce Pages </a> <a href="wishlist.html"> Wishlists </a> <a href="checkout.html"> Checkout </a> <a href="compare.html"> Compare </a> <a href="shopping_cart.html"> Shopping cart </a> <a href="quick_view.html"> Quick View </a> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a> </span> <span> <a class="mega-title" href="#">Product Categories </a> <a href="single_product.html"> single product </a> <a href="single_product_left_sidebar.html"> single product left sidebar</a> <a href="cat-3-col.html"> 3 Column Sidebar </a> <a href="cat-4-col.html"> 4 Column Sidebar</a> <a href="cat-4-col-full.html"> 4 Column Full width </a> <a href="col3-sidebar.html"> col3 Sidebar</a> </span> <span> <a class="mega-title" href="#">Static Pages </a> <a href="account_page.html"> Create Account Page </a> <a href="about_us.html"> About Us </a> <a href="contact_us.html"> Contact us </a> <a href="404error.html"> Error 404 </a> <a href="faq.html"> FAQ </a> </span> </div>
                </li>
                <li class="custom-menu"><a href="blog.html">Blog</a>
                  <ul class="dropdown">
                    <li> <a href="blog_right_sidebar.html"> Blog &ndash; Right Sidebar </a></li>
                    <li> <a href="blog_left_sidebar.html"> Blog &ndash; Left Sidebar </a></li>
                    <li><a href="blog_full_width.html"> Blog &ndash; Full-Width </a></li>
                    <li><a href="single_post.html"> Single post </a> </li>
                  </ul>
                </li>
                <li><a href="contact_us.html">Contact</a></li>
              </ul>
            </nav>
            <!-- Signup -->
            <p class="top-Signup"><a href="#" class="" role="button" data-toggle="modal" data-target="#login-modal">Login/Signup</a></p>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header"> <img id="img_logo" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </button>
                  </div>
                  <div id="div-forms">
                    <form id="login-form">
                      <div class="modal-body">
                        <div id="div-login-msg"> <span id="text-login-msg">Username or email address </span> </div>
                        <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">
                            Remember me </label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div>
                          <button type="submit" class="btn-login">Login</button>
                        </div>
                        <div>
                          <button onclick="location.href='account_page.html'" id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- END # MODAL LOGIN --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Menu Area --> 
  
  <!-- Start Mobile Menu -->
  <div class="mobile-menu hidden-sm hidden-md hidden-lg">
    <nav><span class="mobile-menu-title">Categories</span>
      <ul>
        <li class=""><a href="index.html">Home</a>
          <ul class="sub-menu">
            <li><a href="http://htmlmystore.justthemevalley.com/Version1/index.html">Home Version 1</a></li>
            <li><a href="http://htmlmystore.justthemevalley.com/Version2/index.html">Home Version 2</a></li>
            <li><a href="index.html">Home Version 3</a></li>
            <li><a href="http://htmlmystore.justthemevalley.com/Version4/index.html">Home Version 4</a></li>
            <li><a href="http://htmlmystore.justthemevalley.com/Version5/index.html">Home Version 5</a></li>
            <li><a href="http://htmlmystore.justthemevalley.com/RTL Version/index.html">RTL Version</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Pages</a>
          <ul>
            <li><a href="shop_grid.html" class="">Shop Pages </a>
              <ul>
                <li> <a href="shop_grid.html"> Shop grid </a> </li>
                <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
                <li> <a href="shop_list.html"> Shop list </a> </li>
                <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
                <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Ecommerce Pages </a>
              <ul>
                <li> <a href="wishlist.html"> Wishlists </a> </li>
                <li> <a href="checkout.html"> Checkout </a> </li>
                <li> <a href="compare.html"> Compare </a> </li>
                <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
                <li> <a href="quick_view.html"> Quick View </a> </li>
              </ul>
            </li>
            <li> <a href="shop_grid.html">Static Pages </a>
              <ul>
                <li> <a href="account_page.html"> Create Account Page </a> </li>
                <li> <a href="about_us.html"> About Us </a> </li>
                <li> <a href="contact_us.html"> Contact us </a> </li>
                <li> <a href="404error.html"> Error 404 </a> </li>
                <li> <a href="faq.html"> FAQ </a> </li>
              </ul>
            </li>
            <li> <a href="shop_grid.html">Product Categories </a>
              <ul>
                <li> <a href="cat-3-col.html"> 3 Column Sidebar </a> </li>
                <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
                <li> <a href="cat-4-col-full.html"> 4 Column Full width </a> </li>
                <li> <a href="col3-sidebar.html"> col3 Sidebar</a> </li>
              </ul>
            </li>
            <li> <a href="shop_grid.html">Single Product Pages </a>
              <ul>
                <li><a href="single_product.html"> single product </a> </li>
                <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
                <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
                <li> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a> </li>
              </ul>
            </li>
            <li> <a href="shop_grid.html"> Blog Pages </a>
              <ul>
                <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
                <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
                <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
                <li><a href="single_post.html">Single post </a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Women</a>
          <ul class="">
            <li><a href="#">Clother</a>
              <ul>
                <li><a href="shop_grid.html">Cocktail</a></li>
                <li><a href="shop_grid.html">Day</a></li>
                <li><a href="shop_grid.html">Evening</a></li>
                <li><a href="shop_grid.html">Sports</a></li>
                <li><a href="shop_grid.html">Sexy Dress</a></li>
                <li><a href="shop_grid.html">Fsshion Skirt</a></li>
                <li><a href="shop_grid.html">Evening Dress</a></li>
                <li><a href="shop_grid.html">Children's Clothing</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Dress and skirt</a>
              <ul>
                <li><a href="shop_grid.html">Sports</a></li>
                <li><a href="shop_grid.html">Run</a></li>
                <li><a href="shop_grid.html">Sandals</a></li>
                <li><a href="shop_grid.html">Books</a></li>
                <li><a href="shop_grid.html">A-line Dress</a></li>
                <li><a href="shop_grid.html">Lacy Looks</a></li>
                <li><a href="shop_grid.html">Shirts-T-Shirts</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">shoes</a>
              <ul>
                <li><a href="shop_grid.html">blazers</a></li>
                <li><a href="shop_grid.html">table</a></li>
                <li><a href="shop_grid.html">coats</a></li>
                <li><a href="shop_grid.html">Sports</a></li>
                <li><a href="shop_grid.html">kids</a></li>
                <li><a href="shop_grid.html">Sweater</a></li>
                <li><a href="shop_grid.html">Coat</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=""><a href="shop_grid.html">Men</a>
          <ul class="">
            <li><a href="shop_grid.html">Bages</a>
              <ul>
                <li><a href="shop_grid.html">Bootes Bages</a></li>
                <li><a href="shop_grid.html">Blazers</a></li>
                <li><a href="shop_grid.html">Mermaid</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Clothing</a>
              <ul>
                <li><a href="shop_grid.html">coats</a></li>
                <li><a href="shop_grid.html">T-shirt</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">lingerie</a>
              <ul>
                <li><a href="shop_grid.html">brands</a></li>
                <li><a href="shop_grid.html">furniture</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Handbags</a>
          <ul class="">
            <li><a href="shop_grid.html">Footwear Man</a>
              <ul>
                <li><a href="shop_grid.html">Gold Rigng</a></li>
                <li><a href="shop_grid.html">paltinum Rings</a></li>
                <li><a href="shop_grid.html">Silver Ring</a></li>
                <li><a href="shop_grid.html">Tungsten Ring</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Footwear Womens</a>
              <ul>
                <li><a href="shop_grid.html">Brand Gold</a></li>
                <li><a href="shop_grid.html">paltinum Rings</a></li>
                <li><a href="shop_grid.html">Silver Ring</a></li>
                <li><a href="shop_grid.html">Tungsten Ring</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Band</a>
              <ul>
                <li><a href="shop_grid.html">Platinum Necklaces</a></li>
                <li><a href="shop_grid.html">Gold Ring</a></li>
                <li><a href="shop_grid.html">silver ring</a></li>
                <li><a href="shop_grid.html">Diamond Bracelets</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Shoes</a>
          <ul class="">
            <li><a href="shop_grid.html">Rings</a>
              <ul>
                <li><a href="shop_grid.html">Coats & jackets</a></li>
                <li><a href="shop_grid.html">blazers</a></li>
                <li><a href="shop_grid.html">raincoats</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Dresses</a>
              <ul>
                <li><a href="shop_grid.html">footwear</a></li>
                <li><a href="shop_grid.html">blazers</a></li>
                <li><a href="shop_grid.html">clog sandals</a></li>
                <li><a href="shop_grid.html">combat boots</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Accessories</a>
              <ul>
                <li><a href="shop_grid.html">bootees Bags</a></li>
                <li><a href="shop_grid.html">blazers</a></li>
                <li><a href="shop_grid.html">jackets</a></li>
                <li><a href="shop_grid.html">kids</a></li>
                <li><a href="shop_grid.html">shoes</a></li>
              </ul>
            </li>
            <li><a href="shop_grid.html">Top</a>
              <ul>
                <li><a href="shop_grid.html">briefs</a></li>
                <li><a href="shop_grid.html">camis</a></li>
                <li><a href="shop_grid.html">nigthwear</a></li>
                <li><a href="shop_grid.html">kids</a></li>
                <li><a href="shop_grid.html">shapewer</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu --> 
  
  <!-- Main Slider Area -->
  <div class="main-slider-area">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-xs-12"> 
          <!-- Main Slider -->
          <div class="main-slider">
            <div class="slider">
              <div id="mainSlider" class="nivoSlider slider-image"> <img src="{{ asset('assets/images/slider/slider-img1.jpg') }}" alt="main slider" title="#htmlcaption1"/> <img src="{{ asset('assets/images/slider/slider-img2.jpg') }}" alt="main slider" title="#htmlcaption2"/> </div>
              <!-- Slider Caption One -->
              <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s" data-wow-delay="0s">PERFECT</h1>
                      <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s" data-wow-delay="0s">MODEL 2016</h2>
                      <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s" data-wow-delay="0s"> up to 35% off Fahion collection</p>
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Shop Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Slider Caption Two -->
              <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide-text slide-text-2">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h1 class="wow zoomInUp" data-wow-duration="1.1s" data-wow-delay="0s">KIDS </h1>
                      <h2 class="wow zoomInUp" data-wow-duration="1.1s" data-wow-delay="0s">SHOPPING</h2>
                      <p class="wow zoomInUp" data-wow-duration="1.3s" data-wow-delay="0s"> the new design collection</p>
                    </div>
                    <div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s"> <a href="#">Click to buy</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Main Slider --> 
          
          <!-- service section -->
          <div class="jtv-service-area">
            <div class="row">
              <div class="col col-md-4 col-sm-4 col-xs-12">
                <div class="block-wrapper ship">
                  <div class="text-des"> <i class="fa fa-truck"></i>
                    <h3>FREE SHIPPING</h3>
                    <p>free ship-on oder over $199.00</p>
                  </div>
                </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-12 ">
                <div class="block-wrapper return">
                  <div class="text-des"> <i class="fa fa-dollar"></i>
                    <h3>money back</h3>
                    <p>30 Day Money Back Guarantee. </p>
                  </div>
                </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-12">
                <div class="block-wrapper support">
                  <div class="text-des"> <i class="fa fa-gift"></i>
                    <h3>Special Sale</h3>
                    <p>All items-sale up to 25% off </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="banner-jtv">
            <div class="banner-box"><a href="#"><img alt="" src="{{ asset('assets/images/banner.jpg') }}"></a>
              <div class="banner-text"><span class="first-text">Handbags</span> <span class="medium-text">Collection for women</span></div>
              <a class="shop-now" href="#">Shop now</a></div>
            <div class="banner-box banner-inner-box"><a href="#"><img alt="" src="{{ asset('assets/images/banner-2.jpg') }}"></a>
              <div class="banner-text banner-text-mid"><span class="first-text">New Arrivals</span> <span class="medium-text">Fashionable footwear collection</span> <a class="shop-now" href="#">Click to buy</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Area --> 
  
  <!-- main container -->
  
  <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3"> 
          <!-- Home Tabs  -->
          
          <div class="home-tab">
            <div class="tab-info">
              <h3 class="new-product-title pull-left">Products category</h3>
              <ul class="nav home-nav-tabs home-product-tabs">
                <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false">All</a></li>
                <li> <a href="#women" data-toggle="tab" aria-expanded="false">Women</a> </li>
                <li> <a href="#men" data-toggle="tab" aria-expanded="false">Men</a> </li>
                <li> <a href="#kids" data-toggle="tab" aria-expanded="false">Kids</a> </li>
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="all">
                <div class="slider-items-products">
                  <div id="all-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/images/products/img01.jpg') }}" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/images/products/img02.jpg') }}" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-new-label new-left">new</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/images/products/img03.jpg') }}" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img04.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img05.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="women">
                <div class="slider-items-products">
                  <div id="women-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img06.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img07.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-new-label new-left">new</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img08.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img09.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img10.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="men">
                <div class="slider-items-products">
                  <div id="men-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img11.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img12.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-new-label new-left">new</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img13.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img14.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img15.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="kids">
                <div class="slider-items-products">
                  <div id="kids-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img16.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img17.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-new-label new-left">new</div>
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img18.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img19.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img20.jpg" alt=""></a> </div>
                          <div class="pro-box-info">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="box-hover">
                              <div class="product-item-actions">
                                <div class="pro-actions">
                                  <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                </div>
                                <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Banner block-->
          <div class="jtv-banner-block ">
            <div class="jtv-subbanner1"><a href="#"><img class="img-respo" alt="jtv-subbanner1" src="{{ asset('assets/') }}images/banner4.jpg"></a>
              <div class="text-block wow animated fadeInLeft animated">
                <div class="text1"><a href="#">clothes sale</a></div>
                <div class="text2"><a href="#">Elegant Women Style </a></div>
                <div class="text3"><a href="#">25% off</a></div>
              </div>
            </div>
            <div class="jtv-subbanner2"><a href="#"><img class="img-respo" alt="jtv-subbanner2" src="{{ asset('assets/') }}images/banner5.jpg"></a>
              <div class="text-block wow animated fadeInLeft animated">
                <div class="text1"><a href="#">Smart Casuals</a></div>
                <div class="text2"><a href="#">on brand-new models </a></div>
                <div class="text3"><a href="#">Shop Now</a></div>
              </div>
            </div>
          </div>
          <!-- Best selling -->
          <div class="best-selling-slider">
            <h3 class="products_title">Best selling</h3>
            <div class="slider-items-products">
              <div id="best-selling-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img02.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-right">Sale</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img08.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-right">new</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img06.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img15.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img11.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- prom banner-->
          <div class="jtv-promotion">
            <div class="wrap">
              <div class="wow animated fadeInRight animated">
                <div class="box jtv-custom">
                  <div class="box-content">
                    <div class="promotion-center">
                      <p class="text_medium">end of season sale</p>
                      <div class="text_large">
                        <div class="theme-color">up to</div>
                        50% off</div>
                      <p class="text_small">Fashion for all outerwear, shirt &amp; accessories</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Featured Products -->
          <div class="featured-products-slider">
            <h3 class="products_title">Featured products</h3>
            <div class="slider-items-products">
              <div id="featured-products-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <div class="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img16.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-right">Sale</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <div class="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img18.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-right">new</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <div class="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img09.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <div class="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img11.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <div class="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img03.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Latest news start -->
          
          <div id="latest-news" class="news">
            <div class="page-header">
              <h2>Latest news</h2>
            </div>
            <div class="slider-items-products">
              <div id="latest-news-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6"> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="jtv-blog">
                      <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="{{ asset('assets/') }}images/blog-img1.jpg" alt=""></a> <span class="moretag"></span> </div>
                      <div class="blog-content-jtv">
                        <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                        <span><i class="fa fa-calendar"></i>Jan, 20, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>149</span> <span class="blog-comments"><i class="fa fa-comment"></i>80</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Item -->
                  <div class="item">
                    <div class="jtv-blog">
                      <div class="blog-img"> <a href="single_post.html"><img class="primary-img" src="{{ asset('assets/') }}images/blog-img2.jpg" alt=""></a> </div>
                      <div class="blog-content-jtv">
                        <h2><a href="single_post.html">Lorem ipsum dolor sit amet</a></h2>
                        <span><i class="fa fa-calendar"></i>May, 20, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>55</span> <span class="blog-comments"><i class="fa fa-comment"></i>100</span>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                      </div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                    <div class="jtv-blog">
                      <div class="blog-img"> <a href="single_post.html"><img class="primary-img" src="{{ asset('assets/') }}images/blog-img3.jpg" alt=""></a> </div>
                      <div class="blog-content-jtv">
                        <h2><a href="single_post.html">Integer scelerisque diam vitae</a></h2>
                        <span><i class="fa fa-calendar"></i>Mar, 25, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>149</span> <span class="blog-comments"><i class="fa fa-comment"></i>80</span>
                        <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis. Maecenas eu.</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="jtv-blog">
                      <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="{{ asset('assets/') }}images/blog-img1.jpg" alt=""></a> <span class="moretag"></span> </div>
                      <div class="blog-content-jtv">
                        <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                        <span><i class="fa fa-calendar"></i>Sep, 13, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>49</span> <span class="blog-comments"><i class="fa fa-comment"></i>5</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item">
                    <div class="jtv-blog">
                      <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="{{ asset('assets/') }}images/blog-img3.jpg" alt=""></a> <span class="moretag"></span> </div>
                      <div class="blog-content-jtv">
                        <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                        <span><i class="fa fa-calendar"></i>Jun, 29, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>39</span> <span class="blog-comments"><i class="fa fa-comment"></i>99</span>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod.</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="sidebar col-md-3 col-sm-4 col-xs-12 col-sm-pull-8 col-md-pull-9">
          <div class="best-sale-product">
            <div class="sidebar-bar-title">
              <h3>Best sale of week</h3>
            </div>
            <div class="block-content">
              <div class="slider-items-products">
                <div id="best-sale-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
                    <div class="product-item">
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img15.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                          <span class="price">$19.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img14.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img13.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img12.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-item">
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img10.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                          <span class="price">$19.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img09.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img08.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                      <div class="best-sale-item">
                        <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img07.jpg" alt="Sample Product "></a></div>
                        <div class="products-block-right">
                          <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                          <span class="price">$89.99</span>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Hot deal -->
          <div class="hot-products">
            <div class="hot-deal"> <span class="title-text">Hot deal</span>
              <ul class="products-grid">
                <li class="item">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-hot-label hot-right">Hot</div>
                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('assets/') }}images/products/img01.jpg" alt=""></a>
                        <div class="jtv-box-timer">
                          <div class="countbox_1 jtv-timer-grid"></div>
                        </div>
                      </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--Hot deal -->
          <div class="banner4"><a href="#"><img alt="banner" src="{{ asset('assets/') }}images/top-banner1.jpg"></a></div>
          <div class="block special-product">
            <div class="sidebar-bar-title">
              <h3>Special Products</h3>
            </div>
            <div class="block-content">
              <ul>
                <li class="item">
                  <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img01.jpg" alt="Sample Product "></a></div>
                  <div class="products-block-right">
                    <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                    <span class="price">$19.99</span>
                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                  </div>
                </li>
                <li class="item">
                  <div class="products-block-left"> <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('assets/') }}images/products/img02.jpg" alt="Sample Product "></a></div>
                  <div class="products-block-right">
                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                    <span class="price">$89.99</span>
                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Testimonials Box -->
          <div class="testimonials">
            <div class="slider-items-products">
              <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                <div class="slider-items slider-width-col4 ">
                  <div class="holder">
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                      minim veniam, quis nostrud exercitation. </p>
                    <div class="thumb"> <img src="{{ asset('assets/') }}images/testimonials-img3.jpg" alt="testimonials img"> </div>
                    <div class="author"> <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong></div>
                  </div>
                  <div class="holder">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                      ex ea commodo consequat. </p>
                    <div class="thumb"> <img src="{{ asset('assets/') }}images/testimonials-img1.jpg" alt="testimonials img"> </div>
                    <div class="author"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong></div>
                  </div>
                  <div class="holder">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="thumb"> <img src="{{ asset('assets/') }}images/testimonials-img2.jpg" alt="testimonials img"> </div>
                    <div class="author"> <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                  </div>
                  <div class="holder">
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                      minim veniam, quis nostrud exercitation.</p>
                    <div class="thumb"> <img src="{{ asset('assets/') }}images/testimonials-img4.jpg" alt="testimonials img"> </div>
                    <div class="author"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- End Testimonials Box -->
          <div class="block popular-tags-area ">
            <div class="sidebar-bar-title">
              <h3>Popular Tags</h3>
            </div>
            <div class="tag">
              <ul>
                <li><a href="#">Boys</a></li>
                <li><a href="#">Camera</a></li>
                <li><a href="#">good</a></li>
                <li><a href="#">Computers</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">clothes</a></li>
                <li><a href="#">girl</a></li>
                <li><a href="#">shoes</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">accessoties</a></li>
                <li><a href="#">View All Tags</a></li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  
  <!-- end main container --> 
  
  <!-- category area start -->
  <div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="jtv-single-cat">
            <div class="page-header">
              <h2>MOST POPULAR</h2>
            </div>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="{{ asset('assets/') }}images/products/img10.jpg" alt=""> <img class="secondary-img" src="{{ asset('assets/') }}images/products/img11.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="{{ asset('assets/') }}images/products/img12.jpg" alt=""> <img class="secondary-img" src="{{ asset('assets/') }}images/products/img13.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="{{ asset('assets/') }}images/products/img14.jpg" alt=""> <img class="secondary-img" src="{{ asset('assets/') }}images/products/img15.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="{{ asset('assets/') }}images/products/img02.jpg" alt=""> <img class="secondary-img" src="{{ asset('assets/') }}images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="kid-banner"> <a href="#"> <img src="{{ asset('assets/') }}images/banner6.jpg" alt="banner"></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- category-area end --> 
  
  <!-- our clients Slider -->
  
  <div class="our-clients">
    <div class="slider-items-products">
      <div id="our-clients-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col6"> 
          
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand1.html" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand2.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand3.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand4.png" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand5.png" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand6.png" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#"><img src="{{ asset('assets/') }}images/brand7.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-service">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div class="bottom-service-box">
          <div class="box-outer">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="service-box-center"> <span class="bottom-service-title">Buy 2 items</span>
                <div class="description">
                  <div class="heading">Get one for free!</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
              <div class="service-box-center"> <span class="bottom-service-title">Daily Sales</span>
                <div class="description">
                  <div class="heading">Today up to 45% off!</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
              <div class="service-box-center"> <span class="bottom-service-title">NEW ARRIVAL</span>
                <div class="description">
                  <div class="heading">Sale up to 75% off</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
              <div class="service-box-center"> <span class="bottom-service-title">UpTO 45% off</span>
                <div class="description">
                  <div class="heading">Your first purchase</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  
  <footer>
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3">
            <div class="footer-logo"><a href="index.html"><img src="{{ asset('assets/') }}images/logo.png" alt="fotter logo"></a>
              <p>Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <h3 class="">Sign up for newsletter</h3>
            <span>Get the latest deals and special offers</span></div>
          <div class="col-md-5 col-sm-6">
            <form id="newsletter-validate-detail" method="post" action="#">
              <div class="newsletter-inner">
                <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="#s">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li> <a href="sitemap.html"> Sites Map </a> </li>
                <li> <a href="#">News</a> </li>
                <li> <a href="#">Trends</a> </li>
                <li> <a href="about_us.html">About Us</a> </li>
                <li> <a href="contact_us.html">Contact Us</a> </li>
                <li> <a href="#">My Orders</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="account_page.html">Account</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li> <a href="#">Return Policy</a> </li>
                <li> <a href="#">Special</a> </li>
                <li> <a href="#">Lookbook</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <h3 class="links-title">Contact us</h3>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p>Support@themes.com</p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>(800) 0123 456 789</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p> My Company, 12/34 - West 21st Street, New York, USA</p>
            </div>
          </div>
          <div class="social">
            <ul class="inline-mode">
              <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
              <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
              <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
              <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
              <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2016 <a href="#"> MyStore </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>
                <li><a href="#"><img title="Visa" alt="Visa" src="{{ asset('assets/') }}images/visa.png"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" src="{{ asset('assets/') }}images/paypal.png"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" src="{{ asset('assets/') }}images/discover.png"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" src="{{ asset('assets/') }}images/master-card.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="totop"> </a> 
  <!-- End Footer --> 
  
  <!--Newsletter Popup Start-->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog newsletter-popup">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-body">
          <h4 class="modal-title">Don't Miss out</h4>
          <form id="newsletter-form" method="post" action="#">
            <div class="content-subscribe">
              <div class="form-subscribe-header">
                <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
              </div>
              <div class="input-box">
                <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
              </div>
              <div class="actions">
                <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
          <div class="subscribe-bottom">
            <input name="notshowpopup" id="notshowpopup" type="checkbox">
            Don’t show this popup again </div>
        </div>
      </div>
    </div>
  </div>
  <!--End of Newsletter Popup--> 
  
</div>

<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 

<!-- Mean Menu js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.js') }}"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="{{ asset('assets/js/countdown.js') }}"></script> 

<!-- wow JS --> 
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script> 

<!--cloud-zoom js --> 
<script type="text/javascript" src="{{ asset('assets/js/cloud-zoom.js') }}"></script> 

<!-- main js --> 
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.nivo.slider.js') }}"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/16 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/Version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 02:12:20 GMT -->
</html>