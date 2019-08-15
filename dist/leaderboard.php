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
                        <li>
                              <span class="leaderboard-rank"></span>
                              <img class="leaderboard-avatar" src="#"  />
                              <span class="leaderboard-name"></span>
                              <span class="leaderboard-change"></span>
                              <span class="leaderboard-amount"></span>
                        </li>
                </ul> <!--end leaderboard-list -->
        </div> <!--end leaderboard-->
</body>