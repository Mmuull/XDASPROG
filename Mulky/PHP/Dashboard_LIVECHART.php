<!DOCTYPE html>
<html lang="en">
<head>
    <title>LiveChart</title>
    <link rel="stylesheet" href="Dashboard_LIVECHART.css">
</head>
<body>
    <div class="canvas-content">
        <!-- Navigatior Bar -->
        <header>
            <div class="navbar" id="navbar">
                <nav class="navbar">
                    <div id="navbar-left" class="navbar" style="position: fixed;">
                        <a href="#navbar-vertical" style="width: auto; margin-top: 5px; margin-left: 16px; margin-right: 10px; padding: 0;">
                            <img class="navbar" src="Media/Navicon/list.svg" alt="list_navicon" style="width: 20px;"></a>
                        </li>
                        <a href="Dashboard_LIVECHART.php" style="padding: 0; height: inherit;">
                            <img class="navbar" src="Media/Image/logo_livechart.png" alt="Logo">
                        </a> 
                        <a href="#browse" class="navbar navbar-left">Browse</a>
                        <a href="#seasons" class="navbar navbar-left">Seasons</a>
                        <a href="#schedule" class="navbar navbar-left">Schedule</a>
                        <a href="#headlines" class="navbar navbar-left">Headlines</a>
                        <a href="#videos" class="navbar navbar-left">Videos</a>
                    </div>
                    <div id="navbar-right" class="navbar">
                        <a href="#myaccount" class="navbar-right"><img src="Media/Navicon/user.svg" alt="myaccount_navicon"></a>
                        <a href="#notification" class="navbar-right"><img src="Media/Navicon/notification.svg" alt="notification_navicon"></a>
                        <a href="#mylist" class="navbar-right"><img src="Media/Navicon/bookmark.svg" alt="mylist_navicon"></a>
                        <a href="#search" class="navbar-right"><img src="Media/Navicon/search.svg" alt="search_navicon"></a>
                    </div>
                </nav>
            </div>
        </header>
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-box">
                <div class="page-header-box-content arrow">
                    <img src="Media/Navicon/left-arrow.svg" alt="arrow-left" style="width: 30px; ">
                </div>
                <div class="page-header-box-content title">
                    <div class="page-header-box-content sub_title">January 2023 - March 2023</div>
                    <h1 style="margin: 0;padding: 0; font-weight: normal;">Winter 2023 Anime</h1>
                </div>
                <div class="page-header-box-content arrow">
                    <img src="Media/Navicon/right-arrow.svg" alt="arrow-right" style="width: 30px; ">
                </div>
            </div>
            <div class="page-header-tab">
                <nav class="page-header-tab">
                    <ul>
                        <li class="page-header-tab-content active"><a href="#television">Television</a></li>
                        <li class="page-header-tab-content"><a href="#movies">Movies</a></li>
                        <li class="page-header-tab-content"><a href="#ovas">OVAs</a></li>
                        <li class="page-header-tab-content"><a href="#all">All</a></li>
                        <li class="page-header-tab-content"><a href="#ranking">♛</a></li>
                        <li class="page-header-tab-content"><a href="#imagechart"><img src="Media/Navicon/image.svg" alt="imagechart" style="vertical-align: middle;"></a></li>
                    </ul>
                </nav>
            </div>
            <hr style="opacity: 50%;">
        </div>


        <!-- Options Bar -->
        <div class="page-option">
            <form action="Dashboard_LIVECHART.php">
                <div class="page-option-box page-option-box-v1">
                    <span class="page-option-box">
                        <label for="sorting">Sort by:</label>
                        <select name="Sort" id="sorting btn" class="input">
                            <option value="avgrating">Avgrating</option>
                            <option value="airdate">Airdate</option>
                            <option value="countdown">Countdown</option>
                            <option value="modified">Modified</option>
                            <option value="popularity" selected disabled>Popularity</option>
                            <option value="title">Title</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <select name="Titles" id="titles btn" class="input">
                            <option value="romaji-titles">Romaji Titles</option>
                            <option value="english-titles">English Titles</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <label for="ongoing">Ongoing Filter:</label>
                        <select name="On going" id="ongoing btn" class="input">
                            <option value="hideall">Hide all</option>
                            <option value="showfromlast_1_season">Show from last season</option>
                            <option value="showfromlast_2_seasons">Show from last 2 seasons</option>
                            <option value="showfromlast_3_seasons">Show from last 3 seasons</option>
                            <option value="showall">Show all</option>
                        </select>
                    </span>
                    <span class="page-option-box">
                        <button class="page-option-box-content">Mark Filter</button>
                    </span>
                </div>
                <div class="page-option-box page-option-box-v2">
                    <span class="page-option-box" >
                        <button class="page-option-box-content">Prefences</button>
                    </span>
                    <span class="page-option-box">
                        <input type="search" name="Search" id="search btn" class="input" placeholder="Search this page">
                    </span>
                </div>
            </form>
        </div>

        <!-- Articles -->
        <div class="page-articles">
            <div class="main-title"></div>
            <div class="anime-tags"></div>
            <div class="anime-studios"></div>
            <div class="anime-meta-data">
                <div class="sources"></div>
                <div class="episodes"></div>
            </div>
            <div class="anime-synopsis">
                <p></p>
            </div>
            <div class="related-links"></div>

        </div>

    </div>
</body>
</html>