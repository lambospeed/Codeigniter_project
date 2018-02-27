jQuery(document).ready(function(b) {
    var a = window.location.pathname;
    var d = a.substr(a.lastIndexOf("/") + 1);
    var c = window.location.hash.substr(1);
    console.log(d);
    if ((d == "index.html") && c == "") {
        b("#menu ul > li:first-child").addClass("active")
    } else {
        b("#menu ul li").each(function() {
            b(this).removeClass("active")
        });
        console.log("c=" + c);
        if (c == "OurServices") {
            b("#menu ul li a[href*='OurServices']").parents("li").addClass("active")
        } else {
            b("#menu ul li a[href*='" + d + "']").parents("li").addClass("active")
        }
    }
});
(function(b) {
    b(function() {
        b(".job-tab").slice(0, 6).show();
        b("#loadMore").on("click", function(c) {
            c.preventDefault();
            b(".job-tab:hidden").slice(0, 3).slideDown();
            if (b(".job-tab:hidden").length == 0) {
                b("#load").fadeOut("slow")
            }
        })
    });
    b(window).load(function() {
        b(".cssload-container").delay(300).fadeOut("slow");
        b("body").delay(300).css({
            overflow: "visible"
        })
    });
    function a(d) {
        var c = parseInt(d.html(), 10);
        c = c + 1;
        d.html(++c);
        if (c > d.data("count")) {
            d.html(d.data("count"))
        } else {
            setTimeout(function() {
                a(d)
            }, 50)
        }
    }
    b(".stat-count").each(function() {
        b(this).data("count", parseInt(b(this).html(), 10));
        b(this).html("0");
        a(b(this))
    });
    b(".header .nav-tabs > li > a").hover(function() {
        b(this).tab("show")
    });
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery(".dmtop").css({
                bottom: "75px"
            })
        } else {
            jQuery(".dmtop").css({
                bottom: "-100px"
            })
        }
    });
    jQuery(".dmtop").click(function() {
        jQuery("html, body").animate({
            scrollTop: "0px"
        }, 800);
        return false
    });
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery(".contactme").css({
                bottom: "75px"
            })
        } else {
            jQuery(".contactme").css({
                bottom: "-100px"
            })
        }
    })
}
)(jQuery);
jQuery(document).ready(function(a) {
    a("#menu ul > li:has(ul)").addClass("drop");
    a("#menu ul > li.drop > ul").addClass("dropdown");
    a("#menu ul > li.drop > ul.dropdown ul").addClass("sup-dropdown").removeClass("dropdown");
    a("#menu ul > li.drop > ul.dropdown ul.sup-dropdown ul").addClass("super-dropdown").removeClass("dropdown, sup-dropdown");
    a("#toggle").click(function() {
        a(this).toggleClass("active");
        a("#menu").animate({
            height: "toggle"
        }, 1000, function() {
            a("#menu").toggleClass("active")
        });
        return false
    });
    a(".menu").children().click(function() {
        a(this).toggleClass("clicked");
        a(this).children(".dropdown ").slideToggle("slow")
    }).children(".dropdown").click(function(b) {
        b.stopPropagation()
    });
    a(".dropdown").children().click(function() {
        a(this).toggleClass("clicked");
        a(this).children(".sup-dropdown ").slideToggle("slow")
    }).children(".sup-dropdown").click(function(b) {
        b.stopPropagation()
    });
    a(".sup-dropdown").children().click(function() {
        a(this).toggleClass("clicked");
        a(this).children(".super-dropdown").slideToggle("slow")
    }).children(".super-dropdown").click(function(b) {
        b.stopPropagation()
    })
});
$(document).ready(function() {
    var a = $(".header-bottom").offset().top;
    $(window).scroll(function() {
        var b = $(window).scrollTop();
        if (b >= a) {
            $(".header-bottom").css({
                position: "fixed",
                background: "#fff"
            }).parent().addClass("ashi")
        } else {
            $(".header-bottom").css({
                position: "static",
                background: "#fff"
            }).parent().removeClass("ashi")
        }
    });
    $(function() {
        $(".selectpicker").selectpicker()
    });
    $(function() {
        $("#portfolio-list").mixItUp()
    })
});
$(function() {
    $(".button-checkbox").each(function() {
        var g = $(this)
          , d = g.find("button")
          , c = g.find("input:checkbox")
          , a = d.data("color")
          , b = {
            on: {
                icon: "glyphicon glyphicon-check"
            },
            off: {
                icon: "glyphicon glyphicon-unchecked"
            }
        };
        d.on("click", function() {
            c.prop("checked", !c.is(":checked"));
            c.triggerHandler("change");
            f()
        });
        c.on("change", function() {
            f()
        });
        function f() {
            var h = c.is(":checked");
            d.data("state", (h) ? "on" : "off");
            d.find(".state-icon").removeClass().addClass("state-icon " + b[d.data("state")].icon);
            if (h) {
                d.removeClass("btn-default").addClass("btn-" + a + " active")
            } else {
                d.removeClass("btn-" + a + " active").addClass("btn-default")
            }
        }
        function e() {
            f();
            if (d.find(".state-icon").length == 0) {
                d.prepend('<i class="state-icon ' + b[d.data("state")].icon + '"></i>')
            }
        }
        e()
    })
});
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(b) {
        b.preventDefault();
        $(this).siblings("a.active").removeClass("active");
        $(this).addClass("active");
        var a = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(a).addClass("active")
    });
    $(".chat-filter a").click(function() {
        $(this).toggleClass("active");
        $(".chat-filter ul ul").animate({
            height: "toggle"
        }, 500, function() {
            $(".chat-filter").toggleClass("active")
        });
        return false
    });
    $(".user-profile a").click(function() {
        $(this).toggleClass("active");
        $(".profile-option").animate({
            height: "toggle"
        }, 200, function() {
            $(".profile-option").toggleClass("active")
        });
        return false
    })
});
$(function() {
    $("#menu a[href*=#]:not([href=#])").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var a = $(this.hash);
            a = a.length ? a : $("[name=" + this.hash.slice(1) + "]");
            if (a.length) {
                $("html,body").animate({
                    scrollTop: a.offset().top - 80
                }, 1000);
                return false
            }
        }
    })
});
$(document).ready(function() {
    var a = function() {
        $(".gw-nav > li > a").click(function() {
            var c = $(".gw-nav");
            c.find("li").removeClass("active");
            $(".gw-nav > li > ul > li").removeClass("active");
            var b = $(this).parent();
            var d = b.find(".gw-submenu")[0];
            if (d == undefined) {
                b.addClass("active");
                $(".gw-nav").find("li").find("ul:visible").slideUp();
                return
            }
            if (d.style.display != "block") {
                c.find("li").find("ul:visible").slideUp();
                c.find("li.init-arrow-up").removeClass("init-arrow-up").addClass("arrow-down");
                c.find("li.arrow-up").removeClass("arrow-up").addClass("arrow-down");
                b.removeClass("init-arrow-down");
                b.removeClass("arrow-down");
                b.addClass("arrow-up");
                b.addClass("active");
                b.find("ul").slideDown(300)
            } else {
                b.removeClass("init-arrow-up");
                b.removeClass("arrow-up");
                b.removeClass("active");
                b.addClass("arrow-down");
                b.find("ul").slideUp(300)
            }
        });
        $(".gw-nav > li > ul > li > a").click(function() {
            $(this).parent().parent().parent().removeClass("active");
            $(".gw-nav > li > ul > li").removeClass("active");
            $(this).parent().addClass("active")
        })
    };
    a()
});
$(document).ready(function() {
    $(function() {
        $(".search-submit").click(function() {
            $(this).parent().toggleClass("search-open")
        });
        $("#list").click(function() {
            $("#products .item").removeClass("grid-group").addClass("list-group")
        });
        $("#grid").click(function() {
            $("#products .item").removeClass("list-group").addClass("grid-group")
        })
    })
});
jQuery(document).ready(function(d) {
    d(".cd-filter-trigger").on("click", function() {
        g(true)
    });
    d(".cd-filter .cd-close").on("click", function() {
        g(false)
    });
    function g(j) {
        var i = d([d(".cd-filter-trigger"), d(".cd-filter"), d(".cd-tab-filter"), d(".cd-gallery")]);
        i.each(function() {
            d(this).toggleClass("filter-is-visible", j)
        })
    }
    var h = d(".cd-tab-filter .placeholder a")
      , f = "Select"
      , b = h.text();
    d(".cd-tab-filter li").on("click", function(i) {
        var j = d(i.target).data("type");
        if (d(i.target).is(h)) {
            (f == h.text()) ? h.text(b) : h.text(f);
            d(".cd-tab-filter").toggleClass("is-open")
        } else {
            if (h.data("type") == j) {
                h.text(d(i.target).text());
                d(".cd-tab-filter").removeClass("is-open")
            } else {
                d(".cd-tab-filter").removeClass("is-open");
                h.text(d(i.target).text()).data("type", j);
                b = d(i.target).text();
                d(".cd-tab-filter .selected").removeClass("selected");
                d(i.target).addClass("selected")
            }
        }
    });
    d(".cd-filter-block h4").on("click", function() {
        d(this).toggleClass("closed").siblings(".cd-filter-content").slideToggle(300)
    });
    buttonFilter.init();
    d(".cd-gallery ul").mixItUp({
        controls: {
            enable: false
        },
        callbacks: {
            onMixStart: function() {
                d(".cd-fail-message").fadeOut(200)
            },
            onMixFail: function() {
                d(".cd-fail-message").fadeIn(200)
            }
        }
    });
    var e;
    var c = d();
    var a = (function() {
        var i = 0;
        return function(k, j) {
            clearTimeout(i);
            i = setTimeout(k, j)
        }
    }
    )();
    d(".cd-filter-content input[type='search']").keyup(function() {
        a(function() {
            e = d(".cd-filter-content input[type='search']").val().toLowerCase();
            if ((e.length) > 0) {
                d(".mix").each(function() {
                    var i = d(this);
                    if (i.attr("class").toLowerCase().match(e)) {
                        c = c.add(this)
                    } else {
                        c = c.not(this)
                    }
                });
                d(".cd-gallery ul").mixItUp("filter", c)
            } else {
                d(".cd-gallery ul").mixItUp("filter", "all")
            }
        }, 200)
    })
});
var buttonFilter = {
    $filters: null,
    groups: [],
    outputArray: [],
    outputString: "",
    init: function() {
        var a = this;
        a.$filters = $(".cd-main-content");
        a.$container = $(".cd-gallery ul");
        a.$filters.find(".cd-filters").each(function() {
            var b = $(this);
            a.groups.push({
                $inputs: b.find(".filter"),
                active: "",
                tracker: false
            })
        });
        a.bindHandlers()
    },
    bindHandlers: function() {
        var a = this;
        a.$filters.on("click", "a", function(b) {
            a.parseFilters()
        });
        a.$filters.on("change", function() {
            a.parseFilters()
        })
    },
    parseFilters: function() {
        var a = this;
        for (var b = 0, c; c = a.groups[b]; b++) {
            c.active = [];
            c.$inputs.each(function() {
                var d = $(this);
                if (d.is('input[type="radio"]') || d.is('input[type="checkbox"]')) {
                    if (d.is(":checked")) {
                        c.active.push(d.attr("data-filter"))
                    }
                } else {
                    if (d.is("select")) {
                        c.active.push(d.val())
                    } else {
                        if (d.find(".selected").length > 0) {
                            c.active.push(d.attr("data-filter"))
                        }
                    }
                }
            })
        }
        a.concatenate()
    },
    concatenate: function() {
        var a = this;
        a.outputString = "";
        for (var b = 0, c; c = a.groups[b]; b++) {
            a.outputString += c.active
        }
        !a.outputString.length && (a.outputString = "all");
        if (a.$container.mixItUp("isLoaded")) {
            a.$container.mixItUp("filter", a.outputString)
        }
    }
};
$(document).ready(function() {
    $(".example-multiple-selected").multiselect()
});
$(function() {
    $(".datetimepicker8").datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    })
});
$(document).ready(function() {
    var a = $(window).height();
    $(".cd-filter ").height(a - 150);
    $(window).resize(function() {
        var b = $(window).height();
        $(".cd-filter ").height(b - 150)
    });
    var a = $(window).height();
    $(".customform ").height(a - 138);
    $(window).resize(function() {
        var b = $(window).height();
        $(".customform").height(b - 138)
    });
    var a = $(window).height();
    $(".fixed-sidebar-left").height(a - 110);
    $(window).resize(function() {
        var b = $(window).height();
        $(".fixed-sidebar-left").height(b - 110)
    });
    var a = $(window).height();
    $(".fixed-sidebar-rit").height(a - 110);
    $(window).resize(function() {
        var b = $(window).height();
        $(".fixed-sidebar-rit").height(b - 110)
    });
    var a = $(window).height();
    $(".help-sidebar-fixed").height(a - 135);
    $(window).resize(function() {
        var b = $(window).height();
        $(".help-sidebar-fixed").height(b - 135)
    });
    var a = $(window).height();
    $(".left-sidebar-lt").height(a - 90);
    $(window).resize(function() {
        var b = $(window).height();
        $(".left-sidebar-lt").height(b - 90)
    });
    var a = $(window).height();
    $(".filter-filter1").height(a - 90);
    $(window).resize(function() {
        var b = $(window).height();
        $(".filter-filter1").height(b - 90)
    })
});
$(document).ready(function() {
    /*nice = $("html, .cd-filter, .customform, .fixed-sidebar-left, .fixed-sidebar-rit, .help-sidebar-fixed, .left-sidebar-lt").niceScroll();*/
    $(".sub-drop-user > i").click(function() {
        $(this).parent().toggleClass("sub-drop-open")
    })
});
$(document).ready(function() {
    $(".submit-tabs > li a[title]").tooltip();
    $('a[data-toggle="tab"]').on("show.bs.tab", function(b) {
        var a = $(b.target);
        if (a.parent().hasClass("disabled")) {
            return false
        }
    });
    $(".next-step").click(function(b) {
        var a = $(".wizard .submit-tabs li.active");
        a.next().removeClass("disabled");
        nextTab(a)
    });
    $(".prev-step").click(function(b) {
        var a = $(".wizard .submit-tabs li.active");
        prevTab(a)
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover()
});
function nextTab(a) {
    $(a).next().find('a[data-toggle="tab"]').click()
}
function prevTab(a) {
    $(a).prev().find('a[data-toggle="tab"]').click()
}
$(document).ready(function() {
    if ($(".fixed-sidebar-right").length) {
        var a = $(".fixed-sidebar-right").offset().top;
        var c = $(".header-bottom").height();
        var b = $(".header-top").height();
        $(window).scroll(function() {
            var d = $(window).scrollTop();
            if (d >= a - (2 * c + b)) {
                $(".fixed-sidebar-right").css({
                    position: "fixed",
                    background: "#fff",
                    top: "88px"
                }).parent().addClass("sidebarFixed")
            } else {
                $(".fixed-sidebar-right").css({
                    position: "static",
                    background: "#fff"
                }).parent().removeClass("sidebarFixed")
            }
        })
    }
});
$(document).ready(function() {
    if ($(".left-sidebar-lt").length) {
        var a = $(".left-sidebar-lt").offset().top;
        var c = $(".header-bottom").height();
        var b = $(".header-top").height();
        $(window).scroll(function() {
            var d = $(window).scrollTop();
            if (d >= a - (2 * c + b)) {
                $(".left-sidebar-lt").css({
                    position: "fixed",
                    background: "#fff",
                    top: "88px"
                }).parent().addClass("sidebarFixed")
            } else {
                $(".left-sidebar-lt").css({
                    position: "static",
                    background: "#fff"
                }).parent().removeClass("sidebarFixed")
            }
        })
    }
});
$(document).ready(function() {
    if ($(".filter-filter").length) {
        var a = $(".filter-filter").offset().top;
        var c = $(".header-bottom").height();
        var b = $(".header-top").height();
        $(window).scroll(function() {
            var d = $(window).scrollTop();
            if (d >= a - (2 * c + b)) {
                $(".filter-filter").css({
                    position: "fixed",
                    background: "#fff",
                    top: "88px"
                }).parent().addClass("sidebarFixed")
            } else {
                $(".filter-filter").css({
                    position: "static",
                    background: "#fff"
                }).parent().removeClass("sidebarFixed")
            }
        })
    }
});
$(document).ready(function() {
    $(".projects-carousel").owlCarousel({
        navigation: true,
        pagination: false,
        slideSpeed: 400,
        stopOnHover: true,
        autoPlay: 3000,
        items: 3,
        itemsDesktopSmall: [1100, 3],
        itemsTablet: [851, 2],
        itemsMobile: [568, 1]
    });
    $(".projects-carousel").find(".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $(".projects-carousel").find(".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>')
});
$(document).ready(function() {
    if ($("#textarea").length) {
        tinymce.init({
            selector: "#textarea",
            plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help"],
            toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link image"
        })
    }
});
$(document).ready(function() {
    $("#toggle-right-cd").click(function() {
        $(this).parent().toggleClass("open-filter");
        $("#overlay").toggleClass("open-overlay");
        $(".overlay").click(function() {
            $(this).hasClass("open-overlay");
            $(this).removeClass("open-overlay");
            $("#toggle-right-cd").parent().hasClass("open-filter");
            $("#toggle-right-cd").parent().removeClass("open-filter")
        })
    });
    $("#toggle-left-sidebar-lt").click(function() {
        $(this).parent().toggleClass("open-left-sidebar-lt");
        $("#overlay").toggleClass("open-overlay");
        $(".overlay").click(function() {
            $(this).hasClass("open-overlay");
            $(this).removeClass("open-overlay");
            $("#toggle-left-sidebar-lt").parent().hasClass("open-left-sidebar-lt");
            $("#toggle-left-sidebar-lt").parent().removeClass("open-left-sidebar-lt")
        })
    });
    $("#toggle-left-sidebar-search").click(function() {
        $(this).parent().toggleClass("open-left-sidebar");
        $("#overlay").toggleClass("open-overlay");
        $(".overlay").click(function() {
            $(this).hasClass("open-overlay");
            $(this).removeClass("open-overlay");
            $("#toggle-left-sidebar-search").parent().hasClass("open-left-sidebar");
            $("#toggle-left-sidebar-search").parent().removeClass("open-left-sidebar")
        })
    });
    $("#toggle-help-sidebar-fixed").click(function() {
        $(this).parent().toggleClass("open-help-sidebar");
        $("#overlay").toggleClass("open-overlay");
        $(".overlay").click(function() {
            $(this).hasClass("open-overlay");
            $(this).removeClass("open-overlay");
            $("#toggle-help-sidebar-fixed").parent().hasClass("open-help-sidebar");
            $("#toggle-help-sidebar-fixed").parent().removeClass("open-help-sidebar")
        })
    })
});
$(window).bind("load resize", function(b) {
    var a = $(window).width();
    var c = $(window).height();
    if (a <= 991) {
        $(".cd-filter ").height(c - 60);
        $(window).resize(function() {
            $(".cd-filter ").height(c - 60)
        });
        $(".fixed-sidebar-left").height(c - 0);
        $(window).resize(function() {
            $(".fixed-sidebar-left").height(c - 0)
        });
        $(".left-sidebar-lt").height(c - 0);
        $(window).resize(function() {
            $(".left-sidebar-lt").height(c - 0)
        });
        $(".help-sidebar-fixed").height(c - 0);
        $(window).resize(function() {
            $(".help-sidebar-fixed").height(c - 0)
        })
    } else {}
});

$('.modal.fade').on('shown.bs.modal', function() {
    $('.modal-backdrop').remove();
})
