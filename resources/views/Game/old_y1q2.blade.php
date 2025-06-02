<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game-Bot Year 1 Quater 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custome.css')}}">
  <link rel="stylesheet" href="{{ asset('css/buttoncss.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Tomorrow:ital,wght@0,600;1,400&amp;display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>

  {{-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> --}}
<style>
  svg{height:100%; width:100%}
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
    margin-bottom: -1.5rem;
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
}
.textoverimg1 p{
  color: #fff;
  margin-bottom: 0;  
}

#computeDis .textoverimg1, #cosrecord1 .textoverimg1{margin-top: 1.8rem; margin-left: 1.7rem;}
#computeDis .textoverimg1 p, #cosrecord1 .textoverimg1 p{ font-size: 14px;}
#computeTS .textoverimg1 .blocktitle{ font-size: 16px; line-height: 1.2;}

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
    padding: 0px 60px 20px 60px ;
  }
    #image2{
    margin-left: auto;
    margin-right: auto;
    width: 32%;
    margin-bottom: 43px;
    margin-top: 22px;
    }

    .mt3{
      padding: 0px 20px 10px 20px;
    }
    .modal-yy{
    --bs-modal-width: 600px;
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
  margin-bottom: 2rem;
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
  body{overflow:hidden;}
/* end slider */

</style></head>


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
          <div id="imgset1" class="row d-flex mb-4 mb-ads">
            <div id="col-card1" class="col-md-6 col-card1">
              <img id="image1" class="img" src="@if(isset($event_card_selected)) {{$event_card_selected->card_image}}  @else Media/Image/eventQ2/eventdisQ2.svg @endif" alt="">
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
                        <img src="Media/Image/eventQ2/Q2optnA.svg" alt="">
                      </div>
                    </label>
                  </div>
                  <div class="col-12 mid">
                    <label class="stock-img">
                      <input type="radio" name="optn" value="B" id="event_card_2" onclick="selectbtn()">
                      <div class="stock1">
                        <img src="Media/Image/eventQ2/Q2optnB.svg" alt="">
                      </div>
                    </label>
                  </div>
                  <div class="col-12 botm">
                    <label class="stock-img">
                      <input type="radio" name="optn" value="C" id="event_card_3" onclick="selectbtn()">
                      <div class="stock1">
                        <img src="Media/Image/eventQ2/Q2optnC.svg" alt="">
                      </div>
                    </label>
                  </div> --}}

                  @foreach($event_card_q2 as $data)
                  <div class="col-12 @if($data->card_invest == 'A') top @elseif($data->card_invest == 'B') mid @elseif($data->card_invest == 'C') botm @endif">
                    <label class="stock-img">
                      @if($data->card_invest == 'A') 
                      <input type="hidden" id="eventymodal" value="1">
                      @endif
                      <input type="radio" name="optn" value="{{$data->card_invest}}"
                       @if(isset($event_card_selected) && $event_card_selected->card_name == $data->card_name) checked default  @else
                        @if(isset($event_card_selected) )  @else onclick="selectbtn()" @endif @endif id="event_card_{{$data->card_id}}_Y1Q2"  >
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
        <div  @if(isset($event_card_selected)) @else id=" oknext " @endif  class="modal-footer noborder dcenter mt-2 footerbtn">
          <button class="btnstyle" type="button" onclick="openNext('#Matrixbox','#Backdop2')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>
      </div>
    </div>
  </div>


  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Martix">
    Matrix
  </button> -->
  <!-- Modal 2-->
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

  
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Backdop3">
    Cash Conversion
  </button> -->
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
                    <div class="col-12"><p>Receivable</p></div>
                    <div class="col-12"><p><span id="ReceivableAmt">{{ (isset($product_launch_val->acc_receivable) && $product_launch_val->acc_receivable != '') ? $product_launch_val->acc_receivable : 0}}</span>M</p></div>
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
                    <div class="col-12"><p><span id="cashcon">90</span>%</p></div>
                   </div>
                </div>
              </div>
            <div class="col-12">
              <img class="cashgr1" src="Media/Image/Cashgr1.svg" alt="">
            </div>

            @if(isset($amt_deduct) && $amt_deduct != '' && isset($amt_deduct->card_type)  && $amt_deduct->card_type == 'add_coin'))
            <div class="col-12 mt-1">
                <div class="row gx-0 text3">
                  <div class="col-md-3"><img src="assets/icons/dollar-coin.png" alt=""></div>
                    <div class="col-md-9">
                      <p id="Cashconversion" style="cursor: pointer; user-select: none;" >{{$amt_deduct->invest_amount}}</p>
                    </div>
                 </div>
                <img class="cashgbg" src="Media/Image/cashGreenbg.svg" alt="">
              </div>
              {{-- <p id="cashclickhere" style="font-weight: 900; margin-bottom: 0.5rem;">Click here</p> --}}
            </div>
            @else
            <div class="col-12 mt-1">
              <div class="row gx-0 text3">
                <div class="col-md-3"><img src="assets/icons/dollar-coin.png" alt=""></div>
                  <div class="col-md-9">
                    <p id="Cashconversion" style="cursor: pointer; user-select: none;" onclick="cashcon()">CASH</p>
                  </div>
               </div>
              <img class="cashgbg" src="Media/Image/cashGreenbg.svg" alt="">
            </div>
            <p id="cashclickhere" style="font-weight: 900; margin-bottom: 0.5rem;">Click here</p>
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
        <td><button type="button" class="tardeamount"><span id="disY1">{{ (isset($product_launch_val->compute_discount) && $product_launch_val->compute_discount != '') ? $product_launch_val->compute_discount : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount"><span id="disY1Q2">{{ (isset($product_launch_val_2->compute_discount) && $product_launch_val_2->compute_discount != '') ? $product_launch_val_2->compute_discount : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">TOTAL</button></td>
        <td><button type="button" class="tardeamount"><span id="disTotalY1">{{ (isset($product_launch_val->compute_discount) && $product_launch_val->compute_discount != '') ? $product_launch_val->compute_discount : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount"><span id="disTotalY1Q2">{{ (isset($product_launch_val_2->compute_discount) && $product_launch_val_2->compute_discount != '') ? $product_launch_val_2->compute_discount : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>
      
       
        <div id="oknext" class="modal-footer noborder dcenter mt-2 footerbtn">
          <button class="btnstyle" type="button" onclick="" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="distotals" style="display:none" >
              <button class="btnstyle" type="button" data-bs-dismiss="modal" onclick="slider_('disTotalY1Q2','discount')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
            </div>
      </div>
    </div>
  </div>

  <!-- Record Cos -->
  {{-- {{print_r($strategy_selected['0']->impact_value_cos);}} --}}
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
        <td><button type="button" class="btnamount"><span id="cosYear1">{{(isset($product_launch_val) && $product_launch_val->pf_cal) ? $product_launch_val->pf_cal : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount"><span id="cosYear1Q2">{{(isset($product_launch_val_2) && $product_launch_val_2->pf_cal) ? $product_launch_val_2->pf_cal : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">EVENT IMPACT</button></td>
        <td><button type="button" class="btnamount">
            @php 
          $plus = '+';
            if(isset( $matrix_all->car_def_val_cs) && (int) $matrix_all->car_def_val_cs >= 0){ $one =  $plus.$matrix_all->car_def_val_cs; } 
            if(isset( $matrix_all->car_def_val_be) && (int) $matrix_all->car_def_val_be >= 0){ $two =  $plus.$matrix_all->car_def_val_be; }  
            if(isset( $matrix_all->car_def_val_ee) && (int) $matrix_all->car_def_val_ee >= 0){ $three = $plus.$matrix_all->car_def_val_ee; }  
          @endphp   

        @if(isset($matrix_all->car_def_val_cs))
          {{(isset($one) &&  $one != '') ? $one : $matrix_all->car_def_val_cs}}
          {{(isset($two) &&  $two != '') ? $two : $matrix_all->car_def_val_be}}
          {{(isset($three) &&  $three != '') ? $three : $matrix_all->car_def_val_ee}}=          
        @endif
          <span id="eveImpYear1">
            @if(isset($matrix_all->matrix_value))
            {{ $total = (int) $matrix_all->car_def_val_cs + (int) $matrix_all->car_def_val_be + (int) $matrix_all->car_def_val_ee }}
            @else
            0
            @endif
          </span>M</button></td>

        <td><button type="button" class="btnamount">
          @php 
          $plus = '+';
            if(isset( $matrix_all_2->car_def_val_cs) && (int) $matrix_all_2->car_def_val_cs >= 0){ $one_1 =  $plus.$matrix_all_2->car_def_val_cs; } 
            if(isset( $matrix_all_2->car_def_val_be) && (int) $matrix_all_2->car_def_val_be >= 0){ $two_2 =  $plus.$matrix_all_2->car_def_val_be; }  
            if(isset( $matrix_all_2->car_def_val_ee) && (int) $matrix_all_2->car_def_val_ee >= 0){ $three_3 = $plus.$matrix_all_2->car_def_val_ee; }
            
          @endphp   

        @if(isset($matrix_all_2->car_def_val_cs))
          {{(isset($one_1) &&  $one_1 != '') ? $one_1 : $matrix_all_2->car_def_val_cs}}
          {{(isset($two_2) &&  $two_2 != '') ? $two_2 : $matrix_all_2->car_def_val_be}}
          {{(isset($three_3) &&  $three_3 != '') ? $three_3 : $matrix_all_2->car_def_val_ee}}=          
        @endif
          <span id="eveImpYear2">
            @if(isset($matrix_all_2->matrix_value))
            {{ $total = (int) $matrix_all_2->car_def_val_cs + (int) $matrix_all_2->car_def_val_be + (int) $matrix_all_2->car_def_val_ee }}
            @else
            0
            @endif
          </span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
        <td><button type="button" class="btnamount"><span id="stgImpYear1">
  
         
        {{-- @foreach($strategy_selected as $data)
          
        @if(isset($data) && $data->impact_value_cos == null)
        
        @elseif(isset($data) && $data->impact_value_cos != '')
          {{$data->impact_value_cos}} 
        
        @endif
      @endforeach  --}}

      @php            
      $cos_value_1 = array();
      foreach($strategy_selected as $data)       {   
          if(isset($data) && $data->impact_value_cos == null) {
            $cos_value_1[] = 0;
          }           
          elseif(isset($data) && $data->impact_value_cos != ''){
          $cos_value_1[] = (int) $data->impact_value_cos;
        }
      }
    @endphp
      {{array_sum($cos_value_1);}}

        </span>M</button></td>

        <td><button type="button" class="btnamount"><span id="stgImpYear2">
      
        {{-- @foreach($strategy_selected as $data)
          
          @if(isset($data) && $data->impact_value_cos_y1q2 == null)
          
          @elseif(isset($data) && $data->impact_value_cos_y1q2 != '')
            {{$data->impact_value_cos_y1q2}} 
          
          @endif
        @endforeach  --}}

        @php            
        $cos_value_2 = array();
        foreach($strategy_selected as $data)       {   
            if(isset($data) && $data->impact_value_cos_y1q2 == null) {
              $cos_value_2[] = 0;
            }           
            elseif(isset($data) && $data->impact_value_cos_y1q2 != ''){
            $cos_value_2[] = (int) $data->impact_value_cos_y1q2;
          }
        }
      @endphp
        {{array_sum($cos_value_2);}}

        </span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">TOTAL</button></td>
        <td><button type="button" class="btnamount"><span id="costotalYear1">0</span>M</button></td>
        <td><button type="button" class="btnamount"><span id="costotalYear1Q2">{{ (isset($product_launch_val_2->total_cos) && $product_launch_val_2->total_cos != '') ? $product_launch_val_2->total_cos : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
    </tbody>
  </table>
     
</div>
</div>
<div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
<input type="text" value="1" id="costotals" style="display:none" >
  <button class="btnstyle"  type="button" onclick="slider_('costotalYear1Q2','cos')"  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
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
          var my_var = @php echo json_encode($product_launch_val_2->final_cos_val); @endphp;
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
          document.getElementById(output).innerHTML = parseInt(val1) + parseInt(val2);
          $('#salestotals').val(2);
          $('#salerecord').modal('hide');
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
            url: "/sub_customer_money/",
           dataType:"Json",
           data: {"trade_spend":val1,"acc_recei":val2,"customer_money":val3,"type":"product_launch_2"},
           
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
          var val1 = parseInt(document.getElementById(input).innerHTML);
          var val2 = parseInt(document.getElementById('accountrec').innerHTML);
          var val3 = parseInt(document.getElementById('custmoney').innerHTML);
          document.getElementById('accountrec').innerHTML = val1 + val2;
          slidetest('move-right','containerCard');
          // $('.customermoney').css('display','block')
          document.getElementById('custmoney').innerHTML = val3 - val1;
          $('#rqnsokBtn').val(2);
          $('#RQNS').modal('hide');
        }     
        else  $('#RQNS').modal('hide');
    }



}

</script>
  
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cosrecord1">
    Cos Record
  </button> -->
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
            
            @if(isset($product_launch_val_2->pf_cal) && $product_launch_val_2->pf_cal > 0)
            {{-- <h2>yv</h2> --}}
            <script>
              $(document).ready(function() {
                // alert('dsf')
                // setTimeout(()=>{
                  calSign('cosrecord1','comp1','cosrecord','product_launch_2','cos','view')   
                // },2000);
              });

                
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
                <div><span class="crtotal">{{ $product_launch_val_2->pf_cal}}</span>M</div>
              </div>
            </div>
          </div>  
        </div>
          </div>
        <!-- </div> -->
      <!-- </div> -->
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecCosBtn.svg" alt=""> --}}
          <button id="comp1" class="btnstyle" type="button" onclick="Foo('cosrecord1','cosrecord','{{ $product_launch_val_2->card_type}}')" style="border: none;"><img src="Media/Image/RecCosBtn.svg" alt="" width="50%"></button>
        </div>
        </div>
      </div>
    </div>
  @elseif(isset($product_launch_val_2) && $product_launch_val_2->card_type == 'product_launch_2')
  {{-- <h2>santosh round3</h2> --}}
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
                    $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();  

                @endphp
                <span class="btn-over-image">
                  <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                </span>
              </div>
              <div class="flip-card-back">
            <img src="{{$prod_flag['key3']['0']}}" alt="">   
            @endif
            <div class="textoverimg1">
              <p>COS Record</p>
              <p><span id="cos1">0</span>M</p>

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
            @if(isset($product_launch_val_2) && $product_launch_val_2->compute_sales > 0)
            <script>
              $(document).ready(function() {
              // setTimeout(()=>{
                calSign('computesale1','comp2','salerecord','product_launch_2','sales','view')    
              // },3000);
              });
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
                <div><span class="crtotal">{{ $product_launch_val_2->compute_sales}}</span>M</div>
              </div>
            </div>
          </div>  
          </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
         

          <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
           <button id="comp2" class="btnstyle" type="button" onclick="Foo('computesale1','salerecord','{{ $product_launch_val_2->card_type}}')" style="border: none;">
            <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
         </div>
          </div>
          </div>
          </div>

            @elseif(isset($product_launch_val_2) && $product_launch_val_2->card_type == 'product_launch_2')
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
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();  
          
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
        <td><button type="button" class="btnamount"><span id="salesYear1">{{(isset($product_launch_val) && $product_launch_val->compute_sales) ? $product_launch_val->compute_sales : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount"><span id="salesYear2">{{(isset($product_launch_val_2) && $product_launch_val_2->compute_sales) ? $product_launch_val_2->compute_sales : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">EVENT IMPACT</button></td>
        <td><button type="button" class="btnamount">
          
          @if(isset($matrix_all->car_def_val_cs))
          {{(isset($one) &&  $one != '') ? $one : $matrix_all->car_def_val_cs}}
          {{(isset($two) &&  $two != '') ? $two : $matrix_all->car_def_val_be}}
          {{(isset($three) &&  $three != '') ? $three : $matrix_all->car_def_val_ee}}=          
        @endif
          <span id="salesEimpY1">
            @if(isset($matrix_all->matrix_value))
            {{ $salesEimpY = (int) $matrix_all->car_def_val_cs + (int) $matrix_all->car_def_val_be + (int) $matrix_all->car_def_val_ee }}
            @else
            0
            @endif
          
          </span>M</button>
        </td>

        <td><button type="button" class="btnamount">
          @if(isset($matrix_all_2->car_def_val_cs))
          {{(isset($one_1) &&  $one_1 != '') ? $one_1 : $matrix_all_2->car_def_val_cs}}
          {{(isset($two_2) &&  $two_2 != '') ? $two_2 : $matrix_all_2->car_def_val_be}}
          {{(isset($three_3) &&  $three_3 != '') ? $three_3 : $matrix_all_2->car_def_val_ee}} =          
          @endif
          <span id="salesEimpY2">
            @if(isset($matrix_all_2->matrix_value))
            {{ $salesEimpY = (int) $matrix_all_2->car_def_val_cs + (int) $matrix_all_2->car_def_val_be + (int) $matrix_all_2->car_def_val_ee }}
            @else
            0
            @endif
          
          </span>M</button>
        </td>
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
          {{-- {{print_r($arr);}} --}}
          <span id="salesStrY1">
          {{$sum = array_sum ($arr) }}
             
        </span>M</button>
      </td>

        <td><button type="button" class="btnamount">@php
          $arr =array();
            foreach($strategy_selected as $data){
              if(isset($data) && $data->impact_value_sales_y1q2 != ''){                
                $arr[] = $data->impact_value_sales_y1q2;
                // print_r($arr);
              }
            }
          @endphp
          {{-- {{print_r($arr);}} --}}
          <span id="salesStrY2">
          {{$sum = array_sum ($arr) }}
             
        </span>M</button>
      </td>

        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
      <tr>
        <td><button type="button" class="quarter">TOTAL QUARTERLY SALES </button></td>
        <td><button type="button" class="btnamount"><span id="salesTotalY1">0</span>M</button></td>
        <td><button type="button" class="btnamount"><span id="salesTotalY1Q2">{{ (isset($product_launch_val_2->total_sales) && $product_launch_val_2->total_sales != '') ? $product_launch_val_2->total_sales : 0}}</span>M</button></td>
        <td><button type="button" class="btnamount">-</button></td>
        <td><button type="button" class="btnamount">-</button></td>
      </tr>
    </tbody>
  </table>   
</div>
</div>
<div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
  <input type="text" value="1" id="salestotals" style="display:none" >
  <button class="btnstyle" type="button" onclick="slider_('salesTotalY1Q2','sales')"  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
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
        @if(isset($product_launch_val_2) && $product_launch_val_2->compute_trade > 0)
          <script>
            $(document).ready(function() {
            // setTimeout(()=>{
              // alert('fsdf')
              calSign('computeTS','comp3','RTS','product_launch_2','ts','view')
            // },3000)
            });
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
            <div><span class="crtotal">{{ $product_launch_val_2->compute_trade}}</span>M</div>
          </div>
        </div>
      </div>  
      </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->
     

      <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
       <button id="comp3" class="btnstyle" type="button" onclick="Foo('computeTS','RTS','{{ $product_launch_val_2->card_type}}')" style="border: none;">
        <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
     </div>
      </div>
      </div>
      </div>

        
        @elseif(isset($product_launch_val_2) && $product_launch_val_2->card_type == 'product_launch_2')
        
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
                          $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();  
      
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
        <td><button type="button" class="tarde">TARDE SPEND</button></td>
        <td><button type="button" class="tardeamount"><span id="tradeSpendY1">{{(isset($product_launch_val) && $product_launch_val->compute_trade) ? $product_launch_val->compute_trade : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount"><span id="tradeSpendY1Q2"></span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>  
      <tr>
        <td><button type="button" class="tarde">TOTAL</button></td>
        <td><button type="button" class="tardeamount"><span id="tradeStotalY1">{{(isset($product_launch_val) && $product_launch_val->compute_trade) ? $product_launch_val->compute_trade : 0}}</span>M</button></td>
        <td><button type="button" class="tardeamount"><span id="tradeStotalY1Q2">0</span>M</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>
      
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
  <input type="text" value="1" id="tstotals" style="display:none" >
              <button class="btnstyle" type="button" data-bs-dismiss="modal" onclick="slider_('tradeStotalY1','accountrec')" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
            </div>
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
            @if(isset($product_launch_val_2) && $product_launch_val_2->compute_discount > 0)
            <script>
              $(document).ready(function() {
              // setTimeout(()=>{
                // alert('fsdf')
                calSign('computeDis','comp4','backdropa','product_launch_2','disc','view')
                // Foo('computeDis','backdropa','product_launch_2')

              // },3000)
              });
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
            <div><span class="crtotal">{{ $product_launch_val_2->compute_discount}}</span>M</div>
          </div>
        </div>
      </div>  
      </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->
     

      <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        {{-- <img class="recbtn" style="display: none;" src="Media/Image/RecSalebtn.svg" alt=""> --}}
       <button id="comp4" class="btnstyle" type="button" onclick="Foo('computeDis','backdropa','{{ $product_launch_val_2->card_type}}')" style="border: none;">
        <img src="Media/Image/RecSalebtn.svg" alt="" width="50%"></button>
     </div>
      </div>
      </div>
      </div>

        

            @elseif(isset($product_launch_val_2) && $product_launch_val_2->card_type == 'product_launch_2')
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
                              $product_flag_type = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();  
          
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
        <td><button type="button" class="tardeamount" id="quarterly_sales">{{(isset($product_launch_val->total_sales) && $product_launch_val->total_sales != '') ? $product_launch_val->total_sales : 'something went wrong'}} M</button></td>
        <td><button type="button" class="tardeamount" id="quarterly_sales_Y1Q2">-</button></td>
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
        <td><button type="button" class="tardeamount" id="quarterly_discount">{{(isset($product_launch_val->compute_discount) && $product_launch_val->compute_discount != '') ? $product_launch_val->compute_discount : 'something went wrong'}} M</button></td>
        <td><button type="button" class="tardeamount" id="quarterly_discount_Y1Q2">{{(isset($product_launch_val_2->compute_discount) && $product_launch_val_2->compute_discount != '') ? $product_launch_val_2->compute_discount : 'something went wrong'}} M</button></td>
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
        <td><button type="button" class="tardeamount" id="sales_n_dis">{{(isset($product_launch_val->car_total) && $product_launch_val->car_total != '') ? $product_launch_val->car_total : 'something went wrong'}} M</button></td>
        <td><button type="button" class="tardeamount" id="sales_n_dis_Y1Q2">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
        <td><button type="button" class="tardeamount">-</button></td>
      </tr>
    </tbody>
  </table>
      
        <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
          <input type="text" value="1" id="rqnsokBtn" style="display:none" >
              <button class="btnstyle car_total" type="button" data-bs-dismiss="modal"
              @if(isset($product_launch_val_2->car_total) && $product_launch_val_2->car_total != '')  onclick="slider_('sales_n_dis','accr')"
              @else onclick="car_total('{{(isset($product_launch_val_2->card_type)) ? $product_launch_val_2->card_type  : '' }}')" 
              @endif 
               style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
            </div>
      </div>
    </div>
  </div>

      <!-- Modal 4 -->
      <div class="modal fade backblur" id="paytoSuppliers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content nobg">
            <img src="Images/flip-card/NewImg/timetoPay.svg" alt="" srcset="">
            <div class="ttpaybtn">
 <button type="button" id="pay_res" class="btn" @if(isset($product_launch_val_2->total_cos) && $product_launch_val_2->total_cos == 0)  @else onclick="pay_res()"  @endif></button>            </div>
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

      <?php 
      
          if(isset($product_launch_val_2->customer_money) &&  $product_launch_val_2->customer_money != ''){
            $customer_money = $product_launch_val_2->customer_money;
          }

          elseif(isset($product_launch_val->customer_money) &&  $product_launch_val->customer_money != ''){
            $customer_money = $product_launch_val->customer_money;
          }

      ?>


  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  {{-- <script src="script.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="custome.js"></script> --}}
  <script type="text/javascript"></script>

  <script>

    function car_total(type){
      var quarterly_sales_Y1Q2 = parseInt(document.getElementById('quarterly_sales_Y1Q2').innerHTML); 
      var quarterly_discount_Y1Q2 = parseInt(document.getElementById('quarterly_discount_Y1Q2').innerHTML);
      var car_total = quarterly_sales_Y1Q2 - quarterly_discount_Y1Q2;
      // console.log(quarterly_discount_Y1Q2,quarterly_sales_Y1Q2,car_total)
      var accountrec  = parseInt(document.getElementById('accountrec').innerHTML); 
      var custmoney = parseInt(document.getElementById('custmoney').innerHTML); 
      console.log(quarterly_discount_Y1Q2,quarterly_sales_Y1Q2,car_total,custmoney,accountrec)

      $.ajax({
            type: "get",
            url: "/car_total_val/",
           dataType:"Json",
           data: {car_total,type,accountrec,custmoney},
           
            success: function (response) {
                console.log(response);    
                document.getElementById("custmoney").innerHTML = response.car_total.customer_money;      
                document.getElementById("accountrec").innerHTML = response.car_total.acc_receivable;     
                $(".car_total").attr("onclick","slider_('sales_n_dis','accr')");                
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
      }, 300);
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
          $("#image1").attr('src','Media/Image/eventQ2/Q2A-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)          
          csat = -2 ; bE = -2; esat = 0;
          var ce=0;
          setTimeout(function () {
            matrixT(csat,bE,esat,ce,div_id,sales=null)
          },2000)
        }
        else if (a == 'B') {
          $("#image1").attr('src','Media/Image/eventQ2/Q2B-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)          
          sale = -2; m_a = -2;
          var type =div_id;
          setTimeout(function () {
            // alert("timer")
          $.ajax({
            type: "get",
            url: "/event_Y1Q2/",
           dataType:"Json",
           data: {sale,m_a,type},
           
            success: function (response) {
                console.log(response);
                var sales = document.getElementById('sales').innerHTML;
                var new_sales = parseInt(sales) + parseInt(response.sales.total_sales);
                document.getElementById('sales').innerHTML = new_sales;

                var marketing_js = document.getElementById('marketing_js').innerHTML;
                var new_marketing_js  = parseInt(marketing_js) + parseInt(response.sales.invest_amount);
                document.getElementById('marketing_js').innerHTML = new_marketing_js;

                document.getElementById('cash1').innerHTML= parseInt(response.sales.total_coin);
                document.getElementById('cash').innerHTML= parseInt(response.sales.total_coin);

                slidetest('move-right','bottomcash');

                // $("#pro_submit").attr('onclick','');                
            },
            error:function(error){
                console.log(error);
            }
        });
      },2000)

        }
        else if (a == 'C') {
          $("#image1").attr('src','Media/Image/eventQ2/Q2C-selected.svg');
           var image  = $('#image1').attr('src')
          selectOpt(a,image,div_id)          
          csat = -2; sales = 2; bE = 0; esat = 0;
          var ce=0;
          setTimeout(function () {
            matrixT(csat,bE,esat,ce,div_id,sales)
          },2000)
        }

        // if (a == 'A' || a == "C") {
        // var ce=0;
        // setTimeout(function () {
        //   matrixT(csat,bE,esat,ce,div_id,sales)
        // },2000)
      // }

      }
      transform2();
      $("#oknext").css('display', 'flex');
    }

    function selectOpt(a,image,div_id){
      // console.log(a,image,div_id)
      $.ajax({
            type: "get",
            url: "/q2selectOpt/",
           dataType:"Json",
           data: {a,image,div_id},
           
            success: function (response) {
                console.log(response);
                
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

  function matrixT(cs,be,ee,ce,div_id,sales){
    console.log(cs,be,ee,ce,sales)
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
                url: "/selectOpt_update/",
              dataType:"Json",
              data: {customer,brand, employee,collection,div_id,cs,be,ee,ce,sales},
              
                success: function (response) {
                    // console.log(response+"ram ram");
                  // if(response.sales_latesh.total_sales != ''){
                    // alert("hello")
                      
                      var sales_id = parseInt(document.getElementById('sales').innerHTML);
                      var total = sales_id  + parseInt(sales);
                      document.getElementById('sales').innerHTML=total;
                    // }

                    var data = JSON.stringify(response);
                    // console.log(data);

                    var i = JSON.parse(data)
                    var cs = parseInt(response.event_selected.car_def_val_cs);
                    var be = parseInt(response.event_selected.car_def_val_be);
                    var ce = parseInt(response.event_selected.car_def_val_ce);
                    var ee = parseInt(response.event_selected.car_def_val_ee);
                                          
                    var add = cs + be + ce + ee;
                    // console.log(add)
                    document.getElementById('eveImpYear2').innerHTML =add;
                    document.getElementById('salesEimpY2').innerHTML =add;
                                  
                },
                error:function(error){
                    console.log(error);
                }
            });

        }


    function calSign(id,btn,open,type,record_type,view){
      console.log(id,btn,open,type,record_type,view)
      if(view == 'view'){
      }
      else{
      $('#'+id +' .Calsign').css('display', 'flex');
      $('#'+id +' .Total').css('display', 'flex');
      var image = $('#'+id +' .recbtn').attr('src');
      $('#'+ btn +' img').attr('src', image);
      // img bg change //
      $('#'+ id +' .flip-card-inner').css('transform','rotateY(180deg)');
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
        cx = card3[i]
        // console.log(id,cardbox,cardbox2,dest)
        // console.log("loc is "+ loc)

        caltable(id,cardbox,cardbox2,dest,cx,view);
          if(i == 0){var abc1 = document.getElementById(loc[i]).innerHTML;}
        else if(i == 1){var abc2 = document.getElementById(loc[i]).innerHTML;}
        else if(i == 2){var abc3 = document.getElementById(loc[i]).innerHTML;}
      }
      if(id == 'cosrecord1'){
        var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        // console.log("abc total "+total);
        $('#'+id +' .crtotal').html(total);
      }
      if(id == 'computesale1'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        // console.log("abc total "+total);
        $('#'+id +' .crtotal').html(total);
      }

      if(id == 'computeTS'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        // console.log("abc total "+total);
        $('#'+id +' .crtotal').html(total);
      }

      if(id == 'computeDis'){var total = parseInt(abc1) + parseInt(abc2) +parseInt(abc3);
        // console.log("abc total "+total);
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
            url: "/update_product_flag/",
            dataType:"Json",
            data: {total,type,record_type},           
            success: function (response) {
                // console.log(response);
                                      
              },
            error:function(error){
                console.log(error);
            }
          });  


    }

    function Foo(id,open,type){
      console.log("foo"+id,open,type)
      var A = '#'+id;
      var B = '#'+open;
      // $("#"+ open).modal("show");
      openNext(B,A);
      var abc = $('#'+id +' .crtotal').html();
      if(B == '#cosrecord'){ document.getElementById('cosYear1Q2').innerHTML = abc;cosTableCal(type)}
      if(B == '#salerecord'){ document.getElementById('salesYear2').innerHTML = abc;saleTableCal(type) }
      if(B == '#RTS'){ document.getElementById('tradeSpendY1Q2').innerHTML = abc; tradespendTableCal() }
      if(B == '#backdropa'){ document.getElementById('disY1Q2').innerHTML =abc; recDisTableCal() }
    }


function cosTableCal(type){
  // cosYear1  eveImpYear1  stgImpYear1   costotalYear1
  var costotal = parseInt(document.getElementById('cosYear1').innerHTML) + parseInt(document.getElementById('eveImpYear1').innerHTML) + parseInt(document.getElementById('stgImpYear1').innerHTML);
  document.getElementById('costotalYear1').innerHTML = costotal;

  var costotal_2 = parseInt(document.getElementById('cosYear1Q2').innerHTML) + parseInt(document.getElementById('eveImpYear2').innerHTML) + parseInt(document.getElementById('stgImpYear2').innerHTML);
  document.getElementById('costotalYear1Q2').innerHTML = costotal_2;

  var costotalYear1Q2 = document.getElementById('costotalYear1Q2').innerText;  
      $.ajax({            
        type: "get",
        url: "/costotalYear1Q2/",
       dataType:"Json",
       data: {costotalYear1Q2,type},           
        success: function (response) {
            console.log(response);
                                              
          },
        error:function(error){
            console.log(error); 
        }
      });
}
function saleTableCal(type){
  // salesYear1  salesEimpY1  salesStrY1  salesTotalY1
  var saletotal = parseInt(document.getElementById('salesYear1').innerHTML) + parseInt(document.getElementById('salesEimpY1').innerHTML) + parseInt(document.getElementById('salesStrY1').innerHTML);
  document.getElementById('salesTotalY1').innerHTML = saletotal;

  var saletotal_2 = parseInt(document.getElementById('salesYear2').innerHTML) + parseInt(document.getElementById('salesEimpY2').innerHTML) + parseInt(document.getElementById('salesStrY2').innerHTML);

  document.getElementById('salesTotalY1Q2').innerHTML = saletotal_2;
alert(saletotal_2)
  var salesTotalY1Q2 =  parseInt(document.getElementById('salesTotalY1Q2').innerText);  

      $.ajax({            
        type: "get",
        url: "/salesTotalY1Q2/",
       dataType:"Json",
       data: {salesTotalY1Q2,type},           
        success: function (response) {
            console.log(response);
                                              
          },
        error:function(error){
            console.log(error);
        }
      });
  document.getElementById('totalq1sales').innerHTML = saletotal;
}
function tradespendTableCal(){
  document.getElementById('tradeStotalY1Q2').innerHTML =  parseInt(document.getElementById('tradeSpendY1Q2').innerHTML);
}

function recDisTableCal(){
  var discount = parseInt(document.getElementById('disY1Q2').innerHTML);
  var totaldisY1Q2 = document.getElementById('disTotalY1Q2').innerHTML = discount;
  document.getElementById('totalq1discount').innerHTML = totaldisY1Q2;
  fetchdata();
}

function recquatNetsales(){
  // totalq1sales totalq1discount q1netSales
  OpenBtn('RQNS');
  document.getElementById('q1netSales').innerHTML =  parseInt(document.getElementById('totalq1sales').innerHTML) - parseInt(document.getElementById('totalq1discount').innerHTML);
  document.getElementById('').setAttribute( "onClick", "OpenBtn('RQNS');" );
}
  


function  cashcon(){
  var percentage = parseInt(document.getElementById('cashcon').innerHTML);
  var cashreceivable = parseInt(document.getElementById('ReceivableAmt').innerHTML);
  // console.log('this is cash '+cashconvert)
  document.getElementById('Cashconversion').innerHTML = (cashreceivable/100)*percentage +"M";
  $('#Cashconversion').attr('onclick','');
  document.getElementById('cashclickhere').innerHTML = "";

  var cash =  document.getElementById('Cashconversion').innerHTML = (cashreceivable/100)*percentage;

   $.ajax({            
            type: "get",
            url: "/add_wallet_coin/",
           dataType:"Json",
           data: {cash},           
            success: function (response) {
                // console.log(response);
                document.getElementById('cash1').innerHTML= parseInt(response.game_flow.total_coin);
                document.getElementById('cash').innerHTML= parseInt(response.game_flow.total_coin);
                                      
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
        var salestotalYear2 = parseInt(document.getElementById('salesTotalY1Q2').innerHTML); 
        var disTotalY1Q2 = parseInt(document.getElementById('disTotalY1Q2').innerHTML); 
        var total_amt = salestotalYear2 - disTotalY1Q2
        document.getElementById('quarterly_sales_Y1Q2').innerHTML = salestotalYear2+"M"; 
        document.getElementById('quarterly_discount_Y1Q2').innerHTML = disTotalY1Q2+"M" ; 
        document.getElementById('sales_n_dis_Y1Q2').innerHTML = total_amt+"M"; 
      }
  ///////////////// // 
// onclick="OpenBtn('')" style="cursor:pointer"
{{-- function payresources(){
  var res = document.getElementById('res_val').value;
  if(res == 1){
  var deduct =  document.getElementById('cash1').innerHTML ; 
  var amt = deduct  - 10;
  document.getElementById('cash1').innerHTML = amt; 
  document.getElementById('cash').innerHTML = amt ; 
  document.getElementById('resources').innerHTML = 10 ; 
  $('#res_val').val(2);
  slidetest('move-right','bottomcash');
  }
}
 --}}


function pay_res(){
  var i = document.getElementById('accountpay').innerHTML; 
  var j = 0; 
  var k = parseInt(i);

  $('#paytoSuppliers').modal('hide');
  document.getElementById('accountpay').innerHTML = j;
  var cashamt = document.getElementById('cash1').innerHTML; 
  var ttl = cashamt - k ;
  
  $.ajax({            
    type: "get",
    url: "/pay_res/",
   dataType:"Json",
   data: {"acc_pay":i,cashamt,ttl,"type":"product_launch_2"},           
    success: function (response) {
        console.log(response);
        document.getElementById('cash').innerHTML = ttl ; 
        document.getElementById('cash1').innerHTML = ttl ; 
        $('#parresources').attr("onclick", "");
        slidetest('move-right','bottomcash');
        slidetest('move-right','containerCard');   
        $("#pay_res").attr('onclick','');      
        
        var cos_val = parseInt(document.getElementById('cos').innerHTML); 
        document.getElementById('cos').innerHTML = k + cos_val; 
                        
      },
    error:function(error){
        console.log(error);
    }
  });

}


function roundfinish(){
  window.open(window.location.href='QuarterY1Q3');
}

document.getElementById("custmoney").innerHTML = {{ (isset($customer_money) ? $customer_money : "something went wrong") }};


$(document).ready(function() {
   myFunction();
});


 </script>
<script src="{{ asset('js/newscript.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>

@if(isset($product_launch_val_2) && $product_launch_val_2->resources != '')
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
        url: "/payresources/",
       dataType:"Json",
       data: {"resouce":10,"type":"resources"},           
        success: function (response) {
            console.log(response);
            document.getElementById('cash1').innerHTML = amt; 
            document.getElementById('cash').innerHTML = amt ; 
            document.getElementById('resources').innerHTML = 20 ; 
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