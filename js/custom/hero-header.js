function render_hero_header() {
    
    if ($( '.hero-header' ).length == 0) {
        $('.top-bar').css('background', 'white');
        $('.top-bar').css('box-shadow', '0px 0px 15px -3px #333');
        $('.top-bar img').css('margin-left', '0px');
        $('.top-bar ul li a').css('color', '#666666');
    
    // If a hero header exists, render the effects
    } else {
    
        // Calculate Window Height
        var hero_height = null,
            scroll_position = $(document).scrollTop(),
            desc_scroll_effect_ratio = 0.1;

        hero_height = $(window).height();

        //Calculate Main Menu Background Position Relative to Hero Header
        var menu_position = (scroll_position / hero_height);

        //$('.main-menu').css('background', 'rgba( 255, 255, 255, ' + main_menu_opacity + ')');

        if (menu_position > 0.8) {
            $('.top-bar').css('background', 'white');
            $('.top-bar').css('box-shadow', '0px 0px 15px -3px #333');
            $('.top-bar img').css('margin-left', '0px');
            $('.top-bar li a').css('color', '#666666');
        } else {
            $('.top-bar').css('background', 'transparent');
            $('.top-bar').css('box-shadow', 'none');
            $('.top-bar img').css('margin-left', '-70px');
            $('.top-bar li a').css('color', '#FFFFFF');
        }

        //Parralax The Hero Description
        var description_top = $('.hero-description').css('top', '20%'),
            description_top = parseInt($('.hero-description').css('top')) + (scroll_position/3.6);

        $('.hero-description').css('top', description_top + 'px');
        $('.hero-description').css('opacity', (1 - (scroll_position - (hero_height * desc_scroll_effect_ratio)) / (hero_height * (0.2 - desc_scroll_effect_ratio))));
    
    }
    
    
}

$(document).ready(render_hero_header);
$(window).resize(render_hero_header);
$(document).scroll(render_hero_header);