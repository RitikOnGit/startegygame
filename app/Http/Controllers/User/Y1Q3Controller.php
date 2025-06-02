<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Card;
use App\Models\Gameflow;
use Carbon\Carbon;
use App\Models\Events_cards;
use App\Models\{Matrix,Event_flow,Cosrec,Balancesheet,Salesrec,ProfitLoss,Discount_quaterly,account_receivable};

use Illuminate\Support\Facades\Facade;
use Validator;
use DB;


class Y1Q3Controller extends Controller
{
     public function round_four(Request $request)
    {
        $strategy_selected  = Gameflow::where('card_type', '=', 'strategy')->where('user_selected', '=', 1)->get();
        $product          = Card::where('card_type', '=', 'product')->get();
        $event_card_q3  = DB::table('cards')->where('card_type', '=', 'event_card_q3')->get();
        $event_card_selected  = DB::table('gameflows')->where('card_type', '=', 'event_card_q3')->where('user_selected', '=', 1)->first();
        $product_launch_val_3 = DB::table('gameflows')->where('card_type', '=', 'product_launch_3')->first();
        $product_launch_val_2 = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();
        $product_launch_val = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();
        $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
       
        $prod_flag = '';
            if(isset($product_launch_val_2) && $product_launch_val_2 != ''){
                $multi_flags = $product_launch_val_2->multi_flag;            
                $multi_flagss = json_decode($multi_flags);        
                $prod_flag = (array) $multi_flagss;
            }
        $cal_ma      = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
        $cal_ga      = DB::table('gameflows')->where('profit_loss', 'G_A')->sum('invest_amount');
        $assets_total      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
        $assets = (int) $assets_total +(int) 30;

        $IT_amt      = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'IT')->sum('invest_amount');
        $CUSTOM_amt  = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'CUSTOM')->sum('invest_amount'); 
        $matrix_cal  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();
        $matrix_all  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();     
        $matrix_all_2 = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q2') ->orderBy('id', 'desc')->limit(1)->first();     
        $matrix_all_3 = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q3') ->orderBy('id', 'desc')->limit(1)->first();     

        $round4 = 'r4';

        $sales    = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->orWhere('card_name','event_card_3_Y1Q2')->orWhere('card_name', 'event_card_2_Y1Q2')->orWhere('card_name', 'event_card_3_Y1Q3')->orWhere('card_name', 'event_card_2_Y1Q3')->sum('total_sales');

        $dis      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->sum('compute_discount');
        $cos      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->sum('final_cos_val');
        $resources= DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->sum('resources');

        $event_cosq3  = Event_flow::where('user_id','SANTOSH')->where('quarter','q2')->where('option','A')->first();

        $acc_receivable_q3  =  Gameflow::where('user_id','SANTOSH')->where('card_type', '=', 'add_coin_q3')->first();

        $Events_cards_3  = Events_cards::where('quater_year',"quarter_3")->get();

        $event_impactq2  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q2')->where('quarter','q2')->sum('event_impact');

        $q3_checkevent_impactq3  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q3')->where('quarter','q3')->first();
        if(isset($q3_checkevent_impactq3->event_impact)){
            $event_impactq3  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q3')->where('quarter','q3')->sum('event_impact');
        }else{
        $event_impactq3  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q2')->where('quarter','q3')->sum('event_impact');
        }

        $q3_checkevent_impactq4 = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q3')->where('quarter','q4')->first();
        if(isset($q3_checkevent_impactq4->event_impact)){
        $event_impactq4  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q3')->where('quarter','q4')->sum('event_impact');
    }else{
        $event_impactq4  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q2')->where('quarter','q4')->sum('event_impact');
        }


        $rent_box = Event_flow::where('user_id','SANTOSH')->where('quarter','q3')->orderBy('id','desc')->first();
