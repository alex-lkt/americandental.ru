function t_sldsInit(t, e) {
    var s = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
   
    if (s) {
        var i = s.querySelector(".t-slds__items-wrapper"),
            r;
        if (i)
            if (i.getAttribute("data-slider-initialized")) {
                var a = i.classList.contains("js-feed-container"),
                    d = s.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)");
                if (d) {
                    var l = d.length,
                        o = d[0],
                        n = d[d.length - 1],
                        c = window.innerWidth,
                        u = parseInt(i.getAttribute("data-slider-items-in-row"), 10) || 0,
                        _ = i.getAttribute("data-slider-with-cycle"),
                        p = parseFloat(i.getAttribute("data-slider-transition")),
                        f = i.getAttribute("data-slider-stop"),
                        y = 1;
                    if (Array.prototype.forEach.call(d, (function(t, e) {
                            t.setAttribute("data-slide-index", e + 1)
                        })), p || 0 === p || (p = 300), "true" == f) return !1;
                    isNaN(p) && i.setAttribute("data-slider-transition", "300"), i.classList.contains("t-slds_animated-fast") || i.classList.contains("t-slds_animated-slow") || i.classList.contains("t-slds_animated-none") || i.classList.add("t-slds_animated-fast");
                    var m = u;
                    t_slds_setItemsInRow(t), t_slds_changeImageUrl(t);
                    var v = window.navigator.userAgent,
                        g = v.indexOf("MSIE"),
                        A = "",
                        b = !1;
                    g > 0 && (8 != (A = parseInt(v.substring(g + 5, v.indexOf(".", g)))) && 9 != A || (b = !0)), !0 === b && (i.classList.remove("t-slds_animated-fast"), i.classList.remove("t-slds_animated-slow"), i.classList.add("t-slds_animated-none"), i.classList.add("t-slds_ie"), i.setAttribute("data-slider-correct-height", "true"), i.setAttribute("data-slider-items-in-row", 1)), i.setAttribute("data-slider-initialized", "true"), i.getAttribute("data-slider-totalslides") || i.setAttribute("data-slider-totalslides", l);
                    var S = i.getAttribute("data-slider-pos");
                    S ? y = parseInt(S, 10) : i.setAttribute("data-slider-pos", 1), i.setAttribute("data-slider-curr-pos", 1), i.setAttribute("data-slider-cycle", ""), i.setAttribute("data-slider-animated", ""), a || t_slds__createDummies(o, n, i), u = parseInt(i.getAttribute("data-slider-items-in-row"), 10) || 0;
                    var h = s.querySelectorAll(".t-slds__arrow_wrapper-right");
                    h.length > 0 && Array.prototype.forEach.call(h, (function(t) {
                        t.style.display = "false" === _ && l - u <= 0 ? "none" : ""
                    })), a || t_slds_SliderWidth(t), "true" == i.getAttribute("data-slider-correct-height") && t_slds_SliderHeight(t), t_slds_SliderArrowsHeight(t), t_slds_ActiveSlide(t, y, l), t_slds_ActiveCaption(t, y, l), a ? c > 960 && ("true" === i.getAttribute("data-feeds-posts-loaded") ? (t_slds__initFeedsSlider(t, s, e), t_slds_initSliderControls(t, e)) : document.addEventListener("feedsLoadPosts", (function() {
                        t_slds__initFeedsSlider(t, s, e), t_slds_initSliderControls(t, e)
                    }))) : (b || t_slds_onHammerLoad("Hammer", (function() {
                        t_slds_initSliderSwipe(t, l, c)
                    })), t_slds_initSliderControls(t, e), t_slds_updateSlider(t)), i.getAttribute("data-slider-timeout") > 0 ? t_slds_initAutoPlay(t, y, l, e) : i.addEventListener("slideAutoplayTimerReady", (function() {
                        i.getAttribute("data-slider-timeout") > 0 && t_slds_initAutoPlay(t, y, l, e)
                    })), s.querySelectorAll(".t-slds__item-loaded").length < l + 2 && t_slds_UpdateImages(t, y), "yes" == i.getAttribute("data-slider-arrows-nearpic") && t_slds_positionArrows(t);
                    var w = s.querySelectorAll(".t-slds");
                    w.length > 0 && Array.prototype.forEach.call(w, (function(t) {
                        t.style.visibility = ""
                    })), t_slds__setTabindexForFocusableElements(t), s.removeEventListener("displayChanged", t_slds_updateOnDisplayChange), s.addEventListener("displayChanged", t_slds_updateOnDisplayChange(t, m)), a && (s.removeEventListener("displayChanged", t_slds_updateFeedsSliderOnResize), s.addEventListener("displayChanged", (function() {
                        t_slds_updateFeedsSliderOnResize(t, s, e)
                    }))), window.addEventListener("resize", t_throttle((function() {
                        setTimeout((function() {
                            t_slds_setItemsInRow(t, m), t_slds_updateSlider(t), t_slds_positionArrows(t), a && t_slds_updateFeedsSliderOnResize(t, s, e)
                        }), 100)
                    }))), window.t_slds__isiOS && "complete" === document.readyState ? t_slds__hideMobileSlides(s.querySelector(".t-slds__item_active")) : window.t_slds__isiOS && window.addEventListener("load", (function() {
                        t_slds__hideMobileSlides(s.querySelector(".t-slds__item_active"))
                    })), window.addEventListener("load", (function() {
                        "true" == i.getAttribute("data-slider-correct-height") && t_slds_UpdateSliderHeight(t), t_slds_UpdateSliderArrowsHeight(t)
                    }));
                    var q = document.querySelector("#allrecords");
                    q && q.addEventListener("allRecPaddingInit", (function() {
                        t_slds_updateSlider(t)
                    })), document.removeEventListener("click", t_slds__removeAutoplayByVideo), document.addEventListener("click", t_slds__removeAutoplayByVideo), setTimeout((function() {
                        t_slds_UpdateSliderArrowsHeight(t)
                    }), 0)
                }
            }
    }
}

