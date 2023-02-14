<?php
$body = "";
$body .= "<div class='settings_menu_header'>My Settings</div>";

$body .= "<div class='settings_menu_row'>";
$body .= "<span class='settings_menu_column1'>";
$body .= "Color Theme";
$body .= "</span>";
$body .= "<span class='settings_menu_column2'>";
$body .= "<button class='theme_color_toggle' id='btn_colorTogglePink'></button>";
$body .= "<button class='theme_color_toggle' id='btn_colorToggleTeal'></button>";
$body .= "<button class='theme_color_toggle' id='btn_colorToggleGrey'></button>";
$body .= "<button class='theme_color_toggle' id='btn_backgroundImageToggle'></button>";
$body .= "</span>";
$body .= "</div>";

$body .= "<div class='settings_menu_row'>";
$body .= "<span class='settings_menu_column1'>";
$body .= "Notifications";
$body .= "</span>";
$body .= "<span class='settings_menu_column2'>";
$body .= "<span class='btn-group-toggle'>";
$body .= "<button class='btn toggle_buttons' id='btn_ToggleNotifications_On'>On</button>";
$body .= "<button class='btn toggle_buttons'  id='btn_ToggleNotifications_Off'>Off</button>";
$body .= "</span>";
$body .= "</span>";
$body .= "</div>";

$body .= "<div class='settings_menu_row'>";
$body .= "<span class='settings_menu_column1'>";
$body .= "Profile Visibility";
$body .= "</span>";
$body .= "<span class='settings_menu_column2'>";
$body .= "<span class='btn-group-toggle'>";
$body .= "<button class='btn btn-group-toggle toggle_buttons'  id='btn_ToggleProfileVisibility_Public'>Public</button>";
$body .= "<button class='btn btn-group-toggle toggle_buttons' id='btn_ToggleProfileVisibility_Private'>Private</button>";
$body .= "</span>";
$body .= "</span>";
$body .= "</div>";

$body .= "<div class='settings_menu_row'>";
$body .= "<span class='settings_menu_column1'>";
$body .= "Post Visibility";
$body .= "</span>";
$body .= "<span class='settings_menu_column2'>";
$body .= "<div class='btn-group'>";
$body .= "<span class='btn-group-toggle'>";
$body .= "<button class='btn btn-group-toggle toggle_buttons'  id='btn_ToggleProfileVisibility_Public'>Public</button>";
$body .= "<button class='btn btn-group-toggle toggle_buttons' id='btn_ToggleProfileVisibility_Private'>Private</button>";
$body .= "<button class='btn btn-group-toggle toggle_buttons' id='btn_ToggleProfileVisibility_Tribe'>Tribe Only</button>";
$body .= "</span>";
$body .= "</span>";
$body .= "</div>";
echo $body;
