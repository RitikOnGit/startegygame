{{-- slider header and footer --}}
<?php         $product_launch_val = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();
              $bal_sheet_val = DB::table('balance_sheet')->where('user_id','SANTOSH')->where('id', '=', '1')->first(); 
            //   dd($bal_sheet_val);             
?>
 <div class="topcash">
        <div class="cashbackground">
            <p ><img src="assets/icons/dollar-coin.png" alt=""> <b  style="margin-left: -8px;"></b><b><span id="cash1">{{$amt_deduct->total_coin}}</span>M</b> </p>
        </div>
      </div>
    
      <div class="sideicons">
        <div class="row">
          <img id="channel" src="img/Channel.svg" alt="">
        </div>
        <div class="row">
          <img id="Metrics" src="img/Metrics.svg" onclick= "matrix_modal()" alt="">
        </div>
        <div class="row">
          <img id="Message" src="img/Message icon.svg" alt="">
        </div>
        <div class="row">
          <img id="Leaderboard" src="img/Leaderboard.svg" alt="">
        </div>
      </div>
      
      <div class="buttons " id="pnlbtn" style="display:none ;">
        <img src="img/Group 174.svg" onclick="OpenClose('containerCard','move-right')" alt="" style="position:absolute; top: 0;">
        <img class="Pnlbtn" src="img/Group 173.svg" onclick="OpenClose('bottomcash','move-right')" alt="" style="z-index: 0; height: fit-content;">
      </div>
  <div id="coincards" style="display: none;">
  <div class="row d-flex justify-content-end topcashcard" style="position: absolute;top: -15px;">
    <div class="containerCard  mt-4">
      <div class="row gx-0 bottomCard">
          <div class="col" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                  {{-- @foreach ($calculation as $item) --}}
                   {{-- {{print_r($item->total_coin);}} --}}              
              <div class="">
                  <div class="title" style="border-top-left-radius: 10px;">CASH</div>
                  <div class="bgwhite" style="border-bottom-left-radius: 10px;">
                  <p><b id="cash"></b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <!-- <span>Progress bar</span> -->
                  <div class="progress">
                      <div class="bar" style="width:{{($amt_deduct->total_coin) ? $amt_deduct->total_coin : '100'}}%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title" style="line-height: initial;">LONG-TERM DEBT</div>
                  <div class="bgwhite">
                  <p><b id="LTB">{{ (isset($bal_sheet_val->long_term_debt)) ? $bal_sheet_val->long_term_debt : 0}}</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:45%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div> 
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title" style="line-height: initial;">ACCOUNTS RECEIVABLE</div>
                  <div class="bgwhite">
                  <p><b id="accountrec">
                    @if(isset($product_launch_val_4->acc_receivable) && $product_launch_val_4->acc_receivable != '')
                        {{$product_launch_val_4->acc_receivable}}
                    @elseif(isset($product_launch_val_3->acc_receivable) && $product_launch_val_3->acc_receivable != '')
                        {{$product_launch_val_3->acc_receivable}}
                    @elseif(isset($product_launch_val_2->acc_receivable) && $product_launch_val_2->acc_receivable != '')
                     @if(isset($acc_receivable_q3) && $acc_receivable_q3->acc_receivable != '')
                    {{$acc_receivable_q3->acc_receivable}} @else
                        {{$product_launch_val_2->acc_receivable}} @endif
                    @elseif(isset($product_launch_val->acc_receivable) && $product_launch_val->acc_receivable != '')
                    @if(isset($acc_receivable_q2) && $acc_receivable_q2->acc_receivable != '')
                            {{ $acc_receivable_q2->acc_receivable}}
                            @else
                        {{$product_launch_val->acc_receivable}}    @endif
                    @else
                        @if(isset($acc_receivable) && $acc_receivable->acc_receivable != '')
                            {{$acc_receivable->acc_receivable}}  
                        @elseif(isset($account_receivable) && $account_receivable->card_invest != '')
                            {{$account_receivable->card_invest}}  
                        @elseif(isset($bal_sheet_val) && $bal_sheet_val->acc_receivable != '')
                            {{$bal_sheet_val->acc_receivable}}  
                        @else 
                            0
                        @endif
                    @endif
                    </b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:15%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title" style="line-height: initial;">ACCOUNTS PAYABLE</div>
                  <div class="bgwhite">
                  <p><b id="accountpay">
                    @if(isset($product_launch_val_4->total_cos) && $product_launch_val_4->total_cos != '')
                        {{$product_launch_val_4->total_cos}}
                    @elseif(isset($product_launch_val_3->total_cos) && $product_launch_val_3->total_cos != '')
                        {{$product_launch_val_3->total_cos}}
                    @elseif(isset($product_launch_val_2->total_cos) && $product_launch_val_2->total_cos != '')
                        {{$product_launch_val_2->total_cos}}
                    @elseif(isset($product_launch_val->total_cos) && $product_launch_val->total_cos != '')
                        {{$product_launch_val->total_cos}}
                    @else
                       0
                    @endif
                    
                    {{-- {{ (isset($product_launch_val->total_cos)) ? $product_launch_val->total_cos : 0}} --}}
                </b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:15%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
         {{-- @endforeach --}}
          <div class="col" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
              <div class="">
                  <div class="title" style="border-top-right-radius: 10px;">ASSETS</div>
                  <div class="bgwhite" style="border-bottom-right-radius: 10px;">
                  <p><b id="assets">{{($assets)? $assets : $bal_sheet_val->assets}}</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:85%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
      
    </div>
  </div>
  <!-- bottom -->
  
  <div class="row bottomcash">
    <div class="container  mt-4">
      <div class="row gx-0 bottomCard">
          <div class="col" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
              <div class="">
                  <div class="title" style="border-top-left-radius: 10px;"><b >SALES</b></div>
                  <div class="bgwhite" style="border-bottom-left-radius: 10px;">
                  <p><b id="sales">
                    @if(isset($sales) && $sales != '')
                    {{$sales}}
                    @else
                        @if(isset($product_launch_val->total_sales))
                            {{ $product_launch_val->total_sales}} 
                        @else  
                            0
                        @endif
                    @endif
                
                </b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <!-- <span>Progress bar</span> -->
                  <div class="progress">
                      <div class="bar" style="width:25%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b >DISCOUNT</b></div>
                  <div class="bgwhite">
                  <p><b id="discount">
                    @if(isset($dis) && $dis != '')
                    {{$dis}}
                    @else
                        @if(isset($product_launch_val->compute_discount))
                            {{ $product_launch_val->compute_discount}} 
                        @else  
                            0
                        @endif
                    @endif
                    
                    {{-- {{ (isset($product_launch_val->compute_discount)) ?(int) $product_launch_val->compute_discount : 0}} --}}
                
                </b> <b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:45%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>COS</b></div>
                  <div class="bgwhite">
                  <p><b id="cos">
                    @if(isset($cos) && $cos != '')
                    {{$cos}}
                    @else
                        @if(isset($product_launch_val->final_cos_val))
                            {{ $product_launch_val->final_cos_val}} 
                        @else  
                            0
                        @endif
                    @endif
                    
                    {{-- {{ (isset($product_launch_val->final_cos_val)) ?(int) $product_launch_val->final_cos_val : 0}} --}}
                
                </b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:45%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>RESOURCES  <br> <span class="qtly">(10M QTLY)</span></b></div>
                  <div class="bgwhite">
                  <p><b id="resources">
                    @if(isset($resources) && $resources != '')
                    {{$resources}}
                    @else
                        @if(isset($product_launch_val->resources))
                            {{ $product_launch_val->resources}} 
                        @else  
                            0
                        @endif
                    @endif
                    
                    {{-- {{ (isset($product_launch_val->resources)) ?(int) $product_launch_val->resources : 0}} --}}
                
                </b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:85%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>M&amp;A <br> <span class="qtly">(3M QTLY)</span></b></div>
                  <div class="bgwhite">
                  <p><b id="marketing_js">{{($cal_ma) ? $cal_ma : '0'}}</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:15%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>RENT&amp;UTILITY <br><span class="qtly">(<span id="rent_box">11</span>M QTLY)</span></b></div>
                  <div class="bgwhite">
                  <p><b id="RENT">
                    @if(isset($matrix_all_3->rent_utility) && $matrix_all_3->rent_utility != '')
                    {{$matrix_all_3->rent_utility}}
                    @else
                        0
                    @endif
                </b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:15%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>G&amp;A <br><span class="qtly">(<span id="qna_box">14</span>M QTLY)</span></b></div>
                  <div class="bgwhite">
                  <p><b id="qna_js">{{($cal_ga) ? $cal_ga : '0'}}</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:85%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>DEPRECIATION</b></div>
                  <div class="bgwhite">
                  <p><b id="depreciation">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:85%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>IT</b></div>
                  <div class="bgwhite">
                  <p><b id="it">{{$IT_amt}}</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:51%">
                          <p class="percent"></p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title" style="line-height: 1;"><b>CUSTOMER SERVICE</b></div>
                  <div class="bgwhite">
                  <p><b id="customer">{{$CUSTOM_amt}}</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:25%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col">
              <div class="">
                  <div class="title"><b>INT <span class="qtly">(20%)</span></b></div>
                  <div class="bgwhite">
                  <p><b id="int">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:12%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          <div class="col" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
              <div class="">
                  <div class="title" style="border-top-right-radius: 10px;"><b>TAX</b></div>
                  <div class="bgwhite" style="border-bottom-right-radius: 10px;">
                  <p><b id="tax">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                  <div class="progress">
                      <div class="bar" style="width:80%">
                          <p class="percent"></p>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
  <div class="container m-1 p-0" style="position: fixed;"> 
    <!-- class="transpbtn" -->
  <div class="Transpbtnpn" style="z-index:9999; position:absolute;bottom:0 ; align-items: center; z-index: 9999; height: 95vh; margin:-7px;">
    </div>
  </div>

      <div id="coincards" style="display: none;">
        <div class="row d-flex justify-content-end" style="position: absolute;top: -15px;right:12%;">
          <div class="containerCard  mt-4">
            <div class="row gx-0 bottomCard">
                <div class="col" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                    <div class="">
                        <div class="title" style="border-top-left-radius: 10px;">CASH</div>
                        <div class="bgwhite" style="border-bottom-left-radius: 10px;">
                        <p><b id="cash"></b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <!-- <span>Progress bar</span> -->
                        <div class="progress">
                            <div class="bar" style="width:25%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">LOANS</div>
                        <div class="bgwhite">
                        <p><b>0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:45%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title" style="line-height: initial;">ACCOUNTS RECEIVABLE</div>
                        <div class="bgwhite">
                        <p><b>0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:15%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                    <div class="">
                        <div class="title" style="border-top-right-radius: 10px;">ASSETS</div>
                        <div class="bgwhite" style="border-bottom-right-radius: 10px;">
                        <p><b id="assets">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:85%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- bottom -->
        <div class="row bottomcash">
          <div class="container  mt-4">
            <div class="row gx-0 bottomCard">
                <div class="col" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                    <div class="">
                        <div class="title" style="border-top-left-radius: 10px;">SALES</div>
                        <div class="bgwhite" style="border-bottom-left-radius: 10px;">
                        <p><b id="sales">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:25%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">DISCOUNT</div>
                        <div class="bgwhite">
                        <p><b id="discount">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:45%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">MARKETING</div>
                        <div class="bgwhite">
                        <p><b id="marketing">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:15%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">RESOURCES</div>
                        <div class="bgwhite">
                        <p><b id="resources">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:85%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">IT</div>
                        <div class="bgwhite">
                        <p><b id="it">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:51%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title" style="line-height: 1;">CUSTOMER SERVICE</div>
                        <div class="bgwhite">
                        <p><b id="customer">0</b><b>M</b> <img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:25%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">G&amp;A</div>
                        <div class="bgwhite">
                        <p><b id="qna">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:85%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">INT</div>
                        <div class="bgwhite">
                        <p><b id="int">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:12%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <div class="title">TAX</div>
                        <div class="bgwhite">
                        <p><b id="tax">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:68%">
                                <p class="percent"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                    <div class="">
                        <div class="title" style="border-top-right-radius: 10px;">PAT</div>
                        <div class="bgwhite" style="border-bottom-right-radius: 10px;">
                        <p><b id="pat">0</b><b>M</b><img src="assets/icons/dollar-coin.png" alt="" srcset=""></p>
                        <div class="progress">
                            <div class="bar" style="width:80%">
                                <p class="percent"></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
     
