$(document).ready(function () {

    var pass = document.getElementById("pass");
    var email = document.getElementById("email");


    $('#login_form').submit(function () {
        if (email.value == "") {
            document.getElementById("semail").innerHTML = "Please fill the email field";
            document.getElementById("spass").innerHTML = "";
        } else if (pass.value == "") {
            document.getElementById("semail").innerHTML = "";
            document.getElementById("spass").innerHTML = "Please fill the password field";
            return false;
        } else{
            var url = "login_submit.php";
            var data = $('#login_form').serialize();
            $.ajax(url, {
                data: data,
                success: login_success,
                error: on_error,
                type: "POST"
            });
            return false;
        }
        return false;
    });
});

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


