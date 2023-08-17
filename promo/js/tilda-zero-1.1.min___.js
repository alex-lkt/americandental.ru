function t396_init(t) {
    var e, i, n, o, a = document.getElementById("rec" + t),
        r = a ? a.querySelector(".t396") : null,
        d = a ? a.querySelector(".t396__artboard") : null;
    d && (t396_initTNobj(t, d), o = t396_detectResolution(t), e = document.getElementById("allrecords"), window.tn_window_width = document.documentElement.clientWidth, window.tn["ab" + t].scaleFactor = parseFloat((window.tn_window_width / o).toFixed(3)), window.tn_scale_factor = parseFloat((window.tn_window_width / o).toFixed(3)), t396_switchResolution(t, o), t396_updateTNobj(t), t396_artboard_build("", t), i = "ontouchend" in document, window.addEventListener("resize", function() {
        tn_console(">>>> t396: Window on Resize event >>>>"), d.classList.add("t396_resizechange"), d && d.classList.contains("t396_fullscreenchange") ? d.classList.remove("t396_fullscreenchange") : t396_waitForFinalEvent(function() {
            window.t396__isMobile || i ? document.documentElement.clientWidth !== window.tn_window_width && a && t396_isBlockVisible(a) && (t396_doResize(t), d.classList.remove("t396_resizechange")) : a && t396_isBlockVisible(a) && (t396_doResize(t), d.classList.remove("t396_resizechange"))
        }, 500, "resizeruniqueid" + t)
    }), window.addEventListener("orientationchange", function() {
        tn_console(">>>> t396: Orient change event >>>>"), t396_waitForFinalEvent(function() {
            a && t396_isBlockVisible(a) && t396_doResize(t)
        }, 600, "orientationuniqueid" + t)
    }), window.addEventListener("load", function() {
        t396_allelems__renderView(d);
        var t = d ? window.getComputedStyle(d).getPropertyValue("overflow") : "";
        "function" == typeof t_lazyload_update && "auto" === t && d && d.addEventListener("scroll", t_throttle(function() {
            var t = e ? e.getAttribute("data-tilda-lazy") : null;
            "y" !== window.lazy && "yes" !== t || t_onFuncLoad("t_lazyload_update", function() {
                t_lazyload_update()
            })
        }, 500)), "" !== window.location.hash && "visible" === t && (d && (d.style.overflow = "hidden"), setTimeout(function() {
            d && (d.style.overflow = "visible")
        }, 1))
    }), d && d.addEventListener("fullscreenchange", function() {
        d.classList.add("t396_fullscreenchange")
    }), document.querySelector(".t830") && window.addEventListener("load", function() {
        ["t830__allrecords_padd", "t830__allrecords_padd-small"].some(function(t) {
            return e.classList.contains(t)
        }) ? t396_doResize(t) : e.addEventListener("allRecPaddingInit", function() {
            t396_doResize(t)
        })
    }), a && r && d && "yes" === a.getAttribute("data-connect-with-tab") && r.addEventListener("displayChanged", function() {
        t396_allelems__renderView(d), t396_doResize(t)
    }), setTimeout(function() {
        a && a.closest("#allrecordstable") && r && d && r.addEventListener("displayChanged", function() {
            t396_allelems__renderView(d), t396_doResize(t)
        })
    }, 1e3), o = !!document.querySelector(".t635__textholder"), a && o && r && d && r.addEventListener("animationInited", function() {
        t396_allelems__renderView(d), t396_doResize(t)
    }), /^((?!chrome|android).)*safari/i.test(navigator.userAgent) && r && r.classList.add("t396_safari"), o = "window" === t396_ab__getFieldValue(d, "upscale"), n = e ? "edit" === e.getAttribute("data-tilda-mode") : null, o && !n && t_onFuncLoad("t396_scaleBlock", function() {
        t396_scaleBlock(t)
    }), n || "y" !== t396_ab__getFieldValue(d, "fixed-need-js") || t_onFuncLoad("t396__processFixedArtBoard", function() {
        t396__processFixedArtBoard(d)
    }), n && r && d && (o = d.getAttribute("data-artboard-ovrflw"), r.style.position = "relative", r.style.zIndex = "auto" === o || "visible" === o ? "2" : "1"))
}