//         echo "<pre>";
// print_r($acc_receivable_q3->acc_receivable);
// exit();
        
        // dd($Events_cards_3);
        return view('Game/y1q3',['matrix_all'=> $matrix_all,'matrix_all_2'=> $matrix_all_2,'round4'=> $round4,'product_launch_val_2'=>$product_launch_val_2,'matrix_cal'=>$matrix_cal,'product_launch_val_3'=>$product_launch_val_3,'matrix_all_3'=>$matrix_all_3,
        'cal_ga'=>$cal_ga,'cal_ma'=>$cal_ma,'assets'=>$assets,'IT_amt'=>$IT_amt,'CUSTOM_amt'=>$CUSTOM_amt,'event_card_q3'=>$event_card_q3,
        'event_card_selected'=>$event_card_selected,'prod_flag'=>$prod_flag,'product'=>$product,'amt_deduct'=>$amt_deduct,'strategy_selected'=>$strategy_selected,'product_launch_val'=>$product_launch_val,'sales'=>$sales,'dis'=>$dis,'cos'=>$cos,'resources'=>$resources,'Events_cards_3'=>$Events_cards_3,'event_impactq2'=>$event_impactq2,'event_impactq3'=>$event_impactq3,'event_impactq4'=>$event_impactq4,'acc_receivable_q3'=>$acc_receivable_q3,'event_cosq3'=>$event_cosq3]);
    }

    public function q2selectOpt_y1q3(Request $request){
        // dd($request->all());
        try{
           $amt_deduct  = DB::table('gameflows')->orderBy('id', 'desc')->first();

           $game_flow = new Gameflow;
           $game_flow->user_id ='SANTOSH';
           $game_flow->card_id = $request->a;
           $game_flow->card_type = 'event_card_q3';
           $game_flow->card_name = $request->div_id;
           $game_flow->selected = $request->a;
           $game_flow->card_image = $request->image;
           $game_flow->total_coin = $amt_deduct->total_coin;
           $game_flow->user_selected = 1;
           $game_flow->save();

        //    $old_event = Event_flow::where('user_id' , "SANTOSH")->where('quarter','q3')->first();            
           $Def_event = Events_cards::where('quater_year' , "quarter_3")->where('type',$request->a)->first();            
           $event_flow = new Event_flow;
           $event_flow->user_id ='SANTOSH';
           $event_flow->year ='year1';
           $event_flow->quarter ='q3';
           $event_flow->flow_id = $game_flow->id;
           $event_flow->option = $request->a;
           $event_flow->csat = $Def_event->csat;
           $event_flow->be = $Def_event->be;
           $event_flow->esat = $Def_event->esat;
           $event_flow->ce = $Def_event->ce;
           $event_flow->sales_impact_q3 = $Def_event->sales_impact_q3;
           $event_flow->sales_impact_q4 = $Def_event->sales_impact_q4;
           $event_flow->ga_val = $Def_event->ga_val;
           $event_flow->gna_box_q3 = $Def_event->gna_box_q3;
           $event_flow->gna_box_q4 = $Def_event->gna_box_q4;
           $event_flow->ru_box_q3 = $Def_event->ru_box_q3;
           $event_flow->ru_box_q4 = $Def_event->ru_box_q4;
           $event_flow->cash = $Def_event->cash;
           $event_flow->save();

           $myevent = [''];

           if(($request->a == 'B') || ($request->a == 'C')){          
            for($num = 0; $num < 2; $num++){
                if($num == 0){
                    $sale_rec = new Salesrec;
                    $sale_rec->user_id ='SANTOSH';
                    $sale_rec->year ='year1';
                    $sale_rec->type ='event_impact_q3';
                    $sale_rec->flow_id = $game_flow->id;
                    $sale_rec->quarter ='q3';

                    $sale_impact_q3 = Salesrec::where('user_id', 'SANTOSH')->where('type', 'event_impact_q2')->where('quarter', 'q3')->sum('event_impact');
                    if($sale_impact_q3 != '0') {$impact_q3 = $sale_impact_q3;
                    }else{$impact_q3 = 0;}
                    $sale_rec->event_impact = $impact_q3 + $Def_event->sales_impact_q3;

                    $sale_strategy_q3 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q3')->sum('stratery_impact');
                    if($sale_strategy_q3 != '0') {$abc_q3 = $sale_strategy_q3;
                    }else{$abc_q3 = NULL;}
                    $sale_rec->stratery_impact = $abc_q3;
                    $sale_rec->save();
                    $q3event_impact = $impact_q3 + $Def_event->sales_impact_q3; 
                }
                if($num == 1){$sale_rec = new Salesrec;
                    $sale_rec->user_id ='SANTOSH';
                    $sale_rec->year ='year1';
                    $sale_rec->type ='event_impact_q3';
                    $sale_rec->flow_id = $game_flow->id;
                    $sale_rec->quarter ='q4';

                    $sale_impact_q4 = Salesrec::where('user_id', 'SANTOSH')->where('type', 'event_impact_q2')->where('quarter', 'q4')->sum('event_impact');
                    if($sale_impact_q4 != '0') {$impact_q4 = $sale_impact_q4;
                    }else{$impact_q4 = 0;}
                    $sale_rec->event_impact = $impact_q4 + $Def_event->sales_impact_q4;

                    $sale_strategy_q4 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q4')->sum('stratery_impact');
                    if($sale_strategy_q4 != '0') {$abc_q4 = $sale_strategy_q4;
                    }else{$abc_q4 = NULL;}
                    $sale_rec->stratery_impact = $abc_q4;
                    $sale_rec->save();
                    $q4event_impact = $impact_q4 + $Def_event->sales_impact_q4; 
                }
            }
            $myevent = ['q3event_impact'=>$q3event_impact,'q4event_impact'=>$q4event_impact];
        }

           $response = ["message" => "Event Card Added successfully in R3",'game_flow'=> $game_flow,'event_flow'=> $event_flow,'myevent'=>$myevent];
           return response($response,"200");
       }
       catch(Exception $e){
           return response('insert')->with('failed',"operation failed");
       }
   }

   public function selectOpt_update_y1q3(Request $request){
            // dd($request->all());
    try{
        $sales_latesh = '';
        if($request->div_id == 'event_card_1_Y1Q3'){
            // dd($request->all());
            // $employees = (int) $request->employee + (int) $request->ee;
            // $brands = (int) $request->brand + (int) $request->be;
            $employees = (int) $request->employee;
            $brands = (int) $request->brand;

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer_,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $brands,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'rent_utility'=>$request->RU]);
            // 'profit_loss'=>"G_A",'invest_amount'=>$request->GA,

            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $brands,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'rent_utility'=>$request->RU]);           
                // 'profit_loss'=>"G_A",'invest_amount'=>$request->GA,
            }
        }
        elseif($request->div_id == 'event_card_2_Y1Q3'){
            // dd($request->all());

            // $employees = (int) $request->employee + (int) $request->ee;
            // $brands = (int) $request->brand + (int) $request->be;
            $employees = (int) $request->employee ;
            $brands = (int) $request->brand;

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer_,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $brands,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'rent_utility'=>$request->RU]);
            // 'profit_loss'=>"G_A",'invest_amount'=>$request->GA,
            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $brands,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'profit_loss'=>"G_A",'invest_amount'=>$request->GA,'rent_utility'=>$request->RU]);           
            }
            if(isset($request->sales) && $request->sales != ''){
                // $sales = Gameflow::where('card_name', '=', $request->div_id)->limit(1)->update( ['total_sales' => $request->sales]);
                $sales_latesh = Gameflow::where('card_name', '=', $request->div_id)->first();
            }
        }
        elseif($request->div_id == 'event_card_3_Y1Q3'){
            // dd($request->all());

            $customer = (int) $request->customer_ + (int) $request->cs;
            $brands = (int) $request->brand + (int) $request->be;

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer,'col_effi' => $request->collection,'emp_engagement' => $request->employee,'brand_val' => $request->brand,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);

            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $request->employee,'brand_val' => $request->brand,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);           
            }
 
            if(isset($request->sales) && $request->sales != ''){
                // $sales = Gameflow::where('card_name', '=', $request->div_id)->limit(1)->update( ['total_sales' => $request->sales]);
                $sales_latesh = Gameflow::where('card_name', '=', $request->div_id)->first();
            } 

        }
        
        $event_selected  = DB::table('gameflows')->where('card_name', '=', $request->div_id)->where('user_selected', '=', 1)->first();  
        
        $matrix_last = Matrix::where('user_id','SANTOSH')->where('quarter', 'q2')->orderBy('id','desc')->first();
        $matrix = new Matrix;
        $matrix->user_id ='SANTOSH';
        $matrix->year ='Year1';
        $matrix->quarter ='q3';
        $matrix->flow_id = $event_selected->id;
        $matrix->c_sat = $event_selected->matrix_value;
        $matrix->brand_equity = $event_selected->brand_val;;
        $matrix->employee = $event_selected->emp_engagement;;
        $matrix->col_efficient = $event_selected->col_effi;;
        $matrix->save();

        $response = ["message" => "Event Card matrix Calculated for Y1 Q3 successfully",'card_event'=> $card_event,'event_selected'=>$event_selected,'sales_latesh'=>$sales_latesh];
        return response($response,"200");
    }
    catch(Exception $e){
        return response('insert')->with('failed',"operation failed");
    }
   }

   public function event_Y1Q3(Request $request){
      // dd($request->all());
    $abc = Gameflow::where('user_id','SANTOSH')->where('card_name', $request->type)->orderBy('id', 'desc')->first();
    if(is_null($abc->invest_amount)){
    $amt_deduct   = DB::table('gameflows')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
    $amt = $amt_deduct->total_coin + (-(int) $request->g_a);

    $sales_cos = Gameflow::where('card_name', $request->type)->limit(1)->update( ['total_coin'=>$amt,'profit_loss'=>'G_A','invest_amount' => $request->g_a]);
    // ,'total_sales' => $request->sale

    $balance_sheet = DB::table('balance_sheet')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
    $bal_sheet = new Balancesheet;
    $bal_sheet->flow_id = $abc->id;
    $bal_sheet->user_id ='SANTOSH';
    $bal_sheet->year ='Year1';
    $bal_sheet->quarter ='q3';
    $bal_sheet->cash = $amt ;
    $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
    $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
    $bal_sheet->acc_payable = $balance_sheet->acc_payable;
    $bal_sheet->assets = $balance_sheet->assets;    
    $bal_sheet->save();

    $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
        $proift_loss = new ProfitLoss;
        $proift_loss->user_id = 'SANTOSH';
        $proift_loss->year ='Year1';
        $proift_loss->quarter ='q3';
        $proift_loss->flow_id = $abc->id;
        $proift_loss->sales = $profitAndLoss->sales;
        $proift_loss->discount = $profitAndLoss->discount;
        $proift_loss->cos = $profitAndLoss->cos;
        $proift_loss->resources = $profitAndLoss->resources;
        $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
        $proift_loss->g_n_a = $profitAndLoss->g_n_a + (int)$request->g_a;
        $proift_loss->it = $profitAndLoss->it;
        $proift_loss->customer_service = $profitAndLoss->customer_service;                
        $proift_loss->save();
    }
    $sales =Gameflow::where('card_name', $request->type)->first();
    $response = ["message" => "Event 3 Quater 3 Successfully", "sales"=>$sales];
    return response($response,"200");
    }


}