// https://isotope.metafizzy.co/filtering.html
// https://jsfiddle.net/shirandror/rvnrk2kc/
$(document).ready(function () {
    $grid = $('.grid');
    $grid.isotope();

    $('#project-filter-all-button, #project-filter-web-button, #project-filter-mobile-button').click(function () {
        // remove active-btn class from everywhere 
        $('.active-btn').removeClass('active-btn');
        // add active-btn class on the element
        $(this).addClass('active-btn');

        var id = $(this).attr('id');
        var className = id.replace("-button", "");

        if (className.includes('all')) {
            $grid.isotope({
                filter: '*'
            });
            return false;
        }
        $grid.isotope({
            filter: '.' + className
        });
    });
});