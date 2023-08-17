function t835_init(t) {
    var e = document.querySelector("#rec" + t);
    if (e) {
        var r = e.querySelector(".t835__quiz-wrapper"),
            o = e.querySelector(".t835 .t-form");
        if (o) {
            var n = e.querySelectorAll(".t835 .t-input-group"),
                s = e.querySelector(".t835__btn_prev"),
                i = e.querySelector(".t835__btn_next"),
                l = e.querySelector(".t835__btn_result"),
                a = e.querySelector(".t-form__errorbox-middle .t-form__errorbox-wrapper"),
                c = '<div class="t835__capture-form"></div>',
                u = e.querySelector(".t835 .t-form__errorbox-middle"),
                p = 0;
            u.insertAdjacentHTML("beforebegin", c), o.classList.remove("js-form-proccess");
            var _ = n[p];
            _ && (
                _.style.display = "block", 
                _.classList.add("t-input-group-step_active"), 
                t835_workWithAnswerCode(e), 
                Array.prototype.forEach.call(n, (function(t, e) {
                            t.setAttribute("data-question-number", e)
                        }
                    )
                ), 
                t835_wrapCaptureForm(e), 
                t835_showCounter(e, p), 
                t835_disabledPrevBtn(e, p), 
                t835_checkLength(e), 
                s.addEventListener("click", (function(t) {
                            p > 0 && p--, 
                            t835_setProgress(e, -1), 
                            t835_runLazyLoad(), 
                            t835_awayFromResultScreen(e), 
                            t835_showCounter(e, p), 
                            t835_hideError(e, p), 
                            t835_disabledPrevBtn(e, p), 
                            t835_switchQuestion(e, p), 
                            t835_scrollToTop(r), 
                            t.preventDefault()
                        }
                    )
                ), 
                i.addEventListener("click", (function(t) {
                    if (r.classList.contains("t835__quiz-published")) var o = t835_setError(e, p);
                    o && (a.style.display = "none"),
                    o || (p++, 
                            s && s.removeAttribute("disabled"), 
                            t835_setProgress(e, 1), 
                            t835_showCounter(e, p), 
                            t835_switchQuestion(e, p), 
                            t835_scrollToTop(r)), 
                            t835_runLazyLoad(), 
                            t.preventDefault()
                })), 
                Array.prototype.forEach.call(n, (function(t) {
                t.addEventListener("keypress", (function(t) {
                    var n = o.querySelector(".t-input-group-step_active");
                    if (13 === event.keyCode && !o.classList.contains("js-form-proccess") && !n.classList.contains("t-input-group_ta")) {
                        if (r.classList.contains("t835__quiz-published")) var i = t835_setError(e, p);
                        var l = t835_createQuestionArr(e);
                        i && (a.style.display = "none"), s && s.removeAttribute("disabled"), i || (p++, t835_setProgress(e, 1), t835_showCounter(e, p), p < l.length ? t835_switchQuestion(e, p) : (t835_switchResultScreen(e), o.classList.add("js-form-proccess")), t835_scrollToTop(r), t835_disabledPrevBtn(e, p)), t835_runLazyLoad(), t.preventDefault()
                    }
                }))
            })), l.addEventListener("click", (function(t) {
                if (r.classList.contains("t835__quiz-published")) var n = t835_setError(e, p);
                if (n && (a.style.display = "none"), !n) {
                    p++, t835_setProgress(e, 1), t835_switchResultScreen(e), t835_scrollToTop(r), o.classList.add("js-form-proccess"), t835_disabledPrevBtn(e, p);
                    var s = o.querySelector('input[name="form-spec-comments"]');
                    1 == o.getAttribute("data-formactiontype") || s || o.insertAdjacentHTML("beforeend", '<div style="position: absolute; left: -5000px; bottom:0;"><input type="text" name="form-spec-comments" value="Its good" class="js-form-spec-comments"  tabindex="-1" /></div>')
                }
                t.preventDefault()
            })))
        }
    }
}

function t835_runLazyLoad() {
    var t;
    if (document.querySelector(".t-records:not([data-tilda-mode])")) {
        var e = document.querySelector("#allrecords");
        "y" !== window.lazy && "yes" !== e.getAttribute("data-tilda-lazy") || t_onFuncLoad("t_lazyload_update", (function() {
            t_lazyload_update()
        }))
    }
}

