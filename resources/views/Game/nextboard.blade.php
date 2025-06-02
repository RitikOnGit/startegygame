  <html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game-Bot Year 1 Quarter 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custome.css')}}">
  <link rel="stylesheet" href="{{ asset('css/buttoncss.css')}}">
  <link rel="stylesheet" href="{{ asset('css/responsive1.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Tomorrow:ital,wght@0,600;1,400&amp;display=swap" rel="stylesheet">
  <!-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>

<style>
  #imgset1 .img {
    width: 100%;
  }

  .optionsimg img {
    width: 100%;
    margin-left: 0%;
  }

  .optionsimg {
    position: absolute;
    top: 75px;
  }

  #clickhere {
    display: flex;
    justify-content: center;
    margin-top: -7.2rem;
  }

  #clickhere button img {
    width: 8rem;
  }

  #okbtn1 button,
  #clickhere button {
    padding: 0;
  }

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

  #okbtn1 {
    display: none;
    justify-content: center;
    margin-top: -1rem;
    /* margin-bottom: -1.1rem; */
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

  
  .matrixwhite .bar img{
    height: 100%;
    position: absolute;
    right: 0;
    scale:1.2;
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
  #Matrixbox .xbtn1{
    padding-top: 10px;
  }
  #cashconvert .col-12{
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
  /* margin-left: 0.8rem; */
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
}
.dflex{
  display: flex;
}

.Calsign {display: none;
align-items: center;}
.Calsign img{width: 2rem;}
/* .Total img{
width: ;
} */
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
    /* margin-top: -6px; */
}
#recordsales button{border:none;}
.textoverimg1{
  /* display: none; */
  position: absolute;
  margin-top: 1.2rem;
  margin-left: 1.5rem;
  top:0;
  right: 10px;
  line-height:1.2;
}


#recordsales .textoverimg1{
  margin-left: 1.9rem;
  line-height:1.2;
}


#crtotal{text-align: center;}

.flagimg .flagwidth img{
  width: 60px;
}
/* flag Ad  */
.flagimg .SfAd img{
  margin-left: 2.2rem;
}
.flagimg .AfAd img{
  margin-left: 2.5rem;
}
.flagimg .OfAd img{
  margin-left: 2.5rem;
}

/* flag In */
.flagimg .SfIn  img{
   margin-left: -2.4rem;
 }
.flagimg .AfIn  img{
   margin-left: -1.7rem;
 }
.flagimg .OfIn  img{
   margin-left: -2.7rem;
 }
/*flags css after javascript */
.flagimg2 .flagwidth img{ width: 48px;}
.flagimg .SfAd2 img {margin-left: 1.5rem;}
.flagimg .SfIn2 img {margin-left: -2rem;}
.flagimg .AfAd2 img {margin-left: 2.1rem;}
.flagimg .AfIn2 img {margin-left: -1.3rem;}
.flagimg .OfAd2 img {margin-left: 2rem; margin-top: 0.2rem;}
.flagimg .OfIn2 img {margin-left: -2.2rem;}
.flagimg2{margin-top: 2.1rem;}
/*END flags css after javascript */



/* Sagar Bhai */
.quarter{
    color: white;
    background-color: #3F5465;
    width: 200px;
    border-radius: 8px;
    border: none;
  }
.btnamount{
    background-color: #FFD781;
    width: 97px;
    border-radius: 8px;
    border: none;
  }
  .quarter1{
    background-color:#3F5465;
    color: white;
    border-radius: 8px;
    border: none;
  }
  .modal-xy{
    --bs-modal-width: 750px;
  }
  .mt2{
    padding: 0px 50px 20px ;
  }
    #image2{
    margin-left: auto;
    margin-right: auto;
    width: 34%;
    margin-bottom: 43px;
    margin-top: 22px;
    }
    #salerecord #image2{
    width: 52%;
   }

    .mt3{
      padding: 0px 35px 10px;
    }
    .modal-yy{
    --bs-modal-width: 660px;
  }
  #image3{
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    margin-bottom: 43px;
    margin-top: 22px;
    } 
    .tarde1{
    background-color:#3F5465;
    color: white;
    border-radius: 8px;
    border: none;
  }
  .tarde{
    color: white;
    background-color: #3F5465;
    width: 160px;
    border-radius: 8px;
    border: none;
  }
  .tardeamount{
    background-color: #FFD781;
    width: 93px;
    border-radius: 8px;
    border: none;
  }
/*end css S */

.equalsTo img{
    width: 1.4rem;
    margin: 2px;
  }
.titlebox{width: 170px;
  font-size: 14px;
  padding: 4px;
}
#RQNS .modal-content{
  width: 730px;
}
#image4 {
    margin-left: auto;
    margin-right: auto;
    width: 60%;
    margin-bottom: 35px;
    margin-top: 32px;}
table{
  margin-bottom: 1.4rem;
}
/* time to pay 06-aprh */
.ttpaybtn {
    bottom: 16%;
    position: absolute;
    /* background: #00000094; */
    left: 47%;
    border-radius: 20%;
}
.ttpaybtn .btn{
    height: 1.5rem; 
    width: 4.8rem;
}
/* end */

