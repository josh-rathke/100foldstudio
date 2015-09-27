function render_hero_header() {
    // Calculate Window Height
    var hero_height = null,
        scroll_position = $(document).scrollTop(),
        desc_scroll_effect_ratio = 0.3;
    
    hero_height = $(window).height();
    
    //Calculate Main Menu Background Position Relative to Hero Header
    var menu_position = (scroll_position / hero_height);
    
    //$('.main-menu').css('background', 'rgba( 255, 255, 255, ' + main_menu_opacity + ')');
    
    if (menu_position > 0.7) {
        $('.top-bar-menu').css('background', '#FFFFFF');
        $('.top-bar-menu').css('box-shadow', '0px 0px 15px -3px #333');
        $('.top-bar-menu li a').css('color', '#444444');
        $('.top-bar-menu img').css('background', '#7ACDD8');
        $('.top-bar-menu img').css('margin-left', '0px');
    } else {
        $('.top-bar-menu').css('background', 'transparent');
        $('.top-bar-menu').css('box-shadow', 'none');
        $('.top-bar-menu li a').css('color', '#FFFFFF');
        $('.top-bar-menu img').css('background', 'transparent');
        $('.top-bar-menu img').css('margin-left', '-70px');
    }
    
    //Parralax The Hero Description
    var description_top = $('.hero-description').css('top', '20%'),
        description_top = parseInt($('.hero-description').css('top')) + (scroll_position/3.6);
    
    $('.hero-description').css('top', description_top + 'px');
    $('.hero-description').css('opacity', (1 - (scroll_position - (hero_height * desc_scroll_effect_ratio)) / (hero_height * (0.8 - desc_scroll_effect_ratio))));
    
    
}

$(document).ready(render_hero_header);
$(window).resize(render_hero_header);
$(document).scroll(render_hero_header);