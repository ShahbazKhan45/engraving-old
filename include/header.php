<header>
    <section class="topbar">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-3">
                    <p>Welcome to Engraving International</p>
                </div>
                <div class="col-md-9">
                    <ul class="top-menu menu">
                        <li>
                            <a href="javascript:"><i class="fal fa-map-marker-alt"></i> Store Locator </a>
                        </li>
                        <li>
                            <a href="javascript:"><i class="fal fa-truck"></i> Truck Your Order </a>
                        </li>
                        <li>
                            <a href="javascript:"><i class="fas fa-dollar-sign"></i>Dollar</a>
                        </li>
                        <li class="last">
                            <a href="javascript:"><i class="fal fa-user"></i> Register or Sign in </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="nav-bar" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="javascript:" class="logo">
                        <img src="<?php echo $siteurl ?>assets/images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="searchBar">
                        <input type="text" placeholder="Search for Products">
                        <select name="Categories" id="categ">
                            <option value="All Categories">All Categories</option>
                            <option value="Key Chain">Key Chain</option>
                            <option value="Flasks">Flasks</option>
                            <option value="Power Banks">Power Banks</option>
                        </select>
                        <button class="btn red"> <i class="fal fa-search"></i> </button>
                    </div>
                    <div class="threeIcons">
                        <ul>
                            <li>
                                <img src="<?php echo $siteurl ?>assets/images/com.png" alt="">
                            </li>
                            <li>
                                <i class="far fa-heart"></i>
                            </li>
                            <li>
                                <i class="fal fa-shopping-bag"></i> $1785.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row text-right">
                <div class="col">
                    <div class="mobile-screen">
                        <a href="javascript:" onclick="navOpen()" class="btn" id="list-btn">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <a href="javascript:" onclick="navClosed()" class="btn" id="cross">
                        <i class="fas fa-times"></i>
                    </a>
                    <nav class="mobile-view main-menu" id="menu-list">
                        <ul class="menu">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="<?php echo $siteurl ?>javascript:">
                                    Awards / Plaques
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:">Home</a>
                                    <a class="dropdown-item" href="<?php echo $siteurl ?>javascript:">About</a>
                                    <a class="dropdown-item" href="<?php echo $siteurl ?>javascript:">Services</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="<?php echo $siteurl ?>javascript:">
                                Drinkware
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:">Home</a>
                                    <a class="dropdown-item" href="<?php echo $siteurl ?>javascript:">About</a>
                                    <a class="dropdown-item" href="<?php echo $siteurl ?>javascript:">Services</a>
                                </div>
                            </li>
                            <li><a href="<?php echo $siteurl ?>javascript:">Drinkware</a></li>
                            <li><a href="<?php echo $siteurl ?>javascript:">Home</a></li>
                            <li><a href="<?php echo $siteurl ?>javascript:">Tumblers</a></li>
                            <li><a href="<?php echo $siteurl ?>javascript:" class="text-right">Free Shipping on Orders $50+</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>