<?php
include "includes/header.php";
?>

<div class="rs-breadcrumbs img3">
  <div class="breadcrumbs-inner text-center">
    <h1 class="page-title">Contact</h1>
    <ul class="list-inline">
      <li style="display: inline-block;">
        <a class="active" style="color: white;" href="index.php">Home </a>
      </li>
      <li style="color: white; display: inline-block;">Contact</li>
    </ul>
  </div>
</div>

<!--HEADER-->
<!-- Düzenleme-->
<div class="container box-one">
  <div class="row gx-5">
    <div class="col-lg-4 md-mb-60">
      <div class="contact-box">
        <div class="sec-title mb-45">
          <span class="sub-text new-text white-color">Let's Talk</span>
          <h2 class="title white-color">Speak With Expert Engineers.</h2>
        </div>
        <div class="address-box mb-25">
          <div class="address-icon">
            <img src="house-fill.svg" alt="" />
          </div>
          <div class="address-text ">
            <span class="label">Email:</span>
            <a href="tel:123222-8888">(123) 222-8888</a>
          </div>
        </div>
        <div class="address-box mb-25">
          <div class="address-icon">
            <img src="telephone-fill.svg" alt="" />
          </div>
          <div class="address-text">
            <span class="label">Phone:</span>
            <a href="#">support@rstheme.com</a>
          </div>
        </div>
        <div class="address-box">
          <div class="address-icon">
            <img src="geo-alt-fill.svg" alt="" />
          </div>
          <div class="address-text">
            <span class="label">Address:</span>
            <div class="desc">New Jesrsy, 1201, USA</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 pl-70 md-pl-15">
      <span class="mb-15" style="color: rgb(45, 130, 209); margin-left: 10px;">GET IN TOUCH</span>
      <h1 class="mb-5" style="margin-left: 10px;">Fill The Form Below</h1>

      <form method="post" action="" id="signupForm" novalidate="novalidate">
        <div class="row mx-auto">
          <div class="mb-4 col-sm-6">
            <input class="form-control bg-light formStyle" type="text" id="name" name="name" placeholder="Name">
          </div>
          <div class="mb-4 col-sm-6">
            <input class="form-control bg-light formStyle" type="text" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="E-Mail">
          </div>
        </div>
        <div class="row mx-auto">
          <div class="mb-4 col-sm-6">
            <input class="form-control bg-light formStyle" type="password" id="password" name="password" placeholder="Password">
          </div>
          <div class="mb-4 col-sm-6">
            <input class="form-control bg-light formStyle" type="number" id="number" name="number" placeholder="Phone Number">
          </div>
        </div>
        <div class="row mx-auto">
          <div class="mb-4 col-sm-6">
            <select class="form-select bg-light formStyle" aria-label="Default select example">
              <option selected>Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
          </div>
          <div class="mb-4 col-sm-6">
            <textarea class="form-control bg-light textareaStyle formStyle" id="message" name="message" placeholder="Your message here"></textarea>
          </div>
        </div>
        <div class="mb-4 col-2">
          <button type="submit" id="btn1" name="btn1" value="success" class="btn btn-primary buttonStyle ">Submit
            Now</button>
        </div>
      </form>

      <script type="text/javascript">
        $.validator.setDefaults({
          submitHandler: function() {
            swal(
              'Good job!',
              'The form has been successfully submitted!',
              'success'
            )
          }
        });

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

          $("#signupForm").validate({
            rules: {
              name: {
                required: true,
                regex: /salak|mal|deli/i
              },
              number: {
                required: true,
                rangelength: [11, 11]
              },
              password: {
                required: true,
                minlength: 5,
                regex: /salak|mal|deli/i
              },
              userEmail: {
                required: true,
                email: true,
                regex: /salak|mal|deli/i
              },
              message: {
                required: true,
                regex: /salak|mal|deli/i
              }
            },
            messages: {
              name: {
                required: "Please enter your name",
              },
              number: {
                required: "Please enter your phone number",
                rangelength: function(range, input) {
                  return [
                    'Your password must be 11 characters long. ',
                    'You have typed ', $(input).val().length, ' characters'
                  ].join('');
                },
              },
              password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
              },
              userEmail: {
                required: "Please enter a valid email address",
                email: "Please enter a valid email address",

              },
              message: {
                required: "Please enter your message",

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

<div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.6891603341687!2d29.507999914930227!3d40.79084734072588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac491908d5d11%3A0x9da4a8874a99c217!2sArgenova%20Teknoloji!5e0!3m2!1str!2str!4v1623844696653!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- FOOTER -->
<?php
include "includes/footer.php";
?>