function t835_workWithAnswerCode(t) {
    var e = t.querySelector(".t-input-group_ri");
    if (e) {
        var r = e.querySelectorAll("input");
        Array.prototype.forEach.call(r, (function(t) {
            var e;
            if (-1 !== t.value.indexOf("value::")) {
                t835_setAnswerCode(t);
                var r, o = t.parentNode.querySelector(".t-img-select__text");
                o.textContent = o.textContent.split("value::")[0].trim()
            }
        }))
    }
    var o = t.querySelector(".t-input-group_rd");
    if (o) {
        var n = o.querySelectorAll("input");
        Array.prototype.forEach.call(n, (function(t) {
            var e, r; - 1 !== t.value.indexOf("value::") && (t835_setAnswerCode(t), t.parentNode.innerHTML = function() {
                var e;
                return t.innerHTML.split("value::")[0].trim()
            })
        }))
    }
    var s = t.querySelector(".t-input-group_sb");
    if (s) {
        var i = s.querySelectorAll("option");
        Array.prototype.forEach.call(i, (function(t) {
            var e; - 1 !== t.value.indexOf("value::") && (t835_setAnswerCode(t), t.textContent = t.textContent.split("value::")[0].trim())
        }))
    }
}

function t835_setAnswerCode(t) {
    var e = t.value.split("value::")[1].trim();
    t.value = e
}

function t835_scrollToTop(t) {
    var e = t.getBoundingClientRect().top + window.pageYOffset,
        r = t.closest(".t835");
    if (!(e >= window.scrollY || r.classList.contains("t835_scroll-disabled"))) {
        var o;
        if (!!document.querySelector(".t228__positionfixed")) {
            var n = document.querySelector(".t228__positionfixed:not(.t228__mobile)"),
                s = parseFloat(window.getComputedStyle(n).height);
            window.isMobile || isNaN(s) || (e = e - s - 5)
        }
        window.scrollTo(0, e)
    }
}

function t835_checkLength(t) {
    var e = t.querySelector(".t835__btn_next"),
        r = t.querySelector(".t835__btn_result"),
        o = t835_createQuestionArr(t);
    o && o.length < 2 && (e.style.display = "none", r.style.display = "block")
}

function t835_showCounter(t, e) {
    var r = t.querySelector(".t835__quiz-description-counter");
    if (r) {
        var o = t835_createQuestionArr(t);
        r.innerHTML = e + 1 + "/" + o.length
    }
}

function t835_setError(t, e) {
    var f = t.querySelector(".t835 .t-form");
    var r, o = t835_createQuestionArr(t)[e],
        n;
    if ("object" != typeof f) return n;
    var s = f_validate(o);
    o.classList.add("js-error-control-box");
    var i = s[0];
    if (void 0 !== i) {
        var l = i.type[0],
            a = t.querySelector(".t835 .t-form");
        if (!a) return;
        var c, u = a.querySelector(".t-form__errorbox-middle").querySelector(".js-rule-error-" + l),
            p = o.querySelector(".t-input-error"),
            _ = u ? u.textContent : "",
            d = "";
        "" != _ ? d = _ : t_onFuncLoad("t_forms__getMsg", (function() {
            d = t_forms__getMsg(l)
        })), n = "emptyfill" != l && f_showErrors(o, s), p.innerHTML = d
    }
    return n
}

function t835_hideError(t, e) {
    var r, o = t835_createQuestionArr(t)[e],
        n;
    o.classList.remove("js-error-control-box"), o.querySelector(".t-input-error").innerHTML = ""
}

function t835_setProgress(t, e) {
    var r = t835_createQuestionArr(t),
        o = t.querySelector(".t835__progressbar"),
        n = parseFloat(getComputedStyle(o).width),
        s = t.querySelector(".t835__progress"),
        i = parseFloat(getComputedStyle(s).width),
        l = n / r.length,
        a = 100 * Math.abs((i + e * l) / n) + "%";
    s && (s.style.width = a)
}

