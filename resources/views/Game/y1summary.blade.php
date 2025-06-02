<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game-Bot Year 1 Quarter 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/buttoncss.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:ital,wght@0,600;1,400&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  
  <style>
    svg{height:100%; width:100%}

    .col-card1 {
      transform: translateX(50%);
      transition: 0.4s;
      z-index: 2;
    }
  
    .col-card2 {
      transform: translateX(-50%);
      transition: 0.4s;
      opacity: 0;
    }
  
    #okbtn1 img {
      width: 8rem;
    }
  
    #oknext {
      display: none;
    }
  
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap');
    .matrixwhite p {
      text-align: left;
      margin-bottom: 0.8rem;
    }
    .matrixwhite .label{
      font-family: 'Rubik', sans-serif;
    }
  
    .matrixwhite .bar {
      border-top-right-radius: 50px;
      border-bottom-right-radius: 50px;
    }
    .matrixwhite .bar img{
      height: 100%;
      position: absolute;
      right: 0;
    }
    .pretext{
      color:#006772;
      font-family: 'Tomorrow';
      font-weight: 900;
      font-size: 30px;
    }
    .xbtn1{
      padding-right: 40px;
      padding-top: 4px;
    }
    /* #cashconvert .col-12{
      display: flex;
      justify-content: center;
    }
    #cashconvert .text1{
      position: absolute;
      top: 5px;
    }
    .text1 p, .text2 p, .text3 p {
      margin-bottom: 0;
      color: white;
      font-weight: 700;
    }
    .text2 .col-12{
      margin-bottom: -8px;
    }
    .text3, .text2{
      position: absolute;
    }
    .text3{
      margin: 0.3rem;
    }
    .text1 p{ 
      font-size: 1.4rem;
    }
    .text2 p{
     font-size: 1.06rem;
    }
  .receivebg{
    width: 15rem;
  }
  .collbg{
    width: 13rem;
  }
  .text3 img{
    width: 2.3rem; 
    margin-top: 0.2rem;
  }
  .text3 p{
    font-size: 30px;
    width: fit-content;
      margin-left: 0.4rem;
  }
  .redx{
    margin: 10px 0 10px 0;
  }
  .redx img{
    width: 2rem;
  }
  .cashgr1{
    width: 13rem;
  }
  .cashgbg{
    width:9rem;
  } */
  .dflex{
    display: flex;
  }
/*   
  .Calsign {display: none;
  align-items: center;}
  .Calsign img{width: 2rem;}

  .Total{display: none;}
  
  .totaltxt{
    position: absolute;
    margin-left: 1rem;
    color:#005B8A;
    font-size: 24px;
    font-weight: 800;
    display: none;
  }
  .flagimg{
    margin-bottom: 4rem;
    margin-top: 4.4rem;
  }
  .card4 {
    margin-top: -95%;
    height: 106px;
  }
  .card4 img {
      width: 74%;
      margin-left: 25%;
      height: auto;
  } */
 

 
  .sideicons {
      width: 7rem;
      position: absolute;
      top: 6rem;
      left: 2.3rem;
  }
  /* .customermoney{
    width: fit-content;
    position: absolute;
    top:24%;
    right:12%;
    display:none;
  }
  .customermoney p{
  font-size: 16px;
  font-weight: 700;
    } */
  .topcash {
    position: absolute;
  }
  .orangeX{height:55px;
  margin-top:12px;}
  .col_card{ height: fit-content;}
  .col_card .card_img{width: 100%;}
  .card_center_btn{
    display:flex;
    justify-content: center;
    position: relative;
    top: -70px;
  }
  .card_center_btn button{
    border:none;
    background:none;
    margin-bottom: -35px;
  }

  .card_head{    margin: 20px 5px;
    background: #FF7A00;
    border-radius: 10px;
    padding: 5px;
    color: white;
  }

  /* slider */
  .bottomcash, .containerCard{
      transform: translateX(100vw);
      -webkit-transform:translateX(100vw);
      transition: 4.9s ease-in-out;
      -webkit-transition: 1.3s ease-in-out;}
      
    .move-right {
      transform: translateX(1%);
      -webkit-transform:translateX(1%);
    }
    body{overflow:hidden;}
  /* end slider */
  
  /* .right_tick img{} */
  .right_tick{
    position: relative;
    right:-20px;
    margin-bottom:-50px;
    height: 50px;
    display: flex;
    justify-content: end;
    top: -16px;
    display:none;
}
  
  </style>
  