function t_slds__removeAutoplayByVideo(t) {
    var e = t.target.closest("[data-slider-video-type]");
    if (e) {
        var s = e.closest(".t-slds__items-wrapper"),
            i;
        if (s) s.getAttribute("data-slider-interval-id") && (s.setAttribute("data-slider-stopped", "yes"), s.setAttribute("data-slider-stopped-by-video", "y"))
    }
}

function t_slds__initFeedsSlider(t, e) {
    var s = e.querySelector(".t-slds__items-wrapper"),
        i = e.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)"),
        r = s.getAttribute("data-slider-totalslides"),
        a = i[0],
        d = i[i.length - 1],
        l = s.getAttribute("data-slider-with-cycle");
    t_slds__createDummies(a, d, s), t_slds_updateSlider(t);
    var o = parseInt(s.getAttribute("data-slider-items-in-row"), 10) || 0,
        n = e.querySelectorAll(".t-slds__arrow_wrapper-right");
    n.length > 0 && Array.prototype.forEach.call(n, (function(t) {
        t.style.display = "false" === l && r - o <= 0 ? "none" : ""
    })), "true" == s.getAttribute("data-slider-correct-height") && t_slds_SliderHeight(t)
}

function t_slds__createDummies(t, e, s) {
    var i, r = s.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)").length,
        a = parseInt(s.getAttribute("data-slider-items-in-row"), 10) || 0,
        d = s.getAttribute("data-slider-with-cycle"),
        l = s.classList.contains("js-feed-container"),
        o = !1,
        n = !1;
    if (t) {
        var c = t.querySelector('[data-zoomable="yes"]');
        c && (o = !0, c.classList.contains("t-zoomable") && c.classList.remove("t-zoomable"), c.removeAttribute("data-zoomable"))
    }
    if (e) {
        var u = e.querySelector('[data-zoomable="yes"]');
        u && (n = !0, u.classList.contains("t-zoomable") && u.classList.remove("t-zoomable"), u.removeAttribute("data-zoomable"))
    }
    if (e && 0 == s.querySelectorAll('.t-slds__item[data-slide-index="0"]').length) {
        var _ = e.cloneNode(!0);
        _.setAttribute("data-slide-index", "0"), _.setAttribute("aria-hidden", "true");
        var p = t.parentNode;
        p.insertBefore(_, t);
        var f = p.querySelectorAll('[data-slide-index="0"] [field]');
        f.length > 0 && Array.prototype.forEach.call(f, (function(t) {
            t.removeAttribute("field")
        }))
    }
    if (!l && t && !s.querySelector('.t-slds__item[data-slide-index="' + (r + 1) + '"]')) {
        var y = t.cloneNode(!0);
        if (y.setAttribute("data-slide-index", r + 1), y.classList.remove("t-slds__item_active"), y.setAttribute("aria-hidden", "true"), e.insertAdjacentElement("afterend", y), e.classList.add("t-slds__item-loaded"), a > 0 && "true" === d)
            for (var m = t, v = e, g = 0; g < a - 1; g++) {
                var A = m.nextElementSibling.cloneNode(!0);
                A.setAttribute("data-slide-index", r + g + 1), v.nextElementSibling.insertAdjacentElement("afterend", A), v = v.nextElementSibling, m = m.nextElementSibling
            }
    }
    o && (c.classList.add("t-zoomable"), c.setAttribute("data-zoomable", "yes")), n && (u.classList.add("t-zoomable"), u.setAttribute("data-zoomable", "yes"))
}

function t_slds__hideMobileSlides(t) {
    if (t) {
        var e = t.closest(".t-slds__items-wrapper"),
            s = Array.prototype.slice.call(e.querySelectorAll('.t-slds__item:not(.t-slds__item_dummy):not([aria-hidden="true"])')),
            i = document.documentElement.clientWidth > 960 ? 5 : 3;
        if (!(s.length <= 2 * i)) {
            for (var r = t.getAttribute("data-slide-index"), a = [r = parseInt(r, 10)], d = 1; d < i; d++) r + d <= s.length ? a.push(r + d) : a.push(d), r - d > 0 ? a.push(r - d) : a.push(s.length + 1 - d);
            var l = "t-slds__item-innactive";
            s.forEach((function(t) {
                var e;
                a.some((function(e) {
                    return parseInt(t.getAttribute("data-slide-index"), 10) === e
                })) ? t.classList.remove(l) : t.classList.add(l)
            }))
        }
    }
}

function t_slds_updateOnDisplayChange(t, e) {
    t_throttle((function() {
        t_slds_setItemsInRow(t, e), t_slds_updateSlider(t), t_slds_positionArrows(t)
    }))
}

function t_slds_updateFeedsSliderOnResize(t, e, s) {
    var i = e.querySelector(".t-slds__items-wrapper"),
        r;
    i.classList.contains("js-feed-container") && (window.innerWidth > 960 ? "true" === i.getAttribute("data-feeds-posts-loaded") ? (t_slds__initFeedsSlider(t, e, s), t_slds_initSliderControls(t, s)) : document.addEventListener("feedsLoadPosts", (function() {
        t_slds__initFeedsSlider(t, e, s), t_slds_initSliderControls(t, s)
    })) : i.style.transform = "translateX(0)")
}

