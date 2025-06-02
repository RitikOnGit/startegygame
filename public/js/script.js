    //Ad spent Drag & Drop
  function dragstart_handler(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
      // Tell the browser both copy and move are possible
    ev.effectAllowed = "copyMove";
  }
  function dragover_handler(ev) {
    ev.preventDefault(); }
  
    function drop_handler1(ev,did){
     ev.preventDefault();
     var id = ev.dataTransfer.getData("text");
     if (id == "src_copy1" ||id == "src_copy2" ||id == "src_copy3") {
      var zone = document.getElementById(did);
      var nodeCopy = document.getElementById(id).cloneNode(true);
      nodeCopy.id = "newId"+did;
      zone.innerHTML = '';
      zone.appendChild(nodeCopy);
    }
  }
  function dragend_handler(ev) {
  //  console.log("dragEnd");
   ev.dataTransfer.clearData();
  }
  
      //Incentive Flag Drag & Drop
  function dragstart2(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
      // Tell the browser both copy and move are possible
    ev.effectAllowed = "copyMove";
  }
  function dragover2(ev) {
    ev.preventDefault();
  }
  
  function drop_handler2(ev,did){
    ev.preventDefault();
    var id = ev.dataTransfer.getData("text");
    if (id == "flag_copy1" ||id == "flag_copy2" ||id == "flag_copy3") {
     var zone = document.getElementById(did);
     var nodeCopy = document.getElementById(id).cloneNode(true);
     nodeCopy.id = "newId"+did;
     zone.innerHTML = '';
     zone.appendChild(nodeCopy);
   }
  }
  function dragend2(ev) {
   console.log("dragEnd");
   ev.dataTransfer.clearData();
  }
  
      // Drag & Drop cards image
  function dragstart(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
      // Tell the browser both copy and move are possible
    ev.effectAllowed = "copyMove";
  }
  function dragover(ev) {
    ev.preventDefault(); }
  
    function drop(ev,did) {
     ev.preventDefault();
     var id = ev.dataTransfer.getData("text");
     if (id == "img_copy1" ||id == "img_copy2" ||id == "img_copy3" ||id == "img_copy4" ||id == "img_copy5" ||id == "img_copy6") {
      var zone = document.getElementById(did);
      var nodeCopy = document.getElementById(id).cloneNode(true);
      //  console.log(id);
      nodeCopy.id = "newId"+did;
      zone.innerHTML = '';
      zone.appendChild(nodeCopy);}
    }
    
    function rdrop(ev) {
     ev.preventDefault();
     var id = ev.dataTransfer.getData("text");
     var d = document.getElementById('src_copy1');
     var result = id.includes("newId");
     if (result == true && id == id) {
       var zone = document.getElementById(id);
       zone.innerHTML = '';
       zone.remove(zone);
     }else {return false}
    //  console.log('Your drop id is '+id);
    //  console.log('Your D is '+ result);
   }
     //  Script 06-01-2023
   function slidetest(to,from){
     $('.'+ from).toggleClass(to);  
     setTimeout(function () {
       $('.' + from ).toggleClass(to);
      }, 6500);                
  }
  function slidetest2(to,from,card_name){
    // console.log(to,from,card_name)
    slidetest(to,from);     
  
      $.ajax({            
        type: "get",
        url: "/public/get_matrix/",
       dataType:"Json",
       data: {card_name},
       
        success: function (response) {
            // console.log(response);
            var id = response.card_id;
            setTimeout(function () {
            $('#MyModal'+id).modal('show');
          }, 6500);   
          },
        error:function(error){
            // console.log(error);
        }
      });
                 
  }
  
  function OpenClose(from,to){
    $('.'+from).toggleClass(to);
  }
  
  function dragend(ev) {
  //  console.log("dragEnd");
   ev.dataTransfer.clearData();
  }
  
  function strategyselectionmodal(){
    $("#staticBackdrop").modal("show");
    const myTimeout = setTimeout(notificationmodal, 300);
    function notificationmodal(){
      var times =   $("#strategymodal").val();
  
      if(times == 2){
        $("#Examplemodal").modal("show");
      }else{
        $("#exampleModal").modal("show");    }  
      }
    }
    
    function productselectionmodal(){
      $("#staticBackdrop1").modal("show");
      const myTimeout = setTimeout(notificationmodal, 500);
      function notificationmodal(){
        var time =   $("#productmodal").val();
  
        if(time == 2){
          $("#ExampleModal4").modal("show");
        }else{
          $("#ExampleModal").modal("show");
        }
      }
    }
    
    function customerItmodal(){
      $("#staticBackdro2").modal("show");
      const myTimeout = setTimeout(notificationmodal, 600);
      function notificationmodal(){
        $("#ExampleModal5").modal("show");
      }
    }
    
    // strategy cards script
    $(document).ready(function(){
      $("#strategySelection input").on("click", function(){
        var dataId = $("#strategymodal").val();
        var a  =  $('input:checkbox:checked').length;
        var times =   $("#strategymodal").val();
        times = times+1;
        if(a < times){
          // alert ('checked only 1')
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
    
    function cardselected(select,id,type,invest,image,card_name,select,event){
      event.preventDefault();
      // console.log("strategy 1"+select,id,type,invest,image,card_name,select)
      var a  = $('#staticBackdrop input:checkbox:checked').length;
      var input = document.getElementsByName('stock_image[]');
      // console.log(input ,"a"+ a)
        if ($("#myCheck"+id).prop("checked")) {            
          $.ajax({            
            type: "get",
            // url: "/strategy_card/",
            url: "/public/strategy_card/",
           dataType:"Json",
           data: {select,id,type,invest,image,card_name,select},           
            success: function (response) {
                // console.log(response.record_sales_1);
                $('#stgImpYear1').html(response.strategy_cos1);
                $('#stgImpYear2').html(response.strategy_cos2);
                $('#stgImpYear3').html(response.strategy_cos3);
                $('#stgImpYear4').html(response.strategy_cos3);

                $('#salesimpact1').html(response.record_sales_1);
                $('#salesimpact2').html(response.record_sales_2);
                $('#salesimpact3').html(response.record_sales_3);
                $('#salesimpact4').html(response.record_sales_4);
                get_single_card_list(id, a , type,card_name);                               
              },
            error:function(error){
                console.log(error);
            }
          });          
         }
         $("#submit").attr('onclick','');

        }
      // $(".btnstyle").remove();
        // $("#submit").attr('onclick','');
      // }
  
    // card checked
   
    function get_single_card_list(id,a , type, card_name) {
      // alert("strategy card id"+a)
    if(type == 'strategy'){
      // alert(type)
          var times = $("#strategymodal").val();
          if(a == 2){     
            fillblink("productbtn","strategybtn");
            }
            if(a == 0){
              $("#exampleModal").modal("show");
            }
            else{
              if(times == 1){
                $("#staticBackdrop").modal("hide");
                $("#strategymodal").val(2);
              }
              if(times == a){
                $("#staticBackdrop").modal("hide");
                slidetest2('move-right','bottomcash',card_name )
                // setTimeout(function (){
                //   transaction(sum,abc);
                // },2000);
              }  
            }
      }
      else if(type == 'product'){
        // alert(type)
        var a  =  $('#staticBackdrop1 input:checkbox:checked').length;
        var times = $("#productmodal").val();
        if(a == 2){
          fillblink("adsMbtn","productbtn");
        }
        if(a == 0){
          $("#ExampleModal").modal("show");
        }
        else{

          if(times == 1){
            $("#staticBackdrop1").modal("hide");
            $("#productmodal").val(2);
          }
          if(times == a){
            $("#staticBackdrop1").modal("hide");
            slidetest('move-right','containerCard')
            // setTimeout(function (){
            //   transaction(sum,"assets");
            //   return true;},2200)
          } 
        }

      }
      $.ajax({            
          method: "get",
          url:  "/public/single-data/",
          data: {id: id, type:type},
          success: function (res) {
            // console.log(res)
            if(res.card_type == "strategy"){
            jQuery('#strategy_id_'+res.card_id).html('');
            // var cards = "<div class='col col-sm-4  dcenter ' id ='strategy_id_"+res.card_id+"'>";
               cards = "<div class='card cardsize' style='border: none;'>";
               cards +=     "<label class='radio-stock-img'>";
               cards +=        "<input type='hidden' id='strategymodal' value='2'>";
               cards +=        "<input type='hidden' id='lastSelect' value=''>";
               cards +=        "<input type='checkbox' name='stock_image[]' checked  disabled tabindex='1' $checked[postpoll] value="+res.invest_amount+" id='myCheck"+res.card_id+"'>";
               cards +=        "<img src='"+res.card_image+"'class='card-img-top' alt='...'>";
               cards +=        "<img class='selectImg myCheck"+res.card_id+"' id='selected_img' src='"+res.selected+"' style='display:block' alt=''>";
               cards +=        "<span class='btn-over-image alignment'>";
               cards +=          "<button type='button' class='btn' onClick='modalclick(`#cardModal"+res.card_id+"`)'></button>";
               cards +=        "</span>";
               cards +=      "</label>"; 
               cards +=      "</div>";
              //  cards +=    "</div>";

               $("#strategy_id_" + id).append(cards);   
               
               stra_card_app = "<div class='col stimg  dcenter'>";
               stra_card_app += "<div class='card cardsize' style='border: none;'>";
               stra_card_app +=     "<label class='radio-stock-img'>";
               stra_card_app +=        "<input type='hidden' id='strategymodal' value='2'>";
               stra_card_app +=        "<input type='hidden' id='lastSelect' value=''>";
              //  stra_card_app +=        "<input type='checkbox' name='stock_image[]' checked  disabled tabindex='1' $checked[postpoll] value="+res.invest_amount+" id='myCheck"+res.card_id+"'>";
               stra_card_app +=        "<img src='"+res.card_image+"'class='card-img-top' alt='...'>";
              //  stra_card_app +=        "<img class='selectImg myCheck"+res.card_id+"' id='selected_img' src='"+res.selected+"' style='display:block' alt=''>";
               stra_card_app +=        "<span class='btn-over-image'>";
               stra_card_app +=          "<button type='button' class='btn' onClick='modalclick(`#cardModal"+res.card_id+"`)'></button>";
               stra_card_app +=        "</span>";
               stra_card_app +=      "</label>"; 
               stra_card_app +=      "</div>";
               stra_card_app +=      "</div>";

               $(".card_append_stra").append(stra_card_app);
               add_coin(res.card_id,res.card_type,res.invest_amount,res.card_name);

            }
            else if(res.card_type == "product"){

              // alert("herkwle");
              jQuery('#product_id_'+res.card_id).html('');

              // cards = "<div class='col col-sm-4  dcenter all_product_"+res.card_id+"'>";
              cards = "<div class='card cardsize' style='border: none;'>";
              cards +=     "<label class='radio-stock-img'>";
              cards +=        "<input type='hidden' id='productmodal' value='2'>";
              cards +=        "<input type='checkbox' name='stock_image1[]' value="+res.invest_amount+" id='check"+res.card_id+"' checked  disabled tabindex='1' $checked[postpoll]>";
              cards +=        "<img src='" + res.card_image + "'class='card-img-top' name='" + res.card_name + "' id='get_img"+res.card_id+"' alt='...' value='"+res.invest_amount+"' >";
              cards +=        "<img class='selectImg2 check"+res.card_id+"' src='"+res.selected+"' alt='' style='display:block' alt=''>"; 
              cards +=        "<span class='btn-over-image alignment'>";
              cards +=          "<button type='button' class='btn' onClick='modalclick(`#productModal"+res.card_id+"`)'></button>";
              cards +=        "</span>";
              cards +=      "</label>"; 
              cards +=      "</div>";
              // cards +=    "</div>";

              $("#product_id_" + id).append(cards);

              // pro_card_app
              pro_card_app = "<div class='col  dcenter'>"
              pro_card_app += "<div class='card cardsize' style='border: none;'>";
              pro_card_app +=     "<label class='radio-stock-img'>";
              pro_card_app +=        "<input type='hidden' id='productmodal' value='2'>";
              // pro_card_app +=        "<input type='checkbox' name='stock_image1[]' value="+res.invest_amount+" id='check"+res.card_id+"' checked  disabled tabindex='1' $checked[postpoll]>";
              pro_card_app +=        "<img src='" + res.card_image + "'class='card-img-top' id='get_img"+res.card_id+"' name='" + res.card_name + "' alt='...' value='"+res.invest_amount+"' >";
              // pro_card_app +=        "<img class='selectImg2 check"+res.card_id+"' src='"+res.selected+"' alt='' style='display:block' alt=''>"; 
              pro_card_app +=        "<span class='btn-over-image'>";
              pro_card_app +=          "<button type='button' class='btn' onClick='modalclick(`#productModal"+res.card_id+"`)'></button>";
              pro_card_app +=        "</span>";
              pro_card_app +=      "</label>"; 
              pro_card_app +=      "</div>";
              pro_card_app +=      "</div>";

              $(".card_append_prod").append(pro_card_app);

              // append_prod_launch
              append_prod_launch = "<label class='radio-stock-img'>";
              append_prod_launch += "<img draggable='true' id='img_copy"+res.card_id+"' onClick='modalclick(`#productModal"+res.card_id+"`)' name='" + res.card_name + "' class='card-img-top' ondragstart='dragstart(event);' ondragend='dragend(event);' src='" + res.card_image + "' value='"+res.invest_amount+"' alt='select image'>";
              append_prod_launch += "<span class='btn-over-image'>";
              append_prod_launch  +=  "<button type='button' class='btn' onClick='modalclick(`#productModal"+res.card_id+"`)'></button>";
              append_prod_launch += "</span>";
              append_prod_launch += "</label>"; 
             
             $('.append_prod_launch').append(append_prod_launch);
             add_coin(res.card_id,res.card_type,res.invest_amount,res.card_name);
            }
              // $("#strategy_id_" + id).empty().html(cards);
              
          },
          error: function (err) {
              alert("Server did not Responded, Please Contact Administrator.");
              // alertServiceFunction("Error", "Server did not Responded, Please Contact Administrator.", "error");
          },
      });
  }

  function add_coin(id,type,invest,card_name){
    // alert(id,type,invest,card_name);

    $.ajax({
      type: "get",
      url: "/public/add-coins/",
     dataType:"Json",
     data: {id,type,invest,card_name},
     
      success: function (response) {
          // console.log(response);
          if(response[1] == 's1'){
            document.getElementById('marketing_js').innerHTML= response[0];
            impactRef('marketing_js');
          }
          if(response[1] == 's2'){
            document.getElementById('qna_js').innerHTML= response[0];
            impactRef('qna_js');

          }
          if(response[1] == 'assets'){
           document.getElementById('assets').innerHTML= response[0];
           impactRef('assets');

          }
          
          // alert(response[2].total_coin)
           document.getElementById('cash1').innerHTML= parseInt(response[2].total_coin);
           document.getElementById('cash').innerHTML= parseInt(response[2].total_coin);
           impactRef('cash');

          $("#pro_submit").attr('onclick','');            
      },
      error:function(error){
          console.log(error);
      }
  });
  }


    // Product selection cards function
      $(document).ready(function(){
        $("#productsection input").on("click", function(){
          var dataId = $("#productmodal").val();
          var a  =  $('input:checkbox:checked').length;
          var times =   $("#productmodal").val();
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
  
      function cardselected2(p_id,id,type,invest,image,card_name,select,event){
        event.preventDefault();

        var a  =  $('#staticBackdrop1 input:checkbox:checked').length;
        var input = document.getElementsByName('stock_image1[]');
        // var invests = document.getElementById('assets').innerHTML;
        
        // var invest = parseInt(invests) + parseInt(invest_amt);
        // alert(invests +" dsf" + invest_amt + 'dsf '+ invest)
        if ($("#check"+id).prop("checked")) {
            
          $.ajax({
            
            type: "get",
            url: "/public/product_card/",
           dataType:"Json",
           data: {p_id,id,type,invest,image,card_name,select},
           
            success: function (response) {
                console.log(response);
                get_single_card_list(id, a, type);                               
                $("#pro_submit").attr('onclick','');                
              },
            error:function(error){
                console.log(error);
            }
          });          
        // window.location.href='/selected_card/'+c_id+'/'+id+'/'+type+'/'+invest+'/'+str+'/';
      }
    }
    //card checked
        
      function selectProduct(id,p_id,type,invest,image,card_name,select){
        // console.log(id,p_id,type,invest,image,card_name,select)
        var parentElement = document.getElementById(id).closest('.radio-stock-img');
        var firstImg = parentElement.querySelector('img');
        if (firstImg) {
            firstImg.classList.add('selecter_card');
        }

          var times = $("#productmodal").val();
          var a  =  $('#staticBackdrop1 input:checkbox:checked').length;
               if( $('#' + id).is(':checked') ){
                  $('#' +id).prop('checked', true); // Unchecks it
                  $('.' + id).show();           
                  // console.log(a, times)
       
                  if(a == times){
                    if ($("#check"+p_id).prop("checked")) {                   
                      $("#pro_submit").attr('onclick', "cardselected2(`check"+p_id+"`,"+p_id+", `"+type+"`,"+invest+",`"+image+"`,`"+card_name+"`,`"+select+"`,event)");
                     }
                     else{
                      $("#pro_submit").attr('onclick','');
                     }
                  }else{
                      // alert("not more than times");
                      $('#' +id).prop('checked', false); // Unchecks it     
                      $('.' + id).hide();
                      $('#stimg'+p_id).remove();
                      firstImg.classList.remove('selecter_card');
                    
                    }
              }else{
                  $('.' + id).hide();
                  $('.' + id).css("display:none");
                  $('#stimg'+p_id).remove();
                  $("#pro_submit").attr('onclick','');
                  firstImg.classList.remove('selecter_card');

            }
          }
       
    // next card popup modal sctipt
          function modalclick(id){
            $(id).modal("show");
          }
          function closemodal(id){
            $(id).modal('hide');
          }

          function openNext(id, hide,card_id,card_name,card_type,card_matrix,brand,engagement,effi ){
            $(id).modal("show");
            $(hide).modal('hide');

            console.log(id, hide,card_id,card_name,card_type,card_matrix)
            if(card_name === card_type){
              
            }
            else {
              matrix(card_id,card_name,card_type,card_matrix,brand,engagement,effi)

              if(card_name == 's6'){   
                $.ajax({            
                  type: "get",
                  url: "/public/find_strategy/",
                  dataType:"Json",
                  data: {id,card_id,card_name,card_type},                 
                  success: function(response){
                    document.getElementById('marketing_js').innerHTML = response.total_amt;
                    impactRef('marketing_js');
                      slidetest('move-right','bottomcash' );
                        setTimeout(()=>{
                          $("#Matrixbox .xbtn1").attr('onclick',"openNext(`#ImpactModal"+card_id+"`,`#Matrixbox`)");
                        },2000)
                      },
                  error:function(error){        
                      console.log(error);        
                  }
                });  

              }else{
              $("#Matrixbox .xbtn1").attr('onclick',"openNext(`#ImpactModal"+card_id+"`,`#Matrixbox`)");
              }
            }

            // quarter 2
            if(card_id == 'optnA'){
              $("#Matrixbox .xbtn1").attr('onclick',"openonce('#cosrecord','#Matrixbox')");
            }
            else if(card_id == 'optnB'){
              $("#Matrixbox .xbtn1").attr('onclick',"openonce('#RTS','#Matrixbox','optnB')");
            }
            else if(card_id == 'optnC'){
              $("#Matrixbox .xbtn1").attr('onclick',"openonce('#RTS','#Matrixbox')");
            }
            
            // quarter 3
            if(card_id == 'q3optnA'){ }
            else if(card_id == 'q3optnB'){
              $("#Matrixbox .xbtn1").attr('onclick',"openonce('#RTS','#Matrixbox','optnB')");
            }
            else if(card_id == 'q3optnC'){
              $("#Matrixbox .xbtn1").attr('onclick',"openonce('#RTS','#Matrixbox','optnB')");
            }

            if(id == '#Matrixbox'){
              var include1 = hide.includes('MyModal');
              if(include1 == true){
                // alert('its s = true')
              }
              else{
              fillblink("cosblink","eventcardblink");}
            }
            if(id == '#costotalYear1'){
            }

          }
  
          function openonce(open,close,optn){
            if(open == '#RTS'){
              openNext(open,close);
            if(optn == 'optnB'){
              $("#RTS .btnstyle").attr('onclick',"eventclose('#RTS')");
            }}
            if(open == '#cosrecord'){
              openNext(open,close);
              $("#cosrecord .btnstyle").attr('onclick',"eventclose('#cosrecord')");
            }
          $("#Matrixbox .xbtn1").removeAttr('onclick')
          }

          function eventclose(close){
            if(close == "#RTS"){
              $("#RTS .btnstyle").attr('onclick',"slider_('tradeStotalY1','accountrec')");
              slidetest('move-right','bottomcash');
            }
            else{
              $("#cosrecord .btnstyle").attr('onclick',"slider_('costotalYear1Q2','cos')");
            }
            closemodal(close);
          }

          function fillblink(on, off) {

            var intervalClass = "interval_class"
            var el = document.getElementById(on);
            var old_color = document.getElementById(off);
            var intervalID = null; 
          
            if (old_color) {
              old_color.style.fill = ''; 
              console.log('Cleared old_color fill' + old_color);
            }
          
            var elementsWithIntervalClass = document.getElementsByClassName(intervalClass);
            for (var i = 0; i < elementsWithIntervalClass.length; i++) {
              clearInterval(elementsWithIntervalClass[i].intervalID);
            }
          
            if (el) {
              console.log('Starting blink on ' + on);
              var ofs = 0;
              el.classList.add(intervalClass);
              intervalID = setInterval(function timer() {
                el.style.fill = 'rgba(255, 255, 255, ' + Math.abs(Math.sin(ofs)) + ')';
                ofs += 10;
              }, 100);
              el.intervalID = intervalID;
              console.log(intervalID);
            }
          
            if (old_color) {
              old_color.classList.remove(intervalClass);
            }
          }
       
          function impactRef(id) {
            // Find the element with the specified id
            const element = document.getElementById(id);
      
            // Add the blinking class to the element with the specified id
            if (element) {
              element.classList.add('blinking');
      
              // Remove the blinking class after 3 seconds
              setTimeout(() => {
                element.classList.remove('blinking');
              }, 5000);
            }
      
            // Find the next sibling <b> tag and add the blinking class
            if (element && element.nextElementSibling && element.nextElementSibling.tagName === 'B') {
              element.nextElementSibling.classList.add('blinking');
      
              // Remove the blinking class after 3 seconds
              setTimeout(() => {
                element.nextElementSibling.classList.remove('blinking');
              }, 5000);
            }
          }


            // function fillblink(on,off){
            //   // console.log('clicked blink');
            //   var ofs = 0;
            //   var el = document.getElementById(on);
            //   var old_color = document.getElementById(off);
              
            //   if (off != '') {
            //     old_color.style.fill = '';
            //   console.log('its if 1 '+ off);
                            
            //   }
            //   for(i=0; i<100; i++)
            //   {
            //     window.clearInterval(i);
            //   }
            //   if (on != '' || on != 'null'){
            //   console.log('its if 2 on '+ on);
            //   var intervalID = setInterval(function timer(){
            //     el.style.fill = 'rgba(255,255,255,'+Math.abs(Math.sin(ofs))+')';
            //     ofs += 10;
            //   }, 100);
            //   console.log(intervalID);
            // }
            // }