function t396_isOnlyScalableBrowser() {
    var t = -1 !== navigator.userAgent.search("Firefox"),
        e = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(" OPR/");
    return t || e
}

function t396_doResize(t) {
    var e = t396_isOnlyScalableBrowser(),
        i = document.getElementById("rec" + t),
        n = document.getElementById("allrecords"),
        o = t396_detectResolution(t),
        a = (t396_removeElementFromDOM(i ? i.querySelector(".t396__scale-style") : null), e ? (e = i ? i.querySelectorAll(".tn-atom") : [], Array.prototype.forEach.call(e, function(t) {
            var e = t.closest(".tn-atom__scale-wrapper"),
                i = e ? e.parentNode : null;
            i && i.removeChild(e), i && i.appendChild(t)
        })) : (e = i ? i.querySelectorAll(".t396__elem") : [], Array.prototype.forEach.call(e, function(t) {
            t.style.zoom = "";
            t = t.querySelector(".tn-atom");
            t && (t.style.transformOrigin = "", t.style.fontSize = "", t.style.webkitTextSizeAdjust = "")
        })), i ? i.querySelector(".t396__artboard") : null),
        e = "ab" + t,
        i = a ? a.clientWidth : 0,
        e = (window.tn_window_width = document.documentElement.clientWidth, window.tn[e].scaleFactor = parseFloat((window.tn_window_width / o).toFixed(3)), window.tn_scale_factor = parseFloat((window.tn_window_width / o).toFixed(3)), window.tn_scale_offset = (i * window.tn_scale_factor - i) / 2, t396_switchResolution(t, o), t396_updateTNobj(t), t396_ab__renderView(a), n ? n.getAttribute("data-tilda-mode") : "");
    "window" === t396_ab__getFieldValue(a, "upscale") && "edit" !== e && t_onFuncLoad("t396_scaleBlock", function() {
        t396_scaleBlock(t)
    }), "edit" !== e && "y" === t396_ab__getFieldValue(a, "fixed-need-js") && t_onFuncLoad("t396__processFixedArtBoard", function() {
        t396__processFixedArtBoard(a)
    }), "function" != typeof window.t396__updateTopShift || "y" !== t396_ab__getFieldValue(a, "shift-processed") && "y" !== t396_ab__getFieldValue(a, "fixed-shift") || t396__updateTopShift(t, !0), t396_allelems__renderView(a), a && [a, a.querySelector(".t396__carrier"), a.querySelector(".t396__filter")].forEach(function(t) {
        t && (t.style.height = "")
    })
}

function t396_detectResolution(t) {
    var e, i;
    if (t) return t = "ab" + t, e = window.t396__isMobile ? document.documentElement.clientWidth : window.innerWidth, window.tn[t].screens.forEach(function(t) {
        t <= e && (i = t)
    }), i = void 0 === i ? window.tn[t].screens[0] : i
}

function t396_initTNobj(t, e) {
    e && (tn_console("func: initTNobj"), void 0 === window.tn && (window.tn = {}, window.tn.ab_fields = ["height", "width", "bgcolor", "bgimg", "bgattachment", "bgposition", "filteropacity", "filtercolor", "filteropacity2", "filtercolor2", "height_vh", "valign"]), t396_setScreensTNobj(t, e))
}

function t396_setScreensTNobj(t, e) {
    var i = "ab" + t,
        t = (window.tn[i] = {}, window.tn[i].screens = [], e.getAttribute("data-artboard-screens"));
    t ? (t = t.split(",")).forEach(function(t) {
        t = parseInt(t, 10), window.tn[i].screens.push(t)
    }) : window.tn[i].screens = [320, 480, 640, 960, 1200]
}

