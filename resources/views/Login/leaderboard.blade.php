<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming-Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="custome.css">

</head>
<style>
  .modal-footer{
    border: 0;
  }
    .TLtopBtn {
    padding: 1rem 1rem;
   }
   .adminheading{
    background: radial-gradient(150% 422.26% at 50.03% 52.94%, rgba(48, 172, 255, 0.8) 0%, rgba(37, 146, 228, 0.822043) 16.67%, rgba(27, 121, 203, 0.842708) 32.29%, rgba(10, 73, 121, 0.928258) 32.3%, rgba(45, 87, 160, 0.901042) 50.52%, rgba(14, 88, 147, 0.900665) 63.54%, rgba(24, 126, 209, 0.834442) 68.75%, #002136 100%) /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */;
background-blend-mode: screen;
background-image: url('Images/RectangleAdminbg.svg');
justify-content: center;
color: white;
font-size: larger;
font-weight: 600;
   }
.rowpattern1 .teamName img{
  width: 2rem;
}
.modalbg2{
    background: linear-gradient(359.76deg, #00339D 4.59%, #1159C7 22.47%, #003174 51.16%, #022A67 73.62%, #041D63 107.23%),
linear-gradient(0deg, #9DB7FF, #9DB7FF);
border-radius: 22px;
border: 6px solid #9DB7FF;
}
.topbtn1 img{
  width: 7rem;
}
.topbtn2 img{
  width: 9rem;
}
.topbtn3 img{
  width: 3rem;
}
.TLtopBtn .row .fitcnt{
  width: fit-content;
}
.TLtopBtn .row .fitcnt .btn2 img{width: 9.3rem;}
.TLtopBtn .row .fitcnt .btn3 img{width: 9.9rem;}

:root{
  --Marginbottom:2rem;
  --Margintop:-2rem;
}
.rowhide{
display: none;}
.rowpattern2{
  background-color: #1C5E8A;
  background: linear-gradient(0deg, #0663D0, #0663D0),
linear-gradient(0deg, #FFFFFF, #FFFFFF);
  /* background: linear-gradient(174.2deg, #98C8E8 -74.46%, rgba(4, 129, 213, 0) 95.39%),
linear-gradient(0deg, #FFFFFF, #FFFFFF); */
  border-radius: 5px;
  padding: 0.5rem;
  color: white;
  border: 1px solid;
  position: absolute;
  z-index: 20;
  width: 90%;
  margin-left: 1px;
  margin-top: var(--Margintop);
}
.rowpattern1{
  color: white;
  font-size: 1.5rem;
  border: 3px solid #9DB7FF;
  border-radius: 10px;
  padding: 5px;
  background: linear-gradient(359.76deg, #1159C7 0.25%, #003174 82.72%),
linear-gradient(0deg, #9DB7FF, #9DB7FF);
margin-bottom: var(--Marginbottom);
}
.fontwhite{
  color: #fff;
}
.Profileimg .img{
  background: white;
    border-radius: 50%;
    height: 2rem;
    width: 2rem;
    border: 1px solid;
}
.textwidth{
  width: fit-content;
}
.AddUsertitle{
  display: flex;
  justify-content: center;
}
.AddUsertitle img{
  width: 12rem;
}
#adduser .header{
  margin-top: -32px;
}
.closeXbtn .Ximg{
  margin-right: -35px;
  margin-left: -35px;
  float: right;
  width: 4rem;
}
.savebtn img{
  width: 7rem;
}
.labelstyle{
  color: #fff;
  margin-top: 1rem;
  margin-left: 14px;
  transform: translate(6px,13px) scale(1.2);
  padding: 0 4px;
}
.Adduserform input{
  width: 100%;
  height: 40px;
  background: none;
  border: 2px solid #FFFFFF;
  border-radius: 8px;
  box-shadow: 3px 3px #225195;
}
.Importcontainer{
  padding: 0px 6rem;
}
.Importcontainer .bgimg img{
  width: 93%;
}
/* #import .header, #profile .header{ */
.header{
  margin-top: -35px;
}
.bgimg .tablerow{
  position: absolute;
  justify-content: center;
  margin-left: 3rem;
    margin-top: 3rem;
}
.bgimg .tablerow .namebox{
  color: #FFFFFF;
  width: 72%;
}
.bottombtn .row{
  width: 85%;
}
.bottombtn button img{
  width: 100%;
}
.bottombtn .buttonimg{
  width: 2.3rem;
}
.defaultbuttonimg{
  width: 8rem;
}
.bottombtn {
  margin-top: 1.2rem;
}
.profileDp img{width: 100%;
  border-radius: 10px;
}
.profileDp{
  width: 6rem;
  background: linear-gradient(0deg, #4794FF -0.01%, #005ED9 32.99%, #1CB7FF 100%);
  padding: 5px;
  border-radius: 16px;
}
.borderbox1{
  border: 6px solid #9DB7FF;
  border-radius: 16px;
}
.PlayerProgrow{
  height: 200px;
}
.Pstatsrow{
  min-height: 92%;
} 
.messagerow{
  min-height: 15rem;
}
.profileInfo{
  padding: 3rem 0;
}
.profileInfo .text{
  margin-bottom: 0.6rem;
  font-size: 20px;
}
.downloadbtn img{
  width: 2.5rem;
}
#leaderboard .container{
  padding: 30px 30px 0;
}
#leaderboard .header{
  margin-top: -28px;
}
#leaderboard .AddUsertitle img{
  width: 14rem;
}
#leaderboard .lbRow{
  background: linear-gradient(90deg, #355CD6 0%, #5B9FFF 51.04%, #0D5DD7 96.77%),
  linear-gradient(0deg, #9BC4FF, #9BC4FF);
  border: 4px solid #9BC4FF;
  border-radius: 12px;
  padding: 0.5rem 0;
}
#leaderboard .lbRow .lbtext{
  color: #fff;
  font-size: 22px;
  margin: auto 0;
  font-weight: bold;
}
.lbfullrow{
  margin-bottom: 2rem;
}
#leaderboard .lbicon{
  width: fit-content;
}
#leaderboard .lbicon img{
  width: 3rem;
}
.downicon img{
  width: 2rem;
}

.radio-label {
  display: block;
  position: relative;
  cursor: pointer;
  padding: 0;
}

.radio-label input {
  position: absolute;
  visibility: hidden;
}

.radio-label img {
  width: 100%;
  border: 2px solid transparent;
  border-radius: 4px;
  padding: 1px;
}

.radio-label input:checked + img {
  border-color: black;
}


.rowshow{
  display: block!important;
}
.container{
  padding: 40px;
}
</style>
<body>
    <div class="limiter">
		<div class="container-login100 bg1">

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#masterTl">
    Master Leaderboard
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="masterTl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modalbg2">
        <div class="TLtopBtn">
          <div class="row">
            <div class="col-9">
            <div class="row">
                <div class="fitcnt">
                    <button type="button" class="topbtn1" data-bs-dismiss="modal" onclick="openmodal('adduser')"><img src="Images/Untitled/newbtn/adduserbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                <button type="button" class="topbtn2" data-bs-dismiss="modal" onclick="openmodal('import')"><img src="Images/Untitled/newbtn/importbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                    <button type="button" class="topbtn2" data-bs-dismiss="modal" onclick="openmodal('leaderboard')"><img src="Images/Untitled/newbtn/leaderboardbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                    <button type="button" class="topbtn1" data-bs-dismiss="modal"><img src="Images/Untitled/newbtn/trackerbtn.svg" alt=""></button>
                </div>
                
            </div>
          </div>
          <div class="col-3">
            <div class="row">
              <div class="col-5">
                <button type="button" class="topbtn3 float-end" data-bs-dismiss="modal" onclick="openmodal('message')"><img src="Images/mail_logo.svg" alt=""></button>
              </div>
              <div class="col-7">
                <button type="button" class="topbtn1" data-bs-dismiss="modal"><img src="Images/Untitled/newbtn/logoutbtn.svg" alt=""></button>
              </div>
            </div>
          </div>

        </div>
        </div>
        <div class="modal-body">
        <div class="row adminheading">
        MASTER ADMIN DASHBOARD
        </div>
        <div class="container">
            <div class="row rowpattern1">
                <div class="col-md-6">
                    <div class="teamName">
                        Team - Tradeclue
                        <img src="Images/Untitled/PieChart.svg" alt="">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="float-end players">
                        <div class="dropdownrow">
                           <button style="color: white;">5 Players
                          <img onclick="dropmyRow('hiderow')" src="Images/Untitled/downaero.svg" alt=""></button>
                          </div>
                    </div>
                </div>
            </div>
            <!-- hidden row -->
            <div id="hiderow" class="rowhide">
            <div class="row align-items-center rowpattern2">
              <div class="row mb-2">
              <div class="col-3">
                <div class="row align-items-center gx-0">
                  <div class="col-3">
                    <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                  </div> <div class="col-9">Player Name</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
               <div class="textwidth"> Department -</div><div class="textwidth">&nbsp;Finance </div>
              </div>
            </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Designation -</div> <div class="textwidth">&nbsp;CEO</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Email -</div> <div class="textwidth">&nbsp;Player123@gmail</div>
                  <div class="col-3"></div>
                 </div>
              </div>
            </div>
              <div class="row mb-2">
              <div class="col-3">
                <div class="row align-items-center gx-0">
                  <div class="col-3">
                    <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                  </div> <div class="col-9">Player Name</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
               <div class="textwidth"> Department -</div><div class="textwidth">&nbsp;Finance </div>
              </div>
            </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Designation -</div> <div class="textwidth">&nbsp;CEO</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Email -</div> <div class="textwidth">&nbsp;Player123@gmail</div>
                  <div class="col-3"></div>
                 </div>
              </div>
            </div>
            </div>
            </div>
            <!-- row2 -->
            <div class="row rowpattern1">
              <div class="col-md-6">
                  <div class="teamName">
                      Team - Tradeclue
                      <img src="Images/Untitled/PieChart.svg" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="float-end players">
                      <div class="dropdownrow">
                         <button style="color: white;">3 Players
                        <img onclick="dropmyRow('hiderow2')" src="Images/Untitled/downaero.svg" alt=""></button>
                        </div>
                  </div>
              </div>
          </div>
          <!-- hidden row -->
          <div id="hiderow2" class="rowhide">
          <div class="row align-items-center rowpattern2">
            <div class="col-3">
              <div class="row align-items-center gx-0">
                <div class="col-2">
                  <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                </div> <div class="col-6">Player Name</div>
               </div>
            </div>
            <div class="col-3">
              <div class="row gx-0">
             <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
            </div>
          </div>
            <div class="col-3">
              <div class="row gx-0">
                <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
               </div>
            </div>
            <div class="col-3">
              <div class="row gx-0">
                <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
                <div class="col-3"></div>
               </div>
            </div>
          </div>
          </div>
    
          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">1 Players
                      <img onclick="dropmyRow('rowhide')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="rowhide" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>
          <!-- row3 end -->

          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">5 Players
                      <img onclick="dropmyRow('row1hide')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="row1hide" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>
          <!-- row4 end -->

          <!-- <div class="row"> -->
          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">3 Players
                      <img onclick="dropmyRow('rowhide1')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="rowhide1" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>

          <!-- row5 end -->


        </div>
          </div>
  
        </div>
      </div>
    </div>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TlModal">
    Team Leaderboard
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="TlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modalbg2">
        <div class="TLtopBtn">
          <div class="row">
            <div class="col-9">
            <div class="row">
                <div class="fitcnt">
                    <button type="button" class="topbtn1" data-bs-dismiss="modal" onclick="openmodal('adduser')"><img src="Images/Untitled/newbtn/adduserbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                <button type="button" class="topbtn2" data-bs-dismiss="modal" onclick="openmodal('import')"><img src="Images/Untitled/newbtn/importbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                    <button type="button" class="topbtn2" data-bs-dismiss="modal" onclick="openmodal('leaderboard')"><img src="Images/Untitled/newbtn/leaderboardbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                    <button type="button" class="topbtn1" data-bs-dismiss="modal"><img src="Images/Untitled/newbtn/trackerbtn.svg" alt=""></button>
                </div>
                <div class="fitcnt">
                    <button type="button" class="topbtn2" data-bs-dismiss="modal"><img src="Images/Untitled/newbtn/notificationbtn.svg" alt=""></button>
                </div>
            </div>
          </div>
          <div class="col-3">
            <div class="row">
              <div class="col-5">
                <button type="button" class="topbtn3 float-end" data-bs-dismiss="modal" onclick="openmodal('message')"><img src="Images/mail_logo.svg" alt=""></button>
              </div>
              <div class="col-7">
                <button type="button" class="topbtn1" data-bs-dismiss="modal"><img src="Images/Untitled/newbtn/logoutbtn.svg" alt=""></button>
              </div>
            </div>
          </div>

        </div>
        </div>
        <div class="modal-body">
        <div class="row adminheading">
            ADMIN DASHBOARD
        </div>
        <div class="container">
            <div class="row rowpattern1">
                <div class="col-md-6">
                    <div class="teamName">
                        Team - Tradeclue
                        <img src="Images/Untitled/PieChart.svg" alt="">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="float-end players">
                        <div class="dropdownrow">
                           <button style="color: white;">5 Players
                          <img onclick="dropmyRow('hiderow')" src="Images/Untitled/downaero.svg" alt=""></button>
                          </div>
                    </div>
                </div>
            </div>
            <!-- hidden row -->
            <div id="hiderow" class="rowhide">
            <div class="row align-items-center rowpattern2">
              <div class="row mb-2">
              <div class="col-3">
                <div class="row align-items-center gx-0">
                  <div class="col-3">
                    <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                  </div> <div class="col-9">Player Name</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
               <div class="textwidth"> Department -</div><div class="textwidth">&nbsp;Finance </div>
              </div>
            </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Designation -</div> <div class="textwidth">&nbsp;CEO</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Email -</div> <div class="textwidth">&nbsp;Player123@gmail</div>
                  <div class="col-3"></div>
                 </div>
              </div>
            </div>
              <div class="row mb-2">
              <div class="col-3">
                <div class="row align-items-center gx-0">
                  <div class="col-3">
                    <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                  </div> <div class="col-9">Player Name</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
               <div class="textwidth"> Department -</div><div class="textwidth">&nbsp;Finance </div>
              </div>
            </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Designation -</div> <div class="textwidth">&nbsp;CEO</div>
                 </div>
              </div>
              <div class="col-3">
                <div class="row gx-0">
                  <div class="textwidth">Email -</div> <div class="textwidth">&nbsp;Player123@gmail</div>
                  <div class="col-3"></div>
                 </div>
              </div>
            </div>
            </div>
            </div>
            <!-- row2 -->
            <div class="row rowpattern1">
              <div class="col-md-6">
                  <div class="teamName">
                      Team - Tradeclue
                      <img src="Images/Untitled/PieChart.svg" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="float-end players">
                      <div class="dropdownrow">
                         <button style="color: white;">3 Players
                        <img onclick="dropmyRow('hiderow2')" src="Images/Untitled/downaero.svg" alt=""></button>
                        </div>
                  </div>
              </div>
          </div>
          <!-- hidden row -->
          <div id="hiderow2" class="rowhide">
          <div class="row align-items-center rowpattern2">
            <div class="col-3">
              <div class="row align-items-center gx-0">
                <div class="col-2">
                  <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
                </div> <div class="col-6">Player Name</div>
               </div>
            </div>
            <div class="col-3">
              <div class="row gx-0">
             <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
            </div>
          </div>
            <div class="col-3">
              <div class="row gx-0">
                <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
               </div>
            </div>
            <div class="col-3">
              <div class="row gx-0">
                <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
                <div class="col-3"></div>
               </div>
            </div>
          </div>
          </div>
    
          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">1 Players
                      <img onclick="dropmyRow('rowhide')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="rowhide" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>
          <!-- row3 end -->

          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">5 Players
                      <img onclick="dropmyRow('row1hide')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="row1hide" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>
          <!-- row4 end -->

          <!-- <div class="row"> -->
          <div class="row rowpattern1">
            <div class="col-md-6">
                <div class="teamName">
                    Team - Tradeclue
                    <img src="Images/Untitled/PieChart.svg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end players">
                    <div class="dropdownrow">
                       <button style="color: white;">3 Players
                      <img onclick="dropmyRow('rowhide1')" src="Images/Untitled/downaero.svg" alt=""></button>
                      </div>
                </div>
            </div>
        </div>
        <!-- hidden row -->
        <div id="rowhide1" class="rowhide">
        <div class="row align-items-center rowpattern2">
          <div class="col-3">
            <div class="row align-items-center gx-0">
              <div class="col-2">
                <div class="Profileimg"><img class="img" src="assets/profileimg/4.jpg" alt="" srcset=""></div>
              </div> <div class="col-6">Player Name</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
           <div class="col-5"> Department -</div> <div class="col-6 float-start">Finance</div>
          </div>
        </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-5">Designation -</div> <div class="col-6 float-start">CEO</div>
             </div>
          </div>
          <div class="col-3">
            <div class="row gx-0">
              <div class="col-3">Email -</div> <div class="col-6 float-start">Player123@gmail</div>
              <div class="col-3"></div>
             </div>
          </div>
        </div>
        </div>

          <!-- row5 end -->


        </div>
          </div>
  
        </div>
      </div>
    </div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">
  Add User
</button>

<!-- Modal -->
<div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modalbg2">
      <div class="header">
        <div class="closeXbtn">
          <img class="Ximg" data-bs-dismiss="modal" src="Images/Untitled/close_button1.svg" alt="">
        <div class="AddUsertitle"><img src="Images/Untitled/AdduserT.svg" alt=""></div>
        </div>
      </div>
      <div class="modal-body">
        <div class="container">
        <form class="Adduserform" action="">
                
                    <label for="full_name" class="labelstyle">Full Name</label>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="full_name">

                    <label for="" class="labelstyle">Designation</label>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="designation">

                    <label for="" class="labelstyle">Departmant</label>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="departmant">

                    <label for="" class="labelstyle">Email Address</label>
                        <input class="inputstyl1" type="text" class="inputstyle1" name="email">

                    <label for="" class="labelstyle">Password</label>
                        <input class="inputstyl1" type="password" class="inputstyle1" name="password">       
        </form>
      </div>

      </div>
      <div class="modal-footer" style="justify-content: center;">
        <button type="button" class="savebtn"><img src="Images/Untitled/Save_btn.svg" alt=""></button>
      </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#import">
  IMPORT
</button>

<!-- Modal -->
<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modalbg2">
      <div class="header">
        <div class="closeXbtn">
          <img class="Ximg" data-bs-dismiss="modal" src="Images/Untitled/close_button1.svg" alt="">
        <div class="AddUsertitle"><img src="Images/Untitled/ImportT.svg" alt=""></div>
        </div>
      </div>
    <div class="modal-body">
      <div class="Importcontainer">
      <form method="" action="javascript:void(0)" name="category_form" id="category_form" enctype="multipart/form-data">
      @csrf
        <div class="bgimg row" style="justify-content: center;">
        <input name="file" type="file" style="display: none;" id="fileInput">
          <img src="Images/Untitled/dropexcelWT.svg" alt="" id="imageClick">
        </div>
          <div class="bgimg row" style="justify-content: center;">
       <img src="Images/Untitled/importBg2.svg" alt="">
       <div class="row tablerow">
        <table class="namebox" id="data-table">
          <thead>
            <th></th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DEPARTMENT</th>
            <th>DESIGNATION</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Hitesh Milind Ingale</td>
              <td>Hitesh@gmail.com</td>
              <td>Ui/Ux Designing</td>
              <td>Ui/Ux designer</td>
            </tr>
            <tr>
              <td>2. </td>
            </tr>
            <tr>
              <td>3. </td>
            </tr>
            <tr>
              <td>4. </td>
            </tr>
            <tr>
              <td>5. </td>
            </tr>
            <tr>
              <td>6. </td>
            </tr>
            <tr>
              <td>7. </td>
            </tr>
            <tr>
              <td>8. </td>
            </tr>
            <tr>
              <td>9. </td>
            </tr>
            <tr>
              <td>10. </td>
            </tr>
          </tbody>
        </table>
       </div>
       </div>
       <div class="bottombtn d-flex justify-content-center">
       <div class="bottombtn d-flex justify-content-center">
  <div class="row align-items-center">
    <div class="col-4 d-flex align-items-center">
      <img src="Images/Untitled/Maketeamof.svg" alt="">
    </div>
    <div class="col-1">
      <label class="radio-label">
        <input type="radio" name="option" value="1">
        <img src="Images/Untitled/btn1.svg" alt="">
      </label>
    </div>
    <div class="col-1">
      <label class="radio-label">
        <input type="radio" name="option" value="2">
        <img src="Images/Untitled/btn2.svg" alt="">
      </label>
    </div>
    <div class="col-1">
      <label class="radio-label">
        <input type="radio" name="option" value="3">
        <img src="Images/Untitled/btn3.svg" alt="">
      </label>
    </div>
    <div class="col-1">
      <label class="radio-label">
        <input type="radio" name="option" value="4">
        <img src="Images/Untitled/btn4.svg" alt="">
      </label>
    </div>
    <div class="col-1">
      <label class="radio-label">
        <input type="radio" name="option" value="5">
        <img src="Images/Untitled/btn5.svg" alt="">
      </label>
    </div>
    <div class="col-3">
      <label class="radio-label">
        <input type="radio" name="option" value="default">
        <img src="Images/Untitled/btndefault.svg" alt="">
      </label>
    </div>
  </div>
</div>

       <!-- <div class="row align-items-center">
        <div class="col-4 d-flex align-items-center">
          <img src="Images/Untitled/Maketeamof.svg" alt="">
        </div>
        <div class="col-1">
          <button class="buttonimg"><img src="Images/Untitled/btn1.svg" alt=""></button>
        </div>
        <div class="col-1">
          <button class="buttonimg"><img src="Images/Untitled/btn2.svg" alt=""></button>
        </div>
        <div class="col-1">
          <button class="buttonimg"><img src="Images/Untitled/btn3.svg" alt=""></button>
        </div>
        <div class="col-1">
          <button class="buttonimg"><img src="Images/Untitled/btn4.svg" alt=""></button>
        </div>
        <div class="col-1">
          <button class="buttonimg"><img src="Images/Untitled/btn5.svg" alt=""></button>
        </div>
        <div class="col-3">
          <button class="defaultbuttonimg"><img src="Images/Untitled/btndefault.svg" alt=""></button>
        </div>
       </div> -->
      </div>
      </div>

      </div>
      <div class="modal-footer pt-0" style="justify-content: center;">
        <button type="submit" id="upload_excel" class="savebtn"><img src="Images/Untitled/uploadbtn1.svg" alt=""></button>
      </div>
        </form>
  </div>
</div>
</div>
<!-- end modal -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile">
  PROFILE
</button>

<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modalbg2">
      <div class="header">
        <div class="closeXbtn">
          <img class="Ximg" data-bs-dismiss="modal" src="Images/Untitled/close_button1.svg" alt="">
        <div class="AddUsertitle"><img src="Images/Untitled/profileT.svg" alt=""></div>
        </div>
      </div>
    <div class="modal-body">
      <div class="container">
        <div class="row">
          <div class="col-6 fontwhite">
            <div class="row profileInfo align-items-center">
              <div class="col-4">
                <div class="profileDp">
                  <img src="assets/profileimg/4.jpg" alt="">
                </div>
              </div>
              <div class="col-8">
                <div class="">
                  <div class="text"><b>NAME - </b> <b id="">HITESH</b></div>
                  <div class="text"><b>ROLE - </b> <b id="">CEO</b></div>
                  <div class="text"><b>DEPARTMENT - </b> <b id="">UI/UX DESIGNER</b></div>
                  <div class="text"><b>TEAM NAME - </b> <b id="">EON LEARNING</b></div>
                </div>
              </div>
            </div>
            <div class="row">
              <h2>Player Progress:</h2>
              <div class="mt-2">
                <div class="row borderbox1 PlayerProgrow">

                </div>
              </div>
            </div>
          </div>
          
          <div class="col-6 fontwhite">
            <h2>Player Stats:</h2>
            <div class="mt-2 borderbox1 Pstatsrow">
              <div class="row">
                
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
  </div>
</div>
</div>
<!-- end modal -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#message">
  MESSAGE
</button>

<!-- Modal -->
<div class="modal fade" id="message" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modalbg2">
      <div class="header">
        <div class="closeXbtn">
          <img class="Ximg" data-bs-dismiss="modal" src="Images/Untitled/close_button1.svg" alt="">
        <div class="AddUsertitle"><img src="Images/Untitled/messageT.svg" alt=""></div>
        </div>
      </div>
    <div class="modal-body">
      <div class="container">
        <div class="row">
          <div class="fontwhite">
            <div class="row align-items-center">   
              <div class="col-md-6 ">
                <div class="row rowpattern1">
                    <div class="col-8 teamName">
                      RECIPIENTS :-
                    </div>
                    <div class="col-4">
                      <!-- Example split danger button -->
                      <button type="button" class="">SELECT</button>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="Checkme2" checked />
        <label class="form-check-label" for="Checkme2">Check me</label>
    </div>
    </a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
<!-- end -->
                    </div>
                </div></div>
            </div>
            <div class="row">
              <h2>Description :-</h2>
              <div class="mt-2">
                <div class="row borderbox1 messagerow">
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>
      </div>
      <div class="modal-footer pt-0" style="justify-content: center;">
        <button type="button" class="savebtn"><img src="Images/Untitled/sendbtn1.svg" alt=""></button>
      </div>
  </div>
</div>
</div>
<!-- end modal -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leaderboard">
  LEADERBOARD
</button>

<!-- Modal -->
<div class="modal fade" id="leaderboard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modalbg2">
      <div class="header">
        <div class="closeXbtn">
          <img class="Ximg" data-bs-dismiss="modal" src="Images/Untitled/close_button1.svg" alt="">
        <div class="AddUsertitle"><img src="Images/Untitled/leaderboardT.svg" alt=""></div>
        </div>
      </div>
    <div class="modal-body">
      <div class="row adminheading">
        TEAMS
    </div>
      <div class="container">
    <div class="row lbfullrow">
      <div class="col-1 lbicon">
        <img src="Images/Untitled/medal1.svg" alt="">
      </div>
      <div class="col-1 lbicon">
        <img src="Images/Untitled/usericon.svg" alt="">
      </div>
      <div class="col">
        <div class="row lbRow">
          <div class="col-11 lbtext">
            Tradeclue 
          </div>
          <div class="col-1 downicon">
            <button>
              <img src="Images/Untitled/downaerobtn1.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
        
    <div class="row lbfullrow">
      <div class="col-1 lbicon">
        <img src="Images/Untitled/medal2.svg" alt="">
      </div>
      <div class="col-1 lbicon">
        <img src="Images/Untitled/usericon.svg" alt="">
      </div>
      <div class="col">
        <div class="row lbRow">
          <div class="col-11 lbtext">
            Tradeclue 
          </div>
          <div class="col-1 downicon">
            <button>
              <img src="Images/Untitled/downaerobtn1.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
        
    <div class="row lbfullrow">
      <div class="col-1 lbicon">
        <img src="Images/Untitled/medal3.svg" alt="">
      </div>
      <div class="col-1 lbicon">
        <img src="Images/Untitled/usericon.svg" alt="">
      </div>
      <div class="col">
        <div class="row lbRow">
          <div class="col-11 lbtext">
            Tradeclue 
          </div>
          <div class="col-1 downicon">
            <button>
              <img src="Images/Untitled/downaerobtn1.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
        
    <div class="row lbfullrow">
      <div class="col-1 lbicon">
        <img src="Images/Untitled/4..svg" alt="">
      </div>
      <div class="col-1 lbicon">
        <img src="Images/Untitled/usericon.svg" alt="">
      </div>
      <div class="col">
        <div class="row lbRow">
          <div class="col-11 lbtext">
            Tradeclue 
          </div>
          <div class="col-1 downicon">
            <button>
              <img src="Images/Untitled/downaerobtn1.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
        
        
    <div class="row lbfullrow mb-0">
      <div class="col-1 lbicon">
        <img src="Images/Untitled/5..svg" alt="">
      </div>
      <div class="col-1 lbicon">
        <img src="Images/Untitled/usericon.svg" alt="">
      </div>
      <div class="col">
        <div class="row lbRow">
          <div class="col-11 lbtext">
            Tradeclue 
          </div>
          <div class="col-1 downicon">
            <button>
              <img src="Images/Untitled/downaerobtn1.svg" alt="">
            </button>
          </div>
        </div>
      </div>
      <!-- <div class="col-1"> -->
        <!-- <img src="Images/Untitled/bluespark1.svg" alt=""> -->
      <!-- </div> -->
    </div>
        
       </div>
     </div>
     <div class="modal-footer pt-0" style="justify-content: end;">
      <button type="button" class="downloadbtn"><img src="Images/Untitled/filtericon1.svg" alt=""></button>
      <button type="button" class="downloadbtn"><img src="Images/Untitled/downloadicon.svg" alt=""></button>
      </div>
  </div>
</div>
</div>
<!-- end modal -->





  </div> 
</div>

  <script>
    function dropmyRow(dropdown) {
      var x = document.getElementById(dropdown);
      // var y = $('.'+'dropdownrow button img').attr('src');
      if (x.className.indexOf(" rowshow") == -1) {
        x.className += " rowshow";
        // alert(y);
      } else { 
        x.className = x.className.replace(" rowshow", "");
      }
    }


const fileInput = document.getElementById('fileInput');
const imageClick = document.getElementById('imageClick');

imageClick.addEventListener('click', () => {
    // Trigger a click on the hidden file input
    fileInput.click();
});

// Add an event listener to the file input to handle the selected file
fileInput.addEventListener('change', (event) => {
    const selectedFile = event.target.files[0];
    if (selectedFile) {
        // You can now access the selected file using 'selectedFile'
        // Here, you can perform further actions with the selected file, such as uploading or processing it.
        console.log('Selected file:', selectedFile.name);
    }
});

  </script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function openmodal(open,close){
      $('#' + open).modal("show");
      if ((typeof close !== 'undefined') || (close != null)) {
  // console.log('close is defined');
  $('#' + close).modal("hide");
  } else {
  console.log('close is undefined');
  }

    }


    function uploadexcel(){

var formData = new Formdata;
      $.ajax({
                type: 'POST',
                url: "{{url('uploadexcel')}}",
                data: formData,
                success: function(response) {
                    $('#uploadStatus').text(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
    }


    $(document).ready(function () {
    $('#category_form').on('submit', function (event) {
        event.preventDefault();
        var form_data = new FormData($("#category_form")[0]);
        $.ajax({
            method: "POST",
            url: "{{url('uploadexcel')}}",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response && response.exceldata) {
            // Initialize the table HTML
            var tableHTML = '<table border="1"><thead><tr><th></th><th>Full Name</th><th>Email</th><th>Department</th><th>Designation</th></tr></thead><tbody>';

            var serialNo = 1;

            // Loop through the data and append rows to the table
            $.each(response.exceldata, function (index, row) {
                tableHTML += '<tr><td>' + serialNo + '</td><td>' + row.full_name + '</td><td>' + row.email + '</td><td>' + row.department + '</td><td>' + row.designation + '</td></tr>';
                serialNo++; // Increment the serial number
            }); 

            // Close the table HTML
            tableHTML += '</tbody></table>';

            // Insert the table HTML into the data-table element
            $('#data-table').html(tableHTML);
              console.log(response);}
              if (response.status == "200") {
                  alert('File uploaded successfully');
                    $('#category_form')[0].reset();
                    
                } else {
                    alertServiceFunction("Error", response.message, "error");
                }
            },
            error: function (err) {
                alertServiceFunction("Error", "Data Upload Error, Please Contact Administrator.", "error");
            },
        });
    });
});


  </script>

</body>
</html>