function t_slds_setItemsInRow(t, e) {
    var s = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (s) {
        var i = s.querySelector(".t-slds__items-wrapper"),
            r, a;
        if (i)(i.getAttribute("data-slider-items-in-row") || 0) && (window.innerWidth <= 960 && (a = 2), window.innerWidth <= 640 && (a = 1), window.innerWidth > 960 && (a = e)), a && i.setAttribute("data-slider-items-in-row", a)
    }
}

function t_slds_initSliderControls(t, e) {
    var s = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (s) {
        var i = s.querySelector(".t-slds__items-wrapper");
        if (i) {
            var r = i.getAttribute("data-slider-items-in-row") || 0,
                a = s.querySelector(".t-slds__container .t-slds__item"),
                d = s.querySelector(".t-slds__container"),
                l = r > 0 && a && d ? a.offsetWidth : d.offsetWidth,
                o;
            if ("true" == i.getAttribute("data-slider-stop")) return !1;
            i.style.transform = "translateX(-" + l + "px)";
            var n = s.querySelectorAll(".t-slds__arrow_wrapper");
            n.length > 0 && Array.prototype.forEach.call(n, (function(r) {
                r.addEventListener("click", (function() {
                    var r = t_slds_getCurrentTranslate(s),
                        a = i.getAttribute("data-slider-animated"),
                        d = parseFloat(i.getAttribute("data-slider-pos")),
                        l = parseFloat(i.getAttribute("data-slider-totalslides")),
                        o = i.getAttribute("data-slider-with-cycle"),
                        n = "",
                        c;
                    "" == a && (i.setAttribute("data-slider-animated", "yes"), "left" === this.getAttribute("data-slide-direction") ? "false" == o && 1 == d ? d = 1 : d-- : "false" == o && d == l ? d = l : d++, i.setAttribute("data-slider-pos", d), d != l + 1 && 0 != d || (n = "yes"), i.setAttribute("data-slider-cycle", n), t_slideMoveWithoutAnimation(t, !1, e, r));
                    t_slds_updateSlider(t)
                }))
            }));
            var c = s.querySelectorAll(".t-slds__bullet");
            c.length > 0 && Array.prototype.forEach.call(c, (function(r) {
                r.addEventListener("click", (function() {
                    var a = parseInt(r.getAttribute("data-slide-bullet-for"), 10),
                        d;
                    if (parseInt(i.getAttribute("data-slider-pos"), 10) !== a) {
                        var l = t_slds_getCurrentTranslate(s);
                        i.setAttribute("data-slider-pos", a), t_slideMoveWithoutAnimation(t, !1, e, l), t_slds_updateSlider(t)
                    }
                }))
            }))
        }
    }
}

function t_slds_animate(t, e, s) {
    var i = performance.now();
    requestAnimationFrame((function r(a) {
        var d = (a - i) / s;
        d > 1 && (d = 1);
        var l = t(d);
        e(l), d < 1 ? requestAnimationFrame(r) : "y" !== window.lazy && "yes" !== document.querySelector("#allrecords").getAttribute("data-tilda-lazy") || t_slds_onHammerLoad("t_lazyload_update", (function() {
            t_lazyload_update()
        }))
    }))
}

function t_slide_MoveAnimation(t, e, s, i) {
    if (t) {
        t.style.transition = "height ease-in-out .5s, transform ease-in-out 0s";
        var r = -Math.abs(e * s),
            a = -parseInt(getComputedStyle(t).transform.match(/\d+/)[0]),
            d = a - r;
        0 !== d && t_slds_animate((function(t) {
            return t
        }), (function(e) {
            t.style.transform = "translateX(" + (a - d * e) + "px)"
        }), i)
    }
}

function t_slideMoveWithoutAnimation(t, e, s) {
    var i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (i) {
        var r = i.querySelector(".t-slds__items-wrapper");
        if (r) {
            var a = parseFloat(r.getAttribute("data-slider-pos")),
                d, l = (r.getAttribute("data-slider-items-in-row") || 0) > 0 ? i.querySelector(".t-slds__container .t-slds__item").offsetWidth : i.querySelector(".t-slds__container").offsetWidth,
                o = parseFloat(r.getAttribute("data-slider-totalslides")),
                n = r.classList.contains("t-slds_animated-none");
            if (a > o + 1 && (a = 1), n) {
                var c = i.querySelector(".t-slds__item_active"),
                    u = i.querySelectorAll(".t-slds__item");
                if (c && 0 === i.querySelectorAll(".t-slds__item_dummy").length) {
                    var _ = c.cloneNode(!0);
                    if (_.classList.add("t-slds__item_dummy"), _.style.position = "absolute", _.style.left = l * a + "px", r.appendChild(_), i.classList.contains("js-product")) p = i;
                    else var p = i.querySelector(".t-store") || i.querySelector(".js-product");
                    p ? (t_slds_fadeOut(_, 150, (function() {
                        null !== _.parentNode && _.parentNode.removeChild(_)
                    })), Array.prototype.forEach.call(u, (function(t) {
                        t_slds_fadeIn(t, 150)
                    }))) : (Array.prototype.forEach.call(u, (function(t) {
                        t.style.opacity = 0
                    })), t_slds_fadeOut(_, 400, (function() {
                        null !== _.parentNode && _.parentNode.removeChild(_)
                    })), setTimeout((function() {
                        Array.prototype.forEach.call(u, (function(t) {
                            t_slds_fadeIn(t)
                        }))
                    }), 50))
                }
                r.classList.add("t-slds_animated-cancel")
            }
            t_slideMove(t, e, s), n && r.classList.remove("t-slds_animated-cancel")
        }
    }
}

