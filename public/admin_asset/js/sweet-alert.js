$(function () {
    "use strict";
    $("#but1").on("click", function (t) {
        $("body").removeClass("timer-alert");
        var e = $("#message").val();
        "" == e && (e = "New Notification from Azea"), swal(e);
    }),
        $("#but2").on("click", function (t) {
            $("body").removeClass("timer-alert");
            var e = $("#message").val(),
                o = $("#title").val();
            "" == e && (e = "New Notification from Azea"), "" == o && (o = "Notifiaction Styles"), swal(o, e);
        }),
        $("#but3").on("click", function (t) {
            $("body").removeClass("timer-alert");
            var e = $("#message").val(),
                o = $("#title").val();
            "" == e && (e = "New Notification from Azea"), "" == o && (o = "Notifiaction Styles"), swal({ title: o, text: e, imageUrl: "https://laravel.spruko.com/azea/azea/assets/images/brand/favicon.png" });
        }),
        $("#but4").on("click", function (t) {
            $("body").addClass("timer-alert");
            var e = $("#message").val(),
                o = $("#title").val();
            "" == e && (e = "New Notification from Azea"), "" == o && (o = "Notifiaction Styles"), (e += "(close after 2 seconds)"), swal({ title: o, text: e, timer: 2e3, showConfirmButton: !1 });
        }),
        $("#click").on("click", function (t) {
            $("body").removeClass("timer-alert");
            var e = $("#type").val();
            swal({ title: "Notifiaction Styles", text: "New Notification from Azea", type: e });
        }),
        $("#prompt").on("click", function (t) {
            $("body").removeClass("timer-alert"),
                swal({ title: "Notification Alert", text: "your getting some notification from mail please check it", type: "input", showCancelButton: !0, closeOnConfirm: !0, inputPlaceholder: "Your message" }, function (t) {
                    "" != t && swal("Input", "You have entered : " + t);
                });
        }),
        $("#confirm").on("click", function (t) {
            $("body").removeClass("timer-alert"), swal({ title: "Notifiaction Styles", text: "New Notification from Azea", type: "warning", showCancelButton: !0, confirmButtonText: "Exit", cancelButtonText: "Stay on the page" });
        }),
        $("#click").on("click", function (t) {
            swal("Congratulations!", "Your message has been succesfully sent", "success");
        }),
        $("#click1").on("click", function (t) {
            swal({ title: "Some Risk File Is Founded", text: "Some Virus file is detected your system going to be in Risk", type: "warning", showCancelButton: !0, confirmButtonText: "Exit", cancelButtonText: "Stay on the page" });
        }),
        $("#click2").on("click", function (t) {
            swal({ title: "Something Went Wrong", text: "Please fix the issue the issue file not loaded & items not found", type: "error", showCancelButton: !0, confirmButtonText: "Exit", cancelButtonText: "Stay on the page" });
        }),
        $("#click3").on("click", function (t) {
            swal({ title: "Notification Alert", text: "your getting some notification from mail please check it", type: "info", showCancelButton: !0, confirmButtonText: "Exit", cancelButtonText: "Stay on the page" });
        });


});
