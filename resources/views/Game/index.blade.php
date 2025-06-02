<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game-Bot Set Up Round</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/custome.css')}}">
      <link rel="stylesheet" href="{{ asset('css/buttoncss.css')}}">
      <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@400;500;700;800;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
      <!-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
  html{
   height: 100%;
   width: 100%;
   overflow: hidden;  }
  body {height: 100%; width: auto;position: fixed;}
  svg {
    position: fixed;
    width: 100%;
    /* height:100%; */
  }
  @media only screen and (max-width:1920px)and (min-height:810px){
    .lappyboard{height:100%;}
    svg{height: auto;}
  }
  #staticBackdop2 .modal-dialog{margin-left: 5vw;margin-right: 5vw;}
  .cardsize{width:13rem;}
  #staticBackdro2 .cardsize{width:9rem;}
  #src_copy3{margin-top:0.7rem;}
  #flag_copy3{
   margin-top: 0.7rem;
   margin-bottom: 1rem;}
  .clickbutton {
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #ca1d1d;
    border: none;
    border: solid 2px #999;
    border-radius: 50%;
    box-shadow: 0 6px #999;
  }
  .clickbutton:hover {background-color: #df3535}
  .clickbutton:active {
    background-color: #c73434;
    box-shadow: 0 5px #666;
    border: solid 2px #999;
    transform: translateY(2px);
  }
  .btndiv{  max-width: 100px;}
  .btndiv .btn-ads{
   display: flex;
   justify-content: center;
   align-items: center;
  }
  .btn-ads{
    background-image: url("ads.svg") ;
    background-repeat: no-repeat;
    height: 60px;
  }
  .whitebox{
    border-radius: 20%;
    background: #fff;
    height: 25px;
    width: 25px;
    transform: rotateX(40deg) rotateY(40deg) rotateZ(40deg);
  }
  @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap');
  .matrixwhite .bar {
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
  }
  .matrixwhite .bar img{
    height: 100%;
    position: absolute;
    right: 0;
    scale:1.3;
  }
  .xbtn1{
    padding-right: 40px;
    padding-top: 4px;
  }
  #Matrixbox .xbtn1{
    padding-top: 10px;
  }

  .pretext{
    color:#006772;
    font-family: 'Tomorrow';
    font-weight: 900;
    font-size: 30px;
  }
  .clickherebutton{
  background: rgb(20,114,41);
  font-size: 12px;
  width: 71px;
  color: black;
  padding: 0 5px;
  margin-top:-36px;
  border-radius: 20px;
  border: 1px solid black;
  margin-bottom: 0;
  }
  .defaultcard{margin-top: -4%!important;}
  .btnstyle .strategyok{width:54%;}
  .Pnlbtn{ position: absolute; bottom: 16%;}
  .bottomcash{position: absolute; bottom:9% ; width:1340px;}
  .startbtn{margin-left:100px; margin-top:100px;}
  .startbtn .button{height:67px; width: 94px;}
  .Pnlbtn{margin-bottom: -479px}
  .selectdefault{margin-top: -5%;}
  
  .sideicons{width:7rem;
      position: inherit;
      top: 6rem;
      left: 2.3rem;
  }
  #staticBackdop3 .footerbtn button{
    position:relative;
    top:12px;
}
  
  @media only screen and (max-width: 2560px){
  }
  
  @media only screen and (min-width: 1601px) and (max-width: 1920px){
  .flagdrop{margin-top: -185px;}.dropimg img{margin-left: -64px;}
  .flagdrop .col img{width:34%;}.flagdrop2 {margin-top: -193px;}
  .marl1{margin-left: 33px;}
  .mb-ads{margin-bottom: 82px!important;}
  .btn-over-image{right: -1%;bottom: 5%; padding: 0;}
  .buttons{width: 100vw;margin-right: 0;}.Pnlbtn{margin-bottom: -160px;}
  .cashbackground img{width: 36px;margin-top: -6px;}.cashbackground p {font-size: 30px;}
  .cashbackground{min-width: 157px;padding-right: 5px;}.topcash {top: 30px; left: 35px;}
  .topcashcard{right: 8%;}
  .adsFlagcard {width: 16rem; border: none; margin-top: 0px;}
  .flagrow1 {margin-top: -470px;margin-left: 27px;}.flagrow2 img{margin-left: 74px;margin-top: 5px;}
  .modalsize2{width:80vw;} #staticBackdop2 .modal-dialog{margin-left: 10vw;margin-right:10vw;}
  .flagrow3 {margin-top: 84px;}.row4 .flagK3M {margin-top: 18px;margin-bottom:0;}
  .stg1{font-size: 1.9rem!important;padding:0 55px;}.cardsize {width: 21rem;}
  .card3 img {margin-left: 22%; height: 130px;}.card3 {margin-top: -96%;}
  #staticBackdop3 .modal-xl{--bs-modal-width: 1470px;}
  #staticBackdrop1 .modal-xl,#staticBackdrop .modal-xl,#staticBackdro2 .modal-xl{--bs-modal-width: 1440px;}
  .bottomcash {width: 92%;}
  .btn-over-image button { height: 3rem;  width: 3rem;}
  .stimg,.spimg2 {width: 270px;} .spimg {width: 210px;}
  .imgiwidth {width: 190px;}
  .Iteimg {width: 260px;}
  .sideicons{width:9rem; top: 9rem; left: 2.3rem;}
  #staticBackdop3 .cardsup2 img {width: 3.5rem;}
  #staticBackdop3 .cardsup2 {margin-top: 80px;margin-bottom: 2.6rem;}
  #staticBackdop3 .cardsize {width: 8.8rem;margin: 5px 0;}
  #src_copy3 {margin-top: 1.4rem;}#flag_copy3 {margin-top: 1rem;margin-bottom: -0.5rem;}
  #src_copy1,#flag_copy1 {margin-left: 0.4rem;}
  
  }
  @media only screen and (min-width: 1541px) and (max-width: 1600px){
    .buttons{width: 100vw;margin-right: 0;}.Pnlbtn{margin-bottom: -120px;}
    .flagdrop {margin-top: -157px;}.flagdrop2 {margin-top: -165px;}
    .cashbackground img{width: 28px;margin-top: -8px;}.cashbackground p {font-size: 24px;}
    .cashbackground{min-width: 113px;padding-right: 6px;}.topcash {top: 30px; left: 35px;}
    .topcashcard{right: 10%;}.flagrow1 img {width: 53px;}.flagrow1 {margin-top: -414px;margin-left: 23px;}
    .flagrow2 img{margin-left: 68px;margin-top: 1px; width:53px;} .flagrow3 img {width: 53px;}
    .flagrow3 {margin-top: 65px;}.row4 .flagK3M {margin-top: 10px;margin-bottom:26px; width: 53px;}
    .modalsize2{width:76vw;} #staticBackdop2 .modal-dialog{margin-left: 12vw;margin-right:12vw;}
  #staticBackdrop1.modal-xl,#staticBackdrop.modal-xl {width: 910px;}.cardsize {width: 15.6rem;}
  .btn-over-image button {height: 2.2rem; width: 2.2rem;} .btn-over-image{right: -2%;bottom: 6%; padding: 0;}
  .stg1{font-size: 1.4rem!important;}
  #staticBackdop3 .modal-xl{--bs-modal-width: 1270px;}.card3 img {margin-left: 26%; height: 108px;}.card3 {margin-top: -95%;}
  #staticBackdrop1 .modal-xl,#staticBackdrop .modal-xl{width: 75%;}
  .bottomcash {width: 91%;}
  #staticBackdro2 .modal-xl{--bs-modal-width: 1270px;}
  .stimg,.spimg2 {width: 210px;} .spimg {width: 160px;}
  .imgiwidth {width: 160px;}
  .Iteimg {width: 220px;}
  #staticBackdop3 .cardsup2 img {width: 3.2rem;}
  #staticBackdop3 .cardsup2 {margin-top: 50px;margin-bottom: 2.2rem;}
  }

  @media only screen and (max-width: 1540px){
  }
  
  @media only screen and (min-width: 1440px) and (max-width: 1539px){
  .flagdrop {margin-top: -159px;}.marl1 {margin-left: 30px;}.dropimg img{margin-left: -54px;}
  .mb-ads {margin-bottom: 45px!important;}.cashbackground {min-width: 110px; padding-right: 4px;}
  .buttons{float: right;width: 100vw;margin:0}.topcashcard {right: 11%;}
  .Pnlbtn {margin-bottom: -128px;}.buttons img {width: 150px;}
  .flagdrop{margin-top: -154px;}.flagdrop2{margin-top: -162px;}
  .btn-over-image button {height: 32px; width: 32px;} .btn-over-image{right: -2%;bottom: 7%; padding: 0;}
  .topcash {top: 22px; left: 35px;}.cashbackground img{width: 26px; margin-top: -5px;}
  .cashbackground {min-width: 106px;padding-right: 5px;}.cashbackground p{font-size: 22px;}
  .stg1{font-size: 1.36rem!important;}.flagrow1 {margin-top: -414px;}.flagrow1 img {width: 50px;}
  .flagrow2 {margin-top: 16px;margin-left: 10px;}.flagrow2 img{width: 50px;}.flagrow3 {margin-top: 70px;}
  .flagrow3 img {width: 50px;}.row4 .flagK3M {width: 50px;margin-top: 15px;margin-bottom: 0;}
  .cardsize {width: 14rem;}
  #staticBackdop2 .modal-dialog {margin-left: 10vw;}.adsFlagcard {width: 14rem;margin-top: -22px;}
  #src_copy3{margin-top: 15px;}  #flag_copy3{margin-top: 16px;}
  #staticBackdro2 .btn-over-image button {height: 27px; width: 27px;}
  #staticBackdro2 .btn-over-image{right: -10%;bottom: 4%;}
  .bottomcash {width: 1370px;} .imgiwidth {width: 160px;}
}

