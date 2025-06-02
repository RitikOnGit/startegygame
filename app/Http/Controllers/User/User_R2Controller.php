<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Card;
use App\Models\Events_cards;
use App\Models\Gameflow;
use App\Models\Matrix;
use App\Models\Event_flow;
use App\Models\Cosrec;
use App\Models\Balancesheet;
use App\Models\Salesrec;
use App\Models\ProfitLoss;
use App\Models\Discount_quaterly;
use App\Models\account_receivable;

use Carbon\Carbon;

use Illuminate\Support\Facades\Facade;
use Validator;
use DB;

class User_R2Controller extends Controller
{
     public function round_two(Request $request)
    {
        $strategy_selected  = Gameflow::where('card_type', '=', 'strategy')->where('user_selected', '=', 1)->get();
        $product          = Card::where('card_type', '=', 'product')->get();
        $event_card  = DB::table('cards')->where('card_type', '=', 'event_card')->get();
        $event_card_selected  = DB::table('gameflows')->where('card_type', '=', 'event_card')->where('user_selected', '=', 1)->first();
        $product_launch_val = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();
        $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
       
        $prod_flag = '';
            if(isset($product_launch_val) && $product_launch_val != ''){
                $multi_flags = $product_launch_val->multi_flag;            
                $multi_flagss = json_decode($multi_flags);        
                $prod_flag = (array) $multi_flagss;
            }
        $cal_ma      = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
        $cal_ga      = DB::table('gameflows')->where('profit_loss', 'G_A')->sum('invest_amount');
        $assets_total      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
        $assets = (int) $assets_total +(int) 30;

        $IT_amt      = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'IT')->sum('invest_amount');
        $CUSTOM_amt  = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'CUSTOM')->sum('invest_amount'); 
        $matrix_cal  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'matrix') ->orderBy('id', 'desc')->limit(1)->first();
        $matrix_all  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();     
        $quater_2    =  Card::where('card_name', '=', 'customer_money')->first();
        $account_receivable    =  Card::where('card_name', '=', 'account_receivable')->first();
        $acc_receivable    =  Gameflow::where('card_type', '=', 'add_coin_q1')->first();

        // dd($acc_receivable);
        $round2 = 'r2';
        // $posts = Gameflow::whereDate('created_at', Carbon::today())->get();
        $Events_cards_1  = Events_cards::where('quater_year',"quarter_1")->get();

        return view('Game/nextboard',['matrix_all'=> $matrix_all,'round2'=> $round2,'product_launch_val'=>$product_launch_val,'matrix_cal'=>$matrix_cal,
        'cal_ga'=>$cal_ga,'cal_ma'=>$cal_ma,'assets'=>$assets,'IT_amt'=>$IT_amt,'CUSTOM_amt'=>$CUSTOM_amt,'event_card'=>$event_card,
        'event_card_selected'=>$event_card_selected,'prod_flag'=>$prod_flag,'product'=>$product,'amt_deduct'=>$amt_deduct,'strategy_selected'=>$strategy_selected,'quater_2'=>$quater_2,'account_receivable'=>$account_receivable,'acc_receivable'=>$acc_receivable,'Events_cards_1'=>$Events_cards_1]);
    }

    public function select_Opt(Request $request){
        // dd($request->all());
        try{
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();

            $game_flow = new Gameflow;
            $game_flow->user_id ='SANTOSH';
            $game_flow->card_id = $request->a;
            $game_flow->card_type = 'event_card';
            $game_flow->card_name = $request->div_id;
            $game_flow->selected = $request->a;
            $game_flow->card_image = $request->image;
            $game_flow->total_coin = $amt_deduct->total_coin;

            $game_flow->user_selected = 1;
            $game_flow->save();
      
            $Def_event = Events_cards::where('quater_year' , "quarter_1")->where('type',$request->a)->first();            
            $event_flow = new Event_flow;
            $event_flow->user_id ='SANTOSH';
            $event_flow->year ='year1';
            $event_flow->quarter ='q1';
            $event_flow->flow_id = $game_flow->id;
            $event_flow->option = $request->a;
            $event_flow->csat = $Def_event->csat;
            $event_flow->be = $Def_event->be;
            $event_flow->esat = $Def_event->esat;
            $event_flow->ce = $Def_event->ce;

            $event_flow->save();

            $matrix_row = DB::table('gameflows')->where('user_id', 'SANTOSH')->where('card_type', '=', 'matrix')->orderBy('id', 'desc')->limit(1)->first();
            $matrix = new Matrix;

            $matrix->user_id ='SANTOSH';
            $matrix->year ='Year1';
            $matrix->quarter ='q1';
            $matrix->flow_id = $game_flow->id;
            $matrix->c_sat = (int)$matrix_row->matrix_value + (int)$Def_event->csat;
            $matrix->brand_equity = (int)$matrix_row->brand_val + (int)$Def_event->be;
            $matrix->employee = (int)$matrix_row->emp_engagement + (int)$Def_event->esat;
            $matrix->col_efficient = (int)$matrix_row->col_effi + (int)$Def_event->ce;

            $matrix->save();
          
            $response = ["message" => "Event Card Added successfully",'game_flow'=> $game_flow];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");  }
    }

    public function update_product_flag(Request $request){
        // dd($request->all());
        try{
            if($request->type == 'product_launch'){$q = 'q1';}else if($request->type == 'product_launch_2'){$q = 'q2';}else if($request->type == 'product_launch_3'){$q = 'q3';}else if($request->type == 'product_launch_4'){$q = 'q4';}

            if($request->record_type == 'cos'){
            $total = (int) $request['total'];
            $game_flow = Gameflow::where('card_type', '=', $request->type)->limit(1)->first();
        if(isset($game_flow->pf_cal)){}else{
            $product_flag = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['pf_cal' => $total]);
            $cos_strategy = Cosrec::where('user_id','SANTOSH')->where('quarter', $q)->get();
            $cos_record = new Cosrec;
            $cos_record->user_id ='SANTOSH';
            $cos_record->flow_id = $game_flow->id;
            $cos_record->year ='year1';
            $cos_record->quarter = $q;
            $cos_record->quarterly_cos = $total;
            
            if($cos_strategy->isEmpty()) {}else {
            if($cos_strategy['0']->stratery_impact != ''){
                $cos_strategysum = Cosrec::where('quarter', $q)->where('user_id','SANTOSH')->sum('stratery_impact');
                $cos_record->stratery_impact = (int)$cos_strategysum;
                // dd($cos_strategysum);
            } 
            else {}     
            }
            $cos_record->save();
        }

            }
            if($request->record_type == 'ts'){
                $total = (int) $request['total'];
                $game_flow = Gameflow::where('card_type', '=', $request->type)->limit(1)->first(); 
                $sale_strategy = Salesrec::where('quarter', $q)->where('card_name', '!=' , '')->get();
            if(isset($game_flow->compute_trade)){}else{
                $product_flag = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['compute_trade' => $total]);
                // dd($product_flag);
                $sale_rec = new Salesrec;
                $sale_rec->user_id ='SANTOSH';
                $sale_rec->year ='year1';
                $sale_rec->quarter = $q;
                $sale_rec->flow_id = $game_flow->id;
                $sale_rec->trade_spend = $total;
                if($sale_strategy->isEmpty()) {}
                else {
                if($sale_strategy['0']->stratery_impact != ''){
                    $sales_strategysum = Salesrec::where('quarter', $q)->where('card_name', '!=' , '')->sum('stratery_impact');
                    $sale_rec->stratery_impact = (int)$sales_strategysum;
                }   
                };
                $sale_rec->save();
            }
            }
            if($request->record_type == 'sales'){
                // dd($request->all());
                $total = (int) $request['total'];
                $game_flow = Gameflow::where('user_id','SANTOSH')->where('card_type', '=', $request->type)->limit(1)->first(); 
                $sale_strategy = Salesrec::where('quarter', $q)->where('card_name', '!=' , '')->get();
                $previous_trade = Salesrec::where('trade_spend', '!=' ,'')->where('quarter', $q)->first();
            if(isset($game_flow->compute_sales)){}else{
                $product_flag = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['compute_sales' => $total]);
                $sale_rec = new Salesrec;
                $sale_rec->user_id ='SANTOSH';
                $sale_rec->year ='year1';
                $sale_rec->quarter = $q;
                $sale_rec->flow_id = $game_flow->id;
                $sale_rec->sales = $total;
                $sale_rec->trade_spend = $previous_trade->trade_spend;
                $b = 0;
                if($sale_strategy->isEmpty()) {}
                else {
                if($sale_strategy['0']->stratery_impact != ''){
                    $sales_strategysum = Salesrec::where('quarter', $q)->where('card_name', '!=' , '')->sum('stratery_impact');
                    $sale_rec->stratery_impact = (int)$sales_strategysum; $b = (int)$sales_strategysum;
                }};
                $eventflow = Event_flow::where('user_id','SANTOSH')->where('quarter', $q)->first();
                // dd($eventflow);
                if($q == 'q2'){
                    $c = $eventflow->sales_impact_q2; 
                    $sale_rec->event_impact = $c;
                }else if($q == 'q3'){
                $previous_event = Event_flow::where('user_id','SANTOSH')->where('quarter', 'q2')->first();
                if(isset($previous_event->sales_impact_q3) && $previous_event->sales_impact_q3 != ''){
                    $c = $previous_event->sales_impact_q3 + $eventflow->sales_impact_q3; 
                }else{
                    $c = $eventflow->sales_impact_q3; 
                }
                    $sale_rec->event_impact = $c;
                }
                else if($q == 'q4'){
                    $q4_event = Salesrec::where('user_id','SANTOSH')->where('quarter', 'q4')->where('event_impact', '!=' ,'')->orderby('id','desc')->first();
                    if(isset($q4_event->event_impact) && $q4_event->event_impact != ''){
                        $c = $q4_event->event_impact; 
                    }else{
                        $c = $eventflow->sales_impact_q3; 
                    }
                        $sale_rec->event_impact = $c;
                    }
                else{$c = 0;}

                $abc = $total + $b + (int)$previous_trade->trade_spend + (int)$c;
                $sale_rec->total_quarterly_sales = $abc;

                $record_sale = Salesrec::where('quarter', $q)->orderBy('id', 'desc')->first();
                if(isset($record_sale) && $record_sale->sales == ''){
                $sale_rec->save(); }

                $profitAndLoss = DB::table('profit_n_loss')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
                if(isset($profitAndLoss) && $profitAndLoss->sales == ''){
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter = $q;
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $sale_rec->total_quarterly_sales;                  
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service; 
                $proift_loss->save();
            }else{
            if(($q == 'q2') || ($q == 'q3') || ($q == 'q4')){
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter = $q;
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->discount = $profitAndLoss->discount;           
                $proift_loss->cos = $profitAndLoss->cos;           
                $proift_loss->resources = $profitAndLoss->resources;    
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;
                $proift_loss->sales = $profitAndLoss->sales + $sale_rec->total_quarterly_sales;
                $proift_loss->save();
                }else{
                // $proift_loss->sales = $sale_rec->total_quarterly_sales;
                }    
        }

        }
            }
            if($request->record_type == 'disc'){
                $total = (int) $request['total'];
                $game_flow = Gameflow::where('user_id','SANTOSH')->where('card_type', '=', $request->type)->limit(1)->first();
            if(isset($game_flow->compute_discount)){}else{
                $product_flag = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['compute_discount' => $total]);

                $discount = new Discount_quaterly;
                $discount->user_id = 'SANTOSH';
                $discount->year ='Year1';
                $discount->quarter = $q;
                $discount->flow_id = $game_flow->id;
                $discount->discount = $total;
                $discount->total = $total;
                $discount->save();

                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                if(isset($profitAndLoss) && $profitAndLoss->discount == ''){
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter = $q;
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->discount = $total;                
                $proift_loss->save();
                
            }else{
                if(($q == 'q2') || ($q == 'q3') || ($q == 'q4')){
                    $proift_loss = new ProfitLoss;
                    $proift_loss->user_id = 'SANTOSH';
                    $proift_loss->year ='Year1';
                    $proift_loss->quarter = $q;
                    $proift_loss->flow_id = $game_flow->id;
                    $proift_loss->sales = $profitAndLoss->sales;
                    $proift_loss->discount = $profitAndLoss->discount + $total;           
                    $proift_loss->cos = $profitAndLoss->cos;           
                    $proift_loss->resources = $profitAndLoss->resources;    
                    $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                    $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                    $proift_loss->it = $profitAndLoss->it;
                    $proift_loss->customer_service = $profitAndLoss->customer_service;
                    $proift_loss->save();
                    }else{
                    // $proift_loss->sales = ;
                    }    
            }
        }
            }
            $response = ["message" => "Product Calculated successfully"];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function selectOpt_update(Request $request){
        // dd($request->all());
        try{
            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $request->employee,'brand_val' => $request->brand,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);
    
            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $request->employee,'brand_val' => $request->brand,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]); 
            }
            
            //// quarter2  ////
            if($request->div_id == 'event_card_1_Y1Q2' || $request->div_id == 'event_card_2_Y1Q2' || $request->div_id == 'event_card_3_Y1Q2'){

            $game_flow = Gameflow::where('user_id','SANTOSH')->where('card_name', '=', $request->div_id)->first();
            $matrix_last = Matrix::where('user_id','SANTOSH')->where('quarter', 'q1')->orderBy('id','desc')->first();
                $matrix = new Matrix;
                $matrix->user_id ='SANTOSH';
                $matrix->year ='Year1';
                $matrix->quarter ='q2';
                $matrix->flow_id = $game_flow->id;
                $matrix->c_sat = (int)$matrix_last->c_sat + (int)$request->cs;
                $matrix->brand_equity = (int)$matrix_last->brand_equity + (int)$request->be;
                $matrix->employee = (int)$matrix_last->employee + (int)$request->ee;
                $matrix->col_efficient = (int)$matrix_last->col_efficient + (int)$request->ce;
                $matrix->save();
            }


            $event_selected  = DB::table('gameflows')->where('card_type', '=', 'event_card')->where('user_selected', '=', 1)->first();

            // Y1Q2 event 2 
            $sales_latesh = '';
            if(isset($request->sales) && $request->sales != ''){
                $sales = Gameflow::where('card_name', '=', $request->div_id)->limit(1)->update( ['total_sales' => $request->sales]);
                $sales_latesh = Gameflow::where('card_name', '=', $request->div_id)->first();
            }
            

            $response = ["message" => "Event Card matrix Calculated successfully",'card_event'=> $card_event,'event_selected'=>$event_selected,'sales_latesh'=>$sales_latesh];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function add_wallet_coin(Request $request){
        // dd($request->all());
        if($request->round == 'q1'){$type_card = 'add_coin_q1';}else if($request->round == 'q2'){$type_card = 'add_coin_q2';}else if($request->round == 'q3'){$type_card = 'add_coin_q3';}else if($request->round == 'q4'){$type_card = 'add_coin_q4';}

        $get_row = Gameflow::where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
        $total_coin = floatval($get_row->total_coin) + floatval($request->cash) ;
        $receivable_acc = floatval($request->cashreceivable) - floatval($request->cash);
        // echo ($total_coin),(gettype($total_coin));
        // echo gettype($receivable_acc);

        $game_flow = new Gameflow;
        $game_flow->user_id ='SANTOSH';
        $game_flow->invest_amount = $request->cash;
        $game_flow->acc_receivable = $receivable_acc;
        $game_flow->card_type = $type_card;
        $game_flow->card_name = "cash_conversion";
        $game_flow->total_coin = $total_coin;

        $game_flow->user_selected = 1;

        $game_flow->save();

        $balance_sheet = DB::table('balance_sheet')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
        $bal_sheet = new Balancesheet;
        $bal_sheet->flow_id = $game_flow->id;
        $bal_sheet->user_id ='SANTOSH';
        $bal_sheet->year ='Year1';
        $bal_sheet->quarter = $request->round;
        $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
        $bal_sheet->acc_receivable = $game_flow->acc_receivable;
        $bal_sheet->acc_payable = $balance_sheet->acc_payable;
        $bal_sheet->assets = $balance_sheet->assets + $request->invest;
        $bal_sheet->cash = $total_coin;

        $bal_sheet->save();

        $response = ["message" => "Coin Added Successfully", "game_flow"=>$game_flow];
        return response($response,"200");
    }

        public function costotalYear1(Request $request){          
                $costotalYear1_update = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['total_cos' => $request->costotalYear1]);
                
                // // //    updates total amount in record-cos table      // // //
                $game_flow = Gameflow::where('card_type', '=', $request->type)->limit(1)->first();
                $costotal = Cosrec::where('flow_id', '=', $game_flow->id)->limit(1)->update( ['total' => $request->costotalYear1]);
                // $bal_cos = Balancesheet::where('flow_id', '=', $game_flow->id)->limit(1)->update( ['total' => $request->costotalYear1]);
                $balance_sheet = DB::table('balance_sheet')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
                     
                if(is_null($balance_sheet->acc_payable) && $balance_sheet->acc_payable == ''){
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q1';
                $bal_sheet->cash = $balance_sheet->cash;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = $request->costotalYear1;
                $bal_sheet->assets = $balance_sheet->assets + $request->invest;    
                $bal_sheet->save();
                }

                $response = ["message" => "Cos total Year  Successfully", "costotalYear1_update"=>$costotalYear1_update];
                return response($response,"200");
        }

        public function salesTotalY1(Request $request){
        //   dd($request->salesTotalY1);
            $salesTotalY1 = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['total_sales' => $request->salesTotalY1]);
            $response = ["message" => "Sales Total Successfully", "salesTotalY1"=>$salesTotalY1];
            return response($response,"200");
        }

        public function car_total_val(Request $request){
            // dd($request->all());
            if($request->type == 'product_launch'){$q = 'q1';}else if($request->type == 'product_launch_2'){$q = 'q2';}else if($request->type == 'product_launch_3'){$q = 'q3';}else if($request->type == 'product_launch_4'){$q = 'q4';}
            
            $game_flow = Gameflow::where('user_id','SANTOSH')->where('card_type', '=', $request->type)->limit(1)->first();
            if($request->type == 'product_launch'){
                $cust_money = DB::table('cards')->where('card_type', '=', 'customer_money')->first();
                $car_sub = DB::table('gameflows')->where('card_type', '=', 'add_coin_q1')->first();
                $rem_cus_money = $cust_money->card_invest - (int) $request->car_total;
            }
            elseif ($request->type == 'product_launch_2'){
                $cust_money = DB::table('gameflows')->where('user_id','SANTOSH')->where('card_type', 'product_launch')->first();
                $car_sub = DB::table('gameflows')->where('card_type', '=', 'add_coin_q2')->first();
                $rem_cus_money = $cust_money->customer_money - (int) $request->car_total;
            }
            elseif ($request->type == 'product_launch_3'){
                $cust_money = DB::table('gameflows')->where('user_id','SANTOSH')->where('card_type', 'product_launch_2')->first();
                $car_sub = DB::table('gameflows')->where('card_type', '=', 'add_coin_q3')->first();
                $rem_cus_money = $cust_money->customer_money - (int) $request->car_total;
            }
            elseif ($request->type == 'product_launch_4'){
                $cust_money = DB::table('gameflows')->where('user_id','SANTOSH')->where('card_type', 'product_launch_3')->first();
                $car_sub = DB::table('gameflows')->where('card_type', '=', 'add_coin_q4')->first();
                $rem_cus_money = $cust_money->customer_money - (int) $request->car_total;
            }
            
            $add_acc_receivable = $car_sub->acc_receivable + (int) $request->car_total;
            
            $car_total = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['car_total' => $request->car_total,'acc_receivable'=>$add_acc_receivable,'customer_money'=>$rem_cus_money]);
            $new_pro_lch_val = DB::table('gameflows')->where('card_type', '=', $request->type)->first();

            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();

            if(is_null($game_flow->car_total)){
            $bal_sheet = new Balancesheet;
            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->user_id ='SANTOSH';
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter = $q;
            $bal_sheet->cash = $balance_sheet->cash;
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $add_acc_receivable;
            $bal_sheet->acc_payable = $balance_sheet->acc_payable;
            $bal_sheet->assets = $balance_sheet->assets;    
            $bal_sheet->save();

            $account = new account_receivable;
            $account->user_id ='SANTOSH';
            $account->year ='Year1';
            $account->quarter = $q;
            $account->flow_id = $game_flow->id;
            $account->total_sales = $game_flow->total_sales;
            $account->total_discount = $game_flow->compute_discount;
            $account->net_sales = $request->car_total;
            $account->save();
            }

            $response = ["message" => "Compute Account Recievable Successfully Added", "car_total"=>$new_pro_lch_val];
            return response($response,"200");
        }
        
        public function sub_customer_money(Request $request){
            // dd($request->all());
            $acc_receivable = (int) $request->acc_recei + (int) $request->trade_spend;
            $customer_money = (int) $request->customer_money - (int) $request->trade_spend;
            $car_total = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['acc_receivable' => $acc_receivable,'customer_money'=>$customer_money]);
            // dd($car_total);

            $response = ["message" => "Compute Trade Calculation done with Acc Receivable Successfully Added", "car_total"=>$car_total];
            return response($response,"200");
        }
        public function pay_res(Request $request){

            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $new_amt = $amt_deduct->total_coin - (int) $request->acc_pay;
            // dd($new_amt);
            $game_flow = new Gameflow;
            $game_flow->total_coin = $new_amt;
            $game_flow->invest_amount = $request->acc_pay;
            $game_flow->user_id = 'SANTOSH';
            
            if($request->type == 'product_launch_4'){
                
                $value_total = DB::table('gameflows')->where('user_id' ,'SANTOSH')->where('card_type', '=', "product_launch_4")->first();
                if(is_null($value_total->final_cos_val)){
                    $game_flow->card_type = 'pay_res_q4';
                    $game_flow->card_name = 'pay_res_q4';
                    $game_flow->save();

                $car_total = Gameflow::where('card_type', '=', "product_launch_4")->limit(1)->update( ['total_cos' => 0,'final_cos_val'=>$request->acc_pay]);

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q4';
                $bal_sheet->cash = $balance_sheet->cash - (int)$request->acc_pay;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = 0;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q4';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos + $request->acc_pay;
                $proift_loss->resources = $profitAndLoss->resources;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();
            }

            }
            elseif($request->type == 'product_launch_3'){
                $value_total = DB::table('gameflows')->where('user_id' ,'SANTOSH')->where('card_type', '=', "product_launch_3")->first();
                if(is_null($value_total->final_cos_val)){
                    $game_flow->card_type = 'pay_res_q3';
                    $game_flow->card_name = 'pay_res_q3';
                    $game_flow->save();

                $car_total = Gameflow::where('card_type', '=', "product_launch_3")->limit(1)->update( ['total_cos' => 0,'final_cos_val'=>$request->acc_pay]);

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q3';
                $bal_sheet->cash = $balance_sheet->cash - (int)$request->acc_pay;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = 0;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q3';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos + $request->acc_pay;
                $proift_loss->resources = $profitAndLoss->resources;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();
            }
        }
            elseif($request->type == 'product_launch_2'){
                $value_total = DB::table('gameflows')->where('user_id' ,'SANTOSH')->where('card_type', '=', "product_launch_2")->first();
                if(is_null($value_total->final_cos_val)){
                    $game_flow->card_type = 'pay_res_q2';
                    $game_flow->card_name = 'pay_res_q2';
                    $game_flow->save();
                $car_total = Gameflow::where('card_type', '=', "product_launch_2")->limit(1)->update( ['total_cos' => 0,'final_cos_val'=>$request->acc_pay]);

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q2';
                $bal_sheet->cash = $balance_sheet->cash - (int)$request->acc_pay;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = 0;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q2';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos + $request->acc_pay;
                $proift_loss->resources = $profitAndLoss->resources;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();
                }
            }
            else{
                $value_total = DB::table('gameflows')->where('user_id' ,'SANTOSH')->where('card_type', '=', "product_launch")->first();
                if(is_null($value_total->final_cos_val)){
                    $game_flow->card_type = 'pay_res_q1';
                    $game_flow->card_name = 'pay_res_q1';
                    $game_flow->save();
                // dd($value_total->final_cos_val);
                $car_total = Gameflow::where('card_type', '=', "product_launch")->limit(1)->update( ['total_cos' => 0,'final_cos_val'=>$request->acc_pay]);

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q1';
                $bal_sheet->cash = $balance_sheet->cash - (int)$request->acc_pay;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = 0;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q1';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $request->acc_pay;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();
               
                }
            }
            $response = ["message" => "Compute Trade Calculation done with Acc Receivable Successfully Added", "game_flow"=>$game_flow];
            return response($response,"200");
        }

        public function payresources(Request $request){
            // dd($request->all());
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $new_amt = $amt_deduct->total_coin - (int) $request->resouce;
            // dd($new_amt);
            $game_flow = new Gameflow;
            $game_flow->total_coin = $new_amt;
            $game_flow->invest_amount = $request->resouce;
            $game_flow->user_id = 'SANTOSH';
            

            if($request->type == "resources_y1q4"){
                $resources = Gameflow::where('card_type', '=', "product_launch_4")->limit(1)->update( ['resources' => $request->resouce]);
                $game_flow->card_type = 'pay_resouce_q4';
                $game_flow->card_name = 'pay_resouce_q4';
                $game_flow->save();

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q4';
                $bal_sheet->cash = $new_amt;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = $balance_sheet->acc_payable;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q4';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos;
                $proift_loss->resources = $profitAndLoss->resources + (int)$request->resouce;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();

            }
            elseif($request->type == "resources_y1q3"){
                $resources = Gameflow::where('card_type', '=', "product_launch_3")->limit(1)->update( ['resources' => $request->resouce]);
                $game_flow->card_type = 'pay_resouce_q3';
                $game_flow->card_name = 'pay_resouce_q3';
                $game_flow->save();

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q3';
                $bal_sheet->cash = $new_amt;
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
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos;
                $proift_loss->resources = $profitAndLoss->resources + (int)$request->resouce;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();

            }
            elseif($request->type == "resources"){
                $resources = Gameflow::where('card_type', '=', "product_launch_2")->limit(1)->update( ['resources' => $request->resouce]);
                $game_flow->card_type = 'pay_resouce_q2';
                $game_flow->card_name = 'pay_resouce_q2';
                $game_flow->save();

                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->flow_id = $game_flow->id;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='q2';
                $bal_sheet->cash = $new_amt;
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->acc_payable = $balance_sheet->acc_payable;
                $bal_sheet->assets = $balance_sheet->assets;    
                $bal_sheet->save();
    
                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                $proift_loss = new ProfitLoss;
                $proift_loss->user_id = 'SANTOSH';
                $proift_loss->year ='Year1';
                $proift_loss->quarter ='q2';
                $proift_loss->flow_id = $game_flow->id;
                $proift_loss->sales = $profitAndLoss->sales;
                $proift_loss->discount = $profitAndLoss->discount;                
                $proift_loss->cos = $profitAndLoss->cos;
                $proift_loss->resources = $profitAndLoss->resources + (int)$request->resouce;
                $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proift_loss->g_n_a = $profitAndLoss->g_n_a;
                $proift_loss->it = $profitAndLoss->it;
                $proift_loss->customer_service = $profitAndLoss->customer_service;                
                $proift_loss->save();

            }
            else{
                $resources = Gameflow::where('card_type', '=', "product_launch")->limit(1)->update( ['resources' => $request->resouce]);
                $game_flow->card_type = 'pay_resouce';
                $game_flow->card_name = 'pay_resouce';
                $game_flow->save();

            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
            $bal_sheet = new Balancesheet;
            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->user_id ='SANTOSH';
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter ='q1';
            $bal_sheet->cash = $new_amt;
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
            $bal_sheet->acc_payable = $balance_sheet->acc_payable;
            $bal_sheet->assets = $balance_sheet->assets;    
            $bal_sheet->save();

            $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
            $proift_loss = new ProfitLoss;
            $proift_loss->user_id = 'SANTOSH';
            $proift_loss->year ='Year1';
            $proift_loss->quarter ='q1';
            $proift_loss->flow_id = $game_flow->id;
            $proift_loss->sales = $profitAndLoss->sales;
            $proift_loss->discount = $profitAndLoss->discount;                
            $proift_loss->cos = $profitAndLoss->cos;
            $proift_loss->resources = (int)$request->resouce;
            $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
            $proift_loss->g_n_a = $profitAndLoss->g_n_a;
            $proift_loss->it = $profitAndLoss->it;
            $proift_loss->customer_service = $profitAndLoss->customer_service;                
            $proift_loss->save();

            }
            
            $response = ["message" => "Resources Successfully Added", "resources"=>$resources,"game_flow"=>$game_flow];
            return response($response,"200");
        }
        
}