function t396_updateTNobj(t) {
    tn_console("func: updateTNobj");
    var e = "ab" + t,
        t = document.getElementById("allrecords"),
        i = t && window.getComputedStyle(t).paddingLeft || "0",
        i = parseInt(i, 10),
        n = t && window.getComputedStyle(t).paddingRight || "0",
        n = parseInt(n, 10);
    window.zero_window_width_hook && "allrecords" === window.zero_window_width_hook && t ? window.tn.window_width = t.clientWidth - (i + n) : window.tn.window_width = document.documentElement.clientWidth, window.tn.window_height = window.t396__isMobile ? document.documentElement.clientHeight : window.innerHeight;
    for (var o = window.tn[e].screens.slice().reverse(), a = 0; a < o.length; a++) window.tn[e].curResolution === o[a] && (window.tn[e].canvas_min_width = o[a], window.tn[e].canvas_max_width = 0 === a ? window.tn.window_width : o[a - 1]);
    window.tn[e].grid_width = window.tn[e].canvas_min_width, window.tn[e].grid_offset_left = (window.tn.window_width - window.tn[e].grid_width) / 2
}
window.t396__isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || -1 < navigator.userAgent.indexOf("Instagram");
var t396_waitForFinalEvent = function() {
    var n = {};
    return function(t, e, i) {
        n[i = i || "Don't call this twice without a uniqueId"] && clearTimeout(n[i]), n[i] = setTimeout(t, e)
    }
}();

function t396_switchResolution(t, e) {
    tn_console("func: switchResolution");
    var t = "ab" + t,
        i = window.tn[t].screens[window.tn[t].screens.length - 1];
    window.tn[t].curResolution = e, window.tn[t].curResolution_max = i, window.tn.curResolution = e, window.tn.curResolution_max = i
}

function t396_artboard_build(t, e) {
    tn_console("func: t396_artboard_build. Recid:" + e), tn_console(t);
    var t = document.getElementById("rec" + e),
        i = document.getElementById("allrecords"),
        n = t ? t.querySelector(".t396__artboard") : null;
    if (!n) return !1;
    t396_ab__renderView(n);
    var o = document.createEvent("Event"),
        a = (o.initEvent("artBoardRendered", !0, !0), n.querySelectorAll(".tn-elem")),
        a = (Array.prototype.forEach.call(a, function(t) {
            switch (t.getAttribute("data-elem-type")) {
                case "text":
                    t396_addText(n, t);
                    break;
                case "image":
                    t396_addImage(n, t);
                    break;
                case "shape":
                    t396_addShape(n, t);
                    break;
                case "button":
                    t396_addButton(n, t);
                    break;
                case "video":
                    t396_addVideo(n, t);
                    break;
                case "html":
                    t396_addHtml(n, t);
                    break;
                case "tooltip":
                    t396_addTooltip(n, t);
                    break;
                case "form":
                    t396_addForm(n, t, e);
                    break;
                case "gallery":
                    t396_addGallery(n, t, e);
                    break;
                case "vector":
                    t396_addVector(n, t)
            }
        }), n.classList.remove("rendering"), n.classList.add("rendered"), n.dispatchEvent(o), n.getAttribute("data-artboard-ovrflw"));
    "visible" !== a && "visibleX" !== a || !i || (i.style.overflow = "hidden"), "auto" === a && 0 !== (o = Math.abs(n.offsetHeight - n.clientHeight)) && (n.style.paddingBottom = o + "px"), (window.t396__isMobile || "ontouchend" in document && -1 !== navigator.userAgent.indexOf("AppleWebKit")) && ((i = document.createElement("style")).textContent = "@media only screen and (min-width:1366px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) {.t396__carrier {background-attachment:scroll!important;}}", t.insertAdjacentElement("beforeend", i))
}

function t396_ab__renderView(t) {
    if (!t) return !1;
    for (var e = window.tn.ab_fields, i = document.getElementById("allrecords"), n = 0; n < e.length; n++) t396_ab__renderViewOneField(t, e[n]);
    var o, a, r = t396_ab__getFieldValue(t, "height"),
        d = t396_ab__getHeight(t),
        i = !!i && "edit" === i.getAttribute("data-tilda-mode"),
        l = "window" === t396_ab__getFieldValue(t, "upscale"),
        _ = t396_ab__getFieldValue(t, "height_vh");
    if (l && !i && _ && (o = parseInt(r, 10) * window.tn_scale_factor), r === d || o && d <= o) a = 0;
    else switch (t396_ab__getFieldValue(t, "valign")) {
        case "top":
            a = 0;
            break;
        case "center":
            a = o ? parseFloat(((d - o) / 2).toFixed(1)) : parseFloat(((d - r) / 2).toFixed(1));
            break;
        case "bottom":
            a = o ? parseFloat((d - o).toFixed(1)) : parseFloat((d - r).toFixed(1));
            break;
        case "stretch":
            a = 0, r = d;
            break;
        default:
            a = 0
    }
    t.setAttribute("data-artboard-proxy-min-offset-top", a), t.setAttribute("data-artboard-proxy-min-height", r), t.setAttribute("data-artboard-proxy-max-height", d);
    l = t.querySelector(".t396__filter"), i = t.querySelector(".t396__carrier");
    _ = t396_ab__getFieldValue(t, "height_vh"), _ = parseFloat(_), window.t396__isMobile && _ && (_ = document.documentElement.clientHeight * _ / 100, t.style.height = _ + "px", l && (l.style.height = _ + "px"), i && (i.style.height = _ + "px"))
}