</head>
  <body cz-shortcut-listen="true" class="">
  
    @include('Game.year1_summary_img')
    {{--  @include('Game.matrix') --}}

     <div class="modal fade modal-xl" id="matrix_s1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered mt-0">
        <div class="modal-content borderorng mt1">
          <div class="endp endp1">
            <button type="button" class="backbtn dend orangeX" style="margin-right: 34px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle2.svg" width="100%" alt="" style="height:100%;"></button>
          </div>
          <div class="modal-header dcenter noborder pt-0">
            
          </div>
          <div class="modal-body pt-0 pb-0">
           <div class="row" style="padding: 20px;">
            <div class="col-4">
              <div class="col_card">
                <div id="c_sat_tick" class="right_tick">
                  <img class="" src="Media/summY1/tick_card_sy1.svg" alt="">
                </div>
                <img class="card_img" src="Media/summY1/cs_card_sy1.svg" alt="">
                <div class="card_center_btn">
                  <button id="customer_satisfaction" onclick="impact_pay('customer_satisfaction','c_sat_tick')">
                    <img class="" src="Media/summY1/pay_card_sy1.svg" alt="">
                    </button>
                </div>
              </div>

              <!-- <div class="col_card">
                <img class="card_img" src="Media/summY1/cs_card_sy1.svg" alt="">
              </div> -->

       {{-- @if (abs($matrx_impt_default->c_sat - $matrx_impact->c_sat) > 4)
    <img src="image1.jpg" alt="Image 1">
    @else
    <img src="image2.jpg" alt="Image 2">
@endif   --}}
            </div>
            <div class="col-4">
              <div class="col_card">
              <div id="be_tick" class="right_tick">
                  <img class="" src="Media/summY1/tick_card_sy1.svg" alt="">
                </div>
              <img class="card_img" src="Media/summY1/be_card_sy1.svg" alt="">
              <div class="card_center_btn">
                  <button id="brand_equity" onclick="impact_pay('brand_equity','be_tick')">
                    <img class="" src="Media/summY1/pay_card_sy1.svg" alt="">
                    </button>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="col_card">
                <div id="ee_tick" class="right_tick">
                  <img class="" src="Media/summY1/tick_card_sy1.svg" alt="">
                </div>
              <img class="card_img" src="Media/summY1/ee_card_sy1.svg" alt="">
              <div class="card_center_btn">
                  <button id="employee_engagement" onclick="impact_pay('employee_engagement','ee_tick')">
                    <img class="" src="Media/summY1/ok_card_sy1.svg" alt="">
                    </button>
                </div>
              </div>
            </div>
            
           </div>
          </div>
          <div id="oknext" class="modal-footer noborder dcenter mt-2 footerbtn">
            <button class="btnstyle" type="button" onclick="openNext('#Matrixbox','#Backdop2')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
          </div>
        </div>
      </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>

<script>
  function impact_pay(pay_to,tick) {
    if (pay_to === 'customer_satisfaction' || pay_to === 'brand_equity') {
      if(pay_to === 'customer_satisfaction') {var impact_coin = 4;}
      else if(pay_to === 'brand_equity') {var impact_coin = 2;}
      alert('ajax 1 ' + pay_to)
        $.ajax({
          type: "get",
            url: "{{url('impact_matrix_sy1')}}",
            data: {pay_to: pay_to, coin: impact_coin},
            success: function(response) {
              document.getElementById(tick).style.display = "flex";
              document.getElementById(pay_to).style.display = "none";
              // alert(tick);
                console.log(response);
            }
        });
    } else if(pay_to === 'employee_engagement'){
          var c_sat = 2;
        $.ajax({
            type: "get",
            url: "{{url('impact_matrix_sy1')}}",
            data: {pay_to: pay_to, c_sat: c_sat},
            success: function(response) {
              document.getElementById(tick).style.display = "flex";
              document.getElementById(pay_to).style.display = "none";
              // alert(tick);
                console.log(response);
            }
        });
    }
}


     function OpenBtn(open){
        $("#"+open).modal("show");
        }
</script>

  <script src="{{ asset('js/script.js')}}"></script>
  <script src="{{ asset('js/custom.js')}}"></script>  
</body>
</html>