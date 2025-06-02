<!DOCTYPE html>
<html lang="en">
<style>
    *{   margin: 0;
        padding: 0;
    }
    body{
        background-image: url('assets/G-B-img/gb-1.png');
    }
    .video-area{
    background: white;
    height: 430px;
    border-radius:20px ;
    }
    .bg1 .font1{
        font-size: 30px;
        color: white;
        font-weight: bolder;
    }
    .titletext{
        color: white;
        font-size: 35px;
        font-weight: bold;
    }
</style>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gaming-Board Video</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstap4.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/custome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- {{print_r(auth()->user());}} -->
<!-- <?php echo Auth::id(); 
$user = DB::table('users')->where('id', Auth::id())->first();
print_r($user);
?> -->

    <div class="limiter">
		<div class="d-flex justify-content-center bg1">
            <div class="row" style="width:94%;">
            <div class="col-12 d-flex justify-content-center mt-4 font1"><u><b> TEAM NAME -TEAM  04 </b></u></div>
            <div class="row mt-3 mb-4">
                <div class="col-5 container">
                    <div class="titletext d-flex justify-content-center ">Business Overview</div>
                    <div class="video-area d-flex justify-content-center align-items-center my-2">
                        <div class="">
                            <i style="font-size:75px;color: gray;" class="fa">&#xf04b;</i>
                        </div>
                    </div>
                    
                </div>
                <div class="col-5 container">
                    <div class="titletext d-flex justify-content-center ">Industry Overview</div>
                    <div class="video-area d-flex justify-content-center align-items-center my-2">
                      <div>
                        <i style="font-size:75px; color: gray;" class="fa iconsize">&#xf04b;</i>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col mt-2 d-flex justify-content-start">
        <a class="backbtn font1" href="video"><< BACK</a>
    </div>
    <div class="col mt-2 d-flex justify-content-end">
    <a class="nextbtn2 font1" href="index">START >></a>
</div>
    </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>