function t396_addText(t, e) {
    (e = t396_getEl(e)) && (tn_console("func: addText"), e.setAttribute("data-fields", "top,left,width,container,axisx,axisy,widthunits,leftunits,topunits"), t396_elem__renderView(e))
}

function t396_addImage(t, e) {
    var i;
    (e = t396_getEl(e)) && (tn_console("func: addImage"), e.setAttribute("data-fields", "img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"), t396_elem__renderView(e), i = e.querySelectorAll("img"), Array.prototype.forEach.call(i, function(t) {
        t.addEventListener("load", function() {
            t396_elem__renderViewOneField(e, "top"), t.src && setTimeout(function() {
                t396_elem__renderViewOneField(e, "top")
            }, 2e3)
        }), t.complete && (t396_elem__renderViewOneField(e, "top"), t.src && setTimeout(function() {
            t396_elem__renderViewOneField(e, "top")
        }, 2e3)), t.addEventListener("tuwidget_done", function() {
            t396_elem__renderViewOneField(e, "top")
        }), t396_changeFilterOnSafari(e, t)
    }))
}

function t396_addShape(t, e) {
    var i, n, o, a;
    (e = t396_getEl(e)) && (tn_console("func: addShape"), e.setAttribute("data-fields", "width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"), t396_elem__renderView(e), i = e.querySelector(".tn-atom"), n = window.getComputedStyle(e).backdropFilter && "none" !== window.getComputedStyle(e).backdropFilter || window.getComputedStyle(e).webkitBackdropFilter && "none" !== window.getComputedStyle(e).webkitBackdropFilter, a = window.getComputedStyle(i), (o = i && a && a.transform ? "matrix" === a.transform.substring(0, 6) ? a.transform : null : o) && n && (i.style.transform = "none", e.style.transform = o))
}

function t396_changeFilterOnSafari(t, n) {
    var e;
    !/^((?!chrome|android).)*safari/i.test(navigator.userAgent) || (e = window.getComputedStyle(t).webkitBackdropFilter) && "none" !== e && "IntersectionObserver" in window && new IntersectionObserver(function(t, i) {
        t.forEach(function(t) {
            var e;
            t.isIntersecting && (e = t.target, i.unobserve(e), e.style.webkitBackdropFilter = "none", t396_WaitForUploadImg(n, function() {
                e.style.webkitBackdropFilter = ""
            }))
        })
    }).observe(t)
}

function t396_WaitForUploadImg(t, e) {
    var i;
    "y" !== window.lazy ? e() : i = setTimeout(function() {
        t.classList.contains("loaded") && t.clientWidth && t.src ? (e(), clearTimeout(i)) : t396_WaitForUploadImg(t, e)
    }, 300)
}

function t396_addButton(t, e) {
    if (e = t396_getEl(e)) return tn_console("func: addButton"), e.setAttribute("data-fields", "top,left,width,height,container,axisx,axisy,caption,leftunits,topunits"), t396_elem__renderView(e), e
}

function t396_addVideo(t, e) {
    (e = t396_getEl(e)) && (tn_console("func: addVideo"), e.setAttribute("data-fields", "width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"), t396_elem__renderView(e), t_onFuncLoad("t396_initVideo", function() {
        t396_initVideo(e)
    }))
}

function t396_addHtml(t, e) {
    (e = t396_getEl(e)) && (tn_console("func: addHtml"), e.setAttribute("data-fields", "width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"), t396_elem__renderView(e))
}

