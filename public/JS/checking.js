function checkusername() {
    $("#loaderIcon").show();
    $.post({
        url: "/checkUsername",
        data: 'username=' + $("#username").val(),
        success: function (data) {
            $("#username-check").html(data);
            $("#loaderIcon").hide();
        },
        error: function () { }
    });
}

function checkemail() {
    $("#loaderIcon").show();
    $.post({
        url: "/checkEmail",
        data: 'email=' + $("#email").val(),
        success: function (data) {
            $("#email-check").html(data);
            $("#loaderIcon").hide();
        },
        error: function () { }
    });
}

function checkpw() {
    $("#loaderIcon").show();
    $.post({
        url: "/checkPassword",
        data: 'password=' + $("#password").val(),
        success: function (data) {
            $("#password-check").html(data);
            $("#loaderIcon").hide();
        },
        error: function () { }
    });
}