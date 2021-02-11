// $(document).ready(function () {
//     // https://bootsnipp.com/snippets/r1Z7d
//     $(".filter-button").click(function () {
//         var value = $(this).attr('data-filter');

//         if (value == "all") {
//             $('.filter').show('1000');
//         } else {
//             $(".filter").not('.' + value).hide('3000');
//             $('.filter').filter('.' + value).show('3000');
//         }
//     });
// });

// https://isotope.metafizzy.co/filtering.html
// https://jsfiddle.net/shirandror/rvnrk2kc/
$(document).ready(function () {
    $grid = $('.grid');
    $grid.isotope();

    $('#project-filter-all-button,#project-filter-web-button, #project-filter-mobile-button').click(function () {

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