function t_slideMoveInstantly(t, e, s) {
    var i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (i) {
        var r = i.querySelector(".t-slds__items-wrapper");
        if (r) {
            var a = parseFloat(r.getAttribute("data-slider-pos")),
                d, l = (r.getAttribute("data-slider-items-in-row") || 0) > 0 ? i.querySelector(".t-slds__container .t-slds__item").offsetWidth : i.querySelector(".t-slds__container").offsetWidth,
                o = parseFloat(r.getAttribute("data-slider-totalslides")),
                n = r.classList.contains("t-slds_animated-none");
            if (a > o + 1 && (a = 1), n) {
                var c = i.querySelector(".t-slds__item_active");
                if (c && 0 === i.querySelectorAll(".t-slds__item_dummy").length) {
                    var u = c.cloneNode(!0);
                    u.classList.add("t-slds__item_dummy"), u.style.position = "absolute", u.style.left = l * a + "px", r.appendChild(u), t_slds_fadeOut(u, 400, (function() {
                        null !== u.parentNode && u.parentNode.removeChild(u)
                    }))
                }
                r.classList.add("t-slds_animated"), r.classList.add("t-slds_animated-cancel")
            } else r.classList.add("t-slds_animated"), r.classList.add("t-slds_animated-cancel");
            t_slideMove(t, e, s), r.classList.remove("t-slds_animated"), r.classList.remove("t-slds_animated-cancel")
        }
    }
}

function t_slideMove(t, e, s) {
    var i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (i) {
        var r = i.querySelector(".t-slds__items-wrapper");
        if (r) {
            var a = i.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)"),
                d = r.classList.contains("js-feed-container"),
                l = parseInt(r.getAttribute("data-slider-items-in-row") || 0),
                o = parseInt(r.getAttribute("data-feed-show-count") || 0),
                n = l > 0 ? i.querySelector(".t-slds__container .t-slds__item").offsetWidth : i.querySelector(".t-slds__container").offsetWidth,
                c = parseFloat(r.getAttribute("data-slider-transition")),
                u = parseFloat(r.getAttribute("data-slider-pos")),
                _ = parseFloat(r.getAttribute("data-slider-totalslides")),
                p = r.getAttribute("data-slider-cycle"),
                f = r.classList.contains("t-slds_animated-none"),
                y = r.getAttribute("data-slider-timeout") > 0,
                m = r.getAttribute("data-slider-stop"),
                v = i.querySelector(".t-slds__arrow_wrapper-right"),
                g = i.querySelector(".t-slds__arrow_wrapper-left"),
                A;
            "off" === r.getAttribute("aria-live") && r.setAttribute("aria-live", "polite");
            var b = 0;
            if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
                var S = navigator.appVersion.match(/Version\/(\d+)\.(\d+)\.?(\d+)? Safari/);
                null !== S && (b = parseInt(S[1], 10))
            }
            var h = !!navigator.userAgent.match("CriOS");
            if (c || 0 === c || (c = 300), u > _ + 1 && (u = 1, r.setAttribute("data-slider-pos", 1)), "true" == m) return !1;
            if (v)
                if (d) {
                    var w = a[a.length - 1],
                        q = parseInt(w.getAttribute("data-slide-index"), 10);
                    if (l < _ && t_slds_fadeIn(v, 300), q < _ && l > 0 && (u == q - o + 1 || q === o)) {
                        var L = document.createEvent("Event");
                        L.initEvent("feedsLastSlide", !0, !0), r.dispatchEvent(L), document.addEventListener("feedsLoadSlide", (function() {
                            t_slds_updateSlider(t)
                        })), t_slds_fadeIn(v, 300)
                    } else q === _ && u === _ - l + 1 && t_slds_fadeOut(v, 300)
                } else "false" == r.getAttribute("data-slider-with-cycle") && (u == _ || l > 1 && u == _ - l + 1) ? t_slds_fadeOut(v, 300) : t_slds_fadeIn(v, 300);
            g && ("false" == r.getAttribute("data-slider-with-cycle") && 1 == u ? t_slds_fadeOut(g, 300) : t_slds_fadeIn(g, 300)), r.classList.add("t-slds_animated"), b >= 13 && h && !f ? t_slide_MoveAnimation(r, u, n, c) : r.style.transform = "translateX(-" + n * u + "px)", setTimeout((function() {
                r.classList.remove("t-slds_animated"), r.setAttribute("data-slider-animated", ""), "yes" == (p = r.getAttribute("data-slider-cycle")) && (u == _ + 1 && (u = 1), 0 == u && (u = _), b >= 13 && h && !f ? t_slide_MoveAnimation(r, u, n, 0) : r.style.transform = "translateX(-" + n * u + "px)", !0 !== f && t_slds_ActiveSlide(t, u, _, s), r.setAttribute("data-slider-pos", u)), ("y" === window.lazy || document.querySelector("#allrecords") && "yes" === document.querySelector("#allrecords").getAttribute("data-tilda-lazy")) && t_slds_onHammerLoad("t_lazyload_update", (function() {
                    t_lazyload_update()
                })), !e && y && t_slds_initAutoPlay(t, u, _, s)
            }), c), t_slds_ActiveBullet(t, u, _, s), t_slds_ActiveSlide(t, u, _), "true" == r.getAttribute("data-slider-correct-height") && t_slds_SliderHeight(t), t_slds_SliderArrowsHeight(t), t_slds_ActiveCaption(t, u, _), i.querySelectorAll(".t-slds__item-loaded").length < _ + 2 && t_slds_UpdateImages(t, u), r.getAttribute("data-slider-curr-pos", u)
        }
    }
}

