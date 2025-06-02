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
      margin-top: -6.2rem;
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
  
  </style>
  
</head>
  
  <body>   @include('Game.year1_summary_board.svg')</body>

  </html>