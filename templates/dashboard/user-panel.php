<main>
    <!-- Start Breadcrumb Area -->
    <div class="page-area bread-pd">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Dashboard</h2>
                        <div class="bread-come">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb purple lighten-4">
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-items"><a class="black-text" href="#">Dashboard</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <div class="notify-overlay"></div>
    <div class="dsahboard-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <aside class="sidebar">
                        <div class="dashboard-side">
                            <div class="dashboard-head">
                                <div class="dashboard-profile">
                                    <img src="<?= $assets ?>/img/about/profile.png" alt="">
                                    <div class="profile-content">
                                        <span class="pro-name">jhon Deo</span>
                                        <span class="pro-number">jonedoe@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-menu">
                                <ul>
                                    <li class="active"><a href="user-panel.html"><i class="ti-dashboard"></i>Dashboard</a></li>
                                    <li><a href="user-deposit.html"><i class="ti-wallet"></i>Deposit Money</a></li>
                                    <li><a href="user-withdraw.html"><i class="ti-import"></i>Withdraw Money</a></li>
                                    <li><a href="user-invest.html"><i class="ti-new-window"></i>Total Investment</a></li>
                                    <li><a href="user-transection.html"><i class="ti-layout-list-thumb"></i>Transection</a></li>
                                    <li><a href="user-notifecations.html"><i class="ti-bell"></i>Notifecations</a></li>
                                    <li><a href="user-info.html"><i class="ti-settings"></i>Settings</a></li>
                                    <li><a href="#"><i class="ti-shift-right"></i>Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="dashboard-top">
                        <div class="userboard">
                            <div class="dashboard-header-right d-flex flex-wrap align-items-center">
                                <div class="single-left-icon">
                                    <div class="search-inner">
                                        <form action="#">
                                            <div class="search-option">
                                                <input type="text" placeholder="Search...">
                                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-right-icon">
                                    <ul class="dashboard-right-menus">
                                        <li>
                                            <a href="#0">
                                                <i class="ti-bell"></i>
                                                <span class="number-1">4</span>
                                            </a>
                                            <div class="notification-area">
                                                <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                    <span>4 New Notifications</span>
                                                    <a href="#0">Clear</a>
                                                </div>
                                                <ul class="notification-body">
                                                    <li>
                                                        <a href="#0">
                                                            <div class="noti-line">deposite money from Don</div>
                                                            <span class="info-n">2 Sec ago</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="noti-line">deposite money from Don</div>
                                                            <span class="info-n">2 Sec ago</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="noti-line">deposite money from Don</div>
                                                            <span class="info-n">2 Sec ago</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notifacation-footer text-center">
                                                    <a href="#0" class="view-all">View All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#0" class="author">
                                                <i class="ti-user"></i>
                                            </a>
                                            <div class="notification-area">
                                                <div class="author-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#0"><i class="ti-user"></i>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0"><i class="ti-settings"></i>Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0"><i class="ti-shift-right"></i>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row dashboard-content">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Deposite</span>
                                        <span class="pro-money">$500</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-035-savings"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Withdraw</span>
                                        <span class="pro-money">$500</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-041-umbrella"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Invest</span>
                                        <span class="pro-money">$500</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-004-bar-chart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Wallet</span>
                                        <span class="pro-money">$1200</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-042-wallet"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Referral</span>
                                        <span class="pro-money">$500</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-010-cloud"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <span class="pro-name">Profite</span>
                                        <span class="pro-money">$500</span>
                                    </div>
                                    <div class="invest-tumb">
                                        <i class="flaticon-027-money-bag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="send-money-form transection-log">
                                <div class="form-text">
                                    <h4 class="form-top">Transection Log</h4>
                                    <div class="form-inner table-inner">
                                        <table>
                                            <tr>
                                                <th>Date</th>
                                                <th>Transaction ID</th>
                                                <th>Amount</th>
                                                <th>Details</th>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                            <tr>
                                                <td>10/03/2021</td>
                                                <td>XE2GB4DF5X</td>
                                                <td>$600</td>
                                                <td>Payment recieve from Don</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Start Footer Area -->
<footer class="footer1 dashboard-footer">
    <!-- Start Footer Bottom Area -->
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="copyright">
                        <p>
                            Copyright © 2021
                            <a href="#">GOLDHYIP</a> All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!-- End Footer Area -->

<!-- All JS here -->

<!-- modernizr JS -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Poper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- Counter js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- waypoint js -->
<script src="js/waypoints.js"></script>
<!-- magnific js -->
<script src="js/magnific.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>


<!-- Mirrored from rockstheme.com/rocks/live-goldhyip/user-panel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 09:23:21 GMT -->

</html>