function t_slds_updateSlider(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        t_slds_SliderWidth(t);
        var s = e.querySelector(".t-slds__items-wrapper");
        if (s) {
            var i = s.getAttribute("data-slider-items-in-row") || 0,
                r = e.querySelector(".t-slds__container .t-slds__item"),
                a = e.querySelector(".t-slds__container"),
                d = i > 0 && a && r ? r.offsetWidth : a.offsetWidth,
                l = parseInt(s.getAttribute("data-slider-pos"), 10),
                o = parseInt(s.getAttribute("data-slider-totalslides"), 10),
                n = s.getAttribute("data-slider-with-cycle"),
                c = e.querySelector(".t-slds__arrow_wrapper-right");
            l > o + 1 && (l = 1, s.setAttribute("data-slider-pos", 1)), c && (c.style.display = "false" === n && (o - i <= 0 || l === o) ? "none" : ""), s.style.transform = "translateX(-" + d * l + "px)", "true" == s.getAttribute("data-slider-correct-height") && t_slds_UpdateSliderHeight(t), t_slds_UpdateSliderArrowsHeight(t)
        }
    }
}

function t_slds_UpdateImages(t, e) {
    var s = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (s) {
        var i = s.querySelector('.t-slds__item[data-slide-index="' + e + '"]');
        i && (i.classList.add("t-slds__item-loaded"), i.nextElementSibling && i.nextElementSibling.classList.add("t-slds__item-loaded"), i.previousElementSibling && i.previousElementSibling.classList.add("t-slds__item-loaded"))
    }
}

function t_slds_ActiveCaption(t, e, s) {
    var i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (i) {
        var r = i.querySelectorAll(".t-slds__caption"),
            a = i.querySelector('.t-slds__caption[data-slide-caption="' + e + '"]');
        Array.prototype.forEach.call(r, (function(t) {
            t.classList.remove("t-slds__caption-active")
        })), 0 == e ? a = i.querySelector('.t-slds__caption[data-slide-caption="' + s + '"]') : e == s + 1 && (a = i.querySelector('.t-slds__caption[data-slide-caption="1"]')), a && a.classList.add("t-slds__caption-active")
    }
}

function t_slds_scrollImages(t, e) {
    var s = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (s) {
        var i = (e < 0 ? "" : "-") + Math.abs(e).toString();
        s.querySelector(".t-slds__items-wrapper").style.transform = "translateX(" + i + "px)"
    }
}

function t_slds_ActiveBullet(t, e, s, i) {
    var r;
    if (i && i.thumbsbulletGallery) {
        var a = parseInt(i.storeOptions.popup_opts.columns),
            d = +i.storeOptions.slider_slidesOpts.ratio;
        r = t_store_prodPopup_gallery_calcMaxThumbsCount(a, d, 60, 10)
    }
    var l = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (l) {
        var o = l.querySelectorAll(".t-slds__bullet"),
            n = l.querySelector('.t-slds__bullet[data-slide-bullet-for="' + e + '"]');
        Array.prototype.forEach.call(o, (function(t) {
            t.classList.remove("t-slds__bullet_active")
        })), i && i.thumbsbulletGallery && e >= r && e != s + 1 || s >= r && 0 == e ? n = l.querySelector('.t-slds__bullet[data-slide-bullet-for="' + r + '"]') : 0 == e ? n = l.querySelector('.t-slds__bullet[data-slide-bullet-for="' + s + '"]') : e == s + 1 && (n = l.querySelector('.t-slds__bullet[data-slide-bullet-for="1"]')), n && n.classList.add("t-slds__bullet_active")
    }
}

function t_slds_ActiveSlide(t, e, s) {
    var i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (i) {
        var r = i.querySelector(".t-slds__items-wrapper"),
            a = i.querySelectorAll(".t-slds__item"),
            d = i.querySelector('.t-slds__item[data-slide-index="' + e + '"]'),
            l = !!r && r.classList.contains("t-slds_animated-none"),
            o = i.querySelectorAll("iframe"),
            n = i.querySelectorAll("video");
        if (Array.prototype.forEach.call(o, (function(t) {
                t.src && (-1 !== t.src.indexOf("&enablejsapi=1") && t.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*"), -1 === t.src.indexOf("vimeo") || -1 === t.src.indexOf("&amp;api=1") && -1 === t.src.indexOf("&api=1") || t.contentWindow.postMessage('{"method":"pause","value":"true"}', "*"))
            })), Array.prototype.forEach.call(n, (function(t) {
                t.pause()
            })), Array.prototype.forEach.call(a, (function(t) {
                t.classList.remove("t-slds__item_active")
            })), 0 == e && !1 === l) i.querySelector('.t-slds__item[data-slide-index="' + s + '"]').classList.add("t-slds__item_active");
        else if (0 == e && !0 === l) d = i.querySelector('.t-slds__item[data-slide-index="' + s + '"]');
        else if (e == s + 1 && !1 === l) {
            var c = i.querySelector('.t-slds__item[data-slide-index="1"]');
            c && c.classList.add("t-slds__item_active")
        } else e == s + 1 && !0 === l && (d = i.querySelector('.t-slds__item[data-slide-index="1"]'));
        d && d.classList.add("t-slds__item_active"), window.t_slds__isiOS && t_slds__hideMobileSlides(d), t_slds__setTabindexForFocusableElements(t)
    }
}

function t_slds__setTabindexForFocusableElements(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector(".t-slds__items-wrapper"),
            i = e.querySelector(".t-slds__item_active");
        if (i) {
            var r = 'a, button, input:not([type="hidden"]), select, textarea, video, iframe',
                a = s.querySelectorAll(r);
            Array.prototype.forEach.call(a, (function(t) {
                t.setAttribute("tabindex", "-1")
            }));
            var d = i.querySelectorAll(r);
            Array.prototype.forEach.call(d, (function(t) {
                t.setAttribute("tabindex", "0")
            }))
        }
    }
}

