<!DOCTYPE html>
<html>
<meta charset='UTF-8'>
<title>My Tribe</title>
<head>
    <link href='vendor/fontawesome/css/fontawesome.css' rel='stylesheet'>
    <link href='vendor/fontawesome/css/regular.css' rel='stylesheet'>
    <link href='vendor/fontawesome/css/solid.css' rel='stylesheet'>
    <link href='vendor/fontawesome/css/brands.css' rel='stylesheet'>
    <link href='vendor/bootstrap/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='assets/css/webkits.css'>
    <link rel='stylesheet' href='assets/css/accordion.css'>
    <link rel='stylesheet' href='assets/css/cards.css'>
    <link rel='stylesheet' href='assets/css/main.css'>
    <link rel='stylesheet' href='assets/css/menu.css'>

    <script src='vendor/jquery/jquery-3.6.3.js'></script>
    <script src='assets/js/main.js'></script>
    <script src='assets/js/accordion.js'></script>
    <script src='assets/js/cards.js'></script>
</head>
<body>
    <div id='sticky-right'>
        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul class='accordion' id='accordion' style='border: 0;'>
                <!-- TODO: When between phone width and half width not all icons are showing - make a few different view sizes so everything can be seen at any width -->
                <!-- TODO: Scrolling from expanded Events to Groups goes past Groups so it doesn't expand - maybe fix -->
                <div style='border-bottom: 1px solid #333333'><a href='http://'>My Tribe <i class='fa fa-earth'></i></a></div>
                    <div class='link'>
                        <i class="fa fa-chevron-down"></i>  Gatherings
                    </div>
                    <ul class='submenu'>
                        <li>My Gatherings</li>
                        <li>New Gatherings</li>
                        <li>Search Gatherings</li>
                    </ul>
                    <div class='link'>
                        <i class='fa fa-chevron-down' href='http://'></i>  Groups
                    </div>
                    <ul class='submenu'>
                        <li>My Groups</li>
                        <li>Search <Groups></Groups></li>
                    </ul>
                <div class='link'>
                    <i class='fa-solid fa-message'></i>  Chats
                </div>
                <ul class='submenu'>
                    <li>Chat 1</li>
                    <li>Chat 2</li>
                    <li>Chat 3</li>
                </ul>
                <div class='link'>
                    <i class='fa-solid fa-user-astronaut'></i>  My Profile
                </div>
                <ul class='submenu'>
                    <li>View Profile</li>
                    <li>Edit Profile</li>
                </ul>
                <div class='link'>
                    <i class='fa-solid fa-hand-peace'></i>  Peace Out
                </div>
                <ul class='submenu'>
                    <li>Sign Out</li>
                    <li>Switch Accounts</li>
                </ul>
            </ul>
        </nav>
    </div>
    <ul class="cards">
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_1.jpg" class="" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_1.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Scooby Doo</h3> <!-- user's name -->
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span> <!-- time since posted -->
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_2.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_2.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Sandra Mann</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">3 hours ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_3.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_3.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Kenny Crewse</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_1.jpg" class="" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_1.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Scooby Doo</h3> <!-- user's name -->
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span> <!-- time since posted -->
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_2.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_2.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Sandra Mann</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">3 hours ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_3.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_3.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Kenny Crewse</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_1.jpg" class="" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_1.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Scooby Doo</h3> <!-- user's name -->
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span> <!-- time since posted -->
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_2.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_2.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Sandra Mann</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">3 hours ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_3.jpg" class="card_image" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_3.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Kenny Crewse</h3>
                            <span class="card_tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card_status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>
        </li>
    </ul>
</body>
</html>


