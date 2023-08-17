function t_animate__init() {
    t_animate__checkAnimationAvailability() && (t_animate__generateStyles(), t_animate__wrapTextWithOpacity(), t_animate__addNoHoverClassToBtns(), t_animate__preventHorizontalScroll(), 1200 <= window.innerWidth && t_animate__parseNumberText(), setTimeout(function() {
        t_animate__startAnimation()
    }, 1500))
}

function t_animate__checkMobile(t) {
    return Array.prototype.filter.call(t, function(t) {
        var e = t.closest(".t396__elem"),
            a = e ? e.getAttribute("data-animate-mobile") : null;
        if (t.classList.contains("r")) {
            e = t.querySelectorAll(".t-animate");
            return Array.prototype.forEach.call(e, function(t) {
                t.classList.remove("t-animate")
            }), !1
        }
        return !!a || (t.classList.remove("t-animate"), !1)
    })
}

function t_animate__preventHorizontalScroll() {
    var t = document.querySelector(".t-records"),
        e = document.querySelectorAll("[data-animate-style=fadeinleft]"),
        e = Array.prototype.filter.call(e, function(t) {
            return !t.classList.contains("t396__elem")
        });
    t && e.length && (t.style.overflowX = "hidden")
}

function t_animate__checkAnimationAvailability() {
    var t = document.querySelector(".t-records"),
        e = t ? t.getAttribute("data-blocks-animationoff") : null,
        t = t ? t.getAttribute("data-tilda-mode") : null;
    if (/Bot/i.test(navigator.userAgent) || "yes" === e || t_animate__checkIE() || "edit" === t) {
        t = document.querySelectorAll(".t-animate");
        return Array.prototype.forEach.call(t, function(t) {
            t.classList.remove("t-animate")
        }), !1
    }
    return !0
}

function t_animate__generateStyles() {
    if (!!document.querySelector(".t396")) {
        for (var t = t_animate__getBreakpointsArr(), e = '.t396 .t-animate[data-animate-style="fadein"],.t396 .t-animate[data-animate-style="fadeinup"],.t396 .t-animate[data-animate-style="fadeindown"],.t396 .t-animate[data-animate-style="fadeinleft"],.t396 .t-animate[data-animate-style="fadeinright"],.t396 .t-animate[data-animate-style="zoomin"],.t396 .t-animate[data-animate-style="zoomout"] {opacity: 0;-webkit-transition-property: opacity, transform;transition-property: opacity, transform;-webkit-transition-duration: 1s;transition-duration: 1s;-webkit-transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);-webkit-backface-visibility: hidden;backface-visibility: hidden;}', a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + ".t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadein"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="fadeinup"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="fadeindown"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="fadeinleft"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="fadeinright"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="zoomin"],.t396 .t-animate[data-animate-style-res-' + n.minRes + '="zoomout"] {opacity: 0;-webkit-transition-property: opacity, transform;transition-property: opacity, transform;-webkit-transition-duration: 1s;transition-duration: 1s;-webkit-transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);-webkit-backface-visibility: hidden;backface-visibility: hidden;}}');
        e += '.t396 .t-title.t-animate {-webkit-transition-duration: 1.2s;transition-duration: 1.2s;}.t396 .t-descr.t-animate,.t396 .t-uptitle.t-animate,.t396 .t-subtitle.t-animate,.t396 .t-text.t-animate {-webkit-transition-duration: 0.7s;transition-duration: 0.7s;}.t396 .t-item.t-animate {-webkit-transition-duration: 0.5s;transition-duration: 0.5s;}.t396 .t-animate[data-animate-style="fadein"] {opacity: 0;transform: none;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadein"] {opacity: 0;transform: none;}}');
        e += '.t396 .t-animate_started[data-animate-style="fadein"] {opacity: 1;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="fadein"] {opacity: 1;}}');
        e += '.t396 .t-animate[data-animate-style="fadeinup"] {-webkit-transform: translate(0, 100px);transform: translate(0, 100px);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadeinup"] {-webkit-transform: translate(0, 100px);transform: translate(0, 100px);}}');
        e += '.t396 .t-animate_started[data-animate-style="fadeinup"] {opacity: 1;-webkit-transform: none;transform: none;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="fadeinup"] {opacity: 1;-webkit-transform: none;transform: none;}}');
        e += '.t396 .t-animate[data-animate-style="fadeindown"] {-webkit-transform: translate(0, -100px);transform: translate(0, -100px);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadeindown"] {-webkit-transform: translate(0, -100px);transform: translate(0, -100px);}}');
        e += '.t396 .t-animate_started[data-animate-style="fadeindown"] {opacity: 1;-webkit-transform: none;transform: none;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="fadeindown"] {opacity: 1;-webkit-transform: none;transform: none;}}');
        e += '.t396 .t-animate[data-animate-style="fadeinleft"] {-webkit-transform: translate(100px, 0);transform: translate(100px, 0);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadeinleft"] {-webkit-transform: translate(100px, 0);transform: translate(100px, 0);}}');
        e += '.t396 .t-animate_started[data-animate-style="fadeinleft"] {opacity: 1;-webkit-transform: none;transform: none;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="fadeinleft"] {opacity: 1;-webkit-transform: none;transform: none;}}');
        e += '.t396 .t-animate[data-animate-style="fadeinright"] {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="fadeinright"] {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0);}}');
        e += '.t396 .t-animate_started[data-animate-style="fadeinright"] {opacity: 1;-webkit-transform: none;transform: none;}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="fadeinright"] {opacity: 1;-webkit-transform: none;transform: none;}}');
        e += '.t396 .t-animate[data-animate-style="zoomin"] {-webkit-transform: scale(0.9);transform: scale(0.9);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="zoomin"] {-webkit-transform: scale(0.9);transform: scale(0.9);}}');
        e += '.t396 .t-animate_started[data-animate-style="zoomin"] {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="zoomin"] {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}');
        e += '.t396 .t-animate[data-animate-style="zoomout"] {-webkit-transform: scale(1.2);transform: scale(1.2);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate[data-animate-style-res-" + n.minRes + '="zoomout"] {-webkit-transform: scale(1.2);transform: scale(1.2);}}');
        e += '.t396 .t-animate_started[data-animate-style="zoomout"] {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}';
        for (a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="zoomout"] {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}');
        e += ".t396 .t-animate_started[data-animate-distance],.t396 .t-animate_started[data-animate-scale]{-webkit-transform: none !important;transform: none !important;}";
        for (var n, a = 0; a < t.length; a++)(n = t_animate__getMediaQuery(t, a)).isContinue || (e += n.text + "#allrecords .t396 .t-animate_started[data-animate-distance-res-" + n.minRes + "],#allrecords .t396 .t-animate_started[data-animate-style-res-" + n.minRes + '="zoomout"] {-webkit-transform: none !important;transform: none !important;}}');
        var i = document.createElement("style"),
            r = document.head || document.querySelector("head");
        i.textContent = e, r.appendChild(i)
    }
}