function t396_addTooltip(t, e) {
    (e = t396_getEl(e)) && (tn_console("func: addTooltip"), e.setAttribute("data-fields", "width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits,tipposition"), t396_elem__renderView(e), t_onFuncLoad("t396_initTooltip", function() {
        t396_initTooltip(e)
    }))
}

function t396_addForm(t, e, i) {
    var n, o, a;
    (e = t396_getEl(e)) && (tn_console("func: addForm"), e.setAttribute("data-fields", "width,top,left,inputs,container,axisx,axisy,widthunits,leftunits,topunits"), o = e.getAttribute("data-elem-id"), (a = e.querySelector(".tn-atom__inputs-textarea")) && (n = a.value), t_onFuncLoad("t_zeroForms__init", function() {
        t396_elem__renderView(e), t_zeroForms__init(i, o, n), t396_elem__renderView(e)
    }))
}

function t396_addGallery(t, e, i) {
    var n;
    (e = t396_getEl(e)) && (tn_console("func: addGallery"), e.setAttribute("data-fields", "width,height,top,left,imgs,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"), t396_elem__renderView(e), n = e.getAttribute("data-elem-id"), t_onFuncLoad("t_zeroGallery__init", function() {
        t_zeroGallery__init(i, n)
    }))
}

function t396_addVector(t, e) {
    (e = t396_getEl(e)) && (tn_console("func: addVector"), e.setAttribute("data-fields", "width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"), t396_elem__renderView(e))
}

function t396_elem__setFieldValue(t, e, i, n, o, a) {
    var r;
    (t = t396_getEl(t)) && (r = "ab" + t.closest(".t396__artboard").getAttribute("data-artboard-recid"), +(a = a || window.tn[r].curResolution) < window.tn[r].curResolution_max && "zindex" !== e ? t.setAttribute("data-field-" + e + "-res-" + a + "-value", i) : t.setAttribute("data-field-" + e + "-value", i), "render" === n && elem__renderViewOneField(t, e), "updateui" === o && panelSettings__updateUi(t, e, i))
}

function t396_elem__getFieldValue(t, e) {
    if (t = t396_getEl(t)) {
        var i = t.closest(".t396__artboard"),
            n = i.getAttribute("data-artboard-recid"),
            o = "ab" + n,
            a = (void 0 === window.tn[o] && (t396_initTNobj(n, i), t396_switchResolution(n, t396_detectResolution(n))), window.tn[o].curResolution),
            r = window.tn[o].curResolution_max,
            d = window.tn[o].screens,
            l = a === r ? t.getAttribute("data-field-" + e + "-value") : t.getAttribute("data-field-" + e + "-res-" + a + "-value");
        if (!l && "" !== l)
            for (var _ = 0; _ < d.length; _++) {
                var s = d[_];
                if (!(s <= a) && (l = s === r ? t.getAttribute("data-field-" + e + "-value") : t.getAttribute("data-field-" + e + "-res-" + s + "-value"))) break
            }
        return l
    }
}

function t396_elem__renderView(e) {
    e = t396_getEl(e), tn_console("func: elem__renderView");
    var t = e ? e.getAttribute("data-fields") : "";
    if (!t) return !1;
    (t = t.split(",")).forEach(function(t) {
        t396_elem__renderViewOneField(e, t)
    }), t396_elem_fixLineHeight(e)
}

