$(document).ready(function () {
    $('.menu').click(function (e) {
        $(".sidebar").toggleClass("show-menu");
    });
    $('.account-link').click(function (e) {
        $(".info-user").toggleClass("show-menu");
    });
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest(".info-user");
        var $show = $target.closest(".account-link");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('.info-user');
            $menu.removeClass("show-menu");
        }
    });
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest("body");
        var $show = $target.closest(".btnmenu-mobile");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('body');
            $menu.removeClass("show-menu");
        }
    });
    //search 
    $('.search-mobile').click(function (e) {
        $(".showsearch").toggleClass("searchMobile");
    });
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest(".showsearch");
        var $show = $target.closest(".search-mobile");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('.showsearch');
            $menu.removeClass("searchMobile");
        }
    });
    //menu
    $('.btnmenu-mobile').click(function (e) {
        $("body").toggleClass("show-menu");
    });

    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest("body");
        var $show = $target.closest(".btnmenu-mobile");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('body');
            $menu.removeClass("show-menu");
        }
    });

    $('.btnmenu-mobile').click(function (e) {
        $(".menu-mobile").toggleClass("show-overlay");
        $(".menu-overlay").toggleClass("show-overlay");
    });
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest(".menu-mobile");
        var $show = $target.closest(".btnmenu-mobile");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('.menu-mobile');
            $menu.removeClass("show-overlay");
            var $overlay = $('.menu-overlay');
            $overlay.removeClass("show-overlay");
            var $menu1 = $('body');
            $menu1.removeClass("show-menu");
        }
    });
    // menu web
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest(".sidebar");
        var $show = $target.closest(".menu");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('.sidebar');
            $menu.removeClass("show-menu");
        }
    });
    $('.sidebar').each(function () {
        var delay = $(this).index() * 50 + 'ms';
        $(this).css({
            '-webkit-transition-delay': delay,
            '-moz-transition-delay': delay,
            '-o-transition-delay': delay,
            'transition-delay': delay
        });
    });
    //ẩn hiện in mobile
    $('.slide-mobile').click(function (event) {
        event.preventDefault();
        var $target = $(event.target);
        var $li = $(this).closest('li');
        var $submenu = $li.children('.sub-content');
        var $a = $li.children('a');
        var level = $li.attr('data-level');
        if ($submenu.css('display') && $submenu.css('display') == 'block') {
            $submenu.slideUp();
            $a.removeClass("dot-arrow");
        } else {
            var $liRelatedLevel = $('.slide-mobile[data-level="' + level + '"]');
            $liRelatedLevel.find('.sub-content').slideUp();
            var $liRelatedLevel = $('.slide-mobile');
            $liRelatedLevel.find('a').removeClass("dot-arrow");
            $submenu.slideDown();
            $a.addClass("dot-arrow");
        }
        return false;
    })
    // tab nội dung khóa học
    $('.gf_dropdown').click(function (event) {
        event.preventDefault();
        var $target = $(event.target);
        var $li = $(this).closest('li');
        var $submenu = $li.children('.sub-course');
        var $a = $li.children('a');
        var level = $li.attr('data-level');
        if ($submenu.css('display') && $submenu.css('display') == 'block') {
            $submenu.slideUp();
            $a.removeClass("dot-arrow");
        } else {
            var $liRelatedLevel = $('.gf_dropdown[data-level="' + level + '"]');
            $liRelatedLevel.find('.sub-course').slideUp();
            var $liRelatedLevel = $('.gf_dropdown');
            $liRelatedLevel.find('a').removeClass("dot-arrow");
            $submenu.slideDown();
            $a.addClass("dot-arrow");
        }
        return false;
    })
    //popup video
    $('.textlink').click(function (e) {
        $(".popup-style").toggleClass("show-menu");
        $(".menu-overlay").toggleClass("show-menu");
    });
    $(window).click(function (event) {
        var $target = $(event.target);
        var $parent = $target.closest(".popup-style");
        var $show = $target.closest(".textlink");
        if ($parent.length == 0 && $show.length == 0) {
            var $menu = $('.popup-style');
            $menu.removeClass("show-menu");
        }
    });
    $('.close-modal').click(function (e) {
        $(".popup-style").removeClass("show-menu");
        $(".menu-overlay").toggleClass("show-menu");
    });




});