<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming-Board</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="custome.css">
</head>
<body>
    <div class="limiter">
		<div class="container-login100 bg1">
			<div class="wrap-login100">
				<form id="adminlogin" class="login100-form validate-form p-l-55 p-r-55 p-t-140">
                @csrf
					<span class="login100-form-title font1">
						LOGIN
					</span><div>
                        <pre><span class="admintitle font1" style="letter-spacing: 1px;"><a href="{{url('userlogin')}}"> User Login </a>/<b><a> Admin's Login</a></b></span></pre>
                    </div>

					<div class="margin1">
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100 font1" type="text" name="email" placeholder="Username">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100 font1" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                    </div>

					<div class="text-right p-t-10 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt1">
							Username / Password?
						</a>
					</div>
                    <div class="flex-col-c p-t-50 p-b-50">

					<div class="container-login100-form-btn">
						<!-- <a class="login100-form-btn font1 tdn" href="Page.html"> -->
						<button class="login100-form-btn font1 tdn" type="submit">
							Submit</button>
					</div>

						<!-- <span class="txt1 p-b-9">
							Don’t have an account?
						</span> -->

						<!-- <a href="#" class="txt3">
							Sign up now
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {
    $('#adminlogin').on('submit', function (e) {
        e.preventDefault();

        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '{{url("submit-form")}}',
            data: formData,
            success: function (response) {
                console.log(response.status );
                console.log(response);
                if(response.status == true){
                    if(response.user_type == "admin"){
                        alert('next admin page');
                        // window.location.href = "choose_role";
                    }else{
                        window.location.href = "choose_role";
                    }
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
            
        });
    });
});


</script>

</body>

</html>