function t396_elem__renderViewOneField(t, e) {
    if (t = t396_getEl(t)) {
        var i = document.getElementById("allrecords"),
            i = i ? i.getAttribute("data-tilda-mode") : "",
            n = "window" === t396_ab__getFieldValue(t.closest(".t396__artboard"), "upscale");
        if ("yes" !== t.getAttribute("data-scale-off") || !n || "edit" === i) {
            var o, a, r, d, l, _ = t396_elem__getFieldValue(t, e);
            switch (e) {
                case "left":
                    _ = t396_elem__convertPosition__Local__toAbsolute(t, e, _), t.style.left = parseFloat(_).toFixed(1) + "px";
                    break;
                case "top":
                    _ = t396_elem__convertPosition__Local__toAbsolute(t, e, _), t.style.top = parseFloat(_).toFixed(1) + "px";
                    break;
                case "width":
                    switch (_ = t396_elem__getWidth(t, _), t.style.width = parseFloat(_).toFixed(1) + "px", c = t.getAttribute("data-elem-type")) {
                        case "tooltip":
                            var s = t.querySelectorAll(".tn-atom__pin-icon");
                            Array.prototype.forEach.call(s, function(t) {
                                var e = parseFloat(_).toFixed(1) + "px";
                                t.style.width = e, t.style.height = e
                            }), t.style.height = parseInt(_).toFixed(1) + "px";
                            break;
                        case "gallery":
                            o = t396_elem__getFieldValue(t, "borderwidth"), a = t396_elem__getFieldValue(t, "borderstyle"), _ -= 2 * (o = a && o && "none" !== a ? o : 0), r = parseFloat(_).toFixed(1) + "px", d = t.querySelector(".t-slds__main"), l = t.querySelectorAll(".tn-atom__slds-img"), t.style.width = r, d && (d.style.width = r), Array.prototype.forEach.call(l, function(t) {
                                t.style.width = r
                            })
                    }
                    break;
                case "height":
                    if ("tooltip" === (c = t.getAttribute("data-elem-type"))) return;
                    _ = t396_elem__getHeight(t, _), t.style.height = parseFloat(_).toFixed(1) + "px", "gallery" === c && (o = t396_elem__getFieldValue(t, "borderwidth"), a = t396_elem__getFieldValue(t, "borderstyle"), _ -= 2 * (o = a && o && "none" !== a ? o : 0), r = parseFloat(_).toFixed(1) + "px", d = t.querySelector(".t-slds__main"), l = t.querySelectorAll(".tn-atom__slds-img"), t.style.height = r, d && (d.style.height = r), Array.prototype.forEach.call(l, function(t) {
                        t.style.height = r
                    }));
                    break;
                case "container":
                    t396_elem__renderViewOneField(t, "left"), t396_elem__renderViewOneField(t, "top");
                    break;
                case "inputs":
                    var c = t.querySelector(".tn-atom__inputs-textarea"),
                        _ = c ? c.value : "";
                    try {
                        t_zeroForms__renderForm(t, _)
                    } catch (t) {}
            }
            "width" !== e && "height" !== e && "fontsize" !== e && "fontfamily" !== e && "letterspacing" !== e && "fontweight" !== e && "img" !== e || (t396_elem__renderViewOneField(t, "left"), t396_elem__renderViewOneField(t, "top"))
        }
    }
}