@media only screen and (max-width: 1440px){
    .bottomcash {position: absolute; width: 1300px;}
    .flagdrop {margin-top: -146px;}.flagdrop2 {margin-top: -154px;}
  }
  
  @media only screen and (min-width: 1366px) and (max-width: 1439px){
  .bottomcash{ bottom:9% ; width: 1210px;}
  .flagdrop2{margin-top: -159px;}
  .bottomcash{bottom: 68px;}.buttons{margin-right: -5%;}.Pnlbtn{margin-bottom:-118px!important;}
  .stg1{font-size: 1.2rem!important;}
  #staticBackdop2 .modal-dialog {margin-left: 10vw;}
  .flagrow1 {margin-top: -415px;}.flagrow2 img {width: 53px;margin-left: 58px;}
  .flagdrop {margin-top: -142px;}.flagdrop2 {margin-top: -150px;}.flagrow3 {margin-top: 66px;}
  .flagrow3 img {width: 53px;}.row4 .flagK3M {width: 53px;}
  .topcash {top: 20px;left: 25px;}
  .topcash p img {margin: -6px 4px auto -8px;}
  .topcashcard {right: 11%;}
  .sideicons {width: 6rem;top:5.6rem;left: 1.3rem;} .sideicons .row img{margin:2px 0;}
  }
  /* */ /* */
  @media screen  and  (min-width: 1024px) and (max-width:1200px){
  .radio-stock-img > img{height: 160px;}
  .radio-stock-img .selectImg{width: 76%;margin-left: 32px; margin-top:-86%;}
  .radio-stock-img .selectimg2{width: 82%;margin-left: 26px; margin-top:-97%;}
  .radio-stock-img .selectImg2 {width: 70%;margin-left: 35px;margin-top: -84%;}
  .flagrow1{margin-top: -371px; margin-left: 19px;}.flagrow1 .flagP2M{margin-left: -5px;}
  .flagrow1 img{width: 48px;} 
  .flagrow2 img{width: 47px; margin-left: 51px;}.flagrow2{margin-left: 14px;margin-top: 9px;}
  .flagrow3 img{width: 48px;} .flagrow3{margin-top: 57px; margin-left: 19px;}.flagrow3 .flagK2M{margin-left: -5px;}
  .row4 .flagK3M{width: 47px;margin-top: 11px;}
  .flagdrop{margin-top: -127px;}
  .flagdrop2{margin-top: -134px;}
  #copy_desc{margin-right:5px;}
  #dest_copy{margin-left:5px}
  .card3 img{height: 72px;}
  .bottomcash{width:910px;}.buttons{margin-right:-6%}
  .cashbackground p{font-size: 18PX}.cashbackground img{width: 24px;}.cashbackground {min-width: 96px;}
  /* .topcash {top: 23px; left: 10px;} */
  .Pnlbtn{margin-bottom: -90px;}
  .justify-content-end {width: 420px;right:8.3rem!important; position: absolute;top: -15px;}
  .bottomcash{bottom: 63px;}.buttons img {width: 135px;}
  .btn-over-image{right: 0%;padding:0;}
  .sideicons {width: 6rem; top: 4.2rem; left: 1.3rem;}
  .title {font-size: 11px;}
  }
  /*09-01-23 R*/
  /*iPad Pro 10.5*/
  @media screen and (width: 834px) and (height: 1112px){
  .lappyboard{margin-top: 400px}.bottomcash{width: 745px;}
  .topcash{top:402px;}
  .Transpbtnpn{top: 604px;}.startbtn{margin-left: 350px;margin-top: 120px;}
  .startbtn .button{height: 55px;width: 85px;}
  .Pnlbtn {margin-bottom: -879px;}.btn5{margin-left: 341px; margin-top: 74px;}
  .cashbackground p{font-size: 18px;}
  .cashbackground img{width: 20px}
  .cashbackground{min-width: 70px;}
  .btn-over-image{bottom: -14px;right: -46%;}
  .btn4 {margin-left: 395px; margin-top: 14px;}.btn4 .button{height: 42px;width: 66px;}
  .flagrow1 {margin-top: -294px;margin-left: 12px;}.flagrow1 img{width: 39px;}
  .flagP2M{margin-left:-6px;}
  .flagrow2 img{width: 35px;margin-left: 36px;}
  .flagrow3 {margin-top: 45px;margin-left: 13px;}.flagrow3 img{width: 38px;}
  .flagK2M{margin-left:-6px;}
  .row4 .flagK3M {width: 37px;margin-top: 9px;}
  .ItmodalBody{max-width: 745px;}.card-title{width: 245px;padding: 2px 10px;}
  .stimg{width: 120px;}.spimg2{width: 115px;}.spimg {width: 92px;}
  .Iteimg{width: 140px;}.imgiwidth{width: 110px;}.imgiwidth {width: 100px;}
  .btn3 {margin-left: 525px;margin-top: -130px;}.btn3 .button{height: 38px;width: 60px;}
  .productYear1{max-width: 798px;}
  }
  
  @media screen  and  (max-width: 768px){
  .cashbackground{min-width:70px;} .topcash{margin: 4px 0px 0px -8px;}
  .cashbackground p{font-size: 14px} .cashbackground img{width:16px; margin-right: 3px;}
  .cashbackground{padding: 2px 5px;}
  .Pnlbtn{margin-bottom: -56%;} .buttons img{width:125px;}
  .bottomcash{width:660px;}.buttons{margin-right:-6%}
  .startbtn .button{height: 45px; width: 72px;}
  .flagrow1{margin-top: -264px; margin-left: 11px;} .flagrow1 .flagP2M{margin-left: -7px;}
  .flagrow1 img{width: 33px;} .flagrow2{margin-left: 44px} .flagrow2 img{width: 32px; margin-left: 0px;} 
  .flagrow3 img{width: 34px;} .flagrow3{margin-top: 42px; margin-left: 11px;} .flagrow3 .flagK2M{margin-left: -7px;}
  .row4 .flagK3M{width: 32px;margin-top: 9px;}
  #copy_desc{margin-right:5px;}
  #dest_copy{margin-left:5px}
  .flagdrop{margin-top: -103px;} .flagdrop2{margin-top: -110px;}
  .Iteimg{width: 135px;} .imgiwidth{width: 110px;}
  .card-title{width: 240px;font-size: 12px;} .stimg{width:120px;} .spimg{width: 92px;} .spimg2{width: 116px;}
  .bgwhite p{font-size: 15px}  
  .modal-dialog{max-width: fit-content;}
  .modalcont1{width: 450px;}
  .title{min-height: 32PX;}
  .nobg{ padding:232px;top:-249px; }
  .card3 img{width: 58px;height: 72px;}
  .modalcont2{width: 390px;}
  .justify-content-end {width: 286px;right:131px!important; position: absolute;top: -15px;}
  .lappyboard {margin-top: 1px;}
  .radio-stock-img > img{height: 160px;}
  .radio-stock-img .selectImg{width: 82%;margin-left: 26px; margin-top:-97%;}
  .radio-stock-img .selectimg2{width: 82%;margin-left: 26px; margin-top:-97%;}
  .radio-stock-img .selectImg2 {width: 82%;margin-left: 26px; margin-top:-97%;}
  .card .adsFlagcard img{height: 247px;margin-top: 34px;}
  }
  
  /* Info card 18-March */
  .infoCardX,.stImpactX{
    position: absolute;
    right: 0;
    border-radius: 50%;
  }
  .infoCardX button{height: 4.2rem;width: 4.2rem;border-radius: 50%;}
  .stImpactX button{height: 2.5rem;width: 2.5rem;border-radius: 50%;}
  /* Info card end */
  
  @media only screen and (max-width: 600px){
  }
  
  .blink{cursor: pointer;}
  .bottomcash, .containerCard{
    transform: translateX(100vw);
    -webkit-transform:translateX(100vw);
    transition: 4.9s ease-in-out;
    -webkit-transition: 1.3s ease-in-out;}

  .move-right {
    transform: translateX(1%);
    -webkit-transform:translateX(1%);
  }

  .alignment{
    z-index: 99;
    margin-bottom: -74px;
    margin-right: 0px;
  }
  </style>
  
  </head>
  <body cz-shortcut-listen="true" class="" style="">

      <!--  -->
      @include('Game.index_svg_img')
      <!-- top -->

      @php
      use App\Models\Card;
       use Illuminate\Support\Facades\Facade;

              $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
              if(count($flag_selected) >= 1 ){
                $product_flag = json_decode($flag_selected['0']->multi_flag);
              }

              $flag_product  = DB::table('gameflows')->where('card_type', '=', 'product_launch')->where('user_selected', '=', 1)->first();
             if(isset($flag_product) && $flag_product != ''){
            //   $prod_show = $flag_product['0']->multi_flag;
            //   $decode = json_decode($prod_show);
            //   $product_1 = $decode->pro_entries['0'];
            //   $product_2 = $decode->pro_entries['1'];
            //   $product_3 = $decode->pro_entries['2'];
            //  
            $multi_flags = $flag_product->multi_flag;            
            $multi_flagss = json_decode($multi_flags);        
            $prod_flag = (array) $multi_flagss;
            // dd($prod_flag);
      }
      @endphp
      @if(count($flag_selected) >= 1)   
        
      <?php
           $flag_0 = DB::table('cards')->where('card_image', '=', $product_flag['0'])->get();
             foreach($flag_0  as $flag0)

           $flag_1 = DB::table('cards')->where('card_image', '=', $product_flag['1'])->get();
             foreach($flag_1  as $flag1)

           $flag_2 = DB::table('cards')->where('card_image', '=', $product_flag['2'])->get();
             foreach($flag_2  as $flag2)

           $flag_3 = DB::table('cards')->where('card_image', '=', $product_flag['3'])->get();
             foreach($flag_3  as $flag3)

           $flag_4 = DB::table('cards')->where('card_image', '=', $product_flag['4'])->get();
             foreach($flag_4  as $flag4)

           $flag_5 = DB::table('cards')->where('card_image', '=', $product_flag['5'])->get();
             foreach($flag_5  as $flag5) 
            ?>
    @else
    <?php
      //  $flag_0 = DB::table('cards')->where('card_image', '=', $product_flag['0'])->get();
      //        foreach($flag_0  as $flag0)

      //      $flag_1 = DB::table('cards')->where('card_image', '=', $product_flag['1'])->get();
      //        foreach($flag_1  as $flag1)

      //      $flag_2 = DB::table('cards')->where('card_image', '=', $product_flag['2'])->get();
      //        foreach($flag_2  as $flag2)

      //      $flag_3 = DB::table('cards')->where('card_image', '=', $product_flag['3'])->get();
      //        foreach($flag_3  as $flag3)

      //      $flag_4 = DB::table('cards')->where('card_image', '=', $product_flag['4'])->get();
      //        foreach($flag_4  as $flag4)

      //      $flag_5 = DB::table('cards')->where('card_image', '=', $product_flag['5'])->get();
      //        foreach($flag_5  as $flag5)
    
       ?>
  @endif
        
          <!-- class="transpbtn" -->
     
        <!-- modals section -->
        <!--  data-bs-toggle="modal" -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content modalcont1">
                <div class="modal-header mt-n1 modalp">
                  <h3 class="modal-title fs-5 title1" id="exampleModalLabel">NOTIFICATION</h3>
                </div>
                <div class="modal-body txt2 pb-0">
                  <h3>Select Only 1 Card From 6 <br> 
                    Click on <img src="assets/icons/menu.png" alt="" width="5%"> this to Know More</h3>
                </div>
                <div class="pb-1" style="display: flex; justify-content: center;">
                <button type="button" class="btn" onclick="closemodal('#exampleModal')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                </div>
              </div>
            </div>
          </div>
         
            <div class="modal fade" id="ExampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalcont1">
                  <div class="modal-header modalp">
                    <h3 class="modal-title fs-5 title1" id="exampleModalLabel">NOTIFICATION</h3>
                  </div>
                  <div class="modal-body txt2 pb-0">
                    <h3 class="dcenter">Select Only 1 Card From 5 </h3>
                      <h3> Click on <img src="assets/icons/menu.png" alt="" width="5%"> this to Know More</h3>
                  </div>
                  <div class="pb-1" style="display: flex; justify-content: center;">
                    <button type="button" class="btn" onclick="closemodal('#ExampleModal')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Again select Modal Notification data-bs-toggle="modal" -->
            <div class="modal fade" id="Examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalcont1">
                  <div class="modal-header modalp">
                    <h3 class="modal-title fs-5 title1" id="exampleModalLabel">NOTIFICATION</h3>
                  </div>
                  <div class="modal-body txt2 pb-0">
                    <h3 class="dcenter">Again Select Only 1 Card From 5 </h3>
                    <h3> Click on <img src="assets/icons/menu.png" alt="" width="5%"> this to Know More</h3>
                  </div>
                  <div class="pb-1" style="display: flex; justify-content: center;">
                    <button type="button" class="btn" onclick="closemodal('#Examplemodal')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Modal 1  Notification -->
            <div class="modal fade" id="ExampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalcont1">
                  <div class="modal-header modalp">
                    <h3 class="modal-title fs-5 title1" id="exampleModalLabel">NOTIFICATION</h3>
                  </div>
                  <div class="modal-body txt2 pb-0">
                    <h3 class="dcenter">Again Select Only 1 Card From 4 </h3>
                    <h3> Click on <img src="assets/icons/menu.png" alt="" width="5%"> this to Know More</h3>
                  </div>
                  <div class="pb-1" style="display: flex; justify-content: center;">
                  <button type="button" class="btn" onclick="closemodal('#ExampleModal4')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                  </div>
                </div>
              </div>
            </div>
        
              <!-- Modal 1  Notification data-bs-toggle="modal" -->
              <div class="modal fade" id="ExampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content modalcont2">
                    <div class="modal-header modalp">
                      <h3 class="modal-title fs-5 title2" id="exampleModalLabel">NOTIFICATION</h3>
                    </div>
                    <div class="modal-body txt2" style="padding:4px">
                      <h3 class="dcenter mb-0"> Select 1 Option From both IT EXPENSES &amp; CUSTOMER SERVICES</h3>
                    </div>
                    <div class="pb-1" style="display: flex; justify-content: center;">
                      <button type="button" class="btn" onclick="closemodal('#ExampleModal5')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                    </div>
                  </div>
                </div>
              </div>
        
              <!-- Notification oF and marketing data-bs-toggle="modal" -->
              <div class="modal fade" id="adsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content modalcont2">
                    <div class="modal-header modalp">
                      <h3 class="modal-title fs-5 title2" id="exampleModalLabel">NOTIFICATION</h3>
                    </div>
                    <div class="modal-body txt2" style="padding:4px">
                      <h3 class="dcenter mb-0"> Drag &amp; Drop Ad spent flags &amp; Incentive flags to Store, Agent &amp; Online</h3>
                    </div>
                    <div class="pb-1" style="display: flex; justify-content: center;">
                      <button type="button" class="btn" onclick="closemodal('#adsModal')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                    </div>
                  </div>
                </div>
              </div>
                   
              <!-- Notification oF and marketing data-bs-toggle="modal" -->
              <div class="modal fade" id="ProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999; backdrop-filter: blur(5px);">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content modalcont2">
                    <div class="modal-header modalp">
                      <h3 class="modal-title fs-5 title2" id="exampleModalLabel">NOTIFICATION</h3>
                    </div>
                    <div class="modal-body txt2" style="padding:4px">
                      <h3 class="dcenter mb-0"> Drag &amp; Drop cards to Store, Agent &amp; Online</h3>
                    </div>
                    <div class="pb-1" style="display: flex; justify-content: center;">
                      <button type="button" class="btn" onclick="closemodal('#ProductModal')"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
                    </div>
                  </div>
                </div>
              </div>
                   
               <!-- Modal 1  Notification -->
               <div class="modal fade" id="ExampleModal6" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content modalcont2">
                    <div class="modal-header modalp">
                      <h3 class="modal-title fs-5 title2" id="exampleModalLabel">NOTIFICATION</h3>
                    </div>
                    <div class="modal-body txt2">
                      <h3 class="dcenter"> Year 1 Quarter 1 Starts ...</h3>
                    </div>
                    <div class="pb-1" style="display: flex; justify-content: center;">
                      <button type="button" onclick="window.location.href='round2' " class="btn" data-bs-dismiss="modal"><img src="assets/G-B-img/play.svg" alt="" width="50%"></button>
                    </div>
                  </div>
                </div>
              </div>
        
            <!-- end Notification -->
        <!-- me santosh modal SELECTED PRODUCT CARDS and SELECTED STRATEGY CARDS  -->
  {{-- {{dd($strategy_selected);}} --}}
        <div class="modal fade" id="staticBackdro2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl ItmodalBody mt-0">
            <div class="modal-content modalborder2 mt1">
                    <div class="endp endp1">
                    <button type="button" onclick="closeAllModal()" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                </div>
              <div class="modal-header dcenter noborder pt-0">
              </div>
              <div class="modal-body pt-0 pb-2">
        
              <div class="row">
              <div class="col-5 dcenter mt-2">
                <div class="col card1">
                  <div class="dcenter">
                  <div class="card-title dcenter">SELECTED STRATEGY CARDS</div></div>
                <div class="row card2">
                <div class="col dcenter spc card_append_stra">
                  @foreach ($strategy_selected as $data)
                    @if($data->user_selected == 1)
                    <div class="col  stimg dcenter">
                      <div class="card cardsize" style="border: none; /* height: 224px; */">
                        <label class="radio-stock-img">
                        <img src="{{$data->card_image}}" class="card-img-top" alt="..." >
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#cardModal{{$data->card_id}}')"></button>
                          </span>
                        </label> 
                      </div>
                  </div>
                  @endif
                @endforeach
                

                </div>
              </div>
              </div>
              </div>
              <div class="col-7 dcenter mt-2">
                <div class="col card1"> <div class="dcenter">
                  <div class="card-title dcenter">SELECTED PRODUCT CARDS</div></div>
                <div class="row card2 ">
                  <div class="col dcenter spc card_append_prod">
                    @foreach ($product_selected_cus as $data)
                      @if($data->is_selected == 1)
                      <div class="col   dcenter">
                        <div class="card cardsize" style="border: none;">
                          <label class="radio-stock-img">
                           <img src="{{$data->card_image}}" class="card-img-top" alt="...">
                            <span class="btn-over-image">
                              <button type="button" class="btn" onclick="modalclick('#productModal{{$data->card_id}}')"></button>
                            </span>
                          </label> 
                        </div>
                    </div>
                      @elseif($data->user_selected == 1)
                      <div class="col col-sm-4  dcenter">
                        <div class="card cardsize" style="border: none;/* height: 224px; */">
                          <label class="radio-stock-img">
                           <img src="{{$data->card_image}}" class="card-img-top" alt="...">
                            <span class="btn-over-image">
                              <button type="button" class="btn" onclick="modalclick('#productModal{{$data->card_id}}')"></button>
                            </span>
                          </label> 
                        </div>
                    </div>
                      @endif
                    @endforeach

                  </div>
                  
                </div>
                </div>
              </div>
          </div>
          <div class="row">
            <!-- down part  -->
            <div class="col dcenter mt-2 mb-2">
              <div class="col card1">
              <div class="row card2">
                <div class="row gx-0 mt-2">
                  <div class="col"></div>
                  <div class="col dcenter">
                    <img class="imgiwidth" src="Images/Low.svg" alt="">
                  </div>
                    <div class="col dcenter">
                      <img class="imgiwidth" src="Images/Medium.svg" alt="">
                    </div>
                    <div class="col dcenter">
                    <img class="imgiwidth" src="Images/High.svg" alt="">
                  </div>
                </div>
            </div>
        
              <div class="row card2">
                <div class="row gx-0 " >
                  <div class="col align-center dcenter">
                    <img class="Iteimg" src="Images/IT-exps.svg" alt="">
                  </div>
                  @if(count($IT) == 1)
                      @foreach ($It_expense as $expense)
                      <div class='col dcenter ' id='It_expense'>
                      <label class='radio-stock-img2'>
                      <input type='radio' name='selectcard' id="IT_{{$expense->card_invest}}" {{($IT['0']->card_id == $expense->card_id) ?  'checked': 'disabled' }} value='{{$expense->card_invest}}'>
                      <img class='imgiwidth IT_{{$expense->card_invest}}'id='{{$expense->card_id}}' name='{{$expense->card_name}}'  src='{{$expense->card_image}}' alt=''>
                      </label>
                      </div>
                    @endforeach

                  @else

                    @foreach ($It_expense as $expense)
                          <div class='col dcenter ' id='It_expense'>
                          <label class='radio-stock-img2'>
                          <input type='radio' name='selectcard' id="IT_{{$expense->card_invest}}" value='{{$expense->card_invest}}'>
                          <img class='imgiwidth IT_{{$expense->card_invest}}'id='{{$expense->card_id}}' name='{{$expense->card_name}}'  src='{{$expense->card_image}}' alt=''>
                          </label>
                          </div>
                    @endforeach
                  @endif
                 
                </div>
            </div>
        
            <div class="row card2 mt-1 mb-2">
              <div class="row gx-0 ">
                <div class="col align-center dcenter">
                  <img class="Iteimg" src="Images/customer-service.svg" alt="">
                </div>
                @if(count($CUSTOM) == 1)
                  @foreach ($customer_service as $cus_ser)
                    <div class='col dcenter' id='customer_service'>
                    <label class='radio-stock-img2'>
                    <input type='radio' name='selectcard2'id="CUS_{{$cus_ser->card_invest}}" {{($CUSTOM['0']->card_id == $cus_ser->card_id) ?  'checked': 'disabled' }} value='{{$cus_ser->card_invest}}'>
                    <img class='imgiwidth CUS_{{$cus_ser->card_invest}}' id="{{$cus_ser->card_id}}" name="{{$cus_ser->card_name}}" src='{{$cus_ser->card_image}}' alt=''>
                    </label>
                    </div>
                  @endforeach

                @else

                @foreach ($customer_service as $cus_ser)
                      <div class='col dcenter' id='customer_service'>
                      <label class='radio-stock-img2'>
                      <input type='radio' name='selectcard2'id="CUS_{{$cus_ser->card_invest}}" value='{{$cus_ser->card_invest}}'>
                      <img class='imgiwidth CUS_{{$cus_ser->card_invest}}' id="{{$cus_ser->card_id}}" name="{{$cus_ser->card_name}}" src='{{$cus_ser->card_image}}' alt=''>
                      </label>
                      </div>
                  @endforeach
              @endif
                <!-- <div class="col dcenter">
                  <label class="radio-stock-img2">
                    <input type="radio" name="selectcard2" value="2">
                  <img class="imgiwidth" src="assets/IT &amp; EXPENSE/Cus.svg" alt="">
                  </label>
                </div>
                  <div class="col dcenter">
                    <label class="radio-stock-img2">
                      <input type="radio" name="selectcard2" value="4">
                    <img class="imgiwidth" src="assets/IT &amp; EXPENSE/Cus-1.svg" alt="">
                    </label>
                  </div>
                  <div class="col dcenter">
                    <label class="radio-stock-img2">
                      <input type="radio" name="selectcard2" value="6">
                  <img class="imgiwidth" src="assets/IT &amp; EXPENSE/Cus-2.svg" alt="">
                    </label>
                </div> -->
              </div>
          </div>
            </div>
            </div>
          </div>
        
              </div>
            <!-- </div> -->
            <div class="dcenter">
              <div class="modal-footer noborder dcenter footerbtn mt-1 px-0">
                <button class="btnstyle"  id="it_custom" {{(count($CUSTOM) == 1 ) ? '' : 'onclick=ItserviceOkbtn()' }}  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
              </div></div>
            </div>
          </div>
        </div>
        <?php
          use App\Models\Gameflow;
        
        ?>
          <!-- strategy Selection -->
          <!-- Modal Product Selection-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl mt-0">
              <div class="modal-content modalborder1 mt1">
                      <div class="endp endp1">
                      <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                  </div>
                <div class="modal-header dcenter noborder pt-0">
                  <h1 class="modal-title fs-5 stg1" id="staticBackdropLabel">STRATEGY SELECTION </h1>
                </div>
                
                <div class="modal-body pt-0" id="strategySelection">
                    <div class="row ">
                    {{-- @foreach ($strategy as $data)
                      <div class="col col-sm-4  dcenter " id="strategy_id_{{$data->card_id}}">
                        <div class="card cardsize" style="border: none;">
                          <label class="radio-stock-img">
                            <input type="hidden" id="strategymodal" value="1">
                            <input type="hidden" id="lastSelect" value="">
                            @if($strategy_count == 2) 
                            
                            @else
                             @if($selected_card == $data->card_name  )

                             @else
                             <input type="checkbox" name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" 
                             onclick="selectFunction('myCheck{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')" >
                             
                            @endif
                            @endif

                            @php 
                            $selected_cards = array();
                            if($strategy_count == 1 || $strategy_count >= 2){
                                    foreach($strategy_selected as $datas)
                                    $sel_card = Gameflow::where('card_type', $datas->card_type)->where('user_selected', 1)->get();
                                    
                                    foreach($sel_card as $selected_card)
                                    $selected_cards[] = $selected_card->card_name;
                                    }
                                    else
                                        $selected_cards=0;
                            
                           @endphp
                            <img src="{{$data->card_image}}" class="card-img-top" alt="...">
                            @if($strategy_count >= 2  ) 
                              @foreach ($selected_cards as $item)
                                @if($item == $data->card_name)
                                  <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style="{{($item == $data->card_name  ) ? 'display:block': ''}}">
                                @endif
                              @endforeach

                            @elseif($strategy_count == 1 )                        
                              @foreach ($selected_cards as $item)
                                @if($item == $data->card_name)
                                  <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style="{{($item == $data->card_name  ) ? 'display:block': ''}}">
                                @else
                                  <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  >

                                @endif
                              @endforeach  
                              @elseif($strategy_count < 1)
                              <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  >

                            @endif
                            <span class="btn-over-image">
                              <button type="button" class="btn" onclick="modalclick('#cardModal{{$data->card_id}}')"></button>
                            </span>
                          </label> 
                        </div>
                    </div>
                    @endforeach --}}

                {{-- ///////////////////////////////////////////////////////// --}}
                    @foreach ($strategy as $data)
                      <div class="col col-sm-4  dcenter " id="strategy_id_{{$data->card_id}}">
                        <div class="card cardsize" style="border: none;">
                          <label class="radio-stock-img">                        
                            <img src="{{$data->card_image}}" class="card-img-top @if(isset($datas) && $datas->card_id ==  $data->card_id ) checked_img @else @endif" alt="...">

                              @if(count($strategy_selected)  == 1 || count($strategy_selected)  >= 2)
                                @foreach($strategy_selected as $datas)                                                                                                                                  
                                  <input type="hidden" id="lastSelect" value="">                         
                                
                                    @if(isset($datas) && $datas->card_id ==  $data->card_id )
                                        <input type="checkbox" name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" checked  disabled tabindex="1" $checked[postpoll]>
                                        <input type="hidden" id="strategymodal" value="{{$datas->trans_type}}">
                                        <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style="display:initial"> 

                                    @else                                    
                                      <input type="checkbox" class="extra_loop" name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" 
                                      onclick="selectFunction('myCheck{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')" >
                                      <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style=""> 
                                      @if(isset($datas) && $datas->trans_type == 2 )
                                        <input type="hidden" id="strategymodal" value="2">  
                                          @if(count($strategy_selected)  == 1)
                                          <input type="checkbox" a name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" 
                                          onclick="selectFunction('myCheck{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')" >
                                          <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style="">     
                                          @else
                                            <input type="checkbox" b class="extra_loop" name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" 
                                            onclick="selectFunction('myCheck{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')" >
                                            <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style=""> 
                                          @endif                                        
                                      @else
                                        <input type="hidden" id="strategymodal" value="1"> 
                                      @endif
                                    @endif                                    
                                @endforeach
                            @else
                              <input type="checkbox" name="stock_image[]" value="{{$data->card_invest}}" id="myCheck{{$data->card_id}}" 
                              onclick="selectFunction('myCheck{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')" >
                              <input type="hidden" id="strategymodal" value="1">
                              <img class="selectImg myCheck{{$data->card_id}}" src="{{$data->selected}}" alt=""  style="">

                            @endif
                            <span class="btn-over-image">
                              <button type="button" class="btn" onclick="modalclick('#cardModal{{$data->card_id}}')"></button>
                            </span>
                          </label> 
                        </div>
                    </div>
                    @endforeach


            </div>
                </div>
                       
                <div class="modal-footer noborder dcenter footerbtn ">
                  <button class="btnstyle " id="submit"  type="button"  style="border: none;"><img class="strategyok" src="Images/Ok button.svg" alt=""></button>
                  <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                </div>
              </div>
            </div>
          </div>

         <!-- Product Selection -->
       
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl mt-0">
            <div class="modal-content modalborder1 mt1">
                    <div class="endp endp1">
                    <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                </div>
              <div class="modal-header dcenter noborder pt-0">             
                  <h1 class="modal-title fs-5 stg1">
                PRODUCT SELECTION </h1>
              </div>
              <div class="modal-body pt-0">
                  <div class="row ">
                   
                    @foreach ($product as $data)
                  
                      <div class="col col-sm-4  dcenter product{{$data->card_id}}" id='product_id_{{$data->card_id}}'>
                        <div class="card cardsize " style="border: none;">
                          <label class="radio-stock-img">
                            @php 
                            $selected_cards2 = array();
                            if($product_count == 1 || $product_count >= 2){
                                    foreach($product_selected as $datas)
                                    $sel_card = Gameflow::where('card_type', $datas->card_type)->where('user_selected', 1)->get();
                                    
                                    foreach($sel_card as $selected_card_pro)
                                    $selected_cards2[] = $selected_card_pro->card_name;
                                    // print_r($selected_cards2);
                                    }
                                    else
                                        $selected_cards2=0;
                            
                           @endphp
                             @if(isset($selected_card_pro) && $selected_card_pro->trans_type == 2 )
                             <input type="hidden" id="productmodal" value="2" name="santosh 1" >  
                            @else
                              <input type="hidden" id="productmodal" value="1"> 
                            @endif
                            {{-- <input type="hidden" id="productmodal" value="1"> --}}
                            <input type="hidden" id="lastSelect" value="">
                            {{-- @if($data->is_selected == 1)
                                @if($data->card_id ==1)
                              
                                @else
                               <input type="checkbox" name="stock_image1[]" value="{{$data->card_invest}}" id="check{{$data->card_id}}"
                                onclick="selectProduct('check{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}')">
                                @endif
                            @endif --}}

                            @if($product_count == 2) 
                            
                            @else
                            
                             @if($selected_card == $data->card_name  )

                             @else
                             
                              @if($data->is_selected == 1)

                              @elseif($product_count < 1 && $data->user_selected   )

                              @else
                                @if($product_count <= 1)
                                <input type="checkbox" name="stock_image1[]" value="{{$data->card_invest}}" id="check{{$data->card_id}}" 
                                onclick="selectProduct('check{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')">             
                                <input type="hidden" id="productmodal" value="1" name="santosh 2">  

                                @else
                                    <input type="checkbox" name="stock_image1[]" value="{{$data->card_invest}}" id="check{{$data->card_id}}" checked  disabled tabindex='1' $checked[postpoll]
                                    onclick="selectProduct('check{{$data->card_id}}',{{$data->card_id}},'{{$data->card_type}}',{{$data->card_invest}},'{{$data->card_image}}','{{$data->card_name}}','{{$data->selected}}')">             
                                @endif
                              @endif
                             @endif
                            @endif

                            

                            <img src="{{$data->card_image}}" class="card-img-top @if($data->selected) @endif @if($data->is_selected == 1) defaultcard @endif" alt=".jkjhj.." value="{{$data->card_invest}}">
                            @if($data->is_selected ==1)
                              <img class="selectImg2 check{{$data->card_id}}" src="{{$data->selected}}" alt="" style="display:inline">
                            @endif

                            @if($product_count >= 2  ) 
                            @foreach ($selected_cards2 as $item)
                              @if($item == $data->card_name)
                                 <img class="selectImg2 check{{$data->card_id}}" src="{{$data->selected}}" alt="qwer"  style="{{($item == $data->card_name  ) ? 'display:inline': ''}}">
                              @endif
                            @endforeach

                          @elseif($product_count == 1 )                        
                            @foreach ($selected_cards2 as $item)
                              @if($item == $data->card_name)
                                <img class="selectImg2 check{{$data->card_id}}" src="{{$data->selected}}" alt="adf"  style="{{($item == $data->card_name  ) ? 'display:inline': ''}}">
                                <input type="checkbox" name="stock_image1[]" value="{{$data->card_invest}}" id="check{{$data->card_id}}" checked  disabled tabindex='1' $checked[postpoll]>
                              @else
                                <img class="selectImg2 check{{$data->card_id}}" src="{{$data->selected}}" alt=""  >

                              @endif
                            @endforeach  
                            @elseif($product_count < 1)
                              <img class="selectImg2 check{{$data->card_id}}" src="{{$data->selected}}" alt=""  >

                          @endif
                            <span class="btn-over-image">
                              <button type="button" class="btn" onclick="modalclick('#productModal{{$data->card_id}}')"></button>
                            </span>
                          </label> 
                          </div>
                    </div>
                @endforeach

             
          </div>
              </div> 
              <div class="modal-footer noborder dcenter footerbtn">
                  <button class="btnstyle" type="button" id="pro_submit" style="border: none;"><img src="Images/Ok button.svg" alt="" width="55%"></button>
                  <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                </div>
            </div>
          </div>
        </div>
        
        <!-- Modal 4 -->
        <div class="modal fade backblur" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card-4.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal3')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal 5 -->
        <div class="modal fade backblur" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card-1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal1')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal 6 -->
        <div class="modal fade backblur" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card-2.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal2')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
       
        <!-- Modal 7 -->
        <div class="modal fade backblur" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card-3.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal4')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal 8 -->
        <div class="modal fade backblur" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card-5.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal5')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
       
        <!-- Modal 9 -->
        <div class="modal fade backblur" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/flip Card.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal6')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/EBD.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#exampleModal8','#exampleModal7')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/EBD1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#exampleModal8')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
       
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#Modal1','#example1')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 12.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#Modal1')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
       
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-1.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-target="#Modal2"></button>
                <!-- data-bs-toggle="modal" -->
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 17.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/KHD.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#Modal3','#example3')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/KHD1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#Modal3')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-3.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal4"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 18.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/MO.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#Modal5','#example5')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/MO1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#Modal5')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>

        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-5.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal6"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 19.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
     
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/FLTC.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#Modal7','#example7')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade backblur" id="Modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/FLTC1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#Modal7')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
        
        <!-- Modal 10 -->
        <div class="modal fade" id="example8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-7.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal8"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 20.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
        
        <!-- Modal 10 -->
        <div class="modal fade" id="example9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-7.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal9"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="Modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 20.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->   >
        <!-- Modal 10 -->
        <div class="modal fade" id="example10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-9.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal10"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="Modal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 21.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
  
        <!-- Modal 10 -->
        <div class="modal fade backblur" id="example11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/VS.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" onclick="openNext('#Modal11','#example11')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="Modal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/VS1.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn" onclick="closemodal('#Modal11')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
  
        <!-- Modal 10 -->
        <div class="modal fade" id="example12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/flip Card-11.svg" alt="" srcset="">
              <div class="nxtbtn dcenter">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal12"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="Modal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/Untitled/Group 22.svg" alt="" srcset="">
              <div class="scbtn dend">
                <button type="button" class="btn "></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
  
        <div class="modal fade bd-example-modal-lg" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered mt-0" style="margin-left: 70px;margin-right: 8vw; ">
            <div class="modal-content modalborder1 modalsize2 mt1">
                    <div class="endp endp1">
                    <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                </div>
              <div class="modal-header dcenter noborder pt-0">
                <h1 class="modal-title fs-5 stg1" id="staticBackdropLabel">ADs &amp; MARKETING </h1>
              </div>
              
              <div class="modal-body pt-0">
                  <div class="row mb-4">
              <div class="col dcenter">
                  <div class="card mt-3" style="width: 16rem; border: none;">
                      <img src="assets/AD &amp; M/AD SPENT &amp; INCENTIVE.svg" class="card-img-top" alt="...">
                      <!-- row 1 -->
                      <div class="row flagrow1">
                        <div class="col col-sm-6">
                          <img src="assets/AD &amp; M/green flag.svg" alt="" value="1" data-price="1">
                        </div>
                        <div class="col col-sm-6">
                          <img src="assets/AD &amp; M/Purple flag.svg" alt="" value="2" data-price="2">
                        </div>
                      </div>
                      <!-- row 2 -->
                      <div class="row flagrow2">
                        <div class="row2">
                          <img src="assets/AD &amp; M/Red flag.svg" alt="" value="3">
                        </div>
                      </div>
                      <!-- row 3 -->
                      <div class="row flagrow3">
                        <div class="col col-sm-6">
                          <img src="assets/AD &amp; M/Blue Flag.svg" alt="" value="1">
                        </div>
                        <div class="col col-sm-6">
                          <img src="assets/AD &amp; M/Yellow flag.svg" alt="" value="2">
                        </div>
                      </div>
                      <!-- row 4 -->
                      <div class="row">
                        <div class="row4 dcenter">
                          <img src="assets/AD &amp; M/Pink Flag.svg" alt="" value="3">
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col dcenter ">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/AD &amp; M/Store.svg" class="card-img-top" alt="...">
                      <div class="row" style="margin-top:-178px ;">
                        <div class="col p-0 dcenter dropimg drop-adspent">
                          <img src="assets/AD &amp; M/Red flag.svg" alt="" style="margin-right:-50px;">
                        </div>
                        <div class="col p-0 dcenter dropimg">
                          <img src="assets/AD &amp; M/Blue Flag.svg" alt="" style="margin-left:-50px ;">
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col dcenter">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/AD &amp; M/Agent.svg" class="card-img-top" alt="...">
                      <div class="row" style="margin-top:-178px ;">
                        <div class="col p-0 dcenter dropimg">
                          <img src="assets/AD &amp; M/Purple flag.svg" alt="" style="margin-right:-50px;">
                        </div>
                        <div class="col p-0 dcenter dropimg">
                          <img src="assets/AD &amp; M/Yellow flag.svg" alt="" style="margin-left:-50px ;">
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col dcenter">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/AD &amp; M/Online.svg" class="card-img-top" alt="...">
                      <div class="row" style="margin-top:-178px ;">
                        <div class="col p-0 dcenter dropimg">
                          <img src="assets/AD &amp; M/green flag.svg" alt="" style="margin-right:-50px;">
                        </div>
                        <div class="col p-0 dcenter dropimg">
                          <img src="assets/AD &amp; M/Pink Flag.svg" alt="" style="margin-left:-50px ;">
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
              <div class="modal-footer noborder dcenter mt-2 footerbtn">
                <button class="btnstyle" type="button" data-bs-dismiss="modal" style="border: none;"><img src="Images/Ok button.svg" alt="" width="55%"></button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal end -->
  
      <!-- Modal 2-->
        <div class="modal fade" id="staticBackdop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered mt-0">
            <div class="modal-content modalborder1 modalsize2 mt1">
                    <div class="endp endp1">
                    <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                </div>
              <div class="modal-header dcenter noborder pt-0">
                <h1 class="modal-title fs-5 stg1" id="staticBackdropLabel">ADS AND MARKETING</h1>
              </div>
              
              <div class="modal-body pt-0 pb-0">
                  <div class="row gx-0 mb-4 mb-ads">
              <div class="col-md-3 dcenter" ondragover="dragover(event)" ondrop="rdrop(event);">
                  <div class="card adsFlagcard">
                      <img src="assets/AD &amp; M/AD SPENT &amp; INCENTIVE1.svg" class="card-img-top" alt="...">
                      <!-- row 1 -->
                      <div class="row flagrow1 justify-content-center ">

                        @foreach ($flags_ads_spent as $flag_ads)
                          <div class='col col-sm-6'>
                          <img draggable='true' id='src_copy{{$flag_ads->card_id}}' name="{{$flag_ads->card_name}}" class='flagP2M' ondragstart='dragstart_handler(event);' ondragend='dragend_handler(event);' src='{{$flag_ads->card_image}}' alt='' value='{{$flag_ads->card_invest}}'>
                          </div>
                        @endforeach

                      </div>
                      <!-- row 2 -->
                       
                      <!-- Incentive Flags -->
                      <!-- row 3 -->
                      <div class="row flagrow3 justify-content-center ">
                        @foreach ($flags_incentive as $flag_inc)
                          <div class='col col-sm-6'>
                            <img draggable='true' id='flag_copy{{$flag_inc->card_id}}' name="{{$flag_inc->card_name}}" class='flagK{{$flag_inc->card_id}}M' ondragstart='dragstart2(event);' ondragend='dragend2(event);' src='{{$flag_inc->card_image}}' alt='' value='{{$flag_inc->card_invest}}'>

                        </div>
                        @endforeach
                 
                    </div>
                  </div>
              </div>
              @if(count($flag_selected) >= 1 )
              
                <div class="col-md-3 dcenter" id="store">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/AD & M/Store.svg" class="card-img-top" alt="...">
                      <div class="row flagdrop">
                        <div class="col p-0 dcenter marl1" id="dest_copy1" >
                          <img src="{{$product_flag['0']}}"  alt="">
                        </div>
                        <div class="col p-0 dcenter dropimg" id="copy_desc1" >
                          <img src="{{$product_flag['1']}}"  alt="">
                        </div>
                      </div>
                    </div>
              </div>
                <div class="col-md-3 dcenter" id="agent">
                    <div class="card" style="width: 22rem; border: none;">
                        <img src="assets/AD &amp; M/Agent.svg" class="card-img-top" alt="...">
                        <div class="row flagdrop">
                          <div class="col p-0 dcenter marl1" id="dest_copy2" >
                            <img src="{{$product_flag['2']}}"  alt="">
                          </div>
                          <div class="col p-0 dcenter dropimg" id="copy_desc2" >
                            <img src="{{$product_flag['3']}}"  alt="">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-3 dcenter" id="online">
                    <div class="card" style="width: 22rem; border: none;">
                        <img src="assets/AD &amp; M/Online.svg" class="card-img-top mb-2" alt="...">
                        <div class="row flagdrop flagdrop2">
                          <div class="col p-0 dcenter marl1" id="dest_copy3" >
                            <img src="{{$product_flag['4']}}"  alt="">
                          </div>
                          <div class="col p-0 dcenter dropimg" id="copy_desc3" >
                            <img src="{{$product_flag['5']}}"  alt="">
                          </div>
                        </div>
                      </div>
                </div>

              @else
              
                <div class="col-md-3 dcenter" id="store">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/AD & M/Store.svg" class="card-img-top" alt="...">
                      <div class="row flagdrop">
                        <div class="col p-0 dcenter marl1" id="dest_copy1" ondrop="drop_handler1(event,'dest_copy1');" ondragover="dragover_handler(event);">
                        </div>
                        <div class="col p-0 dcenter dropimg" id="copy_desc1" ondrop="drop_handler2(event,'copy_desc1');" ondragover="dragover2(event);">
                        </div>
                      </div>
                    </div>
              </div>
                <div class="col-md-3 dcenter" id="agent">
                    <div class="card" style="width: 22rem; border: none;">
                        <img src="assets/AD &amp; M/Agent.svg" class="card-img-top" alt="...">
                        <div class="row flagdrop">
                          <div class="col p-0 dcenter marl1" id="dest_copy2" ondrop="drop_handler1(event,'dest_copy2');" ondragover="dragover_handler(event);">
                          </div>
                          <div class="col p-0 dcenter dropimg" id="copy_desc2" ondrop="drop_handler2(event,'copy_desc2');" ondragover="dragover2(event);">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-3 dcenter" id="online">
                    <div class="card" style="width: 22rem; border: none;">
                        <img src="assets/AD &amp; M/Online.svg" class="card-img-top mb-2" alt="...">
                        <div class="row flagdrop flagdrop2">
                          <div class="col p-0 dcenter marl1" id="dest_copy3" ondrop="drop_handler1(event,'dest_copy3');" ondragover="dragover_handler(event);">
                          </div>
                          <div class="col p-0 dcenter dropimg" id="copy_desc3" ondrop="drop_handler2(event,'copy_desc3');" ondragover="dragover2(event);">
                          </div>
                        </div>
                      </div>
                </div>
            @endif
          
          </div>      
            </div>
              <div class="modal-footer noborder dcenter mt-2 footerbtn" style="width: 76vw;">
                <button class="btnstyle" id="drop_flag" type="button" onclick="adsOkbtn()" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
              </div>
          </div>
          </div>
        </div>
     
        <!-- Modal 3-->
        <div class="modal fade" id="staticBackdop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl productYear1 mt-0">
          <!-- <div class="modal-dialog modal-dialog-centered modal-lg mt-0"> -->
            <div class="modal-content modalborder1 mt1">
                    <div class="endp endp1">
                    <button type="button" class="backbtn dend" style="padding-right: 26px;" data-bs-dismiss="modal" aria-label="Close"><img src="Images/Back Button.svg" width="50%" alt=""></button>
                </div>
              <div class="modal-header dcenter noborder pt-0">
                <h1 class="modal-title fs-5 stg1" id="staticBackdropLabel">PRODUCT LAUNCH- YEAR 1 </h1>
              </div>
              <form method="" action="javascript:void(0)" name="product_launch" id="product_launch">

              <div class="modal-body pt-0">
                  <div class="row g-0">

              <div class="col dcenter">
                      <!-- row 1 -->
                      <div class="col cards1" ondrop="rdrop(event);" ondragover="dragover(event)" style="max-width:73%; margin-top:-6%">
                        <div class="dcenter">
                        <div class="card-title2 dcenter">CARDS</div>
                      </div>
                      <div class="imgwidth1">
                        @foreach ($product_selected_cus as $data)
                          @if($data->is_selected == 1)
                          <div class="col   dcenter ">
                            <div class="card cardsize append_prod_launch" style="border: none;">
                              <label class="radio-stock-img">
                                <img draggable="true" id="img_copy{{$data->card_id}}" name='{{$data->card_name}}'  onclick="modalclick('#productModal{{$data->card_id}}')" class="card-img-top" ondragstart="dragstart(event);" ondragend="dragend(event);" src="{{$data->card_image}}" value="{{(isset($data->invest_amount)) ? $data->invest_amount : 0}}" alt="select image">
                                <span class="btn-over-image">
                                  <button type="button" class="btn" onclick="modalclick('#productModal{{$data->card_id}}')"></button>
                                </span>
                              </label> 
                            </div>
                          </div>
                        @elseif($data->user_selected == 1)
                          <div class="col   dcenter ">
                            <div class="card cardsize" style="border: none;">
                              <label class="radio-stock-img">
                              {{-- <img src="{{$data->card_image}}" class="card-img-top" alt="..."> --}}
                              <img draggable="true" id="img_copy{{$data->card_id}}" name='{{$data->card_name}}' id='{{$data->card_id}}' onclick="modalclick('#productModal{{$data->card_id}}')" class="card-img-top" ondragstart="dragstart(event);" ondragend="dragend(event);" src="{{$data->card_image}}" value="{{$data->invest_amount}}" alt="select image">

                                <span class="btn-over-image">
                                  <button type="button" class="btn" onclick="modalclick('#productModal{{$data->card_id}}')"></button>
                                </span>
                              </label> 
                            </div>
                          </div>
                        @endif
                      @endforeach
                      {{-- <div class="col dcenter">
                         <img draggable="true" id="img_copy" ondragstart="dragstart(event);" ondragend="dragend(event);" src="" alt="select image">
                        </div>
                        <div class="col dcenter">
                        <img draggable="true" id="img_copy1" ondragstart="dragstart(event);" ondragend="dragend(event);" src="" alt="select image">
                      </div>
                      <div class="col dcenter mb-2">
                        <img draggable="true" id="img_copy2" ondragstart="dragstart(event);" ondragend="dragend(event);" src="" alt="select image">
                      </div> --}}
                    </div>
                   
                    </div>
              </div>

              <div class="col-md-3 dcenter">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/G-B-img/store.svg" class="card-img-top" alt="...">
                      <div class="row card3" style="height:106px ;">
                        @if(isset($prod_flag['key3']['1']) && $prod_flag['key3']['1'] != '')                        
                          <div class="col dcenter" id="des_copy1" ondrop="drop(event,'des_copy1');" ondragover="dragover(event)">
                            <img draggable="true"   onclick="modalclick('#productModal')" class="card-img-top" src="{{$prod_flag['key3']['0']}}" name="{{$prod_flag['key5']['0']}}" value="{{$prod_flag['key4']['0']}}" alt="select image">
                            @php                
                                $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['0'])->first();                       
                            @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                          </div>
                        @else
                          <div class="col dcenter" id="des_copy1" ondrop="drop(event,'des_copy1');" ondragover="dragover(event)"></div>
                        @endif
                        <div class="col">NA</div>
                      </div>
                      <div class="row cardsup2 ">
                       
                        <div class="col dcenter p-0 pl-0 Incflag1">
                          @if(count($flag_selected) >= 1)<img src="{{ $product_flag['0'] }}" value="{{$flag0->card_invest }}" name="{{$flag0->card_name}}" id='{{$flag0->card_name}}'  alt="Plz select santosh flag" style="">@endif
                      </div>
                      <div class="col dcenter pl-1 adflag1">
                        @if(count($flag_selected) >= 1)<img src="{{ $product_flag['1'] }}" value="{{$flag1->card_invest }}" name="{{$flag1->card_name}}" id='{{$flag1->card_name}}' alt="Plz select flag"   style="">@endif
                      </div>
                      </div>
                    </div>
              </div>
              <div class="col-md-3 dcenter">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/G-B-img/Agent.svg" class="card-img-top" alt="...">
                      <div class="row card3" style="height:106px ;">
                        @if(isset($prod_flag['key3']['1']) && $prod_flag['key3']['1'] != '')                        
                          <div class="col dcenter" id="des_copy2" ondrop="drop(event,'des_copy2');" ondragover="dragover(event)">
                            <img draggable="true"   onclick="modalclick('#productModal')" class="card-img-top" src="{{$prod_flag['key3']['1']}}" name="{{$prod_flag['key5']['1']}}" value="{{$prod_flag['key4']['1']}}" alt="select image">
                            @php                
                                $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['1'])->first();                       
                            @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                          </div>
                        @else
                        <div class="col dcenter" id="des_copy2" ondrop="drop(event,'des_copy2');" ondragover="dragover(event)"></div>
                        @endif
                        <div class="col">NA</div>
                      </div>
                      <div class="row cardsup2">
                        <div class="col dcenter p-0 pl-2 Incflag1">
                          @if(count($flag_selected) >= 1)<img src="{{ $product_flag['2'] }}" value="{{$flag2->card_invest }}" name="{{$flag2->card_name}}" id='{{$flag2->card_name}}' alt="Plz select flag" style="">@endif
                      </div>
                      <div class="col dcenter pl-3 adflag1">
                        @if(count($flag_selected) >= 1)<img src="{{ $product_flag['3'] }}" value="{{$flag3->card_invest }}" name="{{$flag3->card_name}}" id='{{$flag3->card_name}}' alt="Plz select flag" style="">@endif
                      </div>
                      </div>
                    </div>
              </div>
              <div class="col-md-3 dcenter">
                  <div class="card" style="width: 22rem; border: none;">
                      <img src="assets/G-B-img/Online.svg" class="card-img-top" alt="...">
                      <div class="row card3" style="height:106px ;">
                        @if(isset($prod_flag['key3']['2']) && $prod_flag['key3']['2'] != '')                        
                          <div class="col dcenter" id="des_copy2" ondrop="drop(event,'des_copy2');" ondragover="dragover(event)">
                            <img draggable="true"   onclick="modalclick('#productModal')" class="card-img-top" src="{{$prod_flag['key3']['2']}}" name="{{$prod_flag['key5']['2']}}" value="{{$prod_flag['key4']['2']}}" alt="select image">
                            @php                
                              $card_id   = DB::table('cards')->where('card_name',$prod_flag['key5']['2'])->first();                       
                          @endphp
                          <span class="btn-over-image">
                            <button type="button" class="btn" onclick="modalclick('#productModal{{$card_id->card_id}}')"></button>
                          </span>
                          </div>
                        @else
                        <div class="col dcenter" id="des_copy3" ondrop="drop(event,'des_copy3');" ondragover="dragover(event)"></div>
                        @endif
                        <div class="col">NA</div>
                      </div>
                      <div class="row cardsup2">
                        <div class="col dcenter p-0 pl-4 Incflag1">
                          @if(count($flag_selected) >= 1)<img src="{{ $product_flag['4'] }}" value="{{$flag4->card_invest }}" name="{{$flag4->card_name}}" id='{{$flag4->card_name}}' alt="Plz select flag" style="">@endif
                      </div>
                      <div class="col dcenter pl-5 adflag1">
                        @if(count($flag_selected) >= 1)<img src="{{ $product_flag['5'] }}" value="{{$flag5->card_invest }}" name="{{$flag5->card_name}}" id='{{$flag5->card_name}}' alt="Plz select flag" style="">@endif
                      </div>
                      </div>
                    </div>
                  </div>
                </div>        
              </div>
              <div class="modal-footer noborder dcenter mt-2 footerbtn">
                <button class="btnstyle mt-2" id="product_launch_btn" type="submit" onclick="closemodal('#staticBackdop3')" style="border: none;">
                  {{-- <input type="submit" class="btn btn-success" id="form_submit_btn" name="form_submit_btn" > --}}
                  <img src="Images/Ok button.svg" alt="" width="55%">
                </button>
              </div>
            </form>
          </div>
          </div>
        </div>
     
        <!-- modals section end -->
        <!-- alert modal -->
        @if($strategy_selected)

        @else
        <div class="modal fade" id="alertModal" tabindex="-1" data-bs-toggle="modal" aria-labelledby="exampleModalLabel" style="z-index: 9999; backdrop-filter: blur(5px); display: none;" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modalcont1">
              <div class="modal-header mt-n1 modalp">
                <h3 class="modal-title fs-5 title1" id="exampleModalLabel">NOTIFICATION</h3>
              </div>
              <div class="modal-body txt2 pb-0">
                <h3>CLICK ON "START" BUTTON TO START THE GAME</h3>
              </div>
              <div class="pb-1" style="display: flex; justify-content: center;">
              <button type="button" class="btn" onclick="okTostart()" data-dismiss="#alertModal"><img src="assets/G-B-img/Ok-notification.svg" alt="" width="60%"></button>
              </div>
            </div>
          </div>
        </div>
        @endif
        <!-- alert modal -->

        <!-- Modal --> 
        {{-- <!-- Modal 4 -->  martix --}}
        {{-- <div class="modal fade backblur" id="MyModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="Images/flip-card/NewImg/Cardccc.svg" alt="" srcset="">
              <div class="infoCardX">
                <button type="button" class="btn" onclick="openNext('#ImpactModal','#MyModal1')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div> --}}
  
        <!-- Modal 5 -->
        {{-- <div class="modal fade backblur" id="ImpactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content nobg">
              <img src="img/StImpact1.svg" alt="" srcset="">
              <div class="stImpactX">
                <button type="button" class="btn" onclick="closemodal('#ImpactModal')"></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div> --}}
      
        {{-- strategy modal  dont touch below code --}}
        @foreach ($strategy as $data)
            <div class='modal fade backblur' id='cardModal{{$data->card_id}}' tabindex='-1' aria-labelledby='cardModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content nobg'>
              <img src='{{$data->card_desc}}' alt='' srcset=''>
            <div class='scbtn dend'>
              <button type='button' class='btn' onclick='closemodal(`#cardModal{{$data->card_id}}`)'></button>
            </div>
            <div class='modal-body'>
            </div>
            </div>
            </div>
            </div>
        @endforeach
  
        {{-- product modal --}}
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

{{-- strategy card matrix calculation --}}
{{-- {{dd($strategy);}} --}}
@foreach ($strategy as $data)
            <div class='modal fade backblur' data-bs-backdrop="static" id='MyModal{{$data->card_id}}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content nobg'>
              <img src='{{$data->card_matrix}}' alt='' srcset=''>
            <div class='infoCardX dend'>
              <button type='button' class='btn'
              onclick='openNext(`#Matrixbox`,`#MyModal{{$data->card_id}}`,{{$data->card_id}},`{{$data->card_name}}`,`{{$data->card_type}}`,{{(isset($data->c_sat)) ? $data->c_sat : 0}},{{(isset($data->brand_val) ? $data->brand_val : 0)}},{{(isset($data->emp_engagement)) ? $data->emp_engagement : 0}},{{(isset($data->col_effi)) ? $data->col_effi : 0}})'></button>
            </div>
            <div class='modal-body'>
            </div>
            </div>
            </div>
            </div>
        @endforeach

         <!-- Modal 2-->
         @include('Game.matrix')
         @include('Game.record_cos')
  {{-- impact modal --}}

  @foreach ($strategy as $data)
            @if($data && $data->card_impact !='')
            <div class='modal fade backblur' data-bs-backdrop="static" id='ImpactModal{{$data->card_id}}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content nobg'>
              <img src='{{$data->card_impact}}' alt='' srcset=''>
            <div class='stImpactX dend'>
              <button type='button' onclick="strategy_impact('card{{$data->card_name}}','ImpactModal{{$data->card_id}}')" class='btn' ></button>
            </div>
            <div class='modal-body'>
            </div>
            </div>
            </div>
            </div>
            @endif
        @endforeach

    {{-- matrix modal range --}}

        
      
  <script src="  https://cdn.jsdelivr.net/npm/browserify-fs@1.0.0/index.min.js "></script>       
   <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
   
   <script>
 // Find all checked checkboxes with the specified name
var checkedCheckboxes = document.querySelectorAll('input[type="checkbox"][name="stock_image[]"]:checked');

// Loop through the checked checkboxes
for (var i = 0; i < checkedCheckboxes.length; i++) {
  var id = checkedCheckboxes[i].id;
  var parentElement = document.getElementById(id).closest('.radio-stock-img');

  // Add a class to the first img tag inside parentElement
  var firstImg = parentElement.querySelector('img');

  if (firstImg) {
    firstImg.classList.add('checked_img'); // Replace 'your-class-to-add' with the desired class name
  }
}

 // Product Selection
var checkedproduct = document.querySelectorAll('input[type="checkbox"][name="stock_image1[]"]:checked');

for (var i = 0; i < checkedproduct.length; i++) {
  var id = checkedproduct[i].id;
  var parentElement = document.getElementById(id).closest('.radio-stock-img');

  var firstproImg = parentElement.querySelector('img');
  if (firstproImg) {
    firstproImg.classList.add('checked_img');
  }
}


</script>


  <script>
    function strategy_impact(card_name,close){
      var close = '#'+close;
      if(card_name == "cards5"){
        openNext('#cosrecord',close);
      }
      else{
        openNext('#salesrecord',close);
      }
    }

    function productselectionmodal(){
      $("#staticBackdop3").modal("show");
      const myTimeout = setTimeout(displaybutton, 600);
      function displaybutton(){
      $("#adsModal").modal("show");}
    }
    function marketingmodal(){
      $("#staticBackdop2").modal("show");
      const myTimeout = setTimeout(displaybutton, 600);
      function displaybutton(){
      $("#adsModal").modal("show");}
    }
    
    // function customerItmodal(){
    //   alert("Customer & IT services") }
    
      
      function productlaunch(){
    $("#staticBackdop3").modal("show");
    const myTimeout = setTimeout(displaybutton, 600);
            function displaybutton(){
            $("#ProductModal").modal("show");}
          }
   
  
  $(document).ready(function(){
    $(".extra_loop").remove();
    $("#alertModal").modal('show');
      $("#strategySelection input").on("click", function(){
          var dataId = $("#strategymodal").val();
        var a  =  $('input:checkbox:checked').length;
    var times = $("#strategymodal").val();
        times = times+1;
        if(a < times){
          // alert ('checked only 1')Examplemodal
        }
        else{
        $("#exampleModal").modal("show");
        if(a > 1){
          $("#Examplemodal").modal("show");
          }
      return false
      }
      });
      var check_length  =  $('input:checkbox:checked').length;
      if(check_length < 1){
        okTostart();
    }
  });
    
  
$(document).ready(function () {
  $('#product_launch').on('submit', function (event) {
      event.preventDefault();
      var flag_img_1 =$('.pl-0  img').attr('src');
      var flag_img_2 =$('.pl-1  img').attr('src');
      var flag_img_3 =$('.pl-2  img').attr('src');
      var flag_img_4 =$('.pl-3  img').attr('src');
      var flag_img_5 =$('.pl-4  img').attr('src');
      var flag_img_6 =$('.pl-5  img').attr('src');

      var flag_val_1 =$('.pl-0  img').attr('value');
      var flag_val_2 =$('.pl-1  img').attr('value');
      var flag_val_3 =$('.pl-2  img').attr('value');
      var flag_val_4 =$('.pl-3  img').attr('value');
      var flag_val_5 =$('.pl-4  img').attr('value');
      var flag_val_6 =$('.pl-5  img').attr('value');

      var flag_name_1 =$('.pl-0  img').attr('name');
      var flag_name_2 =$('.pl-1  img').attr('name');
      var flag_name_3 =$('.pl-2  img').attr('name');
      var flag_name_4 =$('.pl-3  img').attr('name');
      var flag_name_5 =$('.pl-4  img').attr('name');
      var flag_name_6 =$('.pl-5  img').attr('name');

      var flag_img = [];
      var flag_val = [];
      
      flag_img.push(flag_img_1,flag_img_2,flag_img_3,flag_img_4,flag_img_5,flag_img_6);    
      flag_val.push(flag_val_1,flag_val_2,flag_val_3,flag_val_4,flag_val_5,flag_val_6);   

      var newObj = {}; 
      for (var i = 0; i < flag_img.length; i++) { 
        newObj[flag_img[i]] = flag_val[i]; 
      } 
      const flag_entries = Object.entries(newObj);
      // console.log(flag_entries);

    var obj = {
    key1: [],
    key2: [],
    key3: [],
    key4: [],
    key5: [],
    key6: [],
            };


  obj['key1'].push(flag_img_1,flag_img_2,flag_img_3,flag_img_4,flag_img_5,flag_img_6); 
  obj['key2'].push(flag_val_1,flag_val_2,flag_val_3,flag_val_4,flag_val_5,flag_val_6); 
  obj['key6'].push(flag_name_1,flag_name_2,flag_name_3,flag_name_4,flag_name_5,flag_name_6); 


      var pro_img_1 =$('#des_copy1 #newIddes_copy1').attr('src');
      var pro_img_2 =$('#des_copy2 #newIddes_copy2').attr('src');
      var pro_img_3 =$('#des_copy3 #newIddes_copy3').attr('src');

      var pro_val_1 =$('#des_copy1 #newIddes_copy1').attr('value');
      var pro_val_2 =$('#des_copy2 #newIddes_copy2').attr('value');
      var pro_val_3 =$('#des_copy3 #newIddes_copy3').attr('value');

      var pro_name_1 =$('#des_copy1 #newIddes_copy1').attr('name');
      var pro_name_2 =$('#des_copy2 #newIddes_copy2').attr('name');
      var pro_name_3 =$('#des_copy3 #newIddes_copy3').attr('name');

      var pro_img = [];
      var pro_val = [];
      
      pro_img.push(pro_img_1,pro_img_2,pro_img_3);    
      pro_val.push(pro_val_1,pro_val_2,pro_val_3);   

      obj['key3'].push(pro_img_1,pro_img_2,pro_img_3);
      obj['key4'].push(pro_val_1,pro_val_2,pro_val_3);
      obj['key5'].push(pro_name_1,pro_name_2,pro_name_3);

      var flaggs = JSON.stringify(obj);
  // console.log(flaggs);

      // pro_total_val = parseInt(pro_val_1)+parseInt(pro_val_2)+parseInt(pro_val_3);
      pro_total_val = 0;

      var pro_Obj = {}; 
      for (var i = 0; i < pro_img.length; i++) { 
        pro_Obj[pro_img[i]] = pro_val[i]; 
      } 
      const pro_entries = Object.entries(pro_Obj);
      // console.log(pro_entries);
     
          $.ajax({
              type: "get",
              url: "/public/product_launch/",
              // url: "/product_launch",
              dataType:"Json",
              data: {flag_entries,pro_entries,pro_total_val,flaggs},
              
              success: function (res) {
                // console.log(res.decode)  
                if(res.decode){
                  document.getElementById('cash1').innerHTML= parseInt(res.game_flow.total_coin);
                  document.getElementById('cash').innerHTML= parseInt(res.game_flow.total_coin);
                  document.getElementById('assets').innerHTML= res.assets;
                  const plaunchid = ['cash','assets'];
                  for(let i = 0; i < plaunchid.length; i++){
                    impactRef(plaunchid[i]);
                  }

                $("#product_launch").attr('id','');
                $("#product_launch_btn").attr('type','');
                fillblink("finish_circle","launchY1btn");
                // slidetest('move-right','containerCard');
             
                $('.finishbtn').css('cursor', 'pointer');
                $('.finishbtn').attr('onclick', 'finish_setup()');
                
                }
                else{
                  console.log(res)  
                }                  
              },
              error: function (err) {
                  alert("Flag Already Upload, Please Contact Administrator .");  
              },
          });    
        });
      });

  function finish_setup(){
    $("#ExampleModal6").modal("show");
  }

  function closeAllModal() {
    $('.modal').modal("hide");
  } 
  </script>  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/custom.js')}}"></script>
  <script src="{{ asset('js/script.js')}}"></script>
    
  </body>
  </html>