function okTostart(){
    var ofs = 0;
  var el = document.getElementById("startbtn");
  const myintervals = setInterval(function timer(){
      el.style.fill = 'rgba(255,0,0,'+Math.abs(Math.sin(ofs))+')';
      ofs += 0.01;
  }, 10);
  startbtnblink();
  }
  function myFunction(){
    var a = document.getElementById("pnlbtn");
    var z = document.getElementById("coincards");
    if (z.style.display === "none") {
      a.style.display = "flex";
      z.style.display = "block";
       fillblink("strategybtn","startbtn");
       $('.blink').addClass("blink1");
       $('.blink1').css("fill", "#f24f44");
       removeBlinkEffect();
    } else {
      // z.style.display = "none";
    }
  }

  function startbtnblink(){
    const elements = document.querySelectorAll('.blink');
    elements.forEach(element => {
      element.classList.add('fade-in-out');
    });
  }

  function removeBlinkEffect() {
    const elements = document.querySelectorAll('.blink');
    elements.forEach(element => {
      element.classList.remove('fade-in-out');
    });
  }
   
  function myFunction1(){
    var a = document.getElementById("pnlbtn");
    var z = document.getElementById("coincards");
    if (z.style.display === "none") {
      a.style.display = "flex";
      z.style.display = "block";
       fillblink("eventcardblink","");
       if ($('.blink').length){
      //  $('.blink').addClass("blink1");
      //  $('.blink1').css("fill", "#f24f44");
      removeBlinkEffect();      
      } else {
        console.log('its false')
      }
    } else {
      // z.style.display = "none";
    }
  }

    function headercard(){
      if (z.style.display === "none"){
      }
    }
    
    function adsOkbtn(){
      // ads
      var a =parseInt($('#store #dest_copy1 img').attr('value'));
      var b =parseInt($('#agent #dest_copy2 img').attr('value'));
      var c =parseInt($('#online #dest_copy3 img').attr('value'));
      // incentive
      var d =parseInt($('#store #copy_desc1 img').attr('value'));
      var e =parseInt($('#agent #copy_desc2 img').attr('value'));
      var f =parseInt($('#online #copy_desc3 img').attr('value'));
    
      // ads
      var flag_ads_src_1  = $('#store #dest_copy1 img').attr('src')
      var flag_ads_src_2  = $('#agent #dest_copy2 img').attr('src')
      var flag_ads_src_3  = $('#online #dest_copy3 img').attr('src')
      
      // incentive
      var flag_inc_src_4  = $('#store #copy_desc1 img').attr('src')
      var flag_inc_src_5  = $('#agent #copy_desc2 img').attr('src')
      var flag_inc_src_6  = $('#online #copy_desc3 img').attr('src')

      // ads
      var flag_ads_name_1  = $('#store #dest_copy1 img').attr('name')
      var flag_ads_name_2  = $('#agent #dest_copy2 img').attr('name')
      var flag_ads_name_3  = $('#online #dest_copy3 img').attr('name')
      
      // incentive
      var flag_inc_name_4  = $('#store #copy_desc1 img').attr('name')
      var flag_inc_name_5  = $('#agent #copy_desc2 img').attr('name')
      var flag_inc_name_6  = $('#online #copy_desc3 img').attr('name')
      
      // console.log(flag_ads_src_1,flag_inc_src_4,flag_ads_src_2,flag_inc_src_5,flag_ads_src_3,flag_inc_src_6)
   
      if(a  >=  1 && b >=  1 && c >=  1 && d  >=  1 && e >=  1 && f >=  1 ){
     var sumAds = (a + b + c);
      var sumIns = (d + e + f);
      var total = sumAds+sumIns;
      if(sumAds != '' && sumIns != ''){

            $.ajax({
                    
            type: "get",
            url: "/public/flag_card/",
            dataType:"Json",
            data: {a,b,c,d,e,f,sumAds,sumIns,total,flag_ads_src_1,flag_inc_src_4,flag_ads_src_2,flag_inc_src_5,flag_ads_src_3,flag_inc_src_6},
            
              success: function (response) {
                  // console.log(response );
                  var str = response.game_flow.multi_flag;
                  var str_arr =  JSON.parse(str)
                  // console.log(response.game_flow, str_arr, str_arr[0] );

                  Object.entries(str_arr).forEach(([key, value]) => {
                    if(key == key){
                      // console.log(value ,flag_ads_src_1)
                      if(value == flag_ads_src_1){
                      jQuery('.pl-'+key).html('');
                        var  flag_launch = "<img src='" + value + "' value='" + a + "' name='" + flag_ads_name_1 + "' id=''  alt='Plz select flag' style=''>";
                        $(".pl-"+key).append(flag_launch);                      
                      }
                      if(value == flag_inc_src_4){
                        jQuery('.pl-'+key).html('');
                          var  flag_launch = "<img src='" + value + "' value='" + d + "' name='" + flag_inc_name_4 + "' id=''  alt='Plz select flag' style=''>";
                          $(".pl-"+key).append(flag_launch);                        
                      }
                      if(value == flag_ads_src_2){
                        jQuery('.pl-'+key).html('');
                          var  flag_launch = "<img src='" + value + "' value='" + b + "' name='" +flag_ads_name_2  + "' id=''  alt='Plz select flag' style=''>";
                          $(".pl-"+key).append(flag_launch);                        
                      }
                      if(value == flag_inc_src_5){
                        jQuery('.pl-'+key).html('');
                          var  flag_launch = "<img src='" + value + "' value='" + e + "' name='" + flag_inc_name_5 + "' id=''  alt='Plz select flag' style=''>";
                          $(".pl-"+key).append(flag_launch);                        
                      }
                      if(value == flag_ads_src_3){
                        jQuery('.pl-'+key).html('');
                          var  flag_launch = "<img src='" + value + "' value='" + c + "' name='" + flag_ads_name_3 + "' id=''  alt='Plz select flag' style=''>";
                          $(".pl-"+key).append(flag_launch);                        
                      }
                      if(value == flag_inc_src_6){
                        jQuery('.pl-'+key).html('');
                          var  flag_launch = "<img src='" + value + "' value='" + f + "' name='" + flag_inc_name_6 + "' id=''  alt='Plz select flag' style=''>";
                          $(".pl-"+key).append(flag_launch);                        
                      }

                    }
                 });     
                 add_coin(response.game_flow.card_id,response.game_flow.card_type,response.game_flow.invest_amount,response.game_flow.card_name);

                 fillblink("customerbtn","adsMbtn");

              },
              error:function(error){
                  console.log(error);
              }
          });

        }
        else{
          alert('opps!')
        }
        $("#staticBackdop2").modal("hide");
      slidetest('move-right','bottomcash');

      $("#drop_flag").attr('onclick','');

      }
      else{
        alert("Please fill all Fields");
    } 
  }
  
    function ItserviceOkbtn(){
      var checkRadio1 = document.querySelector('input[name="selectcard"]:checked');
      var checkRadio2 = document.querySelector('input[name="selectcard2"]:checked');
      if(checkRadio1 && checkRadio2 != null){ 
        //  fillblink("launchY1btn","customerbtn");
          $("#staticBackdro2").modal("hide");
          // console.log(checkRadio1,checkRadio2)

          var a = parseInt(checkRadio1.value);
          var b = parseInt(checkRadio2.value);
          var total= a+b

          var image_id_1 = checkRadio1.id;
          var image_id_2 = checkRadio2.id;

          var img_src_1 = $("."+image_id_1).attr('src');
          var img_src_2 = $("."+image_id_2).attr('src');

          var card_name_1 = $("."+image_id_1).attr('name');
          var card_name_2 = $("."+image_id_2).attr('name');

          var card_id_1 = $("."+image_id_1).attr('id');
          var card_id_2 = $("."+image_id_2).attr('id');


          $('input[name=selectcard]').attr("disabled",true);
          $('input[name=selectcard2]').attr("disabled",true);
          // console.log(checkRadio_input1,checkRadio_input2, uncheck_It_expense,uncheck_customer_service)

          if(a && b != ''){
              $.ajax({
                  
                type: "get",
                url: "/public/IT_service_card/",
              dataType:"Json",
              data: {a,b,total,img_src_1,img_src_2,image_id_1,image_id_2,card_name_1,card_name_2,card_id_1,card_id_2},
              
                success: function (response) {
                    document.getElementById('it').innerHTML=response.game_flow_it.invest_amount;
                    document.getElementById('customer').innerHTML=response.game_flow_custom.invest_amount;
                    document.getElementById('cash1').innerHTML= parseInt(response.game_flow_custom.total_coin);
                    document.getElementById('cash').innerHTML= parseInt(response.game_flow_custom.total_coin);
                    $("#it_custom").attr('onclick','');
                  slidetest('move-right','bottomcash');
                  const it_ser = ['cash','customer','it'];
                  for(let i = 0; i < it_ser.length; i++){
                    impactRef(it_ser[i]);
                  }
                  fillblink("launchY1btn","customerbtn");

                  
                  },
                error:function(error){
                    console.log(error);
                }
            });
          }          
        }
        else{
          $("#ExampleModal5").modal("show");
        }

    }
  
     $(document).ready(function(){
      $("#strategySelection input").on("click", function(){
          var dataId = $("#strategymodal").val();
        var a  =  $('input:checkbox:checked').length;
    var times =   $("#strategymodal").val();
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
  });
    

  function selectFunction(id, c_id,type,invest,image,card_name,select) {
    $(".matrixok img").css("display","block");

    var parentElement = document.getElementById(id).closest('.radio-stock-img');

    var firstImg = parentElement.querySelector('img');
    if (firstImg) {
        firstImg.classList.add('selecter_card');
    }

    // console.log(parentElement)
    
    var times = $("#strategymodal").val();
    var a  =  $('#staticBackdrop input:checkbox:checked').length;
    // console.log(a, times, id)
  
        if( $('#' +id).is(':checked') ){
            $('#' +id).prop('checked', true); // Unchecks it
            $('.' + id).show();
            if(a == times){
              // console.log(times,a,c_id, id,type,invest)
              if ($("#myCheck"+c_id).prop("checked")) {                
                $("#submit").attr('onclick', "cardselected(`myCheck"+c_id+"`,"+c_id+", `"+type+"`,"+invest+",`"+image+"`,`"+card_name+"`,`"+select+"`,event)");
               }
               else{
                $("#submit").attr('onclick','');
               }
            }else{
                // alert("not more than times");
                $('#' +id).prop('checked', false); // Unchecks it     
                $('.' + id).hide();              
            firstImg.classList.remove('selecter_card');

              }
        }else{
            // alert("Checkbox Is not checked");
            $('.' + id).hide();
            $('.' + id).css("display:none");
            // custom_service(c_id, id,imgs);
            $("#submit").attr('onclick','');
            firstImg.classList.remove('selecter_card');
      }
  }
  
  // cash calculation script
  var x =    $('#cash1').text();
  document.getElementById("cash").innerHTML =x;
  
  function transaction(amt,to){
    var x = document.getElementById("cash").innerHTML;
    // document.getElementById("cash1").innerHTML = x;
    var to_amount  = document.getElementById(to).innerHTML;
    var amount = x - amt;
    document.getElementById("cash").innerHTML = amount;  
    // impactRef('customer_sta');
    document.getElementById("cash1").innerHTML = amount;  
    // document.getElementById(to).innerHTML = parseInt(to_amount) +amt;
  
  }

         
function matrix(id, card_name, type ,value,brand,engagement,effi)
{
  // console.log(id, card_name, type ,value,brand,engagement,effi)
  var customer = parseInt(document.getElementById('customer_sta').innerText);
  var brands = parseInt(document.getElementById('brand').innerText);
  var employees = parseInt(document.getElementById('employee').innerText);
  var collections = parseInt(document.getElementById('collection').innerText);


  var total =parseInt(value) + parseInt(customer)
  var total_brand =parseInt(brand) + parseInt(brands)
  var total_employee =parseInt(engagement) + parseInt(employees)
  var total_collection =parseInt(effi) + parseInt(collections)
  // console.log(id, card_name, type ,total,brand,employee,collection)

  // console.log(customer, matrix_val, parseInt(matrix_val) + parseInt(customer))
  $.ajax({
            
    type: "get",
    url: "/public/add_matrix/",
   dataType:"Json",
   data: {id, card_name, type ,total,total_brand,total_employee,total_collection},
   
    success: function (response) {
        // console.log(response);
        var matrix =response.game_flow.matrix_value;
        document.getElementById("customer_sta").innerHTML = matrix;
        document.getElementById('cs_bar').style.width=matrix+"%";
        
        document.getElementById("brand").innerHTML = response.game_flow.brand_val;
        document.getElementById('br_bar').style.width=response.game_flow.brand_val+"%";

        document.getElementById("employee").innerHTML = response.game_flow.emp_engagement;
        document.getElementById('ee_bar').style.width=response.game_flow.emp_engagement+"%";

        document.getElementById("collection").innerHTML = response.game_flow.col_effi;
        document.getElementById('cs_bar').style.width=response.game_flow.col_effi+"%";
        
      },
    error:function(error){
        console.log(error);
    }
  });
}


function matrix_modal(){
  $('#Matrixbox').modal("show");
}