function t396_elem__convertPosition__Local__toAbsolute(t, e, i) {
    if (t = t396_getEl(t)) {
        var n, o = t.closest(".t396__artboard"),
            a = "ab" + o.getAttribute("data-artboard-recid"),
            r = t396_ab__getFieldValue(o, "valign"),
            d = "window" === t396_ab__getFieldValue(o, "upscale"),
            o = document.getElementById("allrecords"),
            l = "edit" === (o ? o.getAttribute("data-tilda-mode") : ""),
            _ = t396_isOnlyScalableBrowser(),
            s = !l && d && _,
            c = !l && d && !_,
            u = t396_elem__getFieldValue(t, "axisy"),
            w = t396_elem__getFieldValue(t, "axisx"),
            g = t396_elem__getFieldValue(t, "container");
        switch (i = parseInt(i), e) {
            case "left":
                var f = "grid" === g ? "grid" : "window",
                    h = "grid" === g ? window.tn[a].grid_offset_left : 0,
                    m = "grid" === g ? window.tn[a].grid_width : window.tn.window_width;
                "%" === t396_elem__getFieldValue(t, "leftunits") && (i = t396_roundFloat(m * i / 100)), !l && d ? "grid" === g && _ && (i *= window.tn_scale_factor) : i = h + i, "center" === w && (y = t396_elem__getWidth(t), s && "window" !== f && (m *= window.tn_scale_factor, y *= window.tn_scale_factor), i = m / 2 - y / 2 + i), "right" === w && (y = t396_elem__getWidth(t), s && "window" !== f && (m *= window.tn_scale_factor, y *= window.tn_scale_factor), i = m - y + i), s && "window" !== f && (i += ((y = t396_elem__getWidth(t)) * window.tn_scale_factor - y) / 2);
                break;
            case "top":
                function b(t) {
                    var e, i, n = t396_elem__getHeight(t);
                    return t && "image" === t.getAttribute("data-elem-type") && (e = t396_elem__getWidth(t), i = t396_elem__getFieldValue(t, "filewidth"), t = t396_elem__getFieldValue(t, "fileheight"), i && t && (n = e / (parseInt(i) / parseInt(t)))), n
                }
                var p, h = t.parentNode,
                    m = (h = h.classList.contains("t396__artboard") ? h : h.parentNode) ? h.getAttribute("data-artboard-proxy-min-offset-top") : "0",
                    y = h ? h.getAttribute("data-artboard-proxy-min-height") : "0",
                    F = h ? h.getAttribute("data-artboard-proxy-max-height") : "0",
                    m = (f = "grid" === g ? "grid" : "window", "grid" === g ? parseFloat(m) : 0),
                    y = "grid" === g ? parseFloat(y) : parseFloat(F),
                    F = ("%" === t396_elem__getFieldValue(t, "topunits") && (i = y * (i / 100)), s && "window" !== f && (i *= window.tn_scale_factor), i = (m = c && "window" !== f ? "stretch" === r ? 0 : m / window.tn_scale_factor : m) + i, t396_ab__getFieldValue(h, "height_vh")),
                    m = t396_ab__getFieldValue(h, "height"),
                    v = t396_ab__getHeight(h);
                d && !l && F && (p = parseInt(m, 10) * window.tn_scale_factor), "center" === u && (n = b(t), s && "window" !== f && ("stretch" !== r ? y *= window.tn_scale_factor : y = p ? v < p ? p : v : h.clientHeight, n *= window.tn_scale_factor), l || !d || _ || "window" === f || "stretch" !== r || (y = p ? v < p ? p : v : h.clientHeight, y /= window.tn_scale_factor), i = y / 2 - n / 2 + i), "bottom" === u && (n = b(t), s && "window" !== f && ("stretch" !== r ? y *= window.tn_scale_factor : y = p ? v < p ? p : v : h.clientHeight, n *= window.tn_scale_factor), l || !d || _ || "window" === f || "stretch" !== r || (y = p ? v < p ? p : v : h.clientHeight, y /= window.tn_scale_factor), i = y - n + i), s && "window" !== f && (i += ((n = b(t)) * window.tn_scale_factor - n) / 2)
        }
        return i
    }
}

function t396_elem_fixLineHeight(t) {
    var e, i, n, o;
    "text" === t.getAttribute("data-elem-type") && (e = t.querySelector(".tn-atom")) && (i = /^((?!chrome|android).)*safari/i.test(navigator.userAgent), n = t.style.zoom, e.style.removeProperty("line-height"), o = parseFloat(window.getComputedStyle(e).lineHeight), (o = i && n ? t396_elem__getCorrectStylesForSafari(t, "lineHeight") : o) && !isNaN(o) && (e.style.lineHeight = Math.round(o) + "px"))
}

function t396_elem__getCorrectStylesForSafari(t, e) {
    var i = t.querySelector(".tn-atom"),
        n = t.style.zoom,
        o = i.style.webkitTextSizeAdjust,
        a = i.style.fontSize,
        e = (i.style.webkitTextSizeAdjust = "none", i.style.fontSize = "", t.style.zoom = "", parseFloat(window.getComputedStyle(i)[e]));
    return i.style.webkitTextSizeAdjust = o, i.style.fontSize = a, n && (t.style.zoom = n), e
}

function t396_ab__setFieldValue(t, e, i, n) {
    var o = "ab" + t.getAttribute("data-artboard-recid");
    (n = n || window.tn[o].curResolution) < window.tn[o].curResolution_max && t ? t.setAttribute("data-artboard-" + e + "-res-" + n, i) : t && t.setAttribute("data-artboard-" + e, i)
}

function t396_ab__getFieldValue(t, e) {
    if (t) {
        var i = t.getAttribute("data-artboard-recid"),
            n = "ab" + i,
            o = (void 0 === window.tn[n] && (t396_initTNobj(i, t), t396_switchResolution(i, t396_detectResolution(i))), window.tn[n].curResolution),
            a = window.tn[n].curResolution_max,
            r = window.tn[n].screens,
            d = o === a ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + o);
        if (null === d)
            for (var l = 0; l < r.length; l++) {
                var _ = r[l];
                if (!(_ <= o) && null !== (d = _ === a ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + _))) break
            }
        return d
    }
}

