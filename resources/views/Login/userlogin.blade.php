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
<style>
    .inputstyl1{
        color: white;
        background: none;
        border:none;
        box-sizing: border-box;
        border-bottom: 1px solid white;
        margin-bottom: 18px;
        width: 100%;
    }
    input:focus{
        outline: none;
        border-bottom: 1px solid white;  
    }
    .labelstyle{
        color: white;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    .button1{
        background: white;
        color: black;
        padding: 8px 15px;
        border-radius: 50px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        margin: 0 0.5rem ;
    }
    .textwhite{
        color: white;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <div class="limiter">
		<div class="container-login100 bg1">
			<div class="wrap-login100">
				<form id="registration" class="login100-form validate-form p-l-60 p-r-60 p-t-90">
					@csrf
					<span class="login100-form-title font1" style="margin-top:1rem;">
						LOGIN
					</span><div>
                        <pre><span class="admintitle font1" style="letter-spacing: 1px;"><b> User Login </b>/<a href="{{url('login')}}"> Admin's Login</a></span></pre>
                    </div>
                    <label for="full_name" class="labelstyle">Full Name</label><br>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="full_name"><br>

                    <label for="" class="labelstyle">Designation</label><br>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="designation"><br>

                    <label for="" class="labelstyle">Departmant</label><br>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="department"><br>

                    <label for="" class="labelstyle">Email Address</label><br>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="email"><br>

                    <label for="" class="labelstyle">Password</label><br>
                        <input class="inputstyl1" type="password" class="inputstyle1" name="password"><br>

                    <label for="" class="labelstyle">Confirm password</label><br>
                        <input class="inputstyl1" type="password" class="inputstyle1" name="confirm_password"><br>


					<div class="text-right  p-t-10 p-b-30">
						<span class="txt1 textwhite">
						Forgot
						</span>

						<a href="#" class="txt1 textwhite">
						 Email ID or password?
						</a>
					</div>
                    <div class="row flex-col-c p-t-10s p-b-40">

					<!-- <div class="container-login100-form-btn">
						<a class="login100-form-btn font1 tdn" href="Page.html">
							Submit</a>
					</div> -->

                    <span class="txt1 p-b-9">
                    <button type="submit" class="txt1 button1">Register</button>
							<span>&#8212;&#8212; OR &#8212;&#8212;</span>
                    <a href="team_dashboard.html" class="txt1 button1">&nbsp; Log In &nbsp;</a>
                        </span>
					</div>
				</form>
			</div>
		</div>
	</div>
   
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {
    $('#registration').on('submit', function (e) {
        e.preventDefault();

        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '{{url("registration-form")}}',
            data: formData,
            success: function (response) {
                // Handle success response here
                console.log(response);
            },
            error: function (xhr) {
                // Handle error response here
                console.log(xhr.responseText);
            }
        });
    });
});


</script>

</body>
</html>
