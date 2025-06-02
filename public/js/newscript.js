// year 1 Quatar 1
function caltable(id,block,frow,loc,frow2,view){
    // console.log(id,block,frow,loc)
    if(block == 'Store'){var a = 1};if(block == 'Agent'){var a = 2};if(block == 'Online'){var a = 3}

    if(view == "view"){  var block1 = $('#'+ id + ' .'+block+' .flip-card-inner-back img').attr('name');  }
    else{  var block1 = $('#'+ id + ' .'+block+' .flip-card-front img').attr('name');    }

    var flg = $('#'+id + ' .'+block+' .flagimg .'+frow+' img').attr('value');
    var Inc = $('#'+id + ' .'+block+' .flagimg .'+frow2+' img').attr('value');
    // console.log("santosh" + block1 , flg , Inc , frow)

    if(block1 == 'p4'){ // 1. Forex for LT Customers
        if(flg == 1){var sales =[0,16,11,5]; var dis =[0,0,1,0]; var cos =[0,13,8,3]; var brand =[0,1,0,0];}
        if(flg == 2){var sales =[0,18,13,7]; var dis =[0,0,1,0]; var cos =[0,14,9,4]; var brand =[0,1,1,1]; }
        if(flg == 3){var sales =[0,19,14,8]; var dis =[0,1,1,1]; var cos =[0,14,9,4]; var brand =[0,1,1,1]; }
        //flg 1  // trade for forex 
        if(flg == 1 && Inc == 1){var trade=[0,1,0,0]}
        if(flg == 1 && Inc == 2){var trade=[0,1,1,1]} 
        if(flg == 1 && Inc == 3){var trade=[0,2,1,1]} 
        //flg 2
        if(flg == 2 && Inc == 1){var trade=[0,1,0,1]}
        if(flg == 2 && Inc == 2){var trade=[0,2,1,1]} 
        if(flg == 2 && Inc == 3){var trade=[0,2,2,2]} 
        // flg 3
        if(flg == 3 && Inc == 1){var trade=[0,2,1,2]}
        if(flg == 3 && Inc == 2){var trade=[0,2,1,2]} 
        if(flg == 3 && Inc == 3){var trade=[0,2,2,3]} 
  }
  
      if(block1 == 'p2'){  //2. EBD card 
          if(flg == 1){ var sales =[0,11,11,4]; var dis =[0,1,1,0]; var cos =[0,5,5,2];  var brand =[0,1,1,1]; } 
          if(flg == 2){ var sales =[0,12,12,4]; var dis =[0,1,1,0]; var cos =[0,6,6,2];  var brand =[0,1,1,1]; } 
          if(flg == 3){ var sales =[0,13,13,4]; var dis =[0,1,1,0]; var cos =[0,6,6,2];  var brand =[0,1,1,1]; } 
           //flg 1  // trade for forex 
           if(flg == 1 && Inc == 1){var trade=[0,1,2,0]}
           if(flg == 1 && Inc == 2){var trade=[0,1,3,0]} 
           if(flg == 1 && Inc == 3){var trade=[0,2,3,1]} 
           //flg 2
           if(flg == 2 && Inc == 1){var trade=[0,2,3,0]}
           if(flg == 2 && Inc == 2){var trade=[0,2,3,0]} 
           if(flg == 2 && Inc == 3){var trade=[0,3,4,1]} 
           // flg 3
           if(flg == 3 && Inc == 1){var trade=[0,2,3,0]}
           if(flg == 3 && Inc == 2){var trade=[0,2,4,0]} 
           if(flg == 3 && Inc == 3){var trade=[0,3,4,1]} 
        }
          
      if(block1 == 'p3'){  //3. VISA SERVICE card 
        if(flg == 1){ var sales =[0,8,12,10]; var dis =[0,2,1,3]; var cos =[0,4,7,5];  var brand =[0,1,2,1]; } 
        if(flg == 2){ var sales =[0,9,13,11]; var dis =[0,2,1,2]; var cos =[0,4,7,5];  var brand =[0,2,3,2]; } 
        if(flg == 3){ var sales =[0,10,14,12]; var dis =[0,0,0,0]; var cos =[0,5,8,6];  var brand =[0,2,3,2];} 
         //flg 1  // trade for forex 
         if(flg == 1 && Inc == 1){var trade=[0,1,1,1]}
         if(flg == 1 && Inc == 2){var trade=[0,1,2,2]} 
         if(flg == 1 && Inc == 3){var trade=[0,2,3,2]} 
         //flg 2
         if(flg == 2 && Inc == 1){var trade=[0,1,1,1]}
         if(flg == 2 && Inc == 2){var trade=[0,1,2,2]} 
         if(flg == 2 && Inc == 3){var trade=[0,2,3,2]} 
         // flg 3
         if(flg == 3 && Inc == 1){var trade=[0,1,1,1]}
         if(flg == 3 && Inc == 2){var trade=[0,1,2,2]} 
         if(flg == 3 && Inc == 3){var trade=[0,2,3,2]} 
      }

  if(block1 == 'p1'){ //4. KHD card
          if(flg == 1){var sales =[0,12,9,4]; var dis =[0,0,1,1]; var cos =[0,8,7,2]; var brand =[0,1,1,2];}
          if(flg == 2){var sales =[0,13,10,5]; var dis =[0,0,1,1]; var cos =[0,8,7,3]; var brand =[0,2,1,2];}
          if(flg == 3){var sales =[0,15,11,6]; var dis =[0,0,1,0]; var cos =[0,9,8,4]; var brand =[0,2,1,2];}          
          //flg 1  // trade for forex 
         if(flg == 1 && Inc == 1){var trade=[0,1,1,1]}
         if(flg == 1 && Inc == 2){var trade=[0,1,2,1]} 
         if(flg == 1 && Inc == 3){var trade=[0,1,3,2]} 
         //flg 2
         if(flg == 2 && Inc == 1){var trade=[0,1,2,1]}
         if(flg == 2 && Inc == 2){var trade=[0,1,3,2]} 
         if(flg == 2 && Inc == 3){var trade=[0,1,3,2]} 
         // flg 3
         if(flg == 3 && Inc == 1){var trade=[0,1,2,1]}
         if(flg == 3 && Inc == 2){var trade=[0,1,3,2]} 
         if(flg == 3 && Inc == 3){var trade=[0,1,3,2]}   
    }

  if(block1 == 'p5'){ //5. MIBOSO  Card
          if(flg == 1){var sales =[0,11,9,7]; var dis =[0,1,1,1]; var cos =[0,4,3,2]; var brand =[0,1,1,0];}
          if(flg == 2){var sales =[0,12,9,7]; var dis =[0,1,1,1]; var cos =[0,4,3,2]; var brand =[0,1,1,0];}
          if(flg == 3){var sales =[0,13,9,7]; var dis =[0,0,1,0]; var cos =[0,4,3,2]; var brand =[0,1,1,1];}          
          //flg 1  // trade for forex 
         if(flg == 1 && Inc == 1){var trade=[0,1,0,0]}
         if(flg == 1 && Inc == 2){var trade=[0,2,1,1]} 
         if(flg == 1 && Inc == 3){var trade=[0,3,1,1]} 
         //flg 2
         if(flg == 2 && Inc == 1){var trade=[0,1,0,1]}
         if(flg == 2 && Inc == 2){var trade=[0,2,1,1]} 
         if(flg == 2 && Inc == 3){var trade=[0,3,1,1]} 
         // flg 3
         if(flg == 3 && Inc == 1){var trade=[0,1,0,1]}
         if(flg == 3 && Inc == 2){var trade=[0,2,1,1]} 
         if(flg == 3 && Inc == 3){var trade=[0,3,1,1]}   
    }

  if(block1 == 'p6'){ //6.  AIRLINE RESERVATION Card
          if(flg == 1){var sales =[0,7,14,10]; var dis =[0,0,0,1]; var cos =[0,6,12,8]; var brand =[0,1,2,1];}
          if(flg == 2){var sales =[0,8,15,11]; var dis =[0,0,0,1]; var cos =[0,6,12,8]; var brand =[0,1,2,1];}
          if(flg == 3){var sales =[0,8,15,11]; var dis =[0,0,0,1]; var cos =[0,7,13,9]; var brand =[0,3,4,3];}          
          //flg 1  // trade for forex 
         if(flg == 1 && Inc == 1){var trade=[0,0,0,0]}
         if(flg == 1 && Inc == 2){var trade=[0,0,1,0]} 
         if(flg == 1 && Inc == 3){var trade=[0,1,1,1]} 
         //flg 2
         if(flg == 2 && Inc == 1){var trade=[0,0,1,0]}
         if(flg == 2 && Inc == 2){var trade=[0,0,1,0]} 
         if(flg == 2 && Inc == 3){var trade=[0,1,2,1]} 
         // flg 3
         if(flg == 3 && Inc == 1){var trade=[0,0,1,0]}
         if(flg == 3 && Inc == 2){var trade=[0,0,1,0]} 
         if(flg == 3 && Inc == 3){var trade=[0,1,2,1]}   
    }

    if (id == 'cosrecord1'){
        // alert(cos[a])
        document.getElementById(loc).innerHTML = cos[a]; 
    }
    if (id == 'computesale1'){
        document.getElementById(loc).innerHTML = sales[a]; 
    }
    if (id == 'computeDis'){
        document.getElementById(loc).innerHTML = dis[a]; 
    }
    if (id == 'computeTS'){
        document.getElementById(loc).innerHTML = trade[a]; 
        // console.log(trade[a]);
    }
}
// function modalclick(id){
//     $(id).modal("show");
//   }

// function openNext(id, hide){
//    $(id).modal("show");
//    $(hide).modal('hide');}

//    function closemodal(id){
//     $(id).modal('hide');
//   }