function t396_ab__renderViewOneField(t, e) {
    t396_ab__getFieldValue(t, e)
}

function t396_allelems__renderView(t) {
    if (!t) return !1;
    tn_console("func: allelems__renderView: abid:" + t.getAttribute("data-artboard-recid"));
    t = t.querySelectorAll(".tn-elem");
    Array.prototype.forEach.call(t, function(t) {
        t396_elem__renderView(t)
    })
}

function t396_ab__filterUpdate(t) {
    var e, i, n, o, t = t.querySelector(".t396__filter");
    t && (e = t.getAttribute("data-filtercolor-rgb"), i = t.getAttribute("data-filtercolor2-rgb"), n = t.getAttribute("data-filteropacity"), o = t.getAttribute("data-filteropacity2"), e && !i ? t.style.backgroundColor = "rgba(" + e + "," + n + ")" : !e && i ? t.style.backgroundColor = "rgba(" + i + "," + o + ")" : e && i ? t.style.background = "-webkit-gradient(linear, left top, left bottom, from(rgba(" + e + "," + n + ")), to(rgba(" + i + "," + o + ")) )" : t.style.backgroundColor = "transparent")
}

function t396_ab__getHeight(t, e) {
    e = e || t396_ab__getFieldValue(t, "height"), e = parseFloat(e);
    var t = t396_ab__getFieldValue(t, "height_vh");
    return t && (t = parseFloat(t), isNaN(t) || e < (t = window.tn.window_height * t / 100) && (e = t)), e
}

function t396_hex2rgb(t) {
    t = parseInt(t.substring(1), 16);
    return [(16711680 & t) >> 16, (65280 & t) >> 8, 255 & t]
}

function t396_elem__getWidth(t, e) {
    var i = "ab" + (t = t396_getEl(t)).closest(".t396__artboard").getAttribute("data-artboard-recid");
    return e = e || t396_elem__getFieldValue(t, "width"), e = parseFloat(e), e = "%" === t396_elem__getFieldValue(t, "widthunits") ? "window" === t396_elem__getFieldValue(t, "container") ? window.tn.window_width * e / 100 : window.tn[i].grid_width * e / 100 : e
}

function t396_elem__getHeight(t, e) {
    t = t396_getEl(t), e = e || t396_elem__getFieldValue(t, "height"), e = parseFloat(e);
    var i, n, o = t.getAttribute("data-elem-type");
    return "shape" === o || "video" === o || "html" === o || "gallery" === o ? "%" === t396_elem__getFieldValue(t, "heightunits") && (i = (n = t.parentNode) ? n.getAttribute("data-artboard-proxy-min-height") : "0", n = n ? n.getAttribute("data-artboard-proxy-max-height") : "0", i = parseFloat(i), n = parseFloat(n), e = "window" === t396_elem__getFieldValue(t, "container") ? n * (e / 100) : i * (e / 100)) : "button" !== o && (e = t.clientHeight), e
}

function t396_roundFloat(t) {
    return t = Math.round(100 * t) / 100
}

function tn_console(t) {
    1 == +window.tn_comments && console.log(t)
}

function t396_hex2rgba(t, e) {
    if (!t) return !1;
    var i = t.replace(/#/, ""),
        i = (3 === i.length && (t = "#" + i[0] + i[0] + i[1] + i[1] + i[2] + i[2]), parseInt(t.substring(1), 16));
    return [(16711680 & i) >> 16, (65280 & i) >> 8, 255 & i, parseFloat(e)]
}

function t396_removeElementFromDOM(t) {
    (t = t396_getEl(t)) && t.parentNode && t.parentNode.removeChild(t)
}

function t396_getEl(t) {
    return window.jQuery && t instanceof jQuery ? t.length ? t.get(0) : null : t
}

function t396_isBlockVisible(t) {
    var e = window.innerWidth,
        i = t.getAttribute("data-screen-min"),
        t = t.getAttribute("data-screen-max");
    return !(i && e < parseInt(i, 10)) && !(t && e > parseInt(t, 10))
}