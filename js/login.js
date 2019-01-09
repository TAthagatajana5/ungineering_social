$(document).ready(function () {
    $('#register_form').submit(function() {
        var url = "register_submit.php";
        var data = $('#register_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });

    $('#login_form').submit(function() {
        var url = "login_submit.php";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        window.location.href = "login_form.php";
    } else {
        alert(data.message);
    }
};

var login_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        window.location.href = "home.php";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};