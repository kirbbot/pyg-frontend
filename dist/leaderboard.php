<?php include 'head.php' ?>

<body>
        <nav id="Nav">
                <h1 class="nav-logo">Paws Your Game</h1>
                <ul>
                        <li><a href="our-tail.html">Our Tail</a></li>
                        <li><a href="leaderboard.html">Leaderboard</a></li>
                        <li><a href="news.html">News</a></li>
                        <li class="nav-search">
                                <form>
                                        <button>
                                                <i class="icon icon-standard">search</i>
                                        </button>
                                        <input type="text" name="search" placeholder="Search for Players / Shelters / Donors">
                                </form>
                        </li>
                        <li class="nav-signin"><a href="sign-in.html">Sign In</a></li>
                        <li class="nav-donate"><a href="donate.html">Donate</a></li>
                </ul>
        </nav>
        <div id="Leaderboard" class="content">
                <ul class="leaderboard-list">
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank">1</span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_up">navigateup</span>
                                </span>
                                <span class="leaderboard-list-item-amount">$42,543</span>
                        </li>
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank">2</span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_down">navigatedown</span>
                                </span>
                                <span class="leaderboard-list-item-amount">$41,698</span>
                        </li>
                        <?php for($i=2; $i<=40; $i++){ ?>
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank"><?php echo $i ?></span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_down"></span>
                                </span>
                                <span class="leaderboard-list-item-amount">$20,000</span>
                        </li>
                        <?php } ?>
                </ul> <!--end leaderboard-list -->
        </div> <!--end leaderboard-->
</body>