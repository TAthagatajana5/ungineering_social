$(document).ready(function (){
    $('#status_form').submit(function() {
        var url = "status_submit.php";
        var data = $('#status_form').serialize();
        $.ajax(url, {
            data: data,
            success: status_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});
var status_success = function (response) {
    response= JSON.parse(response);

    if (response.success) {
        //alert(data.message);
        window.location.href ="home.php";
        $('#area').val=NULL;
    } else {
        alert(response.message);
    }
    
  
};

var on_error = function () {
    alert("something went wrong");
};


