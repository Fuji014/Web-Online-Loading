$(document).ready(function(){
  $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
  window.sr = ScrollReveal();
  sr.reveal('nav', {
    duration: 2000,
    origin:'left',
    distance:'500px'
  });
  sr.reveal('.custom_box h1', {
    duration: 2000,
    origin:'right',
    distance:'500px'
  });
  sr.reveal('.custom_box p', {
    duration: 2000,
    origin:'left',
    distance:'500px'
  });
  sr.reveal('#whatWedo' , {
    duration: 2000,
    origin:'left',
    distance:'300px'
  });
  sr.reveal('#help' , {
    duration: 2000,
    origin:'left',
    distance:'300px'
  });
  // sr.reveal('nav', {
  //   duration: 4000,
  //   origin:'top',
  //   distance:'300px'
  // });
  // sr.reveal('nav', {
  //   duration: 4000,
  //    delay:200,
  //   origin:'top',
  //   distance:'300px'
  // });
  // sr.reveal('nav', {
  //   duration: 4000,
  //    delay:200,
  //   origin:'top',
  //   distance:'300px',
  //    viewaFactor:0.2
  // });
  function invalidNum(){
    $.av.pop({
template: 'error', // error, black or default
title: 'Error!', // the title of your notification window
message: 'Invalid Number!.'
});
return false;
  }
  function invalidOtp(){
    $.av.pop({
template: 'error', // error, black or default
title: 'Error!', // the title of your notification window
message: 'Invalid Otp!.'
});
return false;
  }

  $('#Mynumber123').click(function(){
    event.preventDefault();
      var Mynumber = $('#Mynumber').val();
      if (Mynumber != '') {
        $(".clearbox").css({"border":"1px #ccc solid"});
        $.ajax({
          url:"libs/login_user.php",
          method:"POST",
          data:{Mynumber:Mynumber},
          cache:false,
          beforeSend:function(){
            $('#Mynumber123').text("Sending Otp....");
          },
          success:function(data){
            if (data == 'No') {
              $('#Mynumber123').text("Get OTP").show(54000);
              $('#Mynumber').val("");
              invalidNum();
            }
            else {
              var sessionNumber = data;
              $('#cellnum').text(sessionNumber);
              $('#login_number').modal("hide");
              $('#login_otp').modal("toggle").fadeOut(34000);
            }
          }
        });
      }else {
        $(".clearbox").css({"border":"1px red solid"});
      }
  });
  $('#submit_otp').click(function(){
    var otp = $('#otp').val();
    var cellnum = $('#cellnum').text();
    if ($.trim(otp).length > 0) {
      $("input").css({"border-right":"1px #ccc solid"});
      $("input").css({"border-bottom":"1px #ccc solid"});
      $.ajax({
        url:"libs/login_user.php",
        method:"POST",
        data:{otp:otp,cellnum:cellnum},
        cache:false,
        beforeSend:function(){
          $('#submit_otp').text("Checking Otp....");
        },
        success:function(data){
          if (data == "No") {
            $('#submit_otp').text("Login").show(65000);
            invalidOtp();
          }else {
            $('#login_otp').modal("hide").fadeOut();
            location.reload("slow");
          }
        }
      });
    }else {
      $("input").css({"border-right":"1px red solid"});
      $("input").css({"border-bottom":"1px red solid"});
    }
  });
  $("#loadbutton").click(function(){
    var sessionCheck = $("#sessionCheck").text();
    if ($.trim(sessionCheck).length > 0) {
    $(".formerror_error").css({"border":"1px #ccc solid"});
    var loadnumber = $("#loadnumber").val();
    var loadoperator = $("#loadoperator").val();
    var loadamount = $("#loadamount").val();
    if ($.trim(loadnumber).length > 0 && $.trim(loadoperator).length > 0  && $.trim(loadamount).length > 0 ) {
      $.ajax({
        url:"libs/login_user.php",
        method:"POST",
        data:{loadnumber:loadnumber,loadoperator:loadoperator,loadamount:loadamount},
        cache: false,
        beforeSend:function(){
          $('#loadbutton').text("Processing....");
        },
        success:function(data){
          $('#loadbutton').text("Go");
          $("#loadnumber").val("");
          $("#loadoperator").val("");
          $("#loadamount").val("");
          if (data == 1) {
            successLoad();
          }else {
            Somethinghappen();
          }
        }
      });
    }else {
      $(".formerror_error").css({"border":"1px red solid"});

    }
  }else {
    $("#login_number").modal("show");
  }
  });
  $("#submit_email").click(function(){
    var nameGmail = $("#nameGmail").val();
    if ($.trim(nameGmail).length > 0) {
      event.preventDefault();
      $.ajax({
        url:"libs/login_user.php",
        method:"POST",
        data:{nameGmail:nameGmail},
        cache:false,
        beforeSend:function(){
          $("#submit_email").val("Sending Email..");
        },
        success:function(data){
          $('form').trigger("reset");
          $("#submit_email").val("Verify");
          if (data == "1") {
            $('#success').html('<div class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Success!</strong> Please Check your email. </div>');

          }else {
            //shake effect if exist!
            var options = {
              distance: '40',
              direction: 'left',
              times: '3'
            }
            $('#box').effect("shake",options,800);
            $('submit_email').val("Verify");
            $('#error').html("<span class='text-danger'>Gmail is Already Exist!</span>");
          }
        }
      });
    }else {
      $('#error').html("<span class='text-danger'>Fields are required!</span>");

      return false;
    }
  });
  //eto na talaga login and signin
  $("#close1").on("click", function(){
    if(confirm("Want to exit?")){
      /*Clear all input type="text" box*/
      $('#signupId').trigger('reset');
      $('#reg_email').val("");
      $('#reg_number').val("");
      /*Clear textarea using id */
      // $('#form1 #txtAddress').val('');
    }else {
      return false;
    }
   })
   $("#close2").on("click", function(){
     if(confirm("Want to exit?")){
       /*Clear all input type="text" box*/
       $('#signupId').trigger('reset');
       $('#reg_email').val("");
       $('#reg_number').val("");
       /*Clear textarea using id */
       // $('#form1 #txtAddress').val('');
     }else {
       return false;
     }
    })
  $('#next_step').click(function(){
    var gmail = $('#reg_email').val();
    var number = $('#reg_number').val();
    if ($.trim(gmail).length > 0 && $.trim(number).length > 0) {
      $('#setupaccount').modal('show');
    $('#EnterGmail').modal('hide');
    // Signupbody


    }else {
      alert("All fields are required!");
    }
  });
  $('#prev_step').click(function(){
    // $('#Signupbody').hide();
    // $('#gmailnumBody').show();
      $('#setupaccount').modal('hide');
    $('#EnterGmail').modal('show');

  });
  $('#register_user').click(function(){
    event.preventDefault();
    var gmail = $('#reg_email').val();
    var number = $('#reg_number').val();
    var firstname = $('#reg_firstname').val();
    var lastname = $('#reg_lastname').val();
    var username = $('#reg_username').val();
    var address = $('#reg_address').val();
    var password = $('#reg_password').val();
    var repassword = $('#reg_repassword').val();
    if ($.trim(gmail).length > 0 && $.trim(number).length > 0 && $.trim(firstname).length > 0 && $.trim(lastname).length > 0 && $.trim(username).length > 0 && $.trim(address).length > 0 && $.trim(password).length > 0 && $.trim(repassword).length > 0) {
        $.ajax({
          url:"libs/login_user.php",
          method: "post",
          data:{gmail:gmail,number:number,firstname:firstname,lastname:lastname,username:username,address:address,password:password},
          success:function(data){
            if (data == "1") {
              alert("You may now verify your account");
              location.reload("slow");
            }else if(data == "2"){
              alert("gmail already exist");
            }else if(data == "0"){
              alert("Something Went Wrong");
            }else {
              //debuging purpose
              alert(data);
            }
          }

        });
      }else {
        alert("All fields are required!");
      }
  });
  $('#ftl_submit').click(function(){
    event.preventDefault();
    var usernameLogin = $('#ftl_username').val();
    var passwordLogin = $('#ftl_password').val();
    if ($.trim(usernameLogin).length > 0 && $.trim(passwordLogin).length > 0) {
      $.ajax({
        url:"libs/login_user.php",
        method: "post",
        data:{usernameLogin:usernameLogin,passwordLogin:passwordLogin},
        success:function(data){
          if (data) {
            $('body').load('dashboard.php').hide().fadeIn(1500);
          }else{
            alert("Invalid Credentials!");
          }
        }
      });
    }else {
      alert("All fields Are required!");
    }
  })
});
