<?php
include "includes/header.php";
?>

<div class="rs-breadcrumbs img3">
  <div class="breadcrumbs-inner text-center">
    <h1 class="page-title">My Account</h1>
    <ul class="list-inline">
      <li style="display: inline-block;">
        <a class="active" style="color: white;" href="index.php">Home </a>
      </li>
      <li style="color: white; display: inline-block;">My Account</li>
    </ul>
  </div>
</div>

<!--HEADER-->
<!-- Düzenleme-->
<div class="container box-one mb-5">
  <div class="row gx-5">
    <div class="col-lg-6 pl-70 md-pl-15">
      <h1 class="mb-5" style="margin-left: 10px;">Login</h1>

      <form method="POST" action="authentication.php" id="loginForm" name="loginForm" novalidate="novalidate" style="border: 1px solid rgba(54, 54, 54, 0.1); border-radius: 5px; padding: 20px;
    text-align: left; ">
        <div class="row mx-auto">
          <div class="mb-4">
            <label class="mb-2 " style="font-weight: 600">Username or email address<span>*</span></label>
            <input class="form-control bg-light formStyle" type="text" id="username" name="username">
          </div>
        </div>
        <div class="row mx-auto">
          <div class="mb-4">
            <label class="mb-2 " style="font-weight: 600">Password<span>*</span></label>
            <input class="form-control bg-light formStyle" type="password" id="password" name="password">
          </div>
        </div>
        <div class="mb-4 col-2">
          <button type="submit" id="btn1" name="btnLogin" value="login" class="btn btn-primary buttonStyle" style="border-radius: 5px;">Log In</button>
        </div>
        <div class="last-password pt-30">
          <a style="color: blue;" href="#">Lost your password?</a>
        </div>
      </form>

      <script type="text/javascript">
      /*
        $.validator.setDefaults({
          submitHandler: function() {
            swal(
              'Good job!',
              'The form has been successfully submitted!',
              'success'
            )
          }
        });
        */
        $(document).ready(function() {

          $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
              var check = false;

              return !(this.optional(element) || regexp.test(value));
            },
            function() {
              swal(
                'HEEYY!',
                'Do not use slang words!',
                'error'
              )
            }

          );

          $("#loginForm").validate({
            rules: {
              username: {
                required: true,
                regex: /salak|mal|deli/i
              },
              password: {
                required: true,
                minlength: 5,
                regex: /salak|mal|deli/i
              }
            },
            messages: {
              username: {
                required: "Please enter your username or email",
              },
              password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
              }
            },
            errorElement: "em",
            highlight: function(element, errorClass, validClass) {
              $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function(element, errorClass, validClass) {
              $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            }
          });
        });
      </script>

    </div>
  </div>
</div>


<!-- Düzenleme -->

<!-- FOOTER -->
<?php
include "includes/footer.php";
?>