function t_slds_SliderWidth(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector(".t-slds__container");
        if (s) {
            var i = parseInt(getComputedStyle(s).paddingLeft) || 0,
                r = parseInt(getComputedStyle(s).paddingRight) || 0,
                a = s.clientWidth - (i + r),
                d = e.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)").length,
                l = e.querySelector(".t-slds__items-wrapper"),
                o = 0;
            if (l) {
                var n = l.getAttribute("data-slider-stop");
                if (o = l.getAttribute("data-slider-items-in-row"), "true" == n) return !1;
                l.style.width = a * d + "px"
            }
            window.innerWidth <= 640 ? o = 1 : window.innerWidth <= 960 && o > 1 && (o = 2);
            var c = o > 1 ? a / o : a;
            if (c > 0) {
                var u = e.querySelectorAll(".t-slds__item");
                l && (u = l.querySelectorAll(".t-slds__item")), Array.prototype.forEach.call(u, (function(t) {
                    t.style.width = c + "px"
                }))
            }
        }
    }
}

function t_slds_SliderHeight(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector('.t-slds__items-wrapper:not([data-slider-correct-height="false"])');
        if (s) {
            var i = s.classList.contains("js-feed-container"),
                r = e.querySelector(".t-slds__item_active");
            if (r) var a = parseInt(getComputedStyle(r).paddingTop) || 0,
                d = parseInt(getComputedStyle(r).paddingBottom) || 0,
                l = r.clientHeight - (a + d);
            l && s && (s.style.height = i ? "" : l + "px")
        }
    }
}

function t_slds_UpdateSliderHeight(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector('.t-slds__items-wrapper:not([data-slider-correct-height="false"])');
        if (s) {
            var i = s.classList.contains("js-feed-container"),
                r = e.querySelector(".t-slds__item_active");
            if (r) var a = parseInt(getComputedStyle(r).paddingTop) || 0,
                d = parseInt(getComputedStyle(r).paddingBottom) || 0,
                l = r.clientHeight - (a + d);
            0 !== l && s && (s.style.height = i ? "" : l + "px")
        }
    }
}

function t_slds_SliderArrowsHeight(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector(".t-slds__item_active");
        if (s) {
            var i = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                r = 0,
                a;
            s.querySelector("[data-slider-video-type]") && i && (r = 40);
            var d = parseInt(getComputedStyle(s).paddingTop) || 0,
                l = parseInt(getComputedStyle(s).paddingBottom) || 0,
                o = s.clientHeight - (d + l) - r
        }
        var n = e.querySelectorAll(".t-slds__arrow_wrapper");
        o && n.length > 0 && Array.prototype.forEach.call(n, (function(t) {
            t.style.height = o + "px";
            var e = t.querySelector(".t-slds__arrow");
            e && (e.style.marginTop = r / 2 + "px")
        }))
    }
}

function t_slds_UpdateSliderArrowsHeight(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector(".t-slds__item_active");
        if (s) {
            var i = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                r = 0,
                a;
            s.querySelector("[data-slider-video-type]") && i && (r = 40);
            var d = parseInt(getComputedStyle(s).paddingTop) || 0,
                l = parseInt(getComputedStyle(s).paddingBottom) || 0,
                o = s.clientHeight - (d + l) - r
        }
        var n = e.querySelectorAll(".t-slds__arrow_wrapper");
        o && n.length > 0 && Array.prototype.forEach.call(n, (function(t) {
            t.style.height = o + "px";
            var e = t.querySelector(".t-slds__arrow");
            e && (e.style.marginTop = r / 2 + "px")
        }))
    }
}