{{-- {{dd($matrix_all);}} --}}
{{-- matrix --}}
<div class="modal fade" id="Matrixbox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg mt-0">
      <div class="modal-content borderblue mt1">
        <div class="endp endp1">
          <button type="button" class="backbtn dend xbtn1" @if(isset($round1) && $round1=='r1' ||isset($round2) && $round2=='r2' || isset($round3) && $round3=='r3' || isset($round4) && $round4=='r4' ||isset($round5) && $round5=='r5')  data-bs-dismiss="modal" @endif ><img src="{{ asset('Media/Image/circleBlue.svg')}}" width="50%" alt=""></button>
        </div>
        <div class="modal-header dcenter noborder pt-0">
          <!-- <h1 class="modal-title fs-5 stg1 stg2" id="">ADs and Marketing </h1> -->
        </div>
        <div class="modal-body py-4">
     <div class="container">
      <div class="row">
      <div class="col-12">
        <div class="matrixwhite">
          <p class="label"><b>CUSTOMER SATISFICATION </b></p>
          <div class="row">
          <div class="col-10">
              <div class="mprogress">
                <div class="bar" id='cs_bar' style="width:{{(isset($matrix_all->matrix_value) && $matrix_all != '') ? $matrix_all->matrix_value : 75}}%">
                  <!-- <p class="percent"></p> -->
                  <img src="{{ asset('Media/Image/bluecirclestar.svg')}}" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                  {{-- <input style="display:none" id="matrix_val" value={{$data->c_sat}} > --}}
                  @if(isset($matrix_all_4) && $matrix_all_4->matrix_value != '')
                  <span id="customer_sta">{{ $matrix_all_4->matrix_value}}</span><span>%</span>

                  @elseif(isset($matrix_all_3) && $matrix_all_3->matrix_value != '')
                  <span id="customer_sta">{{ $matrix_all_3->matrix_value}}</span><span>%</span>

                  @elseif(isset($matrix_all_2) && $matrix_all_2->matrix_value != '')
                  <span id="customer_sta">{{ $matrix_all_2->matrix_value}}</span><span>%</span>

                  @elseif(isset($matrix_all) && $matrix_all->matrix_value != '')
                  <span id="customer_sta">{{ $matrix_all->matrix_value}}</span><span>%</span>

                  @else
                  <span id="customer_sta">{{(isset($matrix_cal->matrix_value) && $matrix_cal != '') ? $matrix_cal->matrix_value : 75}}</span><span>%</span>
                  @endif
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
                <div class="bar" id='br_bar' style="width:{{(isset($matrix_all->brand_val) && $matrix_all != '') ? $matrix_all->brand_val : 70}}%">
                  <!-- <p class="percent"></p> -->
                  <img src="{{ asset('Media/Image/bluecirclestar.svg')}}" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                    @if(isset($matrix_all_4) && $matrix_all_4->brand_val != '')
                    <span id="brand">{{ $matrix_all_4->brand_val}}</span><span>%</span>

                    @elseif(isset($matrix_all_3) && $matrix_all_3->brand_val != '')
                    <span id="brand">{{ $matrix_all_3->brand_val}}</span><span>%</span>

                    @elseif(isset($matrix_all_2) && $matrix_all_2->brand_val != '')
                    <span id="brand">{{ $matrix_all_2->brand_val}}</span><span>%</span>

                    @elseif(isset($matrix_all) && $matrix_all->brand_val != '')
                    <span id="brand">{{ $matrix_all->brand_val}}</span><span>%</span>
  
                    @else
                  <span id="brand">{{(isset($matrix_cal->brand_val) && $matrix_cal != '') ? $matrix_cal->brand_val : 70}}</span><span>%</span>
                  @endif
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
                <div class="bar" id='ee_bar' style="width:{{(isset($matrix_all->emp_engagement) && $matrix_all != '') ? $matrix_all->emp_engagement : 75}}%">
                  <!-- <p class="percent"></p> -->
                  <img src="{{ asset('Media/Image/bluecirclestar.svg')}}" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                    @if(isset($matrix_all_4) && $matrix_all_4->emp_engagement != '')
                    <span id="employee">{{ $matrix_all_4->emp_engagement}}</span><span>%</span>

                    @elseif(isset($matrix_all_3) && $matrix_all_3->emp_engagement != '')
                    <span id="employee">{{ $matrix_all_3->emp_engagement}}</span><span>%</span>

                    @elseif(isset($matrix_all_2) && $matrix_all_2->emp_engagement != '')
                    <span id="employee">{{ $matrix_all_2->emp_engagement}}</span><span>%</span>

                    @elseif(isset($matrix_all) && $matrix_all->emp_engagement != '')
                    <span id="employee">{{ $matrix_all->emp_engagement}}</span><span>%</span>
  
                    @else
                  <span id="employee">{{(isset($matrix_cal->emp_engagement) && $matrix_cal != '') ? $matrix_cal->emp_engagement : 75}}</span><span>%</span>
                  @endif
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
                <div class="bar" id='ce_bar' style="width:{{(isset($matrix_all->col_effi) && $matrix_all != '') ? $matrix_all->col_effi : 90}}%">
                  <!-- <p class="percent"></p> -->
                  <img src="{{ asset('Media/Image/bluecirclestar.svg')}}" alt="">
                </div>
              </div>
              </div>
              <div class="col-2">
                <p class="pretext">
                    @if(isset($matrix_all_4) && $matrix_all_4->col_effi != '')
                    <span id="collection">{{ $matrix_all_4->col_effi}}</span><span>%</span>

                    @elseif(isset($matrix_all_3) && $matrix_all_3->col_effi != '')
                    <span id="collection">{{ $matrix_all_3->col_effi}}</span><span>%</span>

                    @elseif(isset($matrix_all_2) && $matrix_all_2->col_effi != '')
                    <span id="collection">{{ $matrix_all_2->col_effi}}</span><span>%</span>
  
                    @elseif(isset($matrix_all) && $matrix_all->col_effi != '')
                    <span id="collection">{{ $matrix_all->col_effi}}</span><span>%</span>
  
                    @else
                  <span id="collection">{{(isset($matrix_cal->col_effi) && $matrix_cal != '') ? $matrix_cal->col_effi : 90}}</span><span>%</span> 
                  @endif
                </p>
              </div>
            </div>
          </div>              
      </div>
      </div>
    </div>
        </div>
        {{-- <div id="" class="modal-footer noborder dcenter mt-2 footerbtn matrixok">
          <button  class="btnstyle matrix_submit" type="button"  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
        </div> --}}
      </div>
    </div>
  </div>
 