function t_animate__getBreakpointsArr() {
    var e = [],
        t = Array.prototype.slice.call(document.querySelectorAll('.r[data-record-type="396"]:not(.t397__off):not(.t395__off):not(.t400__off) .t396__artboard'));
    return Array.prototype.forEach.call(t, function(t) {
        t.classList.contains("t396__artboard") && (t = (t = (t = (t = t.getAttribute("data-artboard-screens")) ? t.split(",") : [1200, 960, 640, 480, 320]).map(function(t) {
            return parseInt(t, 10)
        })).filter(function(t) {
            return -1 === e.indexOf(t)
        }), e = e.concat(t))
    }), e = t_animate__sortArr(e)
}

function t_animate__getMediaQuery(t, e) {
    var a = "",
        n = !1,
        i = t[e + 1],
        r = t[e] - 1,
        o = e === t.length - 1,
        t = e === t.length - 2;
    return o ? n = !0 : a += t ? "@media screen and (max-width: " + r + "px) {" : "@media screen and (min-width: " + i + "px) and (max-width: " + r + "px) {", {
        text: a,
        isContinue: n,
        minRes: i
    }
}

function t_animate__sortArr(t) {
    return t.sort(function(t, e) {
        return e - t
    })
}

function t_animate__startAnimation() {
    var t, a, e, n = document.querySelectorAll(".r"),
        i = Array.prototype.filter.call(n, function(t) {
            return t.querySelector(".t-animate[data-animate-group=yes]")
        }),
        r = Array.prototype.filter.call(n, function(t) {
            return t.querySelector('.t-animate[data-animate-chain="yes"]')
        }),
        o = document.querySelectorAll(".t-animate"),
        o = Array.prototype.filter.call(o, function(t) {
            return !("yes" === t.getAttribute("data-animate-group") || "yes" === t.getAttribute("data-animate-chain") || t.getAttribute("observer-ready"))
        });
    window.innerWidth < 1200 && (i = t_animate__checkMobile(i), r = t_animate__checkMobile(r), o = t_animate__checkMobile(o)), (i.length || o.length || r.length) && (t_animate__setAnimationState(i, r, o), i = t_animate__hasWaitAnimation(i), o = t_animate__hasWaitAnimation(o), r = t_animate__hasWaitAnimation(r), t = "undefined" != typeof navigator && /^((?!chrome|android).)*(safari|mobile)/i.test(navigator.userAgent) && /(os |version\/)15(.|_)[4-9]/i.test(navigator.userAgent), "IntersectionObserver" in window && !t ? (i.length && (a = [], i.forEach(function(t) {
        var e = t.querySelector(".t-animate");
        "fadeindown" === e.getAttribute("data-animate-style") && (!e.closest(".t-cover") || (t = t.querySelector(".t-animate:not(:first-child)")) && (e = t)), a.push(e)
    }), a.forEach(function(t) {
        new IntersectionObserver(function(t, a) {
            t.forEach(function(t) {
                var e;
                t.isIntersecting && (e = t.target, a.unobserve(e), t = e.closest(".r").querySelectorAll(".t-animate"), t = Array.prototype.filter.call(t, function(t) {
                    return !(t.classList.contains("t-animate__btn-wait-chain") || "yes" === t.getAttribute("data-animate-chain"))
                }), t_animate__makeSectionButtonWait(e), t_animate__saveSectionHeaderStartTime(e), Array.prototype.forEach.call(t, function(t) {
                    t.classList.remove("t-animate_wait"), t_animate__removeNoHoverClassFromBtns(t), t.classList.add("t-animate_started")
                }))
            })
        }, {}).observe(t)
    })), o.length && o.forEach(function(t) {
        var e = {},
            a = t_animate__getAttrByResBase(t, "trigger-offset");
        a && (e.rootMargin = "0px 0px " + -1 * a.replace("px", "") + "px 0px");
        e = new IntersectionObserver(function(t, n) {
            t.forEach(function(t) {
                var e, a = t.target;
                !a.demandTransform && a.style.transform ? (a.demandTransform = a.style.transform, a.style.transform = "unset") : (e = window.getComputedStyle(a).transform, a.style.transform || "none" === e || (a.demandTransform = e, a.style.transform = "unset")), t.isIntersecting && (n.unobserve(a), t = -1 !== (t = a.style.transitionDelay || "0ms").indexOf("ms") ? parseInt(t) + 250 : 1e3 * parseFloat(t) + 250, a.demandTransform && -1 !== a.demandTransform.indexOf("matrix") && (a.style.transform = ""), a.demandTransform && "unset" === a.style.transform && (a.style.transform = a.demandTransform, delete a.demandTransform), setTimeout(function() {
                    a.classList.remove("t-animate_wait"), t_animate__removeNoHoverClassFromBtns(a), a.classList.add("t-animate_started"), "animatednumber" === t_animate__getAttrByResBase(a, "style") && t_animate__animateNumbers(a)
                }, t))
            })
        }, e);
        t.dataset.observerReady = !0, e.observe(t)
    }), r.length && ((e = function() {
        t_animate__getChainOffsets(r)
    })(), window.addEventListener("resize", t_throttle(function() {
        e()
    })), setInterval(e, 5e3), window.addEventListener("scroll", t_throttle(function() {
        var t = window.pageYOffset + window.innerHeight;
        t_animate__animateChainsBlocks(r, t)
    })))) : ((e = function() {
        t_animate__getGroupsOffsets(i), t_animate__getChainOffsets(r), t_animate__getElemsOffsets(o)
    })(), window.addEventListener("resize", t_throttle(e)), setInterval(e, 5e3), window.addEventListener("scroll", t_throttle(function() {
        var t = t_animate__deleteAnimatedEls(i, o);
        o = t[0];
        t = t_animate__animateOnScroll(i = t[1], r, o);
        t && t.length && (i = t[0], r = t[1], o = t[2])
    }))), Array.prototype.forEach.call(n, function(t) {
        var a = t.querySelector(".t-popup");
        a && a.addEventListener("scroll", t_throttle(function() {
            var t, e = window.pageYOffset + window.innerHeight;
            (a.classList.contains("t-animate") && "yes" === a.getAttribute("data-animate-chain") || a.querySelector(".t-animate[data-animate-chain=yes]")) && (t_animate__setAnimationStateChains(t = [a]), t_animate__getChainOffsets(t = Array.prototype.filter.call(t, function(t) {
                return t.querySelector(".t-animate_wait")
            })), t_animate__animateChainsBlocks(t, e))
        }))
    }))
}