function t_slds_initAutoPlay(t, e, s, i) {
    var r = "object" == typeof t,
        a = r ? t[0] : document.querySelector("#rec" + t);
    if (a) {
        var d = a.querySelector(".t-slds"),
            l = a.querySelector(".t-slds__items-wrapper");
        if (l) {
            var o = parseFloat(l.getAttribute("data-slider-timeout")),
                n = "",
                c = l.getAttribute("data-slider-stop"),
                u = l.getAttribute("data-slider-interval-id"),
                _;
            if (u && clearInterval(u), "true" == c) return !1;
            !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && d && (d.addEventListener("mouseover", (function() {
                l.setAttribute("data-slider-stopped", "yes")
            })), d.addEventListener("mouseout", (function() {
                "y" !== l.getAttribute("data-slider-stopped-by-video") && l.setAttribute("data-slider-stopped", "")
            })));
            var p = a.getBoundingClientRect().top + window.pageYOffset,
                f = p + a.offsetHeight,
                y, m;
            window.addEventListener("resize", t_throttle((function() {
                p = a.getBoundingClientRect().top + window.pageYOffset, f = p + a.offsetHeight
            }))), void 0 !== document.hidden ? (y = "hidden", m = "visibilitychange") : void 0 !== document.msHidden ? (y = "msHidden", m = "msvisibilitychange") : void 0 !== document.webkitHidden && (y = "webkitHidden", m = "webkitvisibilitychange"), document.addEventListener(m, (function() {
                if (document[y]) l.setAttribute("data-slider-stopped", "yes");
                else {
                    var t = getComputedStyle(a).display,
                        e = window.pageYOffset,
                        s = e + window.innerHeight;
                    p = a.getBoundingClientRect().top + window.pageYOffset, (f = p + a.offsetHeight) > e && p < s && "none" !== t && "y" !== l.getAttribute("data-slider-stopped-by-video") && l.setAttribute("data-slider-stopped", "")
                }
            }), !1), 1 === a.length && window.bind("scroll", t_throttle((function() {
                var t = getComputedStyle(a).display,
                    e = window.pageYOffset,
                    s = e + window.innerHeight;
                "none" !== t ? (p = a.getBoundingClientRect().top + window.pageYOffset, (f = p + a.offsetHeight) > e && p < s && "y" !== l.getAttribute("data-slider-stopped-by-video") ? l.setAttribute("data-slider-stopped", "") : "" === l.getAttribute("data-slider-stopped") && l.setAttribute("data-slider-stopped", "yes")) : r || l.setAttribute("data-slider-stopped", "yes")
            })));
            var v = setInterval((function() {
                var r = l.getAttribute("data-slider-stopped"),
                    d = l.getAttribute("data-slider-autoplay-ignore-hover"),
                    o = l.getAttribute("data-slider-touch"),
                    c = t_slds_getCurrentTranslate(a);
                "yes" != r && "yes" != d && "yes" != o && ("false" == l.getAttribute("data-slider-with-cycle") && e == s ? e = s : e++, l.setAttribute("data-slider-pos", e), e != s + 1 && 0 != e || (n = "yes"), t_slideMoveWithoutAnimation(t, !0, i, c), t_slds_updateSlider(t), "yes" == n && (e == s + 1 && (e = 1), 0 == e && (e = s), l.setAttribute("data-slider-pos", e)), l.setAttribute("data-slider-cycle", n))
            }), o);
            l.setAttribute("data-slider-interval-id", v)
        }
    }
}

function t_slds_positionArrows(t) {
    var e = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (e) {
        var s = e.querySelector(".t-slds__arrow_container-outside"),
            i = e.querySelector(".t-slds__item");
        if (i) {
            var r = i.offsetWidth,
                a = e.querySelector(".t-slds__arrow-left") ? e.querySelector(".t-slds__arrow-left").offsetWidth : 0,
                d = e.querySelector(".t-slds__arrow-right") ? e.querySelector(".t-slds__arrow-right").offsetWidth : 0;
            s && (s.style.maxWidth = a + d + r + 120 + "px")
        }
    }
}

