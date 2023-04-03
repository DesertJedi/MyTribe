$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });

    $(".side_panel_conversation").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        
        var conversating_user = $(this).find(".user_info_text" ).text();
        alert(conversating_user);
    });
});