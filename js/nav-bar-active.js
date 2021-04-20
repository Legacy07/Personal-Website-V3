$(document).ready(function () {
    var lastId,
        navBarMenu = $("#nav-bar-menu"),
        navBarMenuHeight = navBarMenu.outerHeight() + 15,
        // All list items
        navBarItems = navBarMenu.find("a"),
        // Anchors corresponding to nav bar items
        scrollItems = navBarItems.map(function () {
            var className = $(this).attr("class");
            var isBlog = className.indexOf("nav-bar-blog") !== -1;
            if (isBlog) {
                return;
            }
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // https://stackoverflow.com/questions/9979827/change-active-menu-item-on-page-scroll/
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + navBarMenuHeight;

        // Get id of current scroll item
        var currentElement = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        currentElement = currentElement[currentElement.length - 1];
        var id = currentElement && currentElement.length ? currentElement[0].id : "";

        if (lastId !== id) {
            lastId = id;

            $('.active').removeClass('active');
            var activeId = ".nav-bar-" + id;
            $(activeId).addClass('active');
        }
    });
});