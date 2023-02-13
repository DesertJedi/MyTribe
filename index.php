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
    <link rel='stylesheet' href='assets/css/main.css'>
    <link rel='stylesheet' href='assets/css/menu.css'>
    <link rel='stylesheet' href='assets/css/accordion.css'>
    <link rel='stylesheet' href='assets/css/cards.css'>

    <script src='vendor/jquery/jquery-3.6.3.js'></script>
    <script src='assets/js/main.js'></script>
    <script src='assets/js/accordion.js'></script>
</head>
<body>
    <div id='sticky-right'>
        <nav id='menu'>
            <div id='site-logo'><p id='site-logo-text'><i class='fa-solid fa-leaf'></i>My Tribe</p></div>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul>
                <!-- TODO: When between phone width and half width not all icons are showing - make a few different view sizes so everything can be seen at any width -->
                <!-- TODO: Scrolling from expanded Events to Groups goes past Groups so it doesn't expand - maybe fix -->
                <li><a href='http://'>My Tribe<i class='fa-solid fa-joint navmenu_icons'></i></a></li> <!-- this is the new "Home" link -->
                <li><a class='dropdown-arrow' href='http://'>Gatherings</a>
                    <ul class='sub-menus slide-left'>
                        <li><a href='http://'>My Gatherings</a></li>
                        <li><a href='http://'>New Gatherings</a></li>
                        <li><a href='http://'>Search Gatherings</a></li>
                    </ul>
                </li>
                <li><a class='dropdown-arrow' href='http://'>Groups</a>
                    <ul class='sub-menus slide-left'>
                        <li><a href='http://'>My Groups</a></li>
                        <li><a href='http://'>Search Groups</a></li>
                    </ul>
                </li>
                <li><a href='http://'>Messages<i class='fa-solid fa-message navmenu_icons'></i></a></li>
                <li><a href='http://'>My Profile<i class='fa-solid navmenu_icons fa-user-astronaut'></i></a></li>
                <li><a href='http://'>Peace Out<i class='fa-solid navmenu_icons fa-hand-peace'></i></a></li>
            </ul>
<!--            <div id='anti-ad'>-->
<!--                <div id='antiad-header-text'>Affirmation for Happiness</div>-->
<!--                <div id='antiad-ad-text'>I am allowing myself to feel good.</div>-->
<!--            </div>-->
            <ul class='accordion' id='accordion'>
                <li>
                    <div class='link'>
                        <i class="fa fa-chevron-down"></i> Chats
                    </div>
                    <ul class='submenu'> <!-- using li like below is not required can be p -->
                        <li>Chat 1</li>
                        <li>Chat 2</li>
                        <li>Chat 3</li>
                    </ul>
                </li>
                <li>
                    <div class='link'>
                        <p>Accordion 2<i class="fa fa-chevron-down"></i></p>
                    </div>
                    <ul class='submenu'>
                        <p>Just a bunch of random shit</p>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <ul class="cards">
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_1.jpg" class="" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_1.png" alt="" /> <!-- user's profile thumb -->
                                <div class="card__header-text">
                                    <h3 class="card__title">Scooby Doo</h3> <!-- user's name -->
                                    <span class="card__status">1 hour ago</span> <!-- time since posted -->
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_2.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_2.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sandra Mann</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_3.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_3.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Kenny Crewse</h3>
                                    <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span> <!-- a short description that is shown over image - may be too big if image too small -->
                                    <span class="card__status">1 hour ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="assets/images/test_images/tribe_update_images/tribe_update_4.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="assets/images/test_images/profile_thumbs/user_profile_thumb_4.png" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">Sky Tiponi Dakota</h3>
                                    <span class="card__status">3 hours ago</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </a>
                </li>
            </ul>


</body>
</html>


