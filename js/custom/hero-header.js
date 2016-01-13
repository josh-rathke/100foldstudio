function render_hero_header() {
    
    if ($( '.hero-header' ).length == 0) {
        $('.top-bar').css('background', 'white');
        $('.top-bar').css('box-shadow', '0px 0px 15px -3px #333');
        $('.top-bar img').css('margin-left', '0px');
        $('.top-bar ul li a').css('color', '#666666');
    
    // If a hero header exists, render the effects
    }
    
    
}

$(document).ready(render_hero_header);
$(window).resize(render_hero_header);
$(document).scroll(render_hero_header);