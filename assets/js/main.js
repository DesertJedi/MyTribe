
// Set listeners & initial classes
$( document ).ready(function() {
    var body = $('body');
    var settings_menu = $('#settings-menu');
    var settings_cog = $('#settings-cog');
    var btnTogglePink = $('#btn_colorTogglePink');
    var btnToggleTeal = $('#btn_colorToggleTeal');
    var btnToggleGrey = $('#btn_colorToggleGrey');
    var btnToggleBackgroundImage = $('#btn_backgroundImageToggle');
    var btnCloseSettingsWindow = $('#btn_close_settings_menu');

    body.addClass('regular_opacity');
    settings_menu.addClass('hide_settings_menu');
    settings_cog.on('click',show_settings_menu);
    btnTogglePink.on('click',toggle_color_pink);
    btnToggleTeal.on('click',toggle_color_teal);
    btnToggleGrey.on('click',toggle_color_grey);
    btnToggleBackgroundImage.on('click', toggle_background_image);
    btnCloseSettingsWindow.on('click', hide_settings_menu);

});
// End listeners

function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
        document.getElementById('menu').style.borderBottomRightRadius = '0';
        document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }else{
        document.getElementById('menu').style.borderRadius = '35px';
    }
}

function show_settings_menu() {
    var settings_menu = $('#settings-menu');
    var sticky_right = $('#sticky-right');
    var cards = $('.cards');
    var page_header = $('.page-header');

    if (settings_menu.hasClass('hide_settings_menu')) {
        settings_menu.removeClass('hide_settings_menu');
        cards.removeClass('regular_opacity');
        cards.addClass('faded_opacity');
        page_header.removeClass('regular_opacity');
        page_header.addClass('faded_opacity');
        sticky_right.removeClass('regular_opacity');
        sticky_right.addClass('faded_opacity');
        settings_menu.addClass('settings_menu');
        settings_menu.addClass('display_settings_menu');
        // menu.opacity('100%');
    } else {
        settings_menu.removeClass('display_settings_menu');
        settings_menu.addClass('hide_settings_menu');
        cards.removeClass('faded_opacity');
        cards.addClass('regular_opacity');
        page_header.removeClass('faded_opacity');
        page_header.addClass('regular_opacity');
        sticky_right.removeClass('faded_opacity');
        sticky_right.addClass('regular_opacity');
    }
}

function hide_settings_menu() {
    var settings_menu = $('#settings-menu');
    var sticky_right = $('#sticky-right');
    var cards = $('.cards');
    var page_header = $('.page-header');

    settings_menu.removeClass('display_settings_menu');
    settings_menu.addClass('hide_settings_menu');
    cards.removeClass('faded_opacity');
    cards.addClass('regular_opacity');
    page_header.removeClass('faded_opacity');
    page_header.addClass('regular_opacity');
    sticky_right.removeClass('faded_opacity');
    sticky_right.addClass('regular_opacity');
}

function toggle_color_pink() {
    var body = $('body');

    body.removeClass('toggle_background_image');
    body.addClass('toggle_color_pink');
}
function toggle_color_teal() {
    var body = $('body');

    body.removeClass('toggle_background_image');
    body.removeClass('toggle_color_pink');
    body.removeClass('toggle_color_grey');

    body.addClass('toggle_color_teal');
}
function toggle_color_grey() {
    var body = $('body');

    body.removeClass('toggle_background_image');
    body.removeClass('toggle_color_pink');
    body.removeClass('toggle_color_teal');

    body.addClass('toggle_color_grey');
}
function toggle_background_image() {
    var body = $('body');

    body.removeClass('toggle_color_teal');
    body.removeClass('toggle_color_pink');
    body.removeClass('toggle_color_grey');

    body.addClass('toggle_background_image');
}