function t_slds_initSliderSwipe(t, e, s, i) {
    var r = "object" == typeof t ? t[0] : document.querySelector("#rec" + t);
    if (r) {
        var a = r.querySelector(".t-slds__main");
        if (a) {
            var d = r.querySelector(".t-slds__items-wrapper");
            if (d) {
                var l = d.getAttribute("data-slider-stop"),
                    o = d.getAttribute("data-swiper-initialized"),
                    n, c = !1,
                    u = !1;
                if ("true" == l) return !1;
                if ("true" == o) return !1;
                delete Hammer.defaults.cssProps.userSelect, hammer = new Hammer(a, {
                    domEvents: !0,
                    inputClass: Hammer.TouchInput,
                    recognizers: [
                        [Hammer.Pan, {
                            direction: Hammer.DIRECTION_HORIZONTAL
                        }]
                    ]
                }), d.setAttribute("data-swiper-initialized", "true");
                var _ = function(t) {
                        window.pageYOffset > r.getBoundingClientRect().bottom + window.pageYOffset || window.pageYOffset + document.documentElement.clientHeight < r.getBoundingClientRect().top + window.pageYOffset ? d.setAttribute(t, "yes") : "y" !== d.getAttribute("data-slider-stopped-by-video") && d.setAttribute(t, "")
                    },
                    p = "ontouchend" in document ? "data-slider-touch" : "data-slider-stopped",
                    f;
                if ("IntersectionObserver" in window) new IntersectionObserver((function(t) {
                    var e = t[0];
                    d.setAttribute(p, e.isIntersecting ? "" : "yes")
                })).observe(r);
                else _(p), window.addEventListener("scroll", (function() {
                    c = !0, clearTimeout(n), n = setTimeout((function() {
                        _(p), c = !1
                    }), 250)
                }));
                if (1 == e) return !1;
                var y = function(t) {
                    if (u) return t.preventDefault(), !1
                };
                window.removeEventListener("touchmove", y, {
                    passive: !1
                }), window.addEventListener("touchmove", y, {
                    passive: !1
                }), hammer.on("pan", (function(e) {
                    if (c) return !1;
                    u = !0;
                    var s = r.querySelector(".t-slds__items-wrapper"),
                        a = s.getAttribute("data-slider-items-in-row") || 0,
                        d = a > 1,
                        l = d ? r.querySelector(".t-slds__container .t-slds__item").offsetWidth : r.querySelector(".t-slds__container").offsetWidth,
                        o = parseFloat(s.getAttribute("data-slider-pos")),
                        n = parseFloat(s.getAttribute("data-slider-totalslides")),
                        _ = "",
                        p = e.deltaX,
                        f = 100 / n * e.deltaX / window.innerWidth,
                        y = 30,
                        m;
                    if ("true" == s.getAttribute("data-slider-stop")) return !1;
                    if (s.setAttribute("data-slider-touch", "yes"), t_slds_scrollImages(t, l * o - p), e.isFinal) {
                        if (e.velocityX > .4) "false" == s.getAttribute("data-slider-with-cycle") && 1 == o ? o = 1 : o--, s.setAttribute("data-slider-pos", o), 0 == o && (_ = "yes"), s.setAttribute("data-slider-cycle", _), t_slideMove(t, !1, i);
                        else if (e.velocityX < -.4) {
                            if ("false" == s.getAttribute("data-slider-with-cycle") && (o == n || d && o == n - a + 1)) o = d ? n - a : n;
                            else {
                                var v = r.querySelectorAll(".t-slds__item:not(.t-slds__item_dummy)"),
                                    g = v[v.length - 1],
                                    A = parseFloat(g.getAttribute("data-slide-index"), 10);
                                if (A < n && o == A) {
                                    var b = document.createEvent("Event");
                                    b.initEvent("feedsLastSlide", !0, !0), s.dispatchEvent(b), document.addEventListener("feedsLoadSlide", (function() {
                                        t_slds_updateSlider(t)
                                    }))
                                }
                                o++
                            }
                            s.setAttribute("data-slider-pos", o), o == n + 1 && (_ = "yes"), s.setAttribute("data-slider-cycle", _), t_slideMove(t, !1, i)
                        } else f <= -30 / n ? ("false" == s.getAttribute("data-slider-with-cycle") && (o == n || d && o == n - a + 1) ? o = d ? n - a : n : o++, s.setAttribute("data-slider-pos", o), o == n + 1 && (_ = "yes"), s.setAttribute("data-slider-cycle", _), t_slideMove(t, !1, i)) : f >= 30 / n ? ("false" == s.getAttribute("data-slider-with-cycle") && 1 == o ? o = 1 : o--, s.setAttribute("data-slider-pos", o), 0 == o && (_ = "yes"), s.setAttribute("data-slider-cycle", _), t_slideMove(t, !1, i)) : t_slideMove(t, !1, i);
                        s.setAttribute("data-slider-touch", ""), u = !1
                    }
                })), hammer.on("panend", (function() {
                    t_slideMove(t, !1, i), u = !1
                }))
            }
        }
    }
}

function t_slds_getCurrentTranslate(t) {
    var e = t.querySelector(".t-slds__items-wrapper");
    if (e) {
        var s = getComputedStyle(e).transform;
        if (void 0 !== s && "" !== s) {
            var i = s.match(/\d+/g);
            if (null !== i) return parseInt(i[0], 10)
        }
    }
}

function t_slds_changeImageUrl(t) {
    var e = document.getElementById("allrecords"),
        s = e && "yes" === e.getAttribute("data-tilda-lazy"),
        i = "object" == typeof t ? t[0] : document.querySelector("#rec" + t),
        r;
    i && (r = s ? i.querySelectorAll(".t-slds__img:not([data-original])") : i.querySelectorAll(".t-slds__img"), Array.prototype.forEach.call(r, (function(t) {
        var e = t.getAttribute("data-src");
        e && (t.setAttribute("src", e), t.removeAttribute("data-src"))
    })))
}

function t_slds_onHammerLoad(t, e, s) {
    if ("function" == typeof window[t]) e();
    else var i = Date.now(),
        r = setTimeout((function a() {
            var d = Date.now();
            if ("function" != typeof window[t]) {
                if (d - i > 7e3) throw new Error(t + " is undefined");
                r = setTimeout(a, s || 100)
            } else e()
        }))
}

function t_slds_fadeOut(t, e, s) {
    if ("none" !== t.style.display && !t.getAttribute("data-fadeout-timeout")) {
        var i = 1;
        e = parseInt(e);
        var r, a = setInterval((function() {
            t.style.opacity = i, (i -= .1) <= .1 && (clearInterval(a), t.removeAttribute("data-fadeout-timeout"), t.style.display = "none", "function" == typeof s && s())
        }), e > 0 ? e / 10 : 40);
        t.setAttribute("data-fadeout-timeout", a)
    }
}

function t_slds_fadeIn(t, e, s) {
    if (("1" !== getComputedStyle(t).opacity && "" !== getComputedStyle(t).opacity || "none" === getComputedStyle(t).display) && !t.getAttribute("data-fadein-timeout")) {
        var i = 0,
            r = (e = parseInt(e)) > 0 ? e / 10 : 40;
        t.style.opacity = i, t.style.display = "block";
        var a = setInterval((function() {
            t.style.opacity = i, (i += .1) >= 1 && (clearInterval(a), t.removeAttribute("data-fadein-timeout"), "function" == typeof s && s())
        }), r);
        t.setAttribute("data-fadein-timeout", a)
    }
}
window.t_slds__isiOS = /iPhone|iPad|iPod/i.test(navigator.userAgent) || navigator.userAgent.indexOf("Macintosh") && "ontouchend" in document;