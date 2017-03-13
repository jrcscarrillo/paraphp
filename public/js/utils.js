
var Profile = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        }
        ;

        return true;
    },
    validate: function () {
        if (SignUp.check("name") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        $("#profileForm")[0].submit();
    }
};

var SignUp = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        }
        ;

        return true;
    },
    validate: function () {
        if (SignUp.check("name") == false) {
            return false;
        }
        if (SignUp.check("username") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        if (SignUp.check("password") == false) {
            return false;
        }
        if ($("#password")[0].value != $("#repeatPassword")[0].value) {
            $("#repeatPassword")[0].focus();
            $("#repeatPassword_alert").show();

            return false;
        }
        $("#registerForm")[0].submit();
    }
}

$(document).ready(function () {
    $("div.profile .alert").hide();
    $("#registerForm").validate(
    {
    // Rules for form validation
    rules:
    {
    name:
    {
    required: true
    },
      email:
    {
    required: true,
      email: true
    },
      username:
    {
    required: true
    },
      password:
    {
      required: true,
      minlength: 8,
      maxlength: 20
    },
      repeatPassword:
    {
      required: true,
      equalto: '#password'
    }
    },
      // Messages for form validation
      messages:
    {
    name:
    {
    required: 'Please enter your name'
    },
      email:
    {
    required: 'Please enter your email address',
      email: 'Please enter a VALID email address'
    },
      username:
    {
    required: 'Please enter your phone number'
    },
      password:
    {
    required: 'Please enter your password',
    minlength: 'You must enter at least 8 characters',
    maxlength: 'You must not exeded of 20 characters'
    },
      repeatPassword:
    {
    required: 'Please enter again your password',
    equalto: 'Repeated password does not match'
    }
    },
      // Ajax form submition
      submitHandler: function(form)
      {
      $(form).ajaxSubmit(
      {
      beforeSend: function()
      {
      },
        uploadProgress: function(event, position, total, percentComplete)
        {
        $("#registerForm .progress").text(percentComplete + '%');
        },
        success: function()
        {
        $("#registerForm").addClass('submited');
          $('#registerForm button[type="submit"]').removeClass('button-uploading').attr('disabled', false);
        }
      });
      },
      // Do not change code below
      errorPlacement: function(error, element)
      {
      error.insertAfter(element.parent());
      }
    });
    $("#developersForm").validate(
    {
    // Rules for form validation
    rules:
    {
    fullname:
    {
    required: true
    },
      email:
    {
    required: true,
      email: true
    },
      dateenrolled:
    {
    required: true
    },
      address:
    {
      required: true
    },
      telephone:
    {
      required: true
    }
    },
      // Messages for form validation
      messages:
    {
    fullname:
    {
    required: 'Please enter the developers full name'
    },
      email:
    {
    required: 'Please enter your email address',
      email: 'Please enter a VALID email address'
    },
      dateenrolled:
    {
    required: 'Please enter a valid date'
    },
      address:
    {
    required: 'Please enter the developer\'s address'
    },
      telephone:
    {
    required: 'Please enter the developer\'s telephone'
    }
    },
      // Ajax form submition
      submitHandler: function(form)
      {
      $(form).ajaxSubmit(
      {
      beforeSend: function()
      {
      },
        uploadProgress: function(event, position, total, percentComplete)
        {
        $("#developersForm .progress").text(percentComplete + '%');
        },
        success: function()
        {
        $("#developersForm").addClass('submited');
          $('#developersForm button[type="submit"]').removeClass('button-uploading').attr('disabled', false);
        }
      });
      },
      // Do not change code below
      errorPlacement: function(error, element)
      {
      error.insertAfter(element.parent());
      }
    });
    });

