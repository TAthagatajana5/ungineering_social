$(document).ready(function () {

    var pass = document.getElementById("pass");
    var email = document.getElementById("email");
    var cpass = document.getElementById("conpass");
    var but = document.getElementById("submit");
    var user = document.getElementById("name");
    var str = pass.length;

    $('#register_form').submit(function () {

        if (user.value == "") {
            document.getElementById("sname").innerHTML = "Please fill the name field";
            document.getElementById("semail").innerHTML = "";
            document.getElementById("spass").innerHTML = "";
            document.getElementById("sconf").innerHTML = "";
            return false;
        }

        else if (email.value == "") {
            document.getElementById("sname").innerHTML = "";
            document.getElementById("semail").innerHTML = "Please fill the email field";
            document.getElementById("spass").innerHTML = "";
            document.getElementById("sconf").innerHTML = "";
            return false;
        }

        else if (pass.value == "") {
            document.getElementById("sname").innerHTML = "";
            document.getElementById("semail").innerHTML = "";
            document.getElementById("spass").innerHTML = "Please fill the password field";
            document.getElementById("sconf").innerHTML = "";
            return false;
        }

        else if (cpass.value == "") {
            document.getElementById("sname").innerHTML = "";
            document.getElementById("semail").innerHTML = "";
            document.getElementById("spass").innerHTML = "";
            document.getElementById("sconf").innerHTML = "Please fill the password field";
            return false;
        }

        else if (str <= 8) {
            document.getElementById("spass").innerHTML = "Need more than 8 or more characters";
            return false;
        }

        else if (cpass.value != pass.value) {
            alert("Password not matched!");
            return false;
        }

        else{
            var url = "register_submit.php";
            var data = $('#register_form').serialize();
            $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
            });
            return false;
        }
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

var on_error = function () {
    alert("something went wrong");
};



