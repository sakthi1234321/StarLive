function register() {
    var valid = true;
    if ($(".registerusername").val() == "") {
        valid = false;
        alert("Enter Username!");
    }
    else if ($("#age-category").val() == "") {
        valid = false;
        alert("Select age-category!");
    }
    else if ($("#age-category").val() == "below-thirteen") {
        if ($("#parentname").val() == "") {
            valid = false;
            alert("Enter Parent or Guardian name!");
        }
        else if ($("#parentmobilenumber").val() == "") {
            valid = false;
            alert("Enter parent or Guardian mobile number!");
        }
    }
    else if ($("#age-category").val() == "above-thirteen") {
        if ($("#mobilenumber").val() == "") {
            valid = false;
            alert("Enter mobile number!");
        }
    }
    if ($("#emailid").val() == "") {
        valid = false;
        alert("Enter email address!");
    }
    else if ($("#password").val() == "") {
        valid = false;
        alert("Enter password!");
    }
    if (valid) {
        var model = {};
        model.UserName = $(".registerusername").val();
        model.UserTypeID = $("#age-category option:selected").data('val');
        if (model.UserTypeID == 1) {
            model.MobileNumber = $("#parentmobilenumber").val();
            model.ParentName = $("#parentname").val();
        }
        else {
            model.MobileNumber = $("#mobilenumber").val();
        }
        model.EmailAddress = $("#emailid").val();
        model.Password = $("#password").val();

        try {
            $.ajax({
                type: 'POST',
                url: '/Home/Register',
                data: '{model: ' + JSON.stringify(model) + '}',
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (result) {
                    if (result.Status)
                        alert("You have successfully registered!");
                    else
                        alert(result.Message);
                },
                error: function (ex) {
                    console.error(JSON.stringify(ex));
                }
            });
        } catch (e) {
            console.error(JSON.stringify(e));
        }
    }
}

function login() {
    var valid = true;
    if ($("#username").val() == "") {
        valid = false;
        alert("Enter email address or username!");
    }
    else if ($("#loginpassword").val() == "") {
        valid = false;
        alert("Enter password!");
    }
    if (valid) {
        var model = {};        
        model.UserName = $("#username").val();
        model.Password = $("#loginpassword").val();

        try {
            $.ajax({
                type: 'POST',
                url: '/Home/Login',
                data: '{model: ' + JSON.stringify(model) + '}',
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (result) {
                    if (result.Status) {
                        alert("You have successfully Login!");
                        window.location.reload();
                    }
                    else
                        alert(result.Message);
                },
                error: function (ex) {
                    console.error(JSON.stringify(ex));
                }
            });
        } catch (e) {
            console.error(JSON.stringify(e));
        }
    }
}

function loginorredirect() {
    alert($(this).data("name"));
}