function t_animate__animateOnScroll(t, e, a) {
    if (t.length || e.length || a.length) {
        var n = window.pageYOffset,
            i = n + window.innerHeight;
        return [t_animate__animateGroups(t, i, n), t_animate__animateChainsBlocks(e, i, n), t_animate__animateElems(a, i, n)]
    }
}

function t_animate__animateGroups(t, a) {
    return t.forEach(function(t) {
        var e;
        t.curTopOffset < a && (e = t.querySelectorAll(".t-animate"), e = Array.prototype.filter.call(e, function(t) {
            return !(t.classList.contains("t-animate__btn-wait-chain") || "yes" === t.getAttribute("data-animate-chain"))
        }), t_animate__makeSectionButtonWait(t), t_animate__saveSectionHeaderStartTime(t), Array.prototype.forEach.call(e, function(t) {
            t.classList.remove("t-animate_wait"), t_animate__removeNoHoverClassFromBtns(t), t.classList.add("t-animate_started")
        }))
    }), t
}

function t_animate__animateChainsBlocks(t, e) {
    return t.forEach(function(t) {
        t.itemsOffsets[0] < e && t.querySelectorAll(".t-animate_wait").length && (t_animate__animateChainItemsOnScroll(t, e), t.itemsOffsets.length && t_animate__checkSectionButtonAnimation__outOfTurn(t))
    }), t
}

function t_animate__animateElems(t, a, n) {
    return Array.prototype.filter.call(t, function(t) {
        var e = t_animate__detectElemTriggerOffset(t, a);
        return t.curTopOffset < e ? (t.classList.remove("t-animate_wait"), t_animate__removeNoHoverClassFromBtns(t), t.classList.add("t-animate_started"), "animatednumber" === t_animate__getAttrByResBase(t, "style") && t_animate__animateNumbers(t), !0) : !(t.curTopOffset < n) && void 0
    }), t
}

