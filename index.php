<!DOCTYPE html>
<html>
<meta charset='UTF-8'>
<title>NomadConnect</title>
<head>
    <link rel='stylesheet' href='assets/css/menu.css'>
    <link href="vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/regular.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/solid.css" rel="stylesheet">

    <script src='assets/js/main.js'></script>
</head>
<body>
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
            <li><a href='http://'>Home</a></li>
            <!-- TODO: When between phone width and half width not all icons are showing - make a few different view sizes so everything can be seen at any width
            <!-- TODO: Scrolling from expanded Events to Groups goes past Groups so it doesn't expand - maybe fix -->
            <li><a class='dropdown-arrow' href='http://'>Events</a>
                <ul class='sub-menus'>
                    <li><a href='http://'>My Events</a></li>
                    <li><a href='http://'>New Events</a></li>
                    <li><a href='http://'>Search Events</a></li>
                </ul>
            </li>
            <li><a class='dropdown-arrow' href='http://'>Groups</a>
                <ul class='sub-menus'>
                    <li><a href='http://'>My Groups</a></li>
                    <li><a href='http://'>Search Groups</a></li>
                </ul>
            </li>
            <li><a href='http://'><i class="fa-regular fa-message"></i></a></li>
            <li><a href='http://'><i class='fa-regular fa-user'></i></a></li>
            <li><a href='http://'><i class='fa-regular fa-hand-peace'></i></a></li>
        </ul>
    </nav>
</body>
</html>