/* //// */
.flip-card-inner {
  width: 100%;
  height: 100%;
  transition: transform 0.5s;
  transform-style: preserve-3d;
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.flip-card-back {
  transform: rotateY(180deg);
}
/* //// */
.sideicons {
    width: 7rem;
    position: absolute;
    top: 6rem;
    left: 2.3rem;
}
.customermoney{
  width: fit-content;
  position: absolute;
  top:24%;
  right:12%;
  display:none;
}
.customermoney p{
font-size: 16px;
font-weight: 700;
  }
.topcash {
  position: absolute;
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

.footerbtn .table_button{
  position:relative;
  top:20px;
}
.cash-text .convertcash{margin-left:15px}
#cashconvert .rec_amount{margin-top:-5px;}

   
   
body{overflow:hidden;}
/* end slider */
#svgboard{
  height:100%;
  width:100%;
}
svg{
  height:100%;
  width:100%;
}

</style>
</head>
<body cz-shortcut-listen="true" class="">
  

  @include('Game.y1q2_svg_img')
  <!-- Modal 2-->
   @include('Game.matrix')

  <div class="modal fade modal-xl" id="Backdop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <!-- <h1 class="modal-title fs-5 stg1 stg2" id="">ADs and Marketing </h1> -->
        </div>
        <div class="modal-body pt-0 pb-0">
          <div id="imgset1" class="row d-flex mb-ads">
            <div id="col-card1" class="col-md-6 col-card1">
              <img id="image1" class="img" src="@if(isset($event_card_selected)) {{$event_card_selected->card_image}}  @else Media/Image/group1.svg @endif" alt=""> 

              @if(isset($event_card_selected)) 

              @else
              <div id="clickhere">
                <button type="button" class="btn" onclick="transform1()">
                  <img src="Media/Image/clickH.svg">
                </button>
              </div>
              @endif
            </div>
{{-- {{     dd($event_card);}} --}}
            <div id="col-card2" class="col-md-6 col-card2">
              <div>
                <img class="img" src="Media/Image/Group 203.svg" alt="">
                <div class="row optionsimg">
                  {{-- <div class="col-12 top">
                    <label class="stock-img">
                      <input type="hidden" id="eventymodal" value="1">
                      <input type="radio" name="optn" value="A" id="event_card_1" onclick="selectbtn()">
                      <div class="stock1">
                        <img src="Media/Image/Group 200.svg" alt="">
                      </div>
                    </label>
                  </div>
                  <div class="col-12 mid">
                    <label class="stock-img">
                      <input type="radio" name="optn" value="B" id="event_card_2" onclick="selectbtn()">
                      <div class="stock1">
                        <img src="Media/Image/Group 201.svg" alt="">
                      </div>
                    </label>
                  </div>
                  <div class="col-12 botm">
                    <label class="stock-img">
                      <input type="radio" name="optn" value="C" id="event_card_3" onclick="selectbtn()">
                      <div class="stock1">
                        <img src="Media/Image/Group 202.svg" alt="">
                      </div>
                    </label>
                  </div> --}}

                  @foreach($event_card as $data)
                  <div class="col-12 @if($data->card_invest == 'A') top @elseif($data->card_invest == 'B') mid @elseif($data->card_invest == 'C') botm @endif">
                    <label class="stock-img">
                      @if($data->card_invest == 'A') 
                      <input type="hidden" id="eventymodal" value="1">
                      @endif
                      <input type="radio" name="optn" value="{{$data->card_invest}}"
                       @if(isset($event_card_selected) && $event_card_selected->card_name == $data->card_name) checked default  @else
                        @if(isset($event_card_selected) )  @else onclick="selectbtn()" @endif @endif id="event_card_{{$data->card_id}}"  >
                      <div class="stock1">
                        <img src="{{$data->card_image}}" alt="">
                      </div>
                    </label>
                  </div>

                  @endforeach
                </div>
                <div id="okbtn1">
                  <button type="button" class="btn" @if(isset($event_card_selected) && $event_card_selected->card_name == $data->card_name) onclick= "" @else onclick="okbtn1()" @endif>
                    <img src="Media/Image/okbtn.svg">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div  @if(isset($event_card_selected)) @else id="oknext" @endif  class="modal-footer noborder dcenter mt-2 footerbtn">
          <button class="btnstyle" type="button" onclick="openNext('#Matrixbox','#Backdop2')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Matrix -->
  <div class="modal fade" id="Matrixbox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg mt-0">
      <div class="modal-content borderblue mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend xbtn1" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/circleBlue.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <!-- <h1 class="modal-title fs-5 stg1 stg2" id="">ADs and Marketing </h1> -->
        </div>
        <div class="modal-body py-4">
     <div class="container">
      <div class="row">
      <div class="col-12">
        <div class="matrixwhite">
          <p class="label"><b>CUSTOMER SATISFICATION</b></p>
          <div class="row">
          <div class="col-10">
              <div class="mprogress">
                <div class="bar" style="width:75%">
                  <!-- <p class="percent"></p> -->
                  <img src="Media/Image/bluecirclestar.svg" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                  <span id="customer">75</span><span>%</span>
                </p>
              </div>
            </div>
          </div>              
      </div>

      <div class="col-12">
        <div class="matrixwhite">
          <p class="label"><b>BRANDS EQUITY</b></p>
          <div class="row">
          <div class="col-10">
              <div class="mprogress">
                <div class="bar" style="width:65%">
                  <!-- <p class="percent"></p> -->
                  <img src="Media/Image/bluecirclestar.svg" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                  <span id="brand">70</span><span>%</span>
                  </p>
              </div>
            </div>
          </div>              
      </div>
           
      <div class="col-12">
        <div class="matrixwhite">
          <p class="label"><b>EMPLOYEE ENGAGEMENT</b></p>
          <div class="row">
          <div class="col-10">
              <div class="mprogress">
                <div class="bar" style="width:75%">
                  <!-- <p class="percent"></p> -->
                  <img src="Media/Image/bluecirclestar.svg" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                  <span id="employee">75</span><span>%</span>
                 </p>
              </div>
            </div>
          </div>              
      </div>

    <div class="col-12">
        <div class="matrixwhite">
          <p class="label"><b>COLLECTION EFFICENCY</b></p>
          <div class="row">
          <div class="col-10">
              <div class="mprogress">
                <div class="bar" style="width:80%">
                  <!-- <p class="percent"></p> -->
                  <img src="Media/Image/bluecirclestar.svg" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                  <span id="collection">90</span><span>%</span> 
                </p>
              </div>
            </div>
          </div>              
      </div>
      </div>
    </div>
        </div>
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <button class="btnstyle" type="button" onclick="" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal 2-->
  <div class="modal fade modal-xl" id="Backdop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <h1 class="modal-title fs-5 stg1 stg2" id="">CASH CONVERSION </h1>
        </div>
        <div class="modal-body pt-0 pb-0">
          <div class="container">
            <div id="cashconvert" class="row">
              <div class="col-12">
                <div class="d-flex justify-content-center">
                  <img class="receivebg" src="Media/Image/ReOrangebg.svg" alt="">
                  <div class="row text1">
                    <div class="col-12"><p>RECEIVABLE</p></div>
                    <div class="col-12 rec_amount"><p><span id="ReceivableAmt">{{$account_receivable->card_invest}}</span>M</p></div>
                   </div>
                </div>
              </div>
              <div class="col-12 redx">
                <img src="Media/Image/redx1.svg" alt="">
              </div>
              <div class="col-12">
                <div class="d-flex justify-content-center">
                  <img class="collbg" src="Media/Image/ReOrangebg.svg" alt="" width="90%">
                  <div class="row text2">
                    <div class="col-12"><p>COLLECTION</p></div>
                    <div class="col-12"><p>EFFICIENCY</p></div>
                    <div class="col-12"><p><span id="cashcon">
                    @if(isset($matrix_all) && $matrix_all->col_effi != '')
                          {{$matrix_all->col_effi}}%
                        @else 
                            90%
                        @endif
                    </span></p></div>
                   </div>
                </div>
              </div>
            <div class="col-12">
              <img class="cashgr1" src="Media/Image/Cashgr1.svg" alt="">
            </div>

            @if(isset($amt_deduct) && $amt_deduct != '' && isset($amt_deduct->card_type)  && $amt_deduct->card_type == 'add_coin_q1')
            <div class="col-12 mt-1 mb-2">
                <div class="row gx-0 text3">
                  <div class="col-md-3"><img src="assets/icons/dollar-coin.png" alt=""></div>
                    <div class="col-md-9">
                      <p id="Cashconversion convertcash" style="cursor: pointer; user-select: none;" >{{$amt_deduct->invest_amount}}M</p>
                    </div>
                 </div>
                <img class="cashgbg" src="Media/Image/cashGreenbg.svg" alt="">
              </div>
              {{-- <p id="cashclickhere" style="font-weight: 900; margin-bottom: 0.5rem;">Click here</p> --}}
            </div>
            @else
            <div class="col-12 mt-1">
              <div class="row gx-0 text3 cash-text">
                <div class="col-md-3"><img src="assets/icons/dollar-coin.png" alt=""></div>
                  <div class="col-md-9">
                    <p id="Cashconversion" style="cursor: pointer; user-select: none;" onclick="cashcon()">CASH</p>
                  </div>
               </div>
              <img class="cashgbg" src="Media/Image/cashGreenbg.svg" alt="">
            </div>
            <p id="cashclickhere" style="font-weight: 900; margin-bottom: 0.5rem;">Click here</p>
            <div id="mycashconvert" class="modal-footer noborder dcenter mt-2 footerbtn" style="display:none;">
                  <input type="text" value="1" id="costotals" style="display:none">
                  <button class="btnstyle" type="button" onclick="slider_('Backdop3','cash')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
            </div>
          </div>

            @endif
          </div>  
        </div>
      </div>
    </div>
  </div>
  
<!-- Record Discount -->
  <div class="modal fade modal-yy" id="backdropa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1  mt3">

        <img id="image3" class="img" src="Media/Image/RecDis.svg" alt="">
        <table class="">
    <thead>
      <tr>
        <th></th>
        <th><button type="button" class="tarde1">QUARTER 1</button></th>
        <th><button type="button" class="tarde1">QUARTER 2</button></th>
        <th><button type="button" class="tarde1">QUARTER 3</button></th>
        <th><button type="button" class="tarde1">QUARTER 4</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="tarde">DISCOUNT</button></td>
        <td><button type="button" class="tardeamount"><span id="disY1">0</span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">TOTAL</button></td>
        <td><button type="button" class="tardeamount"><span id="disTotalY1">{{ (isset($product_launch_val->compute_discount) && $product_launch_val->compute_discount != '') ? $product_launch_val->compute_discount : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>      
       {{-- <div id="oknext" class="modal-footer noborder dcenter mt-2 footerbtn">
          <button class="btnstyle" type="button" onclick="" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div> --}}

        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="distotals" style="display:none" >
              <button class="btnstyle" type="button" data-bs-dismiss="modal" @if(isset($product_launch_val->compute_discount) && $product_launch_val->compute_discount != '') onclick="closemodal('#backdropa')" @else onclick="slider_('disTotalY1','discount')" @endif style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
            </div>
      </div>
    </div>
  </div>

  <!-- Record Cos -->
  {{-- {{dd($strategy_selected['0']->impact_value_cos);}} --}}
  <div class="modal fade modal-xy" id="cosrecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1 mt2">
        <img id="image2" class="img" src="Media/Image/recordcos.svg" alt="">
        <table class="">
    <thead>
      <tr>
        <th></th>
        <th><button type="button" class="quarter1">QUARTER 1</button></th>
        <th><button type="button" class="quarter1">QUARTER 2</button></th>
        <th><button type="button" class="quarter1">QUARTER 3</button></th>
        <th><button type="button" class="quarter1">QUARTER 4</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="quarter">QUARTERLY COS</button></td>
        <td><button type="button" class="btnamount"><span id="cosYear1" >{{(isset($product_launch_val) && $product_launch_val->pf_cal) ? $product_launch_val->pf_cal : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">EVENT IMPACT</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
        <td><button type="button" class="btnamount"><span id="stgImpYear1">
        @php            
          $cos_value = array();
          foreach($strategy_selected as $data)       {   
              if(isset($data) && $data->impact_value_cos == null) {
                $cos_value[] = 0;
              }           
              elseif(isset($data) && $data->impact_value_cos != ''){
              $cos_value[] = (int) $data->impact_value_cos;
            }
          }
        @endphp
        @if(array_sum($cos_value) != 0)
        {{array_sum($cos_value);}}M
            @else
            - 
            @endif
                          
        </span></button></td>

        <td><button type="button" class="btnamount"><span id="stgImpYear2">
        @php            
          $cos_value = array();
          foreach($strategy_selected as $data)       {   
              if(isset($data) && $data->impact_value_cos_y1q2 == null) {
                $cos_value[] = 0;
              }           
              elseif(isset($data) && $data->impact_value_cos_y1q2 != ''){
              $cos_value[] = (int) $data->impact_value_cos_y1q2;
            }
          }
        @endphp
        @if(array_sum($cos_value) != 0)
        {{array_sum($cos_value);}}M
            @else
            - 
            @endif  
        </span></button>
      </td>

        <td><button type="button" class="btnamount"><span id="stgImpYear3">
        @php            
          $cos_value = array();
          foreach($strategy_selected as $data)       {   
              if(isset($data) && $data->impact_value_cos_y1q3 == null) {
                $cos_value[] = 0;
              }           
              elseif(isset($data) && $data->impact_value_cos_y1q3 != ''){
              $cos_value[] = (int) $data->impact_value_cos_y1q3;
            }
          }
        @endphp
        @if(array_sum($cos_value) != 0)
        {{array_sum($cos_value);}}M
            @else
            - 
            @endif                   
        </span></button>
      </td>

        <td><button type="button" class="btnamount"><span id="stgImpYear4">
        @php            
          $cos_value = array();
          foreach($strategy_selected as $data)       {   
              if(isset($data) && $data->impact_value_cos_y1q4 == null) {
                $cos_value[] = 0;
              }           
              elseif(isset($data) && $data->impact_value_cos_y1q4 != ''){
              $cos_value[] = (int) $data->impact_value_cos_y1q4;
            }
          }
        @endphp
        @if(array_sum($cos_value) != 0)
        {{array_sum($cos_value);}}M
            @else
            - 
            @endif              
        </span></button>
      </td>

      </tr>
      <tr>
        <td><button type="button" class="quarter">TOTAL</button></td>
        <td><button type="button" class="btnamount"><span id="costotalYear1">{{ (isset($product_launch_val->total_cos) && $product_launch_val->total_cos != '') ? $product_launch_val->total_cos : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
    </tbody>
  </table>
     
  <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
  <input type="text" value="1" id="costotals" style="display:none" >
    <button class="btnstyle table_button"  type="button" onclick="slider_('costotalYear1','cos')"  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
    </div>    
</div>
</div>
  </div>

 <script>
  function slider_(input,output){

    if(output == 'cos'){
      var i = $('#costotals').val();
        if(i == 1){
            // alert(i)
          var val1 = parseInt(document.getElementById(input).innerHTML);
          // var val2 = parseInt(document.getElementById(output).innerHTML);
          // document.getElementById(output).innerHTML = val1 + val2;
          // document.getElementById('accountpay').innerHTML = val1;
          var my_var = @php echo json_encode($product_launch_val->final_cos_val); @endphp;
          // alert(my_var)
            if(my_var){

            }else{
              document.getElementById('accountpay').innerHTML = val1;
            }
          slidetest('move-right','containerCard');
          $('#costotals').val(2);
          $('#cosrecord').modal('hide');
        }     
        else $('#cosrecord').modal('hide');
    }

    if(output == 'sales'){
      var i = $('#salestotals').val();
        if(i == 1){
            // alert(i)
          var val1 = parseInt(document.getElementById(input).innerHTML);
          var val2 = parseInt(document.getElementById(output).innerHTML);
          slidetest('move-right','bottomcash');
          document.getElementById(output).innerHTML = val1 + val2;
          $('#salestotals').val(2);
          $('#salerecord').modal('hide');
          $('#sales_table_button').attr("onclick", "closemodal('#salerecord')");
        }     
        else $('#salerecord').modal('hide');
    } 
    

    if(output == 'discount'){
      var i = $('#distotals').val();
        if(i == 1){
          var val1 = parseInt(document.getElementById(input).innerHTML);
          var val2 = parseInt(document.getElementById(output).innerHTML);
          document.getElementById(output).innerHTML = val1 + val2;
          slidetest('move-right','bottomcash');
          $('#sales_table_button').attr("onclick", "closemodal('#backdropa')");
          $('#distotals').val(2);
          $('#backdropa').modal('hide');
        }     
        else  $('#backdropa').modal('hide');
    }

    if(output == 'accountrec'){
      var i = $('#tstotals').val();
        if(i == 1){
          var val1 = parseInt(document.getElementById(input).innerHTML);
          var val2 = parseInt(document.getElementById(output).innerHTML);
          var val3 = parseInt(document.getElementById('custmoney').innerHTML);

          $.ajax({
            type: "get",
            url: "{{url('sub_customer_money')}}",
            // url: "/sub_customer_money/",
           dataType:"Json",
           data: {"trade_spend":val1,"acc_recei":val2,"customer_money":val3,"type":"product_launch"},
           
            success: function (response) {
                // console.log(response);                
              document.getElementById(output).innerHTML = val1 + val2;
              slidetest('move-right','containerCard');
              $('.customermoney').css('display','block')
              document.getElementById('custmoney').innerHTML = val3 - val1;
              $('#tstotals').val(2);
              $('#RTS').modal('hide');

            },
            error:function(error){
                console.log(error);
            }
        });
  
        }     
        else  $('#RTS').modal('hide');
    }

    if(output == 'accr'){
      var i = $('#rqnsokBtn').val();
        if(i == 1){
          // var val1 = parseInt(document.getElementById(input).innerHTML);
          // var val2 = parseInt(document.getElementById('accountrec').innerHTML);
          // var val3 = parseInt(document.getElementById('custmoney').innerHTML);
          // document.getElementById('accountrec').innerHTML = val1 + val2;
          slidetest('move-right','containerCard');
          // $('.customermoney').css('display','block')
          // document.getElementById('custmoney').innerHTML = val3 - val1;
          $('#rqnsokBtn').val(2);
          $('#RQNS').modal('hide');
        }     
        else  $('#RQNS').modal('hide');
    }

    if(output == 'cash'){
      $('#Backdop3').modal('hide');
      slidetest('move-right','containerCard');
      $('#mycashconvert').css('display', 'none');
    }

}

</script>
  
  <!-- Modal 2-->
  @php
  use App\Models\Card;
  use Illuminate\Support\Facades\Facade;
  @endphp

  <div class="modal fade modal-xl" id="cosrecord1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mb-0 mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <h1 class="modal-title fs-5 stg1 stg2" id="">COS RECORD</h1>
        </div>
        <div class="modal-body pt-0 pb-0">
          <div class="container">
          <div class="row">
            
            @if(isset($product_launch_val->pf_cal) && $product_launch_val->pf_cal > 0)
            <script>              
                setTimeout(()=>{
                  calSign('cosrecord1','comp1','cosrecord','product_launch','cos','view')   
                },2000);
              </script>

            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                          {{-- <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt=""> --}}
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
                              $pro_flag_b_1 = Card::where('card_image', '=', $prod_flag['key3']['0'])->first();  
                              $pro_flag_b_2 = Card::where('card_image', '=', $prod_flag['key3']['1'])->first();  
                              $pro_flag_b_3 = Card::where('card_image', '=', $prod_flag['key3']['2'])->first();  
                          @endphp
                          {{-- <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span> --}}
                        {{-- </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_1->card_blank}}" name="{{$prod_flag['key5']['0']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>COS Record</p>
                        <p><span id="cos1">0</span>M</p>

                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                      </div>
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth SfAd SfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                    </div>
                    <div class="col flagwidth SfIn SfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign" style="display:flex;">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          {{-- <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_2->card_blank}}" name="{{$prod_flag['key5']['1']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>COS Record</p>
                        <p><span id="cos2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth AfAd AfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                    </div>
                    <div class="col flagwidth AfIn AfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign" style="display:flex;">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          {{-- <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_3->card_blank}}" name="{{$prod_flag['key5']['2']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>COS Record</p>
                        <p><span id="cos3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth OfAd OfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                    </div>
                    <div class="col flagwidth OfIn OfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign" style="display:flex;">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
          

            <div class="col-2 align-items-center Total" style="width: fit-content; display:flex">
              <img src="Media/Image/totalbg.svg" alt="" >
              <div class="totaltxt" style="display:block">
                <div>TOTAL</div>
                <div><span class="crtotal">{{ $product_launch_val->pf_cal}}</span>M</div>
              </div>
            </div>
          </div>  
        </div>
          </div>
    
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecCosBtn.svg" alt=""> --}}
          <button id="comp1" class="btnstyle" type="button" onclick="Foo('cosrecord1','cosrecord','{{ $product_launch_val->card_type}}')" style="border: none;"><img src="Media/Image/RecCosBtn.svg" alt="" width="50%"></button>
        </div>
        </div>
      </div>
    </div>
  @elseif(isset($product_launch_val) && $product_launch_val->card_type == 'product_launch')
  {{-- <h2>sa</h2> --}}
  <div class="col Store">
    <div class="row gx-0">
      <div class="col">
        <div class="card bg-transparent" style=" border: none;">
          <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
          <div class="row card4">
          <div class="col dcenter Scol1" id="">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt="">
                @php                
                    $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                    $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
                    $pro_flag_b_1 = Card::where('card_image', '=', $prod_flag['key3']['0'])->first();  

                @endphp
                <span class="btn-over-image">
                  <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                </span>
              </div>
              <div class="flip-card-back">
              {{-- <img src="{{$pro_flag_b_1->card_blank}}" name="{{$prod_flag['key5']['0']}}" alt="">   --}}
            <img src="{{$prod_flag['key3']['0']}}" alt="">   
            @endif
            <div class="textoverimg1">
              <p>COS Record</p>
              <p><span id="cos1">0</span>M</p>

            </div>
                  </div>
                </div>
          </div>
            <div class="col">NA</div>
            </div>
            @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
          <div class="row gx-0 flagimg">
            <div class="col flagwidth SfAd dcenter p-0">
              <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
          </div>
          <div class="col flagwidth SfIn dcenter">
            <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
          </div>
          </div>
          @endif
        </div>
      </div>
      <div class="col-1 Calsign">
        <img src="Media/Image/BluePlus.svg" alt="">
      </div>
    </div>
  </div>
  <div class="col Agent">
    <div class="row gx-0">
      <div class="col">
        <div class="card bg-transparent" style=" border: none;">
          <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
          <div class="row card4">
          <div class="col dcenter Acol1" id="">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}">
                @php                
                    $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                @endphp
                <span class="btn-over-image">
                  <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                </span>
              </div>
              <div class="flip-card-back">
            <img src="{{$prod_flag['key3']['1']}}" alt="">   
            @endif
            <div class="textoverimg1">
              <p>COS Record</p>
              <p><span id="cos2">0</span>M</p>
            </div>
                  </div>
                </div>
          </div>
            <div class="col">NA</div>
          </div>
          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
          <div class="row gx-0 flagimg">
            <div class="col flagwidth AfAd dcenter p-0">
              <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
          </div>
          <div class="col flagwidth AfIn dcenter">
            <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
          </div>
          </div>
          @endif
        </div>
      </div>
      <div class="col-1 Calsign">
        <img src="Media/Image/BluePlus.svg" alt="">
      </div>
    </div>
  </div>
  <div class="col Online">
    <div class="row gx-0">
      <div class="col">
        <div class="card bg-transparent" style=" border: none;">
          <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
          <div class="row card4">
          <div class="col dcenter Ocol1" id="">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}">
                @php                
                    $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                @endphp
                <span class="btn-over-image">
                  <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                </span>
              </div>
              <div class="flip-card-back">
            <img src="{{$prod_flag['key3']['2']}}" alt="">   
            @endif
            <div class="textoverimg1">
              <p>COS Record</p>
              <p><span id="cos3">0</span>M</p>
            </div>
                  </div>
                </div>
          </div>
            <div class="col">NA</div>
          </div>
          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
          <div class="row gx-0 flagimg">
            <div class="col flagwidth OfAd dcenter p-0">
              <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
          </div>
          <div class="col flagwidth OfIn dcenter">
            <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
          </div>
          </div>
          @endif
        </div>
      </div>
      <div class="col-1 Calsign">
        <img src="Media/Image/equal.svg" alt="">
      </div>
    </div>
  </div>


  <div class="col-2 align-items-center Total" style="width: fit-content;">
    <img src="Media/Image/totalbg.svg" alt="">
    <div class="totaltxt">
      <div>TOTAL</div>
      <div><span class="crtotal">16</span>M</div>
    </div>
  </div>
</div>  
</div>
</div>
<!-- </div> -->
<!-- </div> -->
<div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
<img class="recbtn" style="display: none;" src="Media/Image/RecCosBtn.svg" alt="">
<button id="comp1" class="btnstyle" type="button" onclick="calSign('cosrecord1','comp1','cosrecord','{{$product_flag_type->card_type}}','cos')" style="border: none;"><img src="Media/Image/Compute_cos.svg" alt="" width="50%"></button>
</div>
</div>
</div>
</div>
@else
Select Product first

  @endif

</div>
</div></div>
</div></div>
</div></div>
</div></div>
</div>
  
  <!-- Modal 2-->
  <div class="modal fade modal-xl" id="computesale1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mb-0 mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <h1 class="modal-title fs-5 stg1 stg2" id="">COMPUTE SALES</h1>
        </div>
        <div class="modal-body pt-0 pb-0">
          <div class="container">
          <div class="row">
            @if(isset($product_launch_val) && $product_launch_val->compute_sales > 0)
            <script>
              
              setTimeout(()=>{
                calSign('computesale1','comp2','salerecord','product_launch','sales','view')    
              },3000);
            </script>
            {{-- <h2>sa</h2> --}}
            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                          {{-- <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt=""> --}}
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
          
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        {{-- </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_1->card_blank}}" name="{{$prod_flag['key5']['0']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales1">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <!-- <div class="col">NA</div> -->
                      <div class="col">NA</div>
                      </div>
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth SfAd SfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                    </div>
                    <div class="col flagwidth SfIn SfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          {{-- <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}"> --}}
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        {{-- </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_2->card_blank}}"  name="{{$prod_flag['key5']['1']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth AfAd AfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                    </div>
                    <div class="col flagwidth AfIn AfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        {{-- <div class="flip-card-front"> --}}
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          {{-- <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}"> --}}
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        {{-- </div> --}}
                        <div class="flip-card-inner-back">
                      <img src="{{$pro_flag_b_3->card_blank}}" name="{{$prod_flag['key5']['2']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg flagimg2">
                      <div class="col flagwidth OfAd OfAd2 dcenter p-0">
                        <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                    </div>
                    <div class="col flagwidth OfIn OfIn2 dcenter">
                      <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
          
          
            <div class="col-2 align-items-center Total" style="width: fit-content; display:flex">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt" style="display:block">
                <div>TOTAL</div>
                <div><span class="crtotal">{{ $product_launch_val->compute_sales}}</span>M</div>
              </div>
            </div>
          </div>  
          </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
         

          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
           <button id="comp2" class="btnstyle" type="button" onclick="Foo('computesale1','salerecord',{{ $product_launch_val->card_type}})" style="border: none;">
            <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
         </div>
          </div>
          </div>
          </div>

            @elseif(isset($product_launch_val) && $product_launch_val->card_type == 'product_launch')
            {{-- <h2>sa</h2> --}}
            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                          <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt="">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
          
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['0']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales1">0</span>M</p>
          
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                      </div>
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth SfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                    </div>
                    <div class="col flagwidth SfIn dcenter">
                      <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['1']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth AfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                    </div>
                    <div class="col flagwidth AfIn dcenter">
                      <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['2']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>Sales Record</p>
                        <p><span id="sales3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth OfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                    </div>
                    <div class="col flagwidth OfIn dcenter">
                      <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
          
          
            <div class="col-2 align-items-center Total" style="width: fit-content;">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt">
                <div>TOTAL</div>
                <div><span class="crtotal">16</span>M</div>
              </div>
            </div>
          </div>  
          </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
         

          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt="">
           <button id="comp2" class="btnstyle" type="button" onclick="calSign('computesale1','comp2','salerecord','{{$product_flag_type->card_type}}','sales')" style="border: none;"><img src="Media/Image/computesales.svg" alt="" width="50%"></button>
         </div>
          </div>
          </div>
          </div>
          @else

            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="assets/Product Card/Product Cards/KHD.svg" alt="" name="KHD">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/KHD_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p>Sales</p>
                        <p><span id="sales1">0</span>M</p>
                      </div>
                            </div>
                          </div>                      
                    </div>
                      <div class="col">NA</div>
                      </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth SfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth SfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/EBT.svg" alt="" name="EBD">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/EBD_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p>Sales</p>
                        <p><span id="sales2">0</span>M</p>
                      </div>
                            </div>
                          </div>     
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth AfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth AfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/MIBOSO.svg" alt="" name="MIB">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/MIBOSO_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p>Sales</p>
                        <p><span id="sales3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                      
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth OfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth OfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col-2 align-items-center Total" style="width: fit-content;">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt">
                <div>TOTAL</div>
                <div><span class="crtotal">33</span> M</div>
              </div>
            </div>
          </div>  
        </div>
          </div>
          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
             <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt="">
            <button id="comp2" class="btnstyle" type="button" onclick="calSign('computesale1','comp2','salerecord')" style="border: none;"><img src="Media/Image/computesales.svg" alt="" width="50%"></button>
          </div>
        </div>
      </div>
    </div>
  
    @endif

  </div>
</div></div>
</div></div>
</div></div>
</div>


  <!--  Sale Record -->
  <div class="modal fade modal-xy" id="salerecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1 mt2">
        <img id="image2" class="img" src="Media/Image/recordSale.svg" alt="">
        <table class="">
    <thead>
      <tr>
        <th></th>
        <th><button type="button" class="quarter1">QUARTER 1</button></th>
        <th><button type="button" class="quarter1">QUARTER 2</button></th>
        <th><button type="button" class="quarter1">QUARTER 3</button></th>
        <th><button type="button" class="quarter1">QUARTER 4</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="quarter">SALES</button></td>
        <td><button type="button" class="btnamount"><span id="salesYear1">22</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">EVENT IMPACT</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
        <td><button type="button" class="btnamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales != ''){                
                $arr[] = $data->impact_value_sales;
                // print_r($arr);
              }
            }
          @endphp
          <span id="salesStrY1">
          @if(array_sum($arr) != 0)
          {{$sum = array_sum ($arr)}}M
          @else
          - 
          @endif
        </span>
        </button></td>
        <td><button type="button" class="btnamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q2 != ''){                
                $arr[] = $data->impact_value_sales_y1q2;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="salesStrY2">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
        <td><button type="button" class="btnamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q3 != ''){                
                $arr[] = $data->impact_value_sales_y1q3;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="salesStrY3">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
        <td><button type="button" class="btnamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q4 != ''){                
                $arr[] = $data->impact_value_sales_y1q4;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="salesStrY4">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">TARDE SPEND</button></td>
        <td><button type="button" class="btnamount"><span id="salestradeSpendY1">{{ (isset($product_launch_val->compute_trade) && $product_launch_val->compute_trade != '') ? $product_launch_val->compute_trade : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr> 
      <tr>
        <td><button type="button" class="quarter">TOTAL QUARTERLY SALES </button></td>
        <td><button type="button" class="btnamount"><span id="salesTotalY1">{{ (isset($product_launch_val->total_sales) && $product_launch_val->total_sales != '') ? $product_launch_val->total_sales : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
    </tbody>
  </table>   
  <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
    <input type="text" value="1" id="salestotals" style="display:none" >
   
    <button class="btnstyle table_button" id="sales_table_button" type="button"
    @if(isset($product_launch_val->total_sales) && $product_launch_val->total_sales != '' ) onclick="closemodal('#salerecord')"  @else onclick="slider_('salesTotalY1','sales')" @endif style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
   
    </div>    
</div>
</div>
</div>

  <!-- Modal 2-->
  <div class="modal fade modal-xl" id="computeTS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mb-0 mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <h1 class="modal-title fs-5 stg1 stg2" id="">COMPUTE TRADE SPEND</h1>
        </div>
        <div class="modal-body pt-0 pb-0">
          <div class="container">
          <div class="row">
        @if(isset($product_launch_val) && $product_launch_val->compute_trade > 0)
          <script>
            setTimeout(()=>{
              // alert('fsdf')
              calSign('computeTS','comp3','RTS','product_launch','ts','view')
            },3000)
        </script>
        <div class="col Store">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Scol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                      {{-- <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt=""> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                          $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
      
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_1->card_blank}}" name="{{$prod_flag['key5']['0']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts1">0</span>M</p>
      
                  </div>
                        </div>
                      </div>
                </div>
                  <!-- <div class="col">NA</div> -->
                  <div class="col">NA</div>
                  </div>
                  @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth SfAd SfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                </div>
                <div class="col flagwidth SfIn SfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Agent">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Acol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      {{-- <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}"> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_2->card_blank}}" name="{{$prod_flag['key5']['1']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts2">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth AfAd AfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                </div>
                <div class="col flagwidth AfIn AfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Online">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Ocol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      {{-- <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}"> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_3->card_blank}}"  name="{{$prod_flag['key5']['2']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts3">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth OfAd OfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                </div>
                <div class="col flagwidth OfIn OfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/equal.svg" alt="">
            </div>
          </div>
        </div>
      
      
        <div class="col-2 align-items-center Total" style="width: fit-content; display:flex">
          <img src="Media/Image/totalbg.svg" alt="">
          <div class="totaltxt" style="display:block">
            <div>TOTAL</div>
            <div><span class="crtotal">{{ $product_launch_val->compute_trade}}</span>M</div>
          </div>
        </div>
      </div>  
      </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->
     

      <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
       <button id="comp3" class="btnstyle" type="button" onclick="Foo('computeTS','RTS')" style="border: none;">
        <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
     </div>
      </div>
      </div>
      </div>

        
        @elseif(isset($product_launch_val) && $product_launch_val->card_type == 'product_launch')
        
        <div class="col Store">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Scol1" id="">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                      <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt="">
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                          $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
      
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    </div>
                    <div class="flip-card-back">
                  <img src="{{$prod_flag['key3']['0']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts1">0</span>M</p>
      
                  </div>
                        </div>
                      </div>
                </div>
                  <!-- <div class="col">NA</div> -->
                  <div class="col">NA</div>
                  </div>
                  @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg">
                  <div class="col flagwidth SfAd dcenter p-0">
                    <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                </div>
                <div class="col flagwidth SfIn dcenter">
                  <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Agent">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Acol1" id="">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}">
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    </div>
                    <div class="flip-card-back">
                  <img src="{{$prod_flag['key3']['1']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts2">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg">
                  <div class="col flagwidth AfAd dcenter p-0">
                    <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                </div>
                <div class="col flagwidth AfIn dcenter">
                  <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Online">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Ocol1" id="">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}">
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    </div>
                    <div class="flip-card-back">
                  <img src="{{$prod_flag['key3']['2']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>TRADE SPEND</p>
                    <p><span id="ts3">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg">
                  <div class="col flagwidth OfAd dcenter p-0">
                    <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                </div>
                <div class="col flagwidth OfIn dcenter">
                  <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/equal.svg" alt="">
            </div>
          </div>
        </div>
      
      
        <div class="col-2 align-items-center Total" style="width: fit-content;">
          <img src="Media/Image/totalbg.svg" alt="">
          <div class="totaltxt">
            <div>TOTAL</div>
            <div><span class="crtotal">16</span>M</div>
          </div>
        </div>
      </div>  
      </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->

      <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        <img class="recbtn" style="display: none;" src="Media/Image/RecordTS.svg" alt="">
       <button id="comp3" class="btnstyle" type="button" onclick="calSign('computeTS','comp3','RTS','{{$product_flag_type->card_type}}','ts')" style="border: none;"><img src="Media/Image/ComputeTS.svg" alt="" width="50%"></button>
     </div>
      </div>
      </div>
      </div>
        @else
            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="assets/Product Card/Product Cards/KHD.svg" alt="" name="KHD">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/KHD_bg.svg" alt="">     
                      <div class="textoverimg1">
                        <p class="blocktitle">TRADE SPEND</p>
                        <p><span id="ts1">0</span> M</p>
                      </div>
                            </div>
                          </div> 
                    </div>
                      <div class="col">NA</div>
                      </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth SfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth SfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/EBT.svg" alt="" name="EBD">
                        </div>
                        <div class="flip-card-back"> 
                      <img src="Media/card-imgBg/EBD_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p class="blocktitle">TRADE SPEND</p>
                        <p><span id="ts2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth AfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth AfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/MIBOSO.svg" alt="" name="MIB">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/MIBOSO_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p class="blocktitle">TRADE SPEND</p>
                        <p><span id="ts3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                      
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth OfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth OfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col-2 align-items-center Total" style="width: fit-content;">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt">
                <div>TOTAL</div>
                <div><span class="crtotal">5</span>M</div>
              </div>
            </div>
          </div>  
        </div>
          </div>
          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
             <img class="recbtn" style="display: none;" src="Media/Image/RecordTS.svg" alt="">
            <button id="comp3" class="btnstyle" type="button" onclick="calSign('computeTS','comp3','RTS')" style="border: none;"><img src="Media/Image/ComputeTS.svg" alt="" width="50%"></button>
          </div>
        </div>
      </div>
    </div>
  
    @endif


  <div class="modal fade modal-yy" id="RTS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1  mt3">
        <img id="image3" class="img" src="Media/Image/RTS.svg" alt="">
        <table class="">
    <thead>
      <tr>
        <th></th>
        <th><button type="button" class="tarde1">QUARTER 1</button></th>
        <th><button type="button" class="tarde1">QUARTER 2</button></th>
        <th><button type="button" class="tarde1">QUARTER 3</button></th>
        <th><button type="button" class="tarde1">QUARTER 4</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="tarde">SALES</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">EVENT IMPACT</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">STRATEGY IMPACT</button></td>
        <td><button type="button" class="tardeamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales != ''){                
                $arr[] = $data->impact_value_sales;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="TsalesStrY1">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
        <td><button type="button" class="tardeamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q2 != ''){                
                $arr[] = $data->impact_value_sales_y1q2;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="TsalesStrY2">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
        <td><button type="button" class="tardeamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q3 != ''){                
                $arr[] = $data->impact_value_sales_y1q3;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="TsalesStrY3">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
        <td><button type="button" class="tardeamount">
        @php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q4 != ''){                
                $arr[] = $data->impact_value_sales_y1q4;
                // print_r($arr);
              }
            }
          @endphp
          @if(array_sum($arr) != 0)
          <span id="TsalesStrY4">
          {{$sum = array_sum ($arr)}}
          </span>M
            @else
            - 
            @endif
        </button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">TARDE SPEND</button></td>
        <td><button type="button" class="tardeamount"><span id="tradeSpendY1"></span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">TOTAL</button></td>
        {{-- <td><button type="button" class="tardeamount"><span id="tradeStotalY1">{{ (isset($product_launch_val->compute_trade) && $product_launch_val->compute_trade != '') ? $product_launch_val->compute_trade : 0}}</span>M</button></td>  --}}
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>
      
      @if(isset($product_launch_val->customer_money) && $product_launch_val->customer_money != '')
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="tstotals" style="display:none" >
            <button class="btnstyle" type="button" data-bs-dismiss="modal" onclick="slider_('tradeStotalY1','empty')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
      </div>
      @else
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="tstotals" style="display:none" >
            <button class="btnstyle" type="button" data-bs-dismiss="modal" onclick="slider_('tradeStotalY1','accountrec')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
      </div>
      @endif
        
      </div>
    </div>
  </div>

  <!-- Modal 2-->
  <div class="modal fade modal-xl" id="computeDis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mb-0 mt-0">
      <div class="modal-content borderornage mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <h1 class="modal-title fs-5 stg1 stg2" id="">COMPUTE DISCOUNT</h1>
        </div>
        <div class="modal-body pt-0 pb-0">
          <div class="container">
          <div class="row">
            @if(isset($product_launch_val) && $product_launch_val->compute_discount > 0)
            <script>
              setTimeout(()=>{
                // alert('fsdf')
                calSign('computeDis','comp4','backdropa','product_launch','disc','view')
              },2000)
          </script>
        <div class="col Store">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Scol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                      {{-- <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt=""> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                          $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
      
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_1->card_blank}}" name="{{$prod_flag['key5']['0']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>DISCOUNT</p>
                    <p><span id="disc1">0</span>M</p>
      
                  </div>
                        </div>
                      </div>
                </div>
                  <!-- <div class="col">NA</div> -->
                  <div class="col">NA</div>
                  </div>
                  @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth SfAd SfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                </div>
                <div class="col flagwidth SfIn SfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Agent">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Acol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      {{-- <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}"> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_2->card_blank}}" name="{{$prod_flag['key5']['1']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>DISCOUNT</p>
                    <p><span id="disc2">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth AfAd AfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                </div>
                <div class="col flagwidth AfIn AfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/BluePlus.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col Online">
          <div class="row gx-0">
            <div class="col">
              <div class="card bg-transparent" style=" border: none;">
                <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                <div class="row card4">
                <div class="col dcenter Ocol1" id="">
                  <div class="flip-card-inner">
                    {{-- <div class="flip-card-front"> --}}
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                      {{-- <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}"> --}}
                      @php                
                          $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                      @endphp
                      <span class="btn-over-image">
                        <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                      </span>
                    {{-- </div> --}}
                    <div class="flip-card-inner-back">
                  <img src="{{$pro_flag_b_3->card_blank}}" alt="" name="{{$prod_flag['key5']['2']}}" alt="">   
                  @endif
                  <div class="textoverimg1">
                    <p>DISCOUNT</p>
                    <p><span id="disc3">0</span>M</p>
                  </div>
                        </div>
                      </div>
                </div>
                  <div class="col">NA</div>
                </div>
                @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                <div class="row gx-0 flagimg flagimg2">
                  <div class="col flagwidth OfAd OfAd2 dcenter p-0">
                    <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                </div>
                <div class="col flagwidth OfIn OfIn2 dcenter">
                  <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                </div>
                </div>
                @endif
              </div>
            </div>
            <div class="col-1 Calsign">
              <img src="Media/Image/equal.svg" alt="">
            </div>
          </div>
        </div>
      
      
        <div class="col-2 align-items-center Total" style="width: fit-content; display:flex">
          <img src="Media/Image/totalbg.svg" alt="">
          <div class="totaltxt" style="display:block">
            <div>TOTAL</div>
            <div><span class="crtotal">{{ $product_launch_val->compute_discount}}</span>M</div>
          </div>
        </div>
      </div>  
      </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->
     

      <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
       <button id="comp4" class="btnstyle" type="button" onclick="Foo('computeDis','backdropa')" style="border: none;">
        <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
     </div>
      </div>
      </div>
      </div>

        

            @elseif(isset($product_launch_val) && $product_launch_val->card_type == 'product_launch')
            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                                                  
                          <img src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" alt="">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first(); 
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();  
          
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['0']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>DISCOUNT</p>
                        <p><span id="disc1">0</span>M</p>
          
                      </div>
                            </div>
                          </div>
                    </div>
                      <!-- <div class="col">NA</div> -->
                      <div class="col">NA</div>
                      </div>
                      @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth SfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['0']}}" alt="" value="{{$prod_flag['key2']['0']}}" name="{{$prod_flag['key6']['0']}}">
                    </div>
                    <div class="col flagwidth SfIn dcenter">
                      <img src="{{$prod_flag['key1']['1']}}" alt="" value="{{$prod_flag['key2']['1']}}" name="{{$prod_flag['key6']['1']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          <img src="{{$prod_flag['key3']['1']}}" alt="" name="{{$prod_flag['key5']['1']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['1']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>DISCOUNT</p>
                        <p><span id="disc2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth AfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['2']}}" alt="" value="{{$prod_flag['key2']['2']}}" name="{{$prod_flag['key6']['2']}}">
                    </div>
                    <div class="col flagwidth AfIn dcenter">
                      <img src="{{$prod_flag['key1']['3']}}" alt="" value="{{$prod_flag['key2']['3']}}" name="{{$prod_flag['key6']['3']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])                        
                          <img src="{{$prod_flag['key3']['2']}}" alt="" name="{{$prod_flag['key5']['2']}}">
                          @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                        </div>
                        <div class="flip-card-back">
                      <img src="{{$prod_flag['key3']['2']}}" alt="">   
                      @endif
                      <div class="textoverimg1">
                        <p>DISCOUNT</p>
                        <p><span id="disc3">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    @if(isset($prod_flag['key3']['0']) && $prod_flag['key3']['0'])  
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth OfAd dcenter p-0">
                        <img src="{{$prod_flag['key1']['4']}}" alt="" value="{{$prod_flag['key2']['4']}}" name="{{$prod_flag['key6']['4']}}">
                    </div>
                    <div class="col flagwidth OfIn dcenter">
                      <img src="{{$prod_flag['key1']['5']}}" alt="" value="{{$prod_flag['key2']['5']}}" name="{{$prod_flag['key6']['5']}}">
                    </div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
          
          
            <div class="col-2 align-items-center Total" style="width: fit-content;">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt">
                <div>TOTAL</div>
                <div><span class="crtotal">16</span>M</div>
              </div>
            </div>
          </div>  
          </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
         
    
          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            <img class="recbtn" style="display: none;" src="Media/Image/RecDiscount.svg" alt="">
           <button id="comp4" class="btnstyle" type="button" onclick="calSign('computeDis','comp4','backdropa','{{$product_flag_type->card_type}}','disc')" style="border: none;"><img src="Media/Image/computeDis.svg" alt="" width="50%"></button>
         </div>
          </div>
          </div>
          </div>

            @else
            <div class="col Store">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Scol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="assets/Product Card/Product Cards/KHD.svg" alt="" name="KHD">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/KHD_bg.svg" alt="">  
                      <div class="textoverimg1">
                        <p class="blocktitle">DISCOUNT</p>
                        <p><span id="disc1">0</span>M</p>
                      </div>
                            </div>
                          </div>
                      
                    </div>
                      <div class="col">NA</div>
                      </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth SfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth SfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Agent">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Acol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/EBT.svg" alt="" name="EBD">
                        </div>
                        <div class="flip-card-back">  
                      <img src="Media/card-imgBg/EBD_bg.svg" alt="">    
                      <div class="textoverimg1">
                        <p class="blocktitle">DISCOUNT</p>
                        <p><span id="disc2">0</span>M</p>
                      </div>
                            </div>
                          </div>
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth AfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth AfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/BluePlus.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col Online">
              <div class="row gx-0">
                <div class="col">
                  <div class="card bg-transparent" style=" border: none;">
                    <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                    <div class="row card4">
                    <div class="col dcenter Ocol1" id="">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">                      
                          <img src="Images/Product-Cards/MIBOSO.svg" alt="" name="MIB">
                        </div>
                        <div class="flip-card-back">
                      <img src="Media/card-imgBg/MIBOSO_bg.svg" alt="">   
                      <div class="textoverimg1">
                        <p class="blocktitle">DISCOUNT</p>
                        <p><span id="disc3">0</span>M</p>
                      </div>
                            </div>
                          </div>                      
                    </div>
                      <div class="col">NA</div>
                    </div>
                    <div class="row gx-0 flagimg">
                      <div class="col flagwidth OfAd dcenter p-0">
                        <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                    </div>
                    <div class="col flagwidth OfIn dcenter">
                      <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="2">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 Calsign">
                  <img src="Media/Image/equal.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col-2 align-items-center Total" style="width: fit-content;">
              <img src="Media/Image/totalbg.svg" alt="">
              <div class="totaltxt">
                <div>TOTAL</div>
                <div><span class="crtotal">5</span>M</div>
              </div>
            </div>
          </div>  
        </div>
          </div>
          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
             <img class="recbtn" style="display: none;" src="Media/Image/RecDiscount.svg" alt="">
            <button id="comp4" class="btnstyle" type="button" onclick="calSign('computeDis','comp4','backdropa')" style="border: none;"><img src="Media/Image/computeDis.svg" alt="" width="50%"></button>
          </div>
        </div>
      </div>
    </div>
  
@endif

  <div class="modal fade modal-yy" id="RQNS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
      <div class="modal-content borderornage mt1  mt3">
        <img id="image4" class="img" src="Media/Image/RQNS.svg" alt="">
        <table class="mb-5">
    <thead>
      <tr>
        <th></th>
        <th><button type="button" class="tarde1">QUARTER 1</button></th>
        <th><button type="button" class="tarde1">QUARTER 2</button></th>
        <th><button type="button" class="tarde1">QUARTER 3</button></th>
        <th><button type="button" class="tarde1">QUARTER 4</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="tarde titlebox">TOTAL QUARTERLY SALES </button></td>
        <td><button type="button" class="tardeamount" id="quarterly_sales"></button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td class=""></td>
        <td class="d-flex justify-content-center"><img src="Media/Image/minusPurple.svg" alt=""></td>
        <td class=""></td>
        <td class=""></td>
        <td class=""></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde titlebox">QUARTERLY DISCOUNT</button></td>
        <td><button type="button" class="tardeamount" id="quarterly_discount"></button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
      <tr>
        <td class=""></td>
        <td class="equalsTo d-flex justify-content-center"> <img src="Media/Image/equal.svg" alt=""> </td>
        <td class=""></td>
        <td class=""></td>
        <td class=""></td>
      </tr> 
      <tr>
        <td><button type="button" class="tarde titlebox">QUARTERLY NET SALES</button></td>
        <td><button type="button" class="tardeamount" id="sales_n_dis"></button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>
      {{-- @if(isset($product_launch_val->car_total) && $product_launch_val->car_total != '') --}}
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="rqnsokBtn" style="display:none" >
          <button class="btnstyle car_total" type="button" data-bs-dismiss="modal"  
          @if(isset($product_launch_val->car_total) && $product_launch_val->car_total != '')  onclick="slider_('sales_n_dis','accr')"
          @else onclick="car_total('{{$product_launch_val->card_type}}')" 
          @endif 
          style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>
      {{-- @else --}}
      {{-- <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        <input type="text" value="1" id="rqnsokBtn" style="display:none" >            
            <button class="btnstyle car_total" type="button" data-bs-dismiss="modal" onclick="car_total('{{$product_launch_val->card_type}}')" 
              style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
      </div> --}}
      {{-- @endif --}}
      </div>
    </div>
  </div>

      <!-- Modal 4 -->
      <div class="modal fade backblur" id="paytoSuppliers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content nobg">
            <img src="Images/flip-card/NewImg/timetoPay.svg" alt="" srcset="">
            <div class="ttpaybtn">
              <button type="button" id="pay_res" class="btn" @if(isset($product_launch_val->total_cos) && $product_launch_val->total_cos == 0) onclick="closemodal('#paytoSuppliers')"  @else onclick="pay_res()"  @endif></button>
            </div>
            <div class="modal-body">
            </div>
          </div>
        </div>
      </div>

{{-- product modal starrt --}}

@foreach ($product as $data)
          @php
            $mul_img=json_decode($data->card_desc, true);
          @endphp
                @foreach ($mul_img as $key=>$value)
                  @php  
                  $val = (int)$key+1;
                  $pro_neg = (int)$data->card_id+(int)$val-1;
                  $nex_page = (int)$data->card_id+(int)$val;
                  $arr_count = count($mul_img);

                    // $img = json_decode($data->card_desc, true);
                  @endphp
              
              <div class='modal fade backblur productModal{{$data->card_id.$pro_neg}} productModal{{$val}}' id='productModal{{$data->card_id}}' tabindex='-1' aria-labelledby='productModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered'>
                <div class='modal-content nobg'>
                  {{-- @foreach ($img as $item) --}}
                  <img src='{{$value}}' alt='' srcset=''>
                  {{-- @endforeach --}}
                  
                @if($arr_count == (int)$key+1)
                  <div class='scbtn dend'>
                  <button type='button' class='btn' onclick='closemodal(`.productModal{{$data->card_id.$pro_neg}}`)'></button>
                  </div>
                  
                @else
                  <div class='nxtbtn dcenter'>
                  <button type='button' class='btn'  onclick='openNext(`.productModal{{$data->card_id.$nex_page}}`,`.productModal{{$val}}`)'></button>
                  </div>
                
                @endif       
                </div>
                </div>
                </div>


              @endforeach
        @endforeach

      {{-- product madal --}}
      <input value ='1' type="text" style="display:none" id="res_val">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/newscript.js')}}"></script>
  <script src="{{ asset('js/script.js')}}"></script>
  <script src="{{ asset('js/custom.js')}}"></script>
  <script type="text/javascript"></script>

  <script>
    function car_total(type){
      var quarterly_sales = parseInt(document.getElementById('quarterly_sales').innerHTML); 
      var quarterly_discount = parseInt(document.getElementById('quarterly_discount').innerHTML);
      var car_total = quarterly_sales - quarterly_discount;
      // console.log(quarterly_discount,quarterly_sales,car_total)
      var accountrec  = parseInt(document.getElementById('accountrec').innerHTML); 
      var custmoney = parseInt(document.getElementById('custmoney').innerHTML); 
      // console.log(quarterly_discount,quarterly_sales,car_total,custmoney,accountrec);
      $(".car_total").attr("onclick","slider_('sales_n_dis','accr')");
      $.ajax({
            type: "get",
            url: "{{url('car_total_val')}}",
            // url: "/car_total_val/",
           dataType:"Json",
           data: {car_total,type,accountrec,custmoney},
           
            success: function (response) {
              fillblink("compCosblink","compAccountblink");
                console.log(response);    
                document.getElementById("custmoney").innerHTML = response.car_total.customer_money;      
                document.getElementById("accountrec").innerHTML = response.car_total.acc_receivable;     
                $(".car_total").attr("onclick","slider_('sales_n_dis','accr')");    
                slidetest('move-right','containerCard');
            },
            error:function(error){
                console.log(error);
            }
        });

    }

    function transform1() {
      var a = document.getElementById('col-card1');
      a.style.transform = "translateX(60%)";
      setTimeout(function () {
        a.style.transform = "translateX(0%)";
        var b = document.getElementById('col-card2');
        b.style.cssText = " transform: translateX(0%);opacity:1";
      }, 100);
      document.getElementById('clickhere').style.display = "none";
    }

    function transform2() {
      var a = document.getElementById('col-card1').style.transform = "translateX(50%)";
      document.getElementById('col-card2').style.display = 'none';
    }

    function selectbtn(id) {
      var times = $("#eventymodal").val();
      var a = $('#Backdop2 input:radio:checked').length;
      if (a == 1) {
        $("#okbtn1").css('display', 'flex');
      }
    }

    function okbtn1() {
      var Radiobtn1 = document.querySelector('input[name="optn"]:checked');
      if (Radiobtn1 != null) {
        var a = (Radiobtn1.value);
        var div_id = (Radiobtn1.id);
        if (a == 'A') {
          $("#image1").attr('src','Media/Image/A-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)
          
          csat = {{$Events_cards_1['0']->csat }} ;
          bE = {{$Events_cards_1['0']->be }};
          esat = 0;
        }
        else if (a == 'B') {
          $("#image1").attr('src','Media/Image/B-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)
          
          csat = {{$Events_cards_1['1']->csat }};
          bE = {{$Events_cards_1['1']->be }};
          esat = {{$Events_cards_1['1']->esat }};
          
        }
        else if (a == 'C') {
          $("#image1").attr('src','Media/Image/C-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)
          
          csat = {{$Events_cards_1['2']->csat }};
          bE = {{$Events_cards_1['2']->be }};
          esat = {{$Events_cards_1['2']->esat }};
        }
        var ce=0;
        setTimeout(function () {
          matrixT(csat,bE,esat,ce,div_id)
        },1000)
      }
      transform2();
      $("#oknext").css('display', 'flex');
    }

    function selectOpt(a,image,div_id){
      // console.log(a,image,div_id)
      $.ajax({
            type: "get",
            // url: "/selectOpt/",
            url: "{{url('selectOpt')}}",
           dataType:"Json",
           data: {a,image,div_id},
           
            success: function (response) {
                // console.log(response);
                
                $("#pro_submit").attr('onclick','');                
            },
            error:function(error){
                console.log(error);
            }
        });
    }


    
    // // Matrix calculation
  var customer = parseInt(document.getElementById('customer_sta').innerText);
  var brand = parseInt(document.getElementById('brand').innerText);
  var employee = parseInt(document.getElementById('employee').innerText);
  var collection =parseInt(document.getElementById('collection').innerText);

  // console.log(customer,brand, employee,collection)
  var p = [customer,brand, employee,collection];
  var Mx = ["customer_sta","brand", "employee", "collection"];
  var matrx="";
  for (let i=0; i <Mx.length; i++){
  matrx = Mx[i];
  document.getElementById(matrx).innerHTML = p[i] ;
        console.log(matrx);
        console.log(p[i]);
      }

  function matrixT(cs,be,ee,ce,div_id){
    // console.log(cs,be,ee,ce)
    var x =[cs,be,ee,ce]
    for (let i=0; i <Mx.length; i++){
      matrx = Mx[i];
      var a = document.getElementById(matrx).innerHTML;
      var newval = parseInt(a) + parseInt(x[i]);
      var a = document.getElementById(matrx).innerHTML = newval;
      // console.log('New '+newval);
      }
      var customer = parseInt(document.getElementById('customer_sta').innerText);
      var brand = parseInt(document.getElementById('brand').innerText);
      var employee = parseInt(document.getElementById('employee').innerText);
      var collection =parseInt(document.getElementById('collection').innerText);
      // console.log(customer,brand, employee,collection,div_id)

      $.ajax({
                type: "get",
                url: "{{url('selectOpt_update')}}",
              dataType:"Json",
              data: {customer,brand, employee,collection,div_id,cs,be,ee,ce},
              
                success: function (response) {
                    // console.log(response+"ram ram");
                    var data = JSON.stringify(response);
                    // console.log(data);

                    var i = JSON.parse(data)
                    var cs = parseInt(response.event_selected.car_def_val_cs);
                    var be = parseInt(response.event_selected.car_def_val_be);
                    var ce = parseInt(response.event_selected.car_def_val_ce);
                    var ee = parseInt(response.event_selected.car_def_val_ee);
                                          
                    var add = cs + be + ce + ee;
                    // console.log(add)
                    // document.getElementById('eveImpYear1').innerHTML =add;
                    // document.getElementById('salesEimpY1').innerHTML =add;
                                  
                },
                error:function(error){
                    console.log(error);
                }
            });

        }


    function calSign(id,btn,open,type,record_type,view){
      // console.log(id,btn,open)
      if(view == 'view'){
      }
      else{
      $('#'+id +' .Calsign').css('display', 'flex');
      $('#'+id +' .Total').css('display', 'flex');
      var image = $('#'+id +' .recbtn').attr('src');
      $('#'+ btn +' img').attr('src', image);
      // img bg change //
      $('#'+ id +' .flip-card-inner').css('transform','rotateY(180deg)');
      $('#'+ id +' .flip-card-inner .flip-card-front').css('display','none');
      }
      // cal part1
      if(id == 'cosrecord1'){var loc = ["cos1","cos2", "cos3"];}
      if(id == 'computesale1'){var loc = ["sales1","sales2", "sales3"];}
      if(id == 'computeTS'){var loc = ["ts1","ts2","ts3"];}
      if(id == 'computeDis'){var loc = ["disc1","disc2","disc3"];}

      var card = ["Store","Agent","Online"];
      var card2 = ['SfAd','AfAd','OfAd'];
      var card3 = ['SfIn','AfIn','OfIn'];
      for (let i=0; i <card.length; i++){
        cardbox = card[i]; 
        cardbox2 = card2[i]; 
        dest = loc[i];
        cx = card3[i];

        caltable(id,cardbox,cardbox2,dest,cx,view);
          if(i == 0){var abc1 = document.getElementById(loc[i]).innerHTML;}
        else if(i == 1){var abc2 = document.getElementById(loc[i]).innerHTML;}
        else if(i == 2){var abc3 = document.getElementById(loc[i]).innerHTML;}
      }
      if(id == 'cosrecord1'){
        var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        $('#'+id +' .crtotal').html(total);
      }
      if(id == 'computesale1'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        $('#'+id +' .crtotal').html(total);
      }
      if(id == 'computeTS'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        $('#'+id +' .crtotal').html(total);
      }
      if(id == 'computeDis'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        $('#'+id +' .crtotal').html(total);
      }
      // cal part end

      setTimeout(function () {
        $('#'+id +' .textoverimg1').css('display', 'block');
        $('#'+id +' .totaltxt').css('display', 'block');
      },500)
      $('#'+id +' #'+btn).attr('onclick','Foo('+("'"+id+"',"+"'"+open+"',"+"'"+type+"'")+')');

      var flagclass = ["flagimg","SfAd", "AfAd", "OfAd", "SfIn", "AfIn", "OfIn"];
      var ad="";
      for (let i=0; i <flagclass.length; i++){
        ad = flagclass[i];
      $('#'+id +' .'+ad).addClass(ad+"2");;
      }
   
      $.ajax({            
            type: "get",
            url: "{{url('update_product_flag')}}",
           dataType:"Json",
           data: {total,type,record_type},           
            success: function (response) {
                // console.log(response);                     
              },
            error:function(error){
                console.log(error); }
          });  

    }

    function Foo(id,open,type){
      var A = '#'+id;
      var B = '#'+open;
      openNext(B,A);
      var abc = $('#'+id +' .crtotal').html();
      if(B == '#cosrecord'){ document.getElementById('cosYear1').innerHTML = abc;cosTableCal(type)}
      if(B == '#salerecord'){ document.getElementById('salesYear1').innerHTML = abc;saleTableCal(type) }
      if(B == '#RTS'){ document.getElementById('tradeSpendY1').innerHTML = abc;
        document.getElementById('salestradeSpendY1').innerHTML = abc; tradespendTableCal(); 
        fillblink("compsalesblink","compTsblink");
         }
      if(B == '#backdropa'){ document.getElementById('disY1').innerHTML = abc; recDisTableCal() }

    }

function cosTableCal(type){
  var abc_strategy = parseInt(document.getElementById('stgImpYear1').innerHTML);
  if(Number.isInteger(abc_strategy)){
    abc_strategy = parseInt(document.getElementById('stgImpYear1').innerHTML);
  }
  else{
    abc_strategy = 0;
  }
  var costotal = parseInt(document.getElementById('cosYear1').innerHTML) + 
  abc_strategy;
  document.getElementById('costotalYear1').innerHTML = costotal;

  var costotalYear1 = document.getElementById('costotalYear1').innerText;  
      $.ajax({            
        type: "get",
        url: "{{url('costotalYear1')}}",
       dataType:"Json",
       data: {costotalYear1,type},           
        success: function (response) {
          fillblink("cashbtnblink","cosblink");
            console.log(response);                                              
          },
        error:function(error){
            console.log(error);
        }
      });
}
function saleTableCal(type){
  var xyz_strategy = parseInt(document.getElementById('salesStrY1').innerHTML);
  if(Number.isInteger(xyz_strategy)){
    xyz_strategy = parseInt(document.getElementById('salesStrY1').innerHTML);
  }
  else{
    xyz_strategy = 0;
  }
  var saletotal = parseInt(document.getElementById('salesYear1').innerHTML) + xyz_strategy + parseInt(document.getElementById('salestradeSpendY1').innerHTML);
  document.getElementById('salesTotalY1').innerHTML = saletotal;
  var salesTotalY1 = document.getElementById('salesTotalY1').innerText;

      $.ajax({            
        type: "get",
        url: "{{url('salesTotalY1')}}",
       dataType:"Json",
       data: {salesTotalY1,type},           
        success: function (response) {
          fillblink("compDisblink","compsalesblink");
            console.log(response);                                              
          },
        error:function(error){
            console.log(error);
        }
      });
  document.getElementById('totalq1sales').innerHTML = saletotal;
}
function tradespendTableCal(){
  // document.getElementById('tradeStotalY1').innerHTML =  parseInt(document.getElementById('tradeSpendY1').innerHTML);
  console.log('tradespendTableCal');
}

function recDisTableCal(){
  fillblink("compAccountblink","compDisblink");
  var discount = parseInt(document.getElementById('disY1').innerHTML);
  var totaldisY1 = document.getElementById('disTotalY1').innerHTML = discount;
  // document.getElementById('totalq1discount').innerHTML = totaldisY1;
  console.log('recDisTableCal');
}

function recquatNetsales(){
  // totalq1sales totalq1discount q1netSales
  OpenBtn('RQNS');
  document.getElementById('q1netSales').innerHTML =  parseInt(document.getElementById('totalq1sales').innerHTML) - parseInt(document.getElementById('totalq1discount').innerHTML);
  document.getElementById('').setAttribute( "onClick", "OpenBtn('RQNS');" );
}

function cashcon(){
  var percentage = parseInt(document.getElementById('cashcon').innerHTML);
  var cashreceivable = parseInt(document.getElementById('ReceivableAmt').innerHTML);
  // console.log('this is cash '+cashconvert)
  var cash_element = document.getElementById('Cashconversion');
  cash_element.innerHTML = ((cashreceivable/100)*percentage) +'M';
  cash_element.classList.add("convertcash");
  document.getElementById('cashclickhere').innerHTML = "";
  $('#Cashconversion').attr('onclick','');

  $('#mycashconvert').css("display", "flex");
  $('.cash-text').css("width", "6rem");
  
  var cash = (cashreceivable/100)*percentage;
  var round = 'q1';

   $.ajax({            
            type: "get",
            url: "{{url('add_wallet_coin')}}",
           dataType:"Json",
           data: {cash,percentage,cashreceivable,round},           
            success: function (response) {
                // console.log(response);
                document.getElementById('cash1').innerHTML= parseInt(response.game_flow.total_coin);
                document.getElementById('cash').innerHTML= parseInt(response.game_flow.total_coin);
                document.getElementById('accountrec').innerHTML= parseInt(response.game_flow.acc_receivable);
                fillblink("compTsblink","cashbtnblink");
              },
            error:function(error){
                console.log(error);
            }
          });  
      }

    function OpenBtn(open){
      $("#"+open).modal("show");
        fetchdata();
      }

      function fetchdata()
      {
        var salestotalYear1 = parseInt(document.getElementById('salesTotalY1').innerHTML); 
     var disTotalY1 = parseInt(document.getElementById('disTotalY1').innerHTML); 
     var total_amt = salestotalYear1 - disTotalY1
      document.getElementById('quarterly_sales').innerHTML = salestotalYear1+"M"; 
      document.getElementById('quarterly_discount').innerHTML = disTotalY1+"M" ; 
      document.getElementById('sales_n_dis').innerHTML = total_amt+"M"; 
      }


function pay_res(){
  var i = document.getElementById('accountpay').innerHTML; 
  var j = 0; 
  var k = parseInt(i);
  document.getElementById('cos').innerHTML = k; 
  $('#paytoSuppliers').modal('hide');
  document.getElementById('accountpay').innerHTML = j;
  var cashamt = document.getElementById('cash1').innerHTML; 
  var ttl = cashamt - k ;

  $.ajax({            
        type: "get",
        url: "{{url('pay_res')}}",
       dataType:"Json",
       data: {"acc_pay":i,cashamt,ttl},           
        success: function (response) {
          fillblink("parResblink","compCosblink");
            console.log(response);
            document.getElementById('cash').innerHTML = ttl ; 
            document.getElementById('cash1').innerHTML = ttl ; 
            $('#parresources').attr("onclick", "");
            slidetest('move-right','bottomcash');
            slidetest('move-right','containerCard');   
            $("#pay_res").attr('onclick','closemodal("#paytoSuppliers")');                  
          },
        error:function(error){
            console.log(error);
        }
      });
  }

document.getElementById("custmoney").innerHTML = {{ (isset($product_launch_val->customer_money) ? $product_launch_val->customer_money : 290) }};


function roundfinish(){
  window.open(window.location.href='QuarterY1Q2');
}
 </script>


@if(isset($event_card_selected)) 
@else
<script>
$( document ).ready(function() {
    console.log( "ready!");
    startbtnblink();
}); 
</script>
@endif

@if(isset($product_launch_val) && $product_launch_val->resources != '')
 <script>   $("#payresources").attr('onclick','');    </script>
@else
<script>
function payresources(){
  var res = document.getElementById('res_val').value;
  if(res == 1){
  var deduct =  document.getElementById('cash1').innerHTML ; 
  var amt = deduct  - 10;
  $("#payresources").attr('onclick','');                

  $.ajax({            
        type: "get",
        url: "{{url('payresources')}}",
       dataType:"Json",
       data: {"resouce":10},           
        success: function (response) {
          fillblink("finish_circle","parResblink");
            console.log(response);
            document.getElementById('cash1').innerHTML = amt; 
            document.getElementById('cash').innerHTML = amt ; 
            document.getElementById('resources').innerHTML = 10 ; 
            $('#res_val').val(2);
            slidetest('move-right','bottomcash');                              
          },
        error:function(error){
            console.log(error);
        }
      });
  }
}

</script>
@endif

</body>
</html>