function t_animate__deleteAnimatedEls(t, e) {
    var a = window.pageYOffset,
        n = [],
        i = [];
    return t.forEach(function(t) {
        var e;
        t.curTopOffset <= a ? (e = t.querySelectorAll(".t-animate"), Array.prototype.forEach.call(e, function(t) {
            t.classList.remove("t-animate"), t.classList.remove("t-animate_wait"), t.classList.remove("t-animate_no-hover")
        })) : n.push(t)
    }), e.forEach(function(t) {
        t.curTopOffset <= a ? (t.classList.remove("t-animate"), t.classList.remove("t-animate_no-hover"), t.classList.add("t-animate_started"), t.classList.remove("t-animate_wait")) : i.push(t)
    }), [i, n]
}

function t_animate__animateChainItemsOnScroll(t, e) {
    var a = t.querySelectorAll(".t-animate_wait[data-animate-chain=yes]"),
        a = Array.prototype.slice.call(a),
        n = 0,
        i = 0,
        r = t.itemsOffsets[0],
        o = t_animate__getDelayFromPreviousScrollEvent(t, .16),
        s = t_animate__getSectionHeadDealy(t);
    a.length && a[0].classList.add("t-animate__chain_first-in-row");
    for (var l = 0; l < a.length; l++) {
        var m = a[l],
            c = t.itemsOffsets[l];
        if (!(c < e)) break;
        c !== r && (m.classList.add("t-animate__chain_first-in-row"), n = ++i, r = c);
        var _ = .16 * n + o + s;
        m.style.transitionDelay = _ + "s", m.classList.remove("t-animate_wait"), m.classList.add("t-animate_started"), m.setAttribute("data-animate-start-time", Date.now() + 1e3 * _), m[0] === a[a.length - 1] && t_animate__checkSectionButtonAnimation(t, _), +c == +r && n++, a.splice(l, 1), t.itemsOffsets.splice(l, 1), l--
    }
    t_animate__catchTransitionEndEvent(t)
}

function t_animate__getSectionHeadDealy(t) {
    var e = t.querySelector(".t-section__title.t-animate"),
        a = t.querySelector(".t-section__descr.t-animate"),
        t = 0;
    if (e) {
        e = e.getAttribute("data-animate-start-time") || 0;
        if (Date.now() - e <= 160) return t = .16
    }
    if (a) {
        a = a.getAttribute("data-animate-start-time") || 0;
        if (Date.now() - a <= 160) return t = .16
    }
    return t
}

function t_animate__getDelayFromPreviousScrollEvent(t, e) {
    var a = !t.querySelectorAll(".t-animate_started").length,
        t = t.querySelectorAll(".t-animate__chain_first-in-row.t-animate_started"),
        t = Array.prototype.filter.call(t, function(t) {
            return !t.classList.contains("t-animate__chain_showed")
        });
    if (a || !t.length) return 0;
    if (t.length) {
        t = (t[t.length - 1].getAttribute("data-animate-start-time") || 0) - Date.now();
        return t <= 0 ? e : t / 1e3 + e
    }
}

function t_animate__catchTransitionEndEvent(t) {
    t = t.querySelectorAll(".t-animate__chain_first-in-row.t-animate_started"), t = Array.prototype.filter.call(t, function(t) {
        return !t.classList.contains("t-animate__chain_showed")
    });
    Array.prototype.forEach.call(t, function(e) {
        ["transitionend", "webkitTransitionEnd", "oTransitionEnd", "otransitionend", "MSTransitionEnd"].forEach(function(t) {
            e.addEventListener(t, function() {
                t_animate__addEventOnAnimateChain(e)
            }), e.removeEventListener(t, function() {
                t_animate__addEventOnAnimateChain(e)
            })
        })
    })
}

function t_animate__parseNumberText() {
    var o = window.pageYOffset,
        t = document.querySelectorAll(".t-animate[data-animate-style='animatednumber']");
    Array.prototype.forEach.call(t, function(t) {
        var e, a, n, i = "",
            r = t.querySelectorAll("span");
        Array.prototype.forEach.call(r, function(t) {
            i += t.getAttribute("style") || "", t.removeAttribute("style"), t.removeAttribute("data-redactor-style")
        }), t.querySelectorAll('div[data-customstyle="yes"]').length ? (e = (a = t.querySelector('div[data-customstyle="yes"]')) ? a.innerHTML : "", n = t.getAttribute("style") || "", (a = (a = t.querySelector("div[data-customstyle]")) ? a.getAttribute("style") : "") && (n += a), t.setAttribute("style", n)) : e = t.innerHTML, i = i.split(";").filter(function(t, e) {
            return i.split(";").indexOf(t) === e
        }).join(";"), t.getBoundingClientRect().top + window.pageYOffset < o - 500 || e.length && (n = a = e.replace(/<br>/g, " ").replace(/[^\d., ]+/g, "").replace(/ (\.|,)/g, "").replace(/(\d)(?=\d) /g, "$1").trim(), -1 === e.indexOf(a) && (n = a = a.split(" ")[0]), "" !== a && (t.setAttribute("data-animate-number-count", e), t_animate__changeNumberOnZero(t, e.replace(n, "num")), t = t.querySelectorAll("span"), t = Array.prototype.filter.call(t, function(t) {
            return !t.classList.contains(".t-animate__number")
        }), Array.prototype.forEach.call(t, function(t) {
            t.setAttribute("style", i)
        })))
    })
}