function t835_wrapCaptureForm(t) {
    var e = t.querySelector(".t835__capture-form"),
        r = t.querySelectorAll(".t835 .t-input-group"),
        o = t.querySelector(".t835__quiz-form-wrapper");
    Array.prototype.forEach.call(r, (function(t) {
        var n = t,
            s = n.classList.contains("t-input-group_em"),
            i = n.classList.contains("t-input-group_nm"),
            l = n.classList.contains("t-input-group_ph"),
            a = n.classList.contains("t-input-group_cb"),
            c = n.getAttribute("data-question-number"),
            u = o.classList.contains("t835__quiz-form-wrapper_withcheckbox") ? 4 : 3;
        if (c >= r.length - u) {
            var p = !0;
            if (o.classList.contains("t835__quiz-form-wrapper_newcapturecondition")) {
                var _ = t835_getNextAll(n);
                Array.prototype.forEach.call(_, (function(t) {
                    p = t.classList.contains("t-input-group_cb") || t.classList.contains("t-input-group_em") || t.classList.contains("t-input-group_nm") || t.classList.contains("t-input-group_ph");
                }))
            }
            p && (o.classList.contains("t835__quiz-form-wrapper_withcheckbox") ? (s || i || l || a) && (n.classList.add("t835__t-input-group_capture"), e.appendChild(n)) : (s || i || l) && (n.classList.add("t835__t-input-group_capture"), e.appendChild(n)))
        }
    }))
}

function t835_getNextAll(t) {
    for (var e = [], r = t; r.nextElementSibling;) r.nextElementSibling.classList.contains("t-input-group") && e.push(r.nextElementSibling), r = r.nextElementSibling;
    return e
}

function t835_createQuestionArr(t) {
    var e = t.querySelectorAll(".t835 .t-input-group"),
        r = [];
    return Array.prototype.forEach.call(e, (function(t) {
        t.classList.contains("t835__t-input-group_capture") || r.push(t)
    })), r
}

function t835_disabledPrevBtn(t, e) {
    var r = t.querySelector(".t835__btn_prev");
    0 == e ? r.setAttribute("disabled", !0) : r.removeAttribute("disabled")
}

function t835_switchQuestion(t, e) {
    var r = t.querySelector(".t835__btn_next"),
        o = t.querySelector(".t835__btn_result"),
        n = t835_createQuestionArr(t);
    Array.prototype.forEach.call(n, (function(t) {
        t.style.display = "none", t.classList.remove("t-input-group-step_active")
    })), n[e].style.display = "block", n[e].classList.add("t-input-group-step_active"), e === n.length - 1 ? (r.style.display = "none", o.style.display = "block") : (r.style.display = "block", o.style.display = "none")
}

function t835_switchResultScreen(t) {
    var e = t.querySelector(".t835__capture-form"),
        r = t.querySelector(".t835__quiz-description"),
        o = t.querySelector(".t835__result-title"),
        n = t.querySelector(".t835__btn_result"),
        s = t.querySelector(".t835 .t-form__submit"),
        i = t835_createQuestionArr(t);
    Array.prototype.forEach.call(i, (function(t) {
        t.style.display = "none"
    })), e && (e.style.display = "block"), n.style.display = "none", r && (r.style.display = "none"), o && (o.style.display = "block"), s.style.display = "block"
}

function t835_awayFromResultScreen(t) {
    var e = t.querySelector(".t835__capture-form"),
        r = t.querySelector(".t835__quiz-description"),
        o = t.querySelector(".t835__result-title"),
        n;
    t.querySelector(".t835 .t-form__submit").style.display = "none", e && (e.style.display = "none"), r && (r.style.display = "block"), o && (o.style.display = "none")
}

function t835_onSuccess(t) {
    t_forms__onSuccess(t)
}
Element.prototype.matches || (Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.msMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.webkitMatchesSelector || Element.prototype.oMatchesSelector), Element.prototype.closest || (Element.prototype.closest = function(t) {
    for (var e = this; e && 1 === e.nodeType;) {
        if (Element.prototype.matches.call(e, t)) return e;
        e = e.parentElement || e.parentNode
    }
    return null
});

