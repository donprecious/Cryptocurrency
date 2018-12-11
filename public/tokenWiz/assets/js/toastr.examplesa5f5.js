! function (t) {
    "use strict";
    var o = t(".toastr-bottom-center");
    o.length > 0 && o.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-bottom-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Bottom Center")
    });
    var e = t(".toastr-bottom-right");
    e.length > 0 && e.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-bottom-right",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Bottom Right")
    });
    var s = t(".toastr-bottom-left");
    s.length > 0 && s.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-bottom-left",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Bottom Left")
    });
    var n = t(".toastr-bottom-full");
    n.length > 0 && n.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-bottom-full-width",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Bottom Full Width")
    });
    var i = t(".toastr-top-center");
    i.length > 0 && i.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-top-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Top Center")
    });
    var r = t(".toastr-top-right");
    r.length > 0 && r.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Top Right")
    });
    var a = t(".toastr-top-left");
    a.length > 0 && a.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-top-left",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Top Left")
    });
    var u = t(".toastr-top-full");
    u.length > 0 && u.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !1,
            progressBar: !1,
            positionClass: "toast-top-full-width",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info("This is a note for Info message on Top Full Width")
    });
    var c = t(".toastr-info");
    c.length > 0 && c.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !1,
            positionClass: "toast-bottom-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.info('<em class="ti ti-filter toast-message-icon"></em> This is a note for Info message')
    });
    var l = t(".toastr-success");
    l.length > 0 && l.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !1,
            positionClass: "toast-bottom-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.success('<em class="ti ti-check toast-message-icon"></em> This is a note for Success message')
    });
    var p = t(".toastr-warning");
    p.length > 0 && p.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !1,
            positionClass: "toast-bottom-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.warning('<em class="ti ti-alert toast-message-icon"></em> This is a note for Warning message')
    });
    var m = t(".toastr-error");
    m.length > 0 && m.on("click", function () {
        toastr.clear(), toastr.options = {
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !1,
            positionClass: "toast-bottom-center",
            preventDuplicates: !0,
            showDuration: "1000",
            hideDuration: "10000",
            timeOut: "2000",
            extendedTimeOut: "1000"
        }, toastr.error('<em class="ti ti-na toast-message-icon"></em> This is a note for Error message')
    })
}(jQuery);