function t_animate__changeNumberOnZero(t, e) {
    t.innerHTML = e.replace(/num/g, '<span class="t-animate__number">0</span>')
}

function t_animate__animateNumbers(e) {
    if (!e) return !1;
    var a = e.getAttribute("data-animate-number-count"),
        n = [],
        t = e.querySelectorAll("span");
    (t = Array.prototype.filter.call(t, function(t) {
        return !t.classList.contains(".t-animate__number")
    })).length && (n = t[0].getAttribute("style") || "");
    var i, r = [],
        o = null;
    a && (o = a.match(/\d+\.\d+|\d+,\d+/g), i = a.match(/\d+/g), a.replace(/(\d)(?= \d) /g, "$1").split(" ").forEach(function(t) {
        isNaN(parseInt(t.replace(/[^\d., ]+/g, ""), 10)) || r.push(t.replace(/[^\d., ]+/g, ""))
    }));
    var s = 0,
        l = !1,
        m = !1;
    e.removeAttribute("data-animate-number-count"), null !== o && (m = -1 !== o[0].indexOf(",")), r.forEach(function(t, e) {
        var a;
        null !== o && (-1 !== t.indexOf(",") && (a = t.split(",")), -1 !== t.indexOf(".") && (a = t.split(".")), -1 === t.indexOf(",") && -1 === t.indexOf(".") || (s = a[1].length, r[e] = +a.join("."), l = !0))
    });
    var c, _, d, f, u, y = e.querySelector(".t-animate__number");
    r[0] && (c = Number(r[0]) || 0, _ = 0, d = Math.pow(10, s), l && (c *= d, _ *= d), f = 0, u = setInterval(function() {
        var t;
        _ += c / 108, f = l ? (Math.round(_) / d).toFixed(s) + "" : Math.floor(_) + "", 1 < i.length && (f = f.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, "$1 ")), m && (f = f.replace(/\./g, ",")), y && (y.textContent = f), c <= _ && (clearInterval(u), e.innerHTML = a, t = e.querySelectorAll("span"), Array.prototype.forEach.call(t, function(t) {
            t.setAttribute("style", n)
        }))
    }, 12))
}

function t_animate__setAnimationState(t, e, a) {
    var n = window.pageYOffset,
        i = n + window.innerHeight;
    t_animate__setGroupsBlocksState(t, n, i), e.forEach(function(t) {
        t_animate__assignChainDelay(t, i, n), t_animate__checkSectionButtonAnimation__outOfTurn(t)
    }), t_animate__setAnimELemsState(a, n, i), window.addEventListener("resize", t_throttle(t_animate__removeInlineAnimStyles))
}

function t_animate__setAnimELemsState(t, n, i) {
    t.forEach(function(t) {
        var e = t.getBoundingClientRect().top + window.pageYOffset;
        if (e < n - 500) return t.classList.remove("t-animate"), t.classList.remove("t-animate_no-hover"), "animatednumber" === t_animate__getAttrByResBase(t, "style") && t_animate__animateNumbers(t), !0;
        var a = t_animate__detectElemTriggerOffset(t, i);
        t_animate__setCustomAnimSettings(t, e, i), e < a && (t_animate__removeNoHoverClassFromBtns(t), t.classList.add("t-animate_started"), "animatednumber" === t_animate__getAttrByResBase(t, "style") && t_animate__animateNumbers(t)), a <= e && t.classList.add("t-animate_wait")
    })
}

function t_animate__setGroupsBlocksState(t, i, r) {
    t.forEach(function(a) {
        var t = a.querySelectorAll(".t-animate"),
            t = Array.prototype.filter.call(t, function(t) {
                return !("yes" === t.getAttribute("data-animate-chain"))
            }),
            n = a.getBoundingClientRect().top + window.pageYOffset;
        t_animate__removeAnimFromHiddenSlides(a);
        var e = t_animate__assignSectionDelay(a);
        t_animate__assignGroupDelay(a, e), Array.prototype.forEach.call(t, function(t) {
            var e = t.closest(".t397__off") || t.closest(".t395__off") || t.closest(".t400__off");
            if (t.classList.contains("t-animate_no-hover") && e && t.classList.remove("t-animate_no-hover"), n <= i - 100) return t_animate__saveSectionHeaderStartTime(a), t.classList.remove("t-animate"), t.classList.remove("t-animate_no-hover"), !(t.style.transitionDelay = "");
            n < r && i - 100 < n && (t_animate__makeSectionButtonWait(a), t.classList.contains(".t-animate__btn-wait-chain") || (t_animate__removeNoHoverClassFromBtns(t), e ? t.classList.add("t-animate_wait") : t.classList.add("t-animate_started"))), r <= n && t.classList.add("t-animate_wait")
        })
    })
}

function t_animate__setAnimationStateChains(t) {
    if (!t || !t.length) return !1;
    var e = window.pageYOffset,
        a = e + window.innerHeight;
    Array.prototype.forEach.call(t, function(t) {
        t_animate__assignChainDelay(t, a, e), t_animate__checkSectionButtonAnimation__outOfTurn(t)
    })
}