function f_validate(t) {
    t instanceof Element || (t = t[0]);
    for (var e, r, o = t.querySelectorAll(".js-tilda-rule"), a = [], n = !0, i = 0; i < o.length; i++) {
        var s = o[i],
            l = !!parseInt(s.getAttribute("data-tilda-req") || 0, 10),
            d = s.getAttribute("data-tilda-rule") || "none",
            c = "",
            u = "",
            m = s.getAttribute("data-tilda-rule-minlength") || 0,
            p = s.getAttribute("data-tilda-rule-maxlength") || 0,
            f = {},
            _ = s.value,
            y = "",
            w = s.getAttribute("type"),
            h = s.getAttribute("name"),
            g = t.getAttribute("data-formcart");
        f.obj = s, f.type = [], _ && _.length && (y = _.replace(/[\s\u0000—\u001F\u2000-\u200F\uFEFF\u2028-\u202F\u205F-\u206F]/gi, ""), _ = _.trim()), 0 < _.length && (n = !1), m = m && parseInt(m, 10), p = p && parseInt(p, 10);
        var b = !_.length && !y.length,
            w = "checkbox" === w || "radio" === w,
            h = !t.querySelectorAll('[name="' + h + '"]:checked').length;
        if (l && (b || w && h)) f.type.push("req");
        else {
            switch (d) {
                case "email":
                    c = /^(?!\.)(?!.*\.\.)[a-zA-Zёа-яЁА-Я0-9\u2E80-\u2FD5\u3190-\u319f\u3400-\u4DBF\u4E00-\u9FCC\uF900-\uFAAD_\.\-\+]{0,63}[a-zA-Zёа-яЁА-Я0-9\u2E80-\u2FD5\u3190-\u319f\u3400-\u4DBF\u4E00-\u9FCC\uF900-\uFAAD_\-\+]@[a-zA-Zёа-яЁА-ЯЁёäöüÄÖÜßèéû0-9][a-zA-Zёа-яЁА-ЯЁёäöüÄÖÜßèéû0-9\.\-]{0,253}\.[a-zA-Zёа-яЁА-Я]{2,10}$/gi, _.length && !_.match(c) && f.type.push("email");
                    break;
                case "url":
                    c = /^((https?|ftp):\/\/)?[a-zA-Zёа-яЁА-ЯЁёäöüÄÖÜßèéûşç0-9][a-zA-Zёа-яЁА-ЯЁёäöüÄÖÜßèéûşç0-9_\.\-]{0,253}\.[a-zA-Zёа-яЁА-Я]{2,10}\/?$/gi, _.length && ((u = (u = (u = _.split("//")) && 1 < u.length ? u[1] : u[0]).split("/")) && u.length && u[0] ? (u = u[0]).match(c) || f.type.push("url") : (u && !u[0] || f.type.push("url"), u = ""));
                    break;
                case "phone":
                    var v = s.getAttribute("data-tilda-mask"),
                        E = "^[0-9()+-";
                    v && (-1 !== v.indexOf("*") ? E += "a-zёа-я" : (-1 !== v.indexOf("a") && (E += "a-z"), -1 !== v.indexOf("а") && (E += "а-яё"))), E += "]+$", c = new RegExp(E, "gi"), (y.length && !y.match(c) || 1 == (u = y.replace(/[^0-9]+/g, "")).indexOf("000") || 1 == u.indexOf("111") && "9" != u.substring(0, 1) || 1 == u.indexOf("222") && "5" != u.substring(0, 1) || 1 == u.indexOf("333") || 1 == u.indexOf("444") || 1 == u.indexOf("555") && "0" != u.substring(0, 1) || 1 == u.indexOf("666") && "0" != u.substring(0, 1) || 1 == u.indexOf("8888") && "4" != u.substring(0, 1)) && f.type.push("phone");
                    break;
                case "number":
                    c = /^[0-9]+$/gi, 0 < y.length && !y.match(c) && f.type.push("number");
                    break;
                case "date":
                    0 < y.length && !y.match({
                        "DD-MM-YYYY": /^(0[1-9]|1[0-9]|2[0-9]|3[01])[\-\.\/](0[1-9]|1[012])[\-\.\/][0-9]{4}$/,
                        "MM-DD-YYYY": /^(0[1-9]|1[012])[\-\.\/](0[1-9]|1[0-9]|2[0-9]|3[01])[\-\.\/][0-9]{4}$/,
                        "YYYY-MM-DD": /^[0-9]{4}[\-\.\/](0[1-9]|1[012])[\-\.\/](0[1-9]|1[0-9]|2[0-9]|3[01])$/
                    }[s.getAttribute("data-tilda-dateformat")] || /^[0-9]{1,4}[\-\.\/][0-9]{1,2}[\-\.\/][0-9]{1,4}$/gi) && f.type.push("date");
                    break;
                case "time":
                    c = /^[0-9]{2}[:\.][0-9]{2}$/gi, 0 < y.length && !y.match(c) && f.type.push("time");
                    break;
                case "name":
                    c = /^([ЁёäöüÄÖÜßèéûҐґЄєІіЇїӐӑЙйК̆к̆Ӄ̆ӄ̆Ԛ̆ԛ̆Г̆г̆Ҕ̆ҕ̆ӖӗѢ̆ѣ̆ӁӂꚄ̆ꚅ̆ҊҋО̆о̆Ө̆ө̆Ꚍ̆ꚍ̆ЎўХ̆х̆Џ̆џ̆Ꚏ̆ꚏ̆Ꚇ̆ꚇ̆Ҽ̆ҽ̆Ш̆ш̆Ꚗ̆ꚗ̆Щ̆щ̆Ы̆ы̆Э̆э̆Ю̆ю̆Я̆я̆А́а́ЃѓД́д́Е́е́Ё́ёӘ́ә́З́з́И́и́І́і́Ї́ї́ЌќЛ́л́Н́н́О́о́Р́р́С́с́Т́т́У́у́Ӱ́ӱ́Ү́ү́Х́х́Ц́ц́Ы́ы́Э́э́Ӭ́ӭ́Ю́ю́Ю̈́ю̈́Я́я́Ѣ́ѣ́ҒғӺӻҒ̌ғ̌Ј̵ј̵ҞҟҜҝԞԟӨөҎҏҰұӾӿҸҹҌҍҢңҚқҒғӘәҺһІіҰұҮүӨөȺⱥꜺꜻƂƃɃƀȻȼꞒꞓƋƌĐđɆɇǤǥꞠꞡĦħƗɨƗ́ɨ́Ɨ̀ɨ̀Ɨ̂ɨ̂Ɨ̌ɨ̌Ɨ̃ɨ̃Ɨ̄ɨ̄Ɨ̈ɨ̈Ɨ̋ɨ̋Ɨ̏ɨ̏Ɨ̧ɨ̧Ɨ̧̀ɨ̧̀Ɨ̧̂ɨ̧̂Ɨ̧̌ɨ̧̌ᵼɈɉɟɟ̟ʄʄ̊ʄ̥K̵k̵ꝀꝁꝂꝃꝄꝅꞢꞣŁłł̓Ł̣ł̣ᴌȽƚⱠⱡꝈꝉƛƛ̓ꞤꞥꝊꝋØøǾǿØ̀ø̀Ø̂øØ̌ø̌Ø̄ø̄Ø̃ø̃Ø̨ø̨Ø᷎ø᷎ᴓⱣᵽꝐꝑꝖꝗꝘꝙɌɍꞦꞧꞨꞩẜẝŦŧȾⱦᵺꝤꝥꝦꝧɄʉɄ́ʉ́Ʉ̀ʉ̀Ʉ̂ʉ̂Ʉ̌ʉ̌Ʉ̄ʉ̄Ʉ̃ʉ̃Ʉ̃́ʉ̃́Ʉ̈ʉ̈ʉ̞ᵾU̸u̸ᵿꝞꝟw̸ɎɏƵƶA-Za-z\u00C0\u00C0-\u00C3\u00C8-\u00CA\u00CC\u00CD\u00D2-\u00D9\u00DA\u00DD\u00E0-\u00E3\u00E8\u00E9\u00EA\u00EC\u00ED\u00F2-\u00F5\u00F9\u00FA\u00FD\u0102\u0103\u0110\u0111\u0128\u0129\u0168\u0169\u01A0\u01A1\u01AF\u01B0\u1EA0\u1EA1-\u1EF9\u0027\u2019\u0300-\u03FF\u0400-\u04FF\u0500-\u05FF\u0600-\u06FF\u3040-\u30FF\u0041-\u007A\u00C0-\u02B8\uFB1D-\uFB1F\uFB2A-\uFB4E\u0E00-\u0E7F\u10A0-\u10FF\u3040-\u309F\u30A0-\u30FF\u2E80-\u2FD5\u3190-\u319f\u3400-\u4DBF\u4E00-\u9FCC\uF900-\uFAAD]{1,})([ЁёäöüÄÖÜßèéûҐґЄєІіЇїӐӑЙйК̆к̆Ӄ̆ӄ̆Ԛ̆ԛ̆Г̆г̆Ҕ̆ҕ̆ӖӗѢ̆ѣ̆ӁӂꚄ̆ꚅ̆ҊҋО̆о̆Ө̆ө̆Ꚍ̆ꚍ̆ЎўХ̆х̆Џ̆џ̆Ꚏ̆ꚏ̆Ꚇ̆ꚇ̆Ҽ̆ҽ̆Ш̆ш̆Ꚗ̆ꚗ̆Щ̆щ̆Ы̆ы̆Э̆э̆Ю̆ю̆Я̆я̆А́а́ЃѓД́д́Е́е́Ё́ёӘ́ә́З́з́И́и́І́і́Ї́ї́ЌќЛ́л́Н́н́О́о́Р́р́С́с́Т́т́У́у́Ӱ́ӱ́Ү́ү́Х́х́Ц́ц́Ы́ы́Э́э́Ӭ́ӭ́Ю́ю́Ю̈́ю̈́Я́я́Ѣ́ѣ́ҒғӺӻҒ̌ғ̌Ј̵ј̵ҞҟҜҝԞԟӨөҎҏҰұӾӿҸҹҌҍҢңҚқҒғӘәҺһІіҰұҮүӨөȺⱥꜺꜻƂƃɃƀȻȼꞒꞓƋƌĐđɆɇǤǥꞠꞡĦħƗɨƗ́ɨ́Ɨ̀ɨ̀Ɨ̂ɨ̂Ɨ̌ɨ̌Ɨ̃ɨ̃Ɨ̄ɨ̄Ɨ̈ɨ̈Ɨ̋ɨ̋Ɨ̏ɨ̏Ɨ̧ɨ̧Ɨ̧̀ɨ̧̀Ɨ̧̂ɨ̧̂Ɨ̧̌ɨ̧̌ᵼɈɉɟɟ̟ʄʄ̊ʄ̥K̵k̵ꝀꝁꝂꝃꝄꝅꞢꞣŁłł̓Ł̣ł̣ᴌȽƚⱠⱡꝈꝉƛƛ̓ꞤꞥꝊꝋØøǾǿØ̀ø̀Ø̂øØ̌ø̌Ø̄ø̄Ø̃ø̃Ø̨ø̨Ø᷎ø᷎ᴓⱣᵽꝐꝑꝖꝗꝘꝙɌɍꞦꞧꞨꞩẜẝŦŧȾⱦᵺꝤꝥꝦꝧɄʉɄ́ʉ́Ʉ̀ʉ̀Ʉ̂ʉ̂Ʉ̌ʉ̌Ʉ̄ʉ̄Ʉ̃ʉ̃Ʉ̃́ʉ̃́Ʉ̈ʉ̈ʉ̞ᵾU̸u̸ᵿꝞꝟw̸ɎɏƵƶA-Za-z\u00C0\u00C0-\u00C3\u00C8-\u00CA\u00CC\u00CD\u00D2-\u00D9\u00DA\u00DD\u00E0-\u00E3\u00E8\u00E9\u00EA\u00EC\u00ED\u00F2-\u00F5\u00F9\u00FA\u00FD\u0102\u0103\u0110\u0111\u0128\u0129\u0168\u0169\u01A0\u01A1\u01AF\u01B0\u1EA0\u1EA1-\u1EF9\u0041-\u007A\u00C0-\u02B8\u0300-\u03FF\u0400-\u04FF\u0500-\u05FF\u0600-\u06FF\u3040-\u30FF\uFB1D-\uFB1F\uFB2A-\uFB4E\u0E00-\u0E7F\u10A0-\u10FF\u3040-\u309F\u30A0-\u30FF\u2E80-\u2FD5\u3190-\u319f\u3400-\u4DBF\u4E00-\u9FCC\uF900-\uFAAD\-\'\‘\s\.]{0,})$/gi, _.length && !_.match(c) && f.type.push("name");
                    break;
                case "nameeng":
                    c = /^([A-Za-z\s]{1,}((\-)?[A-Za-z\.\s](\')?){0,})*$/i, _.length && !_.match(c) && f.type.push("nameeng");
                    break;
                case "namerus":
                    c = /^([А-Яа-яЁё\s]{1,}((\-)?[А-Яа-яЁё\.\s](\')?){0,})*$/i, _.length && !_.match(c) && f.type.push("namerus");
                    break;
                case "string":
                    c = /^[A-Za-zА-Яа-я0-9ЁёЁёäöüÄÖÜßèéûӐӑЙйК̆к̆Ӄ̆ӄ̆Ԛ̆ԛ̆Г̆г̆Ҕ̆ҕ̆ӖӗѢ̆ѣ̆ӁӂꚄ̆ꚅ̆ҊҋО̆о̆Ө̆ө̆Ꚍ̆ꚍ̆ЎўХ̆х̆Џ̆џ̆Ꚏ̆ꚏ̆Ꚇ̆ꚇ̆Ҽ̆ҽ̆Ш̆ш̆Ꚗ̆ꚗ̆Щ̆щ̆Ы̆ы̆Э̆э̆Ю̆ю̆Я̆я̆А́а́ЃѓД́д́Е́е́Ё́ёӘ́ә́З́з́И́и́І́і́Ї́ї́ЌќЛ́л́Н́н́О́о́Р́р́С́с́Т́т́У́у́Ӱ́ӱ́Ү́ү́Х́х́Ц́ц́Ы́ы́Э́э́Ӭ́ӭ́Ю́ю́Ю̈́ю̈́Я́я́Ѣ́ѣ́ҒғӺӻҒ̌ғ̌Ј̵ј̵ҞҟҜҝԞԟӨөҎҏҰұӾӿҸҹҌҍҢңҚқҒғӘәҺһІіҰұҮүӨөȺⱥꜺꜻƂƃɃƀȻȼꞒꞓƋƌĐđɆɇǤǥꞠꞡĦħƗɨƗ́ɨ́Ɨ̀ɨ̀Ɨ̂ɨ̂Ɨ̌ɨ̌Ɨ̃ɨ̃Ɨ̄ɨ̄Ɨ̈ɨ̈Ɨ̋ɨ̋Ɨ̏ɨ̏Ɨ̧ɨ̧Ɨ̧̀ɨ̧̀Ɨ̧̂ɨ̧̂Ɨ̧̌ɨ̧̌ᵼɈɉɟɟ̟ʄʄ̊ʄ̥K̵k̵ꝀꝁꝂꝃꝄꝅꞢꞣŁłł̓Ł̣ł̣ᴌȽƚⱠⱡꝈꝉƛƛ̓ꞤꞥꝊꝋØøǾǿØ̀ø̀Ø̂øØ̌ø̌Ø̄ø̄Ø̃ø̃Ø̨ø̨Ø᷎ø᷎ᴓⱣᵽꝐꝑꝖꝗꝘꝙɌɍꞦꞧꞨꞩẜẝŦŧȾⱦᵺꝤꝥꝦꝧɄʉɄ́ʉ́Ʉ̀ʉ̀Ʉ̂ʉ̂Ʉ̌ʉ̌Ʉ̄ʉ̄Ʉ̃ʉ̃Ʉ̃́ʉ̃́Ʉ̈ʉ̈ʉ̞ᵾU̸u̸ᵿꝞꝟw̸ɎɏƵƶ\u0041-\u007A\u00C0-\u02B8\u0300-\u03FF\u0400-\u04FF\u0500-\u05FF\u0600-\u06FF\u3040-\u30FF\uFB1D-\uFB1F\uFB2A-\uFB4E\u0E00-\u0E7F\u10A0-\u10FF\u3040-\u309F\u30A0-\u30FF\u2E80-\u2FD5\u3190-\u319f\u3400-\u4DBF\u4E00-\u9FCC\uF900-\uFAAD,\.:;\"\'\`\-\_\+\?\!\%\$\@\*\&\^\s]$/i, _.length && !_.match(c) && f.type.push("string");
                    break;
                case "chosevalue":
                    "true" === s.getAttribute("data-option-selected") || f.type.push("chosevalue");
                    break;
                case "promocode":
                    "y" !== g || !y.length || !window.tcart || window.tcart.promocode && window.tcart.prodamount_discountsum || f.type.push("promocode");
                    break;
                case "deliveryreq":
                    f.type.push("deliveryreq")
            }
            0 < m && _.length && _.length < m && f.type.push("minlength"), 0 < p && _.length && _.length > p && f.type.push("maxlength")
        }
        f.type && f.type.length && (a[a.length] = f)
    }
    return "y" === g && (e = void 0 !== window.tcart_minorder && 0 < window.tcart_minorder, r = void 0 !== window.tcart_mincntorder && 0 < window.tcart_mincntorder, e && window.tcart.prodamount < window.tcart_minorder && ((f = {
        obj: {},
        type: []
    }).type.push("minorder"), a.push(f)), r && window.tcart.total < window.tcart_mincntorder && ((f = {
        obj: {},
        type: []
    }).type.push("minquantity"), a.push(f))), n && !a.length && (a = [{
        obj: "none",
        type: ["emptyfill"]
    }]), a
}

function f_showErrors(t, e) {
    if (t instanceof Element || (t = t[0]), !e || !e.length) return !1;
    if ("y" === t.getAttribute("data-error-popup")) return tildaForm.showErrorInPopup(t, e);
    for (var r = (r = t.getAttribute("data-inputbox")) || ".blockinput", o = "", a = !1, n = "", i = "", s = "", l = 0; l < e.length; l++)
        if (e[l] && e[l].obj) {
            if (0 === l && "none" === e[l].obj) {
                n = t.querySelectorAll(".js-rule-error-all");
                for (var d = 0; d < n.length; d++) n[d].innerHTML = t_forms__getMsg("emptyfill"), n[d].style.display = "block";
                break
            }
            var c = e[l].obj;
            c instanceof Element || (c = c[0]), c && (o = c.closest(r)), o && (i = o.querySelectorAll(".t-input-error"), t_addClass(o, "js-error-control-box"), 0 < i.length && (a = !0));
            for (d = 0; d < e[l].type.length; d++) {
                var u = e[l].type[d],
                    s = "";
                if (1, (n = t.querySelectorAll(".js-rule-error-" + u)).length)
                    for (var m = 0; m < n.length; m++) n[m].getAttribute("data-rule-filled") || (n[m].textContent && n[m].innerText || !t_forms__getMsg(u) ? s = n[0].textContent || n[0].innerText : n[m].innerHTML = t_forms__getMsg(u)), n[m].style.display = "block";
                else if (t_forms__getMsg(u) && (n = t.querySelectorAll(".js-rule-error-all")).length)
                    for (m = 0; m < n.length; m++) n[m].innerHTML = t_forms__getMsg(u), n[m].style.display = "block";
                a && (!s && t_forms__getMsg(u + "field") ? s = t_forms__getMsg(u + "field") : !s && t_forms__getMsg(u) && (s = t_forms__getMsg(u)), s && o && (i = o.querySelectorAll(".t-input-error"), Array.prototype.forEach.call(i, function(t) {
                    t.innerHTML = s
                })))
            }
        }
    var p = t.querySelectorAll(".js-errorbox-all");
    return Array.prototype.forEach.call(p, function(t) {
        t.style.display = "block"
    }), t_triggerEvent(t, "tildaform:aftererror"), !0
}

function t_forms__getMsg(t) {
    var e = [],
        //r = window.t_forms__lang;
        r = "RU";
    return e.RU = {
        success: "Спасибо! Данные успешно отправлены.",
        successorder: "Спасибо! Заказ оформлен. Пожалуйста, подождите. Идет переход к оплате...",
        email: "Укажите, пожалуйста, корректный email",
        url: "Укажите, пожалуйста, корректный URL",
        phone: "Укажите, пожалуйста, корректный номер телефона",
        number: "Укажите, пожалуйста, корректный номер",
        date: "Укажите, пожалуйста, корректную дату",
        time: "Укажите, пожалуйста, корректное время (ЧЧ:ММ)",
        name: "Укажите, пожалуйста, имя",
        namerus: "Укажите, пожалуйста, имя (только кириллица)",
        nameeng: "Укажите, пожалуйста, имя (только латиница)",
        string: "Вы написали некорректные символы. Разрешены только буквы, числа и знаки пунктуации",
        req: "Пожалуйста, заполните все обязательные поля",
        reqfield: "Обязательное поле",
        minlength: "Слишком короткое значение",
        maxlength: "Слишком длинное",
        emptyfill: "Ни одно поле не заполнено",
        chosevalue: "Пожалуйста, выберите адрес из предложенных вариантов",
        deliveryreq: "Невозможно оформить заказ без доставки. Пожалуйста, перезагрузите страницу и попробуйте еще раз.",
        promocode: "Активируйте, пожалуйста, промокод или очистите поле"
    }, "function" == typeof t_forms__getDict && "RU" !== r && "EN" !== r && (e = t_forms__getDict()), (e[r] || e.EN)[t]
}

function t_triggerEvent(t, e) {
    var r;
    document.createEvent ? (r = document.createEvent("HTMLEvents")).initEvent(e, !0, !1) : document.createEventObject && ((r = document.createEventObject()).eventType = e), r.eventName = e, t.dispatchEvent ? t.dispatchEvent(r) : t.fireEvent ? t.fireEvent("on" + r.eventType, r) : t[e] ? t[e]() : t["on" + e] && t["on" + e]()
}