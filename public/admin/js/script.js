$(document).ready(function() {
    jQuery(document).on('click','.drop-d', function() {
        var dropdown = jQuery(this).find('.dropdown ');
        if(dropdown.hasClass('fa-angle-down')){
            dropdown.removeClass('fa-angle-down')
            dropdown.addClass('fa-angle-up')
            jQuery(this).find('.sub-menu').addClass('show');
        } else{
            dropdown.removeClass('fa-angle-up')
            dropdown.addClass('fa-angle-down')
            jQuery(this).find('.sub-menu').removeClass('show');
        }
    });

    jQuery('.nav-link').on('click', function() {
        jQuery('.nav-link').removeClass('active');
        jQuery(this).addClass('active');
    });
});