function t_animate__assignSectionDelay(t) {
    var e = 0,
        a = t.querySelectorAll(".t-section__title.t-animate"),
        t = t.querySelectorAll(".t-section__descr.t-animate");
    return a.length && (e = .16), t.length && (Array.prototype.forEach.call(t, function(t) {
        t.style.transitionDelay = e + "s"
    }), e += .16), e
}

function t_animate__assignGroupDelay(t, e) {
    var a, n, i, r, o, s = 0;
    t.querySelectorAll("[data-animate-order]").length ? t_animate__assignOrderedElemsDelay(t, e) : (a = t.querySelectorAll(".t-img.t-animate"), n = t.querySelectorAll(".t-uptitle.t-animate"), i = t.querySelectorAll(".t-title.t-animate"), i = Array.prototype.filter.call(i, function(t) {
        return !t.classList.contains("t-section__title")
    }), r = t.querySelectorAll(".t-descr.t-animate"), r = Array.prototype.filter.call(r, function(t) {
        return !t.classList.contains("t-section__descr")
    }), o = t.querySelectorAll(".t-btn.t-animate, .t-btnwrapper.t-animate"), o = Array.prototype.filter.call(o, function(t) {
        return !t.closest(".t-section__bottomwrapper")
    }), e = t.querySelectorAll(".t-timer.t-animate"), t = t.querySelectorAll("form.t-animate"), a.length && (s = .5), i.length && Array.prototype.forEach.call(i, function(t) {
        t.style.transitionDelay = s + "s"
    }), i.length && (s += .3), r.length && Array.prototype.forEach.call(r, function(t) {
        t.style.transitionDelay = s + "s"
    }), r.length && (s += .3), n.length && Array.prototype.forEach.call(n, function(t) {
        t.style.transitionDelay = s + "s"
    }), n.length && (s += .3), (n.length || i.length || r.length) && (s += .2), e.length && Array.prototype.forEach.call(e, function(t) {
        t.style.transitionDelay = s + "s"
    }), e.length && (s += .5), o.length && (o[0].style.transitionDelay = s + "s"), 2 === o.length && (s += .4), 2 === o.length && (o[1].style.transitionDelay = s + "s"), 0 !== t.length && Array.prototype.forEach.call(t, function(t) {
        t.style.transitionDelay = s + "s"
    }))
}

