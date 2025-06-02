{{-- Record Cos --}}
<style>
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
    width: 100%;
    padding: 3px;
  }
  .modal-xy{
    --bs-modal-width: 750px;
  }
  .mt2{
    padding: 0px 55px 20px ;
  }
 
    #image2{
    margin-left: auto;
    margin-right: auto;
    width: 32%;
    margin-bottom: 38px;
    margin-top: 22px;
    }
   #salesrecord #image2{
    width: 52%;
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
  #cosrecord th, #salesrecord th{padding: 3px;}
  #cosrecord td, #salesrecord td{padding: 3px;}
  #cosrecord .endp button, #salesrecord .endp button{
    position: relative;
    width: 5rem;
    right: -30px;
    top:6px
  }
</style>

<?php       
            // $strategy_cos1 = DB::table('record_cos')->where('quarter', 'q1')->get();
?>




<div class="modal fade modal-xy" id="cosrecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" 
    style="display:  none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
        <div>
      <div class="modal-content borderornage mt1 mt2">
        <div class="endp endp1">
            <button type="button" class="backbtn dend" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="100%" alt=""></button>
          </div>
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
                    <td><button type="button" class="btnamount"><span id="cosYear1">
                    {{--  (isset($product_launch_val) && $product_launch_val->pf_cal) ? $product_launch_val->pf_cal : 0  --}}
                    </span>-</button></td>
                    <td><button type="button" class="btnamount"><span id="cosYear2">
                    {{--  (isset($product_launch_val_2) && $product_launch_val_2->pf_cal) ? $product_launch_val_2->pf_cal : 0  --}}
                    </span>-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">EVENT IMPACT</button></td>
                    <td><button type="button" class="btnamount">
                    {{--    @php 
                    $plus = '+';
                        if(isset( $matrix_all->car_def_val_cs) && (int) $matrix_all->car_def_val_cs >= 0){ $one =  $plus.$matrix_all->car_def_val_cs; } 
                        if(isset( $matrix_all->car_def_val_be) && (int) $matrix_all->car_def_val_be >= 0){ $two =  $plus.$matrix_all->car_def_val_be; }  
                        if(isset( $matrix_all->car_def_val_ee) && (int) $matrix_all->car_def_val_ee >= 0){ $three = $plus.$matrix_all->car_def_val_ee; }  
                    @endphp   

                    @if(isset($matrix_all->car_def_val_cs))
                    {{(isset($one) &&  $one != '') ? $one : $matrix_all->car_def_val_cs}}
                    {{(isset($two) &&  $two != '') ? $two : $matrix_all->car_def_val_be}}
                    {{(isset($three) &&  $three != '') ? $three : $matrix_all->car_def_val_ee}}=          
                    @endif  --}}
                    <span id="eveImpYear1">
                    {{--    @if(isset($matrix_all->matrix_value))
                        {{ $total = (int) $matrix_all->car_def_val_cs + (int) $matrix_all->car_def_val_be + (int) $matrix_all->car_def_val_ee }}
                        @else
                        0
                        @endif --}}
                    </span> - </button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="stgImpYear1"></span>M</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="stgImpYear2"></span>M</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="stgImpYear3"> </span>M</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="stgImpYear4"></span>M</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">TOTAL</button></td>
                    <td><button type="button" class="btnamount"><span id="costotalYear1">-</span></button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                </tbody>
            </table>     
        </div>
        <!-- <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            <input type="text" value="1" id="costotals" style="display:none" >
            <button class="btnstyle"  type="button" data-dismiss="modal" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>     -->
        </div>    
    </div>
</div> 


<!-- sales table -->

<div class="modal fade modal-xy" id="salesrecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" 
    style="display:  none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-0">
        <div>
      <div class="modal-content borderornage mt1 mt2">
        <div class="endp endp1">
            <button type="button" class="backbtn dend" data-bs-dismiss="modal" aria-label="Close"><img src="Media/Image/Circle.svg" width="100%" alt=""></button>
          </div>
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
                    <td><button type="button" class="btnamount"><span id="cosYear1">
                    {{--  (isset($product_launch_val) && $product_launch_val->pf_cal) ? $product_launch_val->pf_cal : 0  --}}
                    </span>-</button></td>
                    <td><button type="button" class="btnamount"><span id="cosYear2">
                    {{--  (isset($product_launch_val_2) && $product_launch_val_2->pf_cal) ? $product_launch_val_2->pf_cal : 0  --}}
                    </span>-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">EVENT IMPACT</button></td>
                    <td><button type="button" class="btnamount">
                  
                    <span id="eveImpYear1">
                   
                    </span> - </button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="salesimpact1"></span>M</button></td>
                    <td><button type="button" class="btnamount">
                        <span id="salesimpact2"></span>M</button></td>
                        <td><button type="button" class="btnamount">
                        <span id="salesimpact3"></span>M</button></td>
                    </button></td>
                    <td><button type="button" class="btnamount">
                        <span id="salesimpact4"></span>M</button></td>
                    </button></td>
                </tr>
                <tr>
                <td><button type="button" class="quarter">TRADE SPEND</button></td>
                <td><button type="button" class="btnamount">-</button></td>
                <td><button type="button" class="btnamount">-</button></td>
                <td><button type="button" class="btnamount">-</button></td>
                <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">TOTAL QUARTERLY SALES</button></td>
                    <td><button type="button" class="btnamount"><span id="costotalYear1">-</span></button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                </tbody>
            </table>     
        </div>
        <!-- <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
            <input type="text" value="1" id="costotals" style="display:none" >
            <button class="btnstyle"  type="button" data-dismiss="modal" style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div>     -->
        </div>    
    </div>
</div> 
