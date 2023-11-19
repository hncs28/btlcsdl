jQuery(document).ready(function($) {
    $("#featured-titles").owlCarousel({
        autoPlay: false,
        items: 5,
        stopOnHover: true,
        pagination: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 3]
    });
    $(".nextf").click(function() {
        $("#featured-titles").trigger("owl.next")
    });
    $(".prevf").click(function() {
        $("#featured-titles").trigger("owl.prev")
    });
    $("#dt-movies").owlCarousel({
        autoPlay: false,
        items: 5,
        stopOnHover: true,
        pagination: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 5],
        itemsTablet: [768, 4],
        itemsTabletSmall: false,
        itemsMobile: [479, 3]
    });
    $(".next3").click(function() {
        $("#dt-movies").trigger("owl.next")
    });
    $(".prev3").click(function() {
        $("#dt-movies").trigger("owl.prev")
    });
    $("#dt-tvshows").owlCarousel({
        autoPlay: false,
        items: 5,
        stopOnHover: true,
        pagination: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 5],
        itemsTablet: [768, 4],
        itemsTabletSmall: false,
        itemsMobile: [479, 3]
    });
    $(".next4").click(function() {
        $("#dt-tvshows").trigger("owl.next")
    });
    $(".prev4").click(function() {
        $("#dt-tvshows").trigger("owl.prev")
    });
    $("#dt-episodes").owlCarousel({
        autoPlay: false,
        pagination: false,
        items: 3,
        stopOnHover: true,
        itemsDesktop: [900, 3],
        itemsDesktopSmall: [750, 3],
        itemsTablet: [500, 2],
        itemsMobile: [320, 1]
    });
    $(".next").click(function() {
        $("#dt-episodes").trigger("owl.next")
    });
    $(".prev").click(function() {
        $("#dt-episodes").trigger("owl.prev")
    });
    $("#dt-seasons").owlCarousel({
        autoPlay: false,
        items: 5,
        stopOnHover: true,
        pagination: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 5],
        itemsTablet: [768, 4],
        itemsTabletSmall: false,
        itemsMobile: [479, 3]
    });
    $(".next2").click(function() {
        $("#dt-seasons").trigger("owl.next")
    });
    $(".prev2").click(function() {
        $("#dt-seasons").trigger("owl.prev")
    });
    $("#slider-movies").owlCarousel({
        autoPlay: false,
        items: 2,
        stopOnHover: true,
        pagination: true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [600, 1],
        itemsMobile: [479, 1]
    });
    $("#slider-tvshows").owlCarousel({
        autoPlay: false,
        items: 2,
        stopOnHover: true,
        pagination: true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [600, 1],
        itemsMobile: [479, 1]
    });
    $("#slider-movies-tvshows").owlCarousel({
        autoPlay: false,
        items: 2,
        stopOnHover: true,
        pagination: true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [600, 1],
        itemsMobile: [479, 1]
    });
    $(".reset").click(function(event) {
        if (!confirm(dtGonza.reset_all)) {
            event.preventDefault()
        }
    });
    $(".addcontent").click(function(event) {
        if (!confirm(dtGonza.manually_content)) {
            event.preventDefault()
        }
    });
});
(function(b, c, d, e, f, h, j) {
    b.GoogleAnalyticsObject = f,
    b[f] = b[f] || function() {
        (b[f].q = b[f].q || []).push(arguments)
    }
    ,
    b[f].l = 1 * new Date,
    h = c.createElement(d),
    j = c.getElementsByTagName(d)[0],
    h.async = 1,
    h.src = e,
    j.parentNode.insertBefore(h, j)
}
)(window, document, "script", "//www.google-analytics.com/analytics.js", "ga"),
ga("create", "UA-259766657-3", "auto"),
ga("send", "pageview");