function t_animate__assignOrderedElemsDelay(t, e) {
    var a = 0;
    e && (a = e);
    var n = t.querySelectorAll('.t-animate[data-animate-order="1"]'),
        i = t.querySelectorAll('.t-animate[data-animate-order="2"]'),
        r = t.querySelectorAll('.t-animate[data-animate-order="3"]'),
        o = t.querySelectorAll('.t-animate[data-animate-order="4"]'),
        s = t.querySelectorAll('.t-animate[data-animate-order="5"]'),
        l = t.querySelectorAll('.t-animate[data-animate-order="6"]'),
        m = t.querySelectorAll('.t-animate[data-animate-order="7"]'),
        e = t.querySelectorAll('.t-animate[data-animate-order="8"]'),
        t = t.querySelectorAll('.t-animate[data-animate-order="9"]');
    n.length && Array.prototype.forEach.call(n, function(t) {
        t.style.transitionDelay = a + "s"
    }), n.length && i.length && (a += +t_animate__getAttrByResBase(i[0], "delay"), Array.prototype.forEach.call(i, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length) && r.length && (a += +t_animate__getAttrByResBase(r[0], "delay"), Array.prototype.forEach.call(r, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length) && o.length && (a += +t_animate__getAttrByResBase(o[0], "delay"), Array.prototype.forEach.call(o, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length || o.length) && s.length && (a += +t_animate__getAttrByResBase(s[0], "delay"), Array.prototype.forEach.call(s, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length || o.length || s.length) && l.length && (a += +t_animate__getAttrByResBase(l[0], "delay"), Array.prototype.forEach.call(l, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length || o.length || s.length || l.length) && m.length && (a += +t_animate__getAttrByResBase(m[0], "delay"), Array.prototype.forEach.call(m, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length || o.length || s.length || l.length || m.length) && e.length && (a += +t_animate__getAttrByResBase(e[0], "delay"), Array.prototype.forEach.call(e, function(t) {
        t.style.transitionDelay = a + "s"
    })), (n.length || i.length || r.length || o.length || s.length || l.length || m.length || e.length) && t.length && (a += +t_animate__getAttrByResBase(t[0], "delay"), Array.prototype.forEach.call(t, function(t) {
        t.style.transitionDelay = a + "s"
    }))
}

function t_animate__assignChainDelay(a, n, i) {
    var r, o, s, l = a.querySelectorAll(".t-animate[data-animate-chain=yes]"),
        m = 0;
    l.length && (r = l[0], o = r.getBoundingClientRect().top + window.pageYOffset, r.classList.add("t-animate__chain_first-in-row"), s = t_animate__getCurBlockSectionHeadDelay(a), Array.prototype.forEach.call(l, function(e) {
        var t = e.getBoundingClientRect().top + window.pageYOffset;
        if (t < i) return e.classList.remove("t-animate"), !0;
        t < n ? (t !== o && (e.classList.add("t-animate__chain_first-in-row"), o = t), t = .16 * m + s, e.style.transitionDelay = t + "s", e.classList.add("t-animate_started"), e.setAttribute("data-animate-start-time", Date.now() + 1e3 * t), r === l[l.length - 1] && t_animate__checkSectionButtonAnimation(a, t), m++, ["transitionend", "webkitTransitionEnd", "oTransitionEnd", "otransitionend", "MSTransitionEnd"].forEach(function(t) {
            e.addEventListener(t, function() {
                t_animate__addEventOnAnimateChain(e)
            }), e.removeEventListener(t, function() {
                t_animate__addEventOnAnimateChain(e)
            })
        })) : e.classList.add("t-animate_wait")
    }))
}

function t_animate__getAttrByResBase(t, e) {
    var a, n = t.closest(".t396__artboard");
    if (!n) return t.getAttribute("data-animate-" + e);
    var i, r, n = "ab" + n.getAttribute("data-artboard-recid"),
        o = void 0 !== window.tn[n] ? (i = window.tn[n].curResolution, r = window.tn[n].curResolution_max, window.tn[n].screens.slice()) : (i = window.tn.curResolution, [320, 480, 640, 960, r = 1200]),
        n = t.closest(".t396__elem"),
        n = n ? n.getAttribute("data-animate-mobile") : null;
    if (i === r) a = t.getAttribute("data-animate-" + e);
    else {
        if ("y" !== n && i < 1200) return t.style.transition = "none", null;
        a = t.getAttribute("data-animate-" + e + "-res-" + i)
    }
    if (!a && "" !== a)
        for (var s = 0; s < o.length; s++) {
            var l = o[s];
            if (!(l <= i) && (a = l === r ? t.getAttribute("data-animate-" + e) : t.getAttribute("data-animate-" + e + "-res-" + l))) break
        }
    return a
}

function t_animate__hasWaitAnimation(t) {
    return t.filter(function(t) {
        return t.classList.contains("t-animate_wait") || t.querySelector(".t-animate_wait")
    })
}

function t_animate__addEventOnAnimateChain(t) {
    t.classList.add("t-animate__chain_showed")
}

function t_animate__setCustomAnimSettings(t, e, a) {
    var n = t_animate__getAttrByResBase(t, "style"),
        i = t_animate__getAttrByResBase(t, "distance");
    if (i && "" !== i) {
        switch (i = i.replace("px", ""), t.style.transitionDuration = "0s", t.style.transitionDelay = "0s", n) {
            case "fadeinup":
                t.style.transform = "translate3d(0," + i + "px,0)";
                break;
            case "fadeindown":
                t.style.transform = "translate3d(0,-" + i + "px,0)";
                break;
            case "fadeinleft":
                t.style.transform = "translate3d(" + i + "px,0,0)";
                break;
            case "fadeinright":
                t.style.transform = "translate3d(-" + i + "px,0,0)"
        }
        t_animate__forceElemInViewPortRepaint(t, e, a), t.style.transitionDuration = "", t.style.transitionDelay = ""
    }
    n = t_animate__getAttrByResBase(t, "scale");
    n && (t.style.transitionDuration = "0s", t.style.transitionDelay = "0s", t.style.transform = "scale(" + n + ")", t_animate__forceElemInViewPortRepaint(t, e, a), t.style.transitionDuration = "", t.style.transitionDelay = "");
    a = t_animate__getAttrByResBase(t, "delay");
    a && (t.style.transitionDelay = a + "s");
    a = t_animate__getAttrByResBase(t, "duration");
    a && (t.style.transitionDuration = a + "s")
}

function t_animate__removeInlineAnimStyles() {
    var t;
    window.innerWidth < 980 && (t = document.querySelectorAll(".t396__elem.t-animate:not(.t-animate_wait)"), Array.prototype.forEach.call(t, function(t) {
        t.style.transform = "", t.style.transitionDuration = "", t.style.transitionDelay = ""
    }))
}

function t_animate__forceElemInViewPortRepaint(t, e, a) {
    t && e < a + 500 && t.offsetHeight
}

function t_animate__detectElemTriggerOffset(t, e) {
    var a = t_animate__getAttrByResBase(t, "trigger-offset"),
        t = e;
    return a && (t = e - +(a = a.replace("px", ""))), t
}

function t_animate__saveSectionHeaderStartTime(t) {
    var e = t.querySelectorAll(".t-section__title.t-animate"),
        t = t.querySelectorAll(".t-section__descr.t-animate");
    e.length && Array.prototype.forEach.call(e, function(t) {
        t.setAttribute("data-animate-start-time", Date.now())
    }), t.length && Array.prototype.forEach.call(t, function(t) {
        t.setAttribute("data-animate-start-time", Date.now() + 160)
    })
}

function t_animate__getCurBlockSectionHeadDelay(t) {
    var e = 0;
    return t.querySelectorAll(".t-section__title.t-animate").length && (e += .16), t.querySelectorAll(".t-section__descr.t-animate").length && (e += .16), e
}

function t_animate__makeSectionButtonWait(t) {
    var e = t.querySelectorAll(".t-animate[data-animate-chain=yes]").length,
        t = t.querySelectorAll(".t-section__bottomwrapper .t-btn.t-animate");
    e.length && t.length && Array.prototype.forEach.call(t, function(t) {
        t.classList.add("t-animate__btn-wait-chain")
    })
}

function t_animate__checkSectionButtonAnimation(t, e) {
    t = t.querySelectorAll(".t-animate__btn-wait-chain");
    t.length && Array.prototype.forEach.call(t, function(t) {
        t.style.transitionDelay = e + .16 + "s", t_animate__removeNoHoverClassFromBtns(t), t.classList.remove("t-animate__btn-wait-chain"), t.classList.add("t-animate_started")
    })
}

function t_animate__checkSectionButtonAnimation__outOfTurn(t) {
    var e = t.querySelectorAll(".t-animate[data-animate-chain=yes]");
    (e = Array.prototype.filter.call(e, function(t) {
        return !t.classList.contains("t-animate_started")
    })).length || t_animate__checkSectionButtonAnimation(t, .16)
}

function t_animate__addNoHoverClassToBtns() {
    var t = document.querySelectorAll(".t-btn.t-animate");
    Array.prototype.forEach.call(t, function(t) {
        t.classList.add("t-animate_no-hover")
    })
}

function t_animate__removeNoHoverClassFromBtns(t) {
    if (!t) return !1;
    var e = t.classList.contains("t-btn") ? t : null;
    e && (e.ontransitionend = function(t) {
        "opacity" !== t.propertyName && "transform" !== t.propertyName || (e.classList.remove("t-animate_no-hover"), e.style.transitionDelay = "", e.style.transitionDuration = "", this.ontransitionend = null)
    })
}

function t_animate__getGroupsOffsets(t) {
    t.forEach(function(t) {
        var e = t.querySelector(".t-animate");
        e && (t.curTopOffset = e.getBoundingClientRect().top + window.pageYOffset, e = t_animation__getZoom(t), window.t_animation__isOnlyScalable || (t.curTopOffset *= e))
    })
}

function t_animation__getZoom(t) {
    var e = t.closest(".t396__artboard");
    if (!e) return 1;
    t = document.querySelector('script[src*="tilda-blocks-2.7"]');
    return e.classList.contains("t396__artboard_scale") || !t && "undefined" != typeof t396_ab__getFieldValue && "window" === t396_ab__getFieldValue(e, "upscale") ? window.tn_scale_factor : 1
}

function t_animate__getChainOffsets(t) {
    t.forEach(function(a) {
        var t = a.querySelectorAll(".t-animate_wait[data-animate-chain=yes]");
        a.itemsOffsets = [], Array.prototype.forEach.call(t, function(t, e) {
            a.itemsOffsets[e] = t.getBoundingClientRect().top + window.pageYOffset
        })
    })
}

function t_animate__getElemsOffsets(t) {
    t.forEach(function(t) {
        t.curTopOffset = window.pageYOffset + t.getBoundingClientRect().top;
        var e = t_animation__getZoom(t);
        window.t_animation__isOnlyScalable || (t.curTopOffset *= e)
    })
}

function t_animate__removeAnimFromHiddenSlides(t) {
    var e;
    t.querySelectorAll(".t-slides").length && (t = t.querySelectorAll(".t-slides__item"), t = Array.prototype.filter.call(t, function(t) {
        return !t.classList.contains("t-slides__item_active")
    }), e = [], t.forEach(function(t) {
        t = t.querySelector(".t-animate");
        t && e.push(t)
    }), e.forEach(function(t) {
        t.classList.remove("t-animate"), t.classList.remove("t-animate_no-hover")
    }))
}

function t_animate__wrapTextWithOpacity() {
    var t = document.querySelectorAll(".t-title.t-animate, .t-descr.t-animate, .t-uptitle.t-animate, .t-text.t-animate");
    Array.prototype.forEach.call(t, function(t) {
        var e, a = t.getAttribute("style");
        !a || -1 === a.indexOf("opacity") || (a = t.style.opacity) && 0 < a && (t.style.opacity = "", (e = document.createElement("div")).style.opacity = a, a = t.childNodes, Array.prototype.forEach.call(a, function(t) {
            t = t.cloneNode(!0);
            e.appendChild(t)
        }), t.innerHTML = "", t.appendChild(e))
    })
}

function t_animate__checkIE() {
    var t, e = window.navigator.userAgent,
        a = e.indexOf("MSIE"),
        n = !1;
    return 0 < a && (8 !== (t = parseInt(e.substring(a + 5, e.indexOf(".", a)))) && 9 !== t || (n = !0)), n
}
window.t_animation__isOnlyScalable = Boolean(-1 !== navigator.userAgent.search("Firefox") || Boolean(window.opr && window.opr.addons || window.opera || -1 !== navigator.userAgent.indexOf(" OPR/"))), "loading" !== document.readyState ? t_animate__init() : document.addEventListener("DOMContentLoaded", t_animate__init), Element.prototype.matches || (Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.msMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.webkitMatchesSelector || Element.prototype.oMatchesSelector), Element.prototype.closest || (Element.prototype.closest = function(t) {
    for (var e = this; e && 1 === e.nodeType;) {
        if (Element.prototype.matches.call(e, t)) return e;
        e = e.parentElement || e.parentNode
    }
    return null
});