{{-- Record Cos --}}
{{-- <div class="modal fade modal-xy" id="cosrecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" 
    style="display:  none;" aria-hidden="true">
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
                    <td><button type="button" class="btnamount"><span id="cosYear2">{{(isset($product_launch_val_2) && $product_launch_val_2->pf_cal) ? $product_launch_val_2->pf_cal : 0}}</span>M</button></td>
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
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">STRATEGY IMPACT</button></td>
                    <td><button type="button" class="btnamount"><span id="stgImpYear1">
                    @foreach($strategy_selected as $data)
                        @if(isset($data) && $data->impact_value_cos != '')
                        {{$data->impact_value_cos}}
                        @else
                        0
                        @break;
                        @endif
                    @endforeach        
                    </span>M</button></td>
                    <td><button type="button" class="btnamount"><span id="stgImpYear2">
                    @foreach($strategy_selected as $data)
                        @if(isset($data) && $data->impact_value_cos != '')
                        {{$data->impact_value_cos}}
                        @else
                        0
                        @break;
                        @endif
                    @endforeach        
                    </span>M</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="quarter">TOTAL</button></td>
                    <td><button type="button" class="btnamount"><span id="costotalYear1">0</span>M</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                    <td><button type="button" class="btnamount">-</button></td>
                </tr>
                </tbody>
            </table>     
        </div>
    </div>
    <div id="" class="modal-footer noborder dcenter mt-2 footerbtn">
        <input type="text" value="1" id="costotals" style="display:none" >
        <button class="btnstyle"  type="button" onclick="slider_('costotalYear1','cos')"  style="border: none;"><img src="Images/Ok button.svg" alt="" width="50%"></button>
    </div>    
</div> --}}
