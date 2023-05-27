$(document).ready(function () {
    $("#currentpasswd").keyup(function () {
        var currentpasswd = $("#currentpasswd").val();
        var token = $('meta[name="csrf-token"]').attr("content"); // CSRF belirteci
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            type: "post",
            url: "/admin/checkcurrpasswd",
            data: {
                currentpasswd: currentpasswd,
                _token: token, // CSRF belirteci eklendi
            },
            success: function (resp) {
                if (resp === "true") {
                    // "true" yerine true kontrolü yapılıyor
                    $("#vercurrpasswd").html("Current password is valid");
                } else {
                    $("#vercurrpasswd").html("Current password is invalid");
                }
            },
            error: function () {
                alert("Error");
            },
        });
    });
});
