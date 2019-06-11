$(document).ready(function() {


      $('#submit').click(function(e){
        e.preventDefault();
		
        var username = $("#username").val();
        var email = $("#email").val();
		var password= $("#password").val();
		var passwordRepeat = $("#passwordRepeat").val();
		var profile = $("#profile").val();
		var name=$("#name").val();
		var surname=$("#surname").val();
		var country=$("#country").val();
        $.ajax({
            type: "POST",
            url: "./phpfiles/verify.php",
            dataType: "json",
            data: {name:name,surname:surname,username:username,email:email,country:country,password:password,passwordRepeat:passwordRepeat,profile:profile},
            success : function(data){
                if (data.code == "200"){
                    $(".display-complet").html("<b>"+data.msg+"</b>");
					$(".display-complet").css("display","block");
					$(".display-error").css("display","none");
                } else {
                    $(".display-error").html("<b>"+data.msg+"</b>");
                    $(".display-error").css("display","block");
					$(".display-error").css("color","red");
					$(".display-complet").css("display","none");
                }
            }
        });
      });
  });