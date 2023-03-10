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
<body class='toggle_background_image'>
<div id='settings-menu' class='hide_settings_menu'>
<?php include_once('settings_menu.php'); ?>
</div>
<div class='page-header'>
    
    A <strike>Social</strike> Care Network.
    <button id='settings-cog'><i class='fa fa-cog'></i></button>

</div>
    <div id='sticky-right'>
        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul class='accordion' id='accordion' style='border: 0;'>
                <!-- TODO: When between phone width and half width not all icons are showing - make a few different view sizes so everything can be seen at any width -->
                <!-- TODO: Scrolling from expanded Events to Groups goes past Groups so it doesn't expand - maybe fix -->
                <div style='border-bottom: 1px solid #333333; width: 90%;'><a href='http://'>My Tribe <i class='fa fa-earth'></i></a></div>
                    <div class='    ' style='margin-top: .5em;'>
                        <a href='http://'><i class='fa fa-search'><span class='accordion_icon_text'> &nbsp;&nbsp;Find Tribe</span></i></a>
                    </div>
                    <div class='link'>
                        <i class="fa fa-drum"><span class='accordion_icon_text'> &nbsp;Gatherings</span></i>
                    </div>
                    <ul class='submenu'>
                        <li><a href='http://'>My Gatherings</a></li>
                        <li><a href='http://'>New Gatherings</a></li>
                        <li><a href='http://'>Search Gatherings</a></li>
                    </ul>
                    <div class='link'>
                        <i class='fa fa-user-group' href='http://'> <span class='accordion_icon_text'> &nbsp;Groups</span></i>
                    </div>
                    <ul class='submenu'>
                        <li><a href='http://'>My Groups</a></li>
                        <li><a href='http://'>Search Groups</a></li>
                    </ul>
                <div class='link'>
                    <i class='fa-solid fa-message'><span class='accordion_icon_text'> &nbsp;&nbsp;Chats</span></i>
                </div>
                <ul class='submenu'>
                    <li><a href='http://'>Chat 1</a></li>
                    <li><a href='http://'>Chat 2</a></li>
                    <li><a href='http://'>Chat 3</a></li>
                </ul>
                <div class='link'>
                    <i class='fa-solid fa-user-astronaut'><span class='accordion_icon_text'> &nbsp;&nbsp;My Profile</span></i>
                </div>
                <ul class='submenu'>
                    <li><a href='http://'>View Profile</a></li>
                    <li><a href='http://'>Edit Profile</a></li>
                </ul>
                <div class='link'>
                    <i class='fa-solid fa-hand-peace'><span class='accordion_icon_text'> &nbsp;&nbsp;Peace Out</span></i>
                </div>
                <ul class='submenu'>
                    <li><a href='http://'>Sign Out</a></li>
                    <li><a href='http://'>Switch Accounts</a></li>
                </ul>
            </ul>
            <br />
            <div id='antiad'>
                <div id='antiad-header-text'>Affirmation for Happiness</div>
                <div id='antiad-ad-text'>My happiness is reflected back to me in everything I attract.</div>
            </div>
        </nav>
    </div>
    <ul class="cards">
        <li>
            <a href="" class="card">
                <img src="assets/images/test_images/tribe_update_images/tribe_update_1.jpg" class="" alt="" />
                <div class="card_overlay">
                    <div class="card_header">
                        <svg class="card_arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Tenderheart_Bear.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Tenderheart Bear</h3> <!-- user's name -->
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Lotsa_Heart_Elephant.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Lotsa Heart Elephant</h3>
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Braveheart_Lion.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Braveheart Lion</h3>
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Tenderheart_Bear.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Tenderheart Bear</h3> <!-- user's name -->
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Lotsa_Heart_Elephant.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Lotsa Heart Elephant</h3>
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Proud_Heart_Cat.png" alt="" />
                        <div class="card_header-text">
                            <h3 class="card_user">Proud Heart Cat</h3>
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
                        <img class="card_thumb" src="assets/images/test_images/profile_thumbs/Lotsa_Heart_Elephant.png" alt="" /> <!-- user's profile thumb -->
                        <div class="card_header-text">
                            <h3 class="card_user">Lotsa Heart Elephant</h3> <!-- user's name -->
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


