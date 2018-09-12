<link rel="stylesheet" href="View/home-nav-bar/home_navbar.css">
<div class="header">
        <div class="flex-container">
            <div class="flex-item" style="margin-right: 10%">
                <a href="./index.php" class="logo">
                    <i class="fab fa-facebook-square fa-lg"></i>
                </a>

                <input type="search" class="serch" placeholder="Serch">
                <button type="button" class="btn-serch">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="flex-item">
                <a href="#" class="btn-nav text-white" id="btn_profile">
                    <!--profile-->
                    <img src="./images/yagoubi_profile.jpg" class="img-nav-profile" width="24" height="24" alt="profile">
                    <?php echo ucfirst($_SESSION['firstname']) ?>
                </a>
                <a href="./index.php" class="btn-nav text-white">
                    <!--home-->
                    Home
                </a>
                <a href="#" class="btn-nav text-white">
                    <!--Find Friends-->
                    Find Friends
                </a>
            </div>
            <div class="flex-item">

                <a href="#" class="btn-nav text-gray" id="btn_nav_friend_requests">
                    <!--Friend Requests-->
                    <i class="fas fa-user-friends fa-lg"></i>
                    <sup>7</sup>
                    <div class="collapse" id="collapse_friend_requests">
                        <div class="card">

                            <div class="card-body">
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="btn-nav text-gray" id="btn_nav_messenger">
                    <i class="fab fa-facebook-messenger fa-lg"></i>
                    <sup id="new_messgae_badge"></sup>
                    <div class="collapse" id="collapse_messenger">
                        <div class="card">

                            <div class="card-body" id="new_message_card">
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="btn-nav text-gray" id="btn_nav_notifications">
                    <i class="far fa-bell fa-lg"></i>
                    <sup>7</sup>
                    <div class="collapse" id="collapse_notifications">
                        <div class="card">

                            <div class="card-body">
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="flex-item">
                <a href="#" class="btn-nav text-gray" id="btn_nav_quick_help">
                    <i class="fas fa-question-circle fa-lg"></i>
                    <sup></sup>
                    <div class="collapse" id="collapse_quick_help">
                        <div class="card">

                            <div class="card-body">
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                                <h1>hello collapse</h1>
                            </div>
                        </div>
                    </div>
                </a>
              <span  class="btn-nav text-gray" id="btn_nav_log_out_card">
                    <i class="fas fa-caret-down fa-lg"></i>
                    <sup></sup>
                    <div class="collapse" id="collapse_log_out_card">
                        <div class="card" style="padding:0;">

                            <div class="card-body" style="padding:0;">
                                <div class="dropdown-menu">
                                   <a href="#" id="logout_btn">Logout</a>
                                    <a href="./">Logout  2</a>
                                    <a href="./">Logout  2</a>
                                    <a href="./">Logout  2</a>

                                </div>
                            </div>
                        </div>
                    </div>
</span>
            </div>

        </div>

    </div>
