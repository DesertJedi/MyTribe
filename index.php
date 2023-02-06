<!DOCTYPE html>
<html>
<meta charset='UTF-8'>
<title>NomadConnect</title>
<link rel="stylesheet" href="assets\css\menu.css">
<script src="assets\js\main.js"></script>

<body>
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
            <li><a href='http://'>Home</a></li>
            <li><a href='http://'>Profile</a></li>
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
            <li><a href='http://'>Messages</a></li>
        </ul>
    </nav>
</body>
</html>


