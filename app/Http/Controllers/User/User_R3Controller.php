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
use App\Models\{Event_flow,Cosrec,Balancesheet,Salesrec,ProfitLoss,Discount_quaterly,account_receivable};

use Illuminate\Support\Facades\Facade;
use Validator;
use DB;


class User_R3Controller extends Controller
{
     public function round_three(Request $request)
    {
        $strategy_selected  = Gameflow::where('card_type', '=', 'strategy')->where('user_selected', '=', 1)->get();
        $product          = Card::where('card_type', '=', 'product')->get();
        $event_card_q2  = DB::table('cards')->where('card_type', '=', 'event_card_q2')->get();
        $event_card_selected  = DB::table('gameflows')->where('card_type', '=', 'event_card_q2')->where('user_selected', '=', 1)->first();
        $product_launch_val_2 = DB::table('gameflows')->where('card_type', '=', 'product_launch_2')->first();
        $product_launch_val = DB::table('gameflows')->where('card_type', '=', 'product_launch')->first();
        $amt_deduct   = DB::table('gameflows')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
       
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
        $matrix_all_2  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q2') ->orderBy('id', 'desc')->limit(1)->first();     

        $round3 = 'r3';

        $sales    = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('card_name','event_card_3_Y1Q2')->orWhere('card_name', 'event_card_2_Y1Q2')->sum('total_sales');
        $dis      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->sum('compute_discount');
        $cos      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->sum('final_cos_val');
        $resources      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->sum('resources');

        // print_r($sales);
        $Events_cards_2  = Events_cards::where('quater_year',"quarter_2")->get();
        $event_impactq2  = Salesrec::where('user_id','SANTOSH')->where('type','event_impact_q2')->where('quarter','q2')->sum('event_impact');
        $event_impactq3  = Salesrec::where('user_id','SANTOSH')->where('quarter','q3')->sum('event_impact');
        $event_impactq4  = Salesrec::where('user_id','SANTOSH')->where('quarter','q4')->sum('event_impact');

        $event_cosq3  = Event_flow::where('user_id','SANTOSH')->where('quarter','q2')->where('option','A')->first();

        $acc_receivable_q2  =  Gameflow::where('user_id','SANTOSH')->where('card_type', '=', 'add_coin_q2')->first();

        return view('Game/y1q2',['matrix_all'=> $matrix_all,'matrix_all_2'=> $matrix_all_2,'round3'=> $round3,'product_launch_val_2'=>$product_launch_val_2,'matrix_cal'=>$matrix_cal,
        'cal_ga'=>$cal_ga,'cal_ma'=>$cal_ma,'assets'=>$assets,'IT_amt'=>$IT_amt,'CUSTOM_amt'=>$CUSTOM_amt,'event_card_q2'=>$event_card_q2,
        'event_card_selected'=>$event_card_selected,'prod_flag'=>$prod_flag,'product'=>$product,'amt_deduct'=>$amt_deduct,'strategy_selected'=>$strategy_selected,'product_launch_val'=>$product_launch_val,'sales'=>$sales,'dis'=>$dis,'cos'=>$cos,'resources'=>$resources,'Events_cards_2'=>$Events_cards_2,'event_impactq2'=>$event_impactq2,'event_impactq3'=>$event_impactq3,'event_impactq4'=>$event_impactq4,'event_cosq3'=>$event_cosq3,'acc_receivable_q2'=>$acc_receivable_q2]);
    }

    public function q2selectOpt(Request $request){
        //  dd($request->all());
         try{
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $game_flow = new Gameflow;
            $game_flow->user_id ='SANTOSH';
            $game_flow->card_id = $request->a;
            $game_flow->card_type = 'event_card_q2';
            $game_flow->card_name = $request->div_id;
            $game_flow->selected = $request->a;
            $game_flow->card_image = $request->image;
            $game_flow->total_coin = $amt_deduct->total_coin;
            $game_flow->user_selected = 1;
            $game_flow->save(); 

            $Def_event = Events_cards::where('quater_year' , "quarter_2")->where('type',$request->a)->first();            
            $event_flow = new Event_flow;
            $event_flow->user_id ='SANTOSH';
            $event_flow->year ='year1';
            $event_flow->quarter ='q2';
            $event_flow->flow_id = $game_flow->id;
            $event_flow->option = $request->a;
            $event_flow->csat = $Def_event->csat;
            $event_flow->be = $Def_event->be;
            $event_flow->esat = $Def_event->esat;
            $event_flow->ce = $Def_event->ce;
            $event_flow->cos_q3 = $Def_event->cos_q3;
            $event_flow->sales_impact_q2 = $Def_event->sales_impact_q2;
            $event_flow->sales_impact_q3 = $Def_event->sales_impact_q3;
            $event_flow->sales_impact_q4 = $Def_event->sales_impact_q4;
            $event_flow->m_a_val = $Def_event->m_a_val;
            $event_flow->cash = $Def_event->cash;
            $event_flow->save();

            if($request->a == 'A'){
                $cos_impact = Cosrec::where('user_id', 'SANTOSH')->where('quarter', 'q2')->get();
                $cos_record = new Cosrec;
                $cos_record->user_id ='SANTOSH';
                $cos_record->flow_id = $game_flow->id;
                $cos_record->year ='year1';
                $cos_record->quarter ='q3';
                $cos_record->type ='event_impact_q2';
                $cos_record->event_impact = $Def_event->cos_q3;                
                if($cos_impact->isEmpty()) {
                }else {
                if($cos_impact['0']->stratery_impact != ''){
                    $cos_strategysum = Cosrec::where('user_id', 'SANTOSH')->where('quarter', 'q3')->sum('stratery_impact');
                    $cos_record->stratery_impact = (int)$cos_strategysum;
                } else {}     
                }
                $cos_record->save();
            }
            elseif($request->a == 'B'){
          
                for($num = 0; $num < 3; $num++){
                    if($num == 0){
                        $sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q2';
                        $sale_rec->event_impact = $Def_event->sales_impact_q2;
                        $sale_strategy_q2 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q2')->sum('stratery_impact');
                        if($sale_strategy_q2 != '0') {$abc_q2 = $sale_strategy_q2;
                        }else{$abc_q2 = NULL;}
                        $sale_rec->stratery_impact = $abc_q2;
                        $sale_rec->save();
                    }
                    if($num == 1){$sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q3';
                        $sale_rec->event_impact = $Def_event->sales_impact_q3;
                        $sale_strategy_q3 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q3')->sum('stratery_impact');
                        if($sale_strategy_q3 != '0') {$abc_q3 = $sale_strategy_q3;
                        }else{$abc_q3 = NULL;}
                        $sale_rec->stratery_impact = $abc_q3;
                        $sale_rec->save();
                    }
                    if($num == 2){
                        $sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q4';
                        $sale_rec->event_impact = $Def_event->sales_impact_q4;
                        $sale_strategy_q4 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q4')->sum('stratery_impact');
                        if($sale_strategy_q4 != '0') {$abc_q4 = $sale_strategy_q4;
                        }else{$abc_q4 = NULL;}
                        $sale_rec->stratery_impact = $abc_q4;
                        $sale_rec->save();
                    }
                }
            }
            elseif($request->a == 'C'){          
                for($num = 0; $num < 3; $num++){
                    if($num == 0){
                        $sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q2';
                        $sale_rec->event_impact = $Def_event->sales_impact_q2;
                        $sale_strategy_q2 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q2')->sum('stratery_impact');
                        if($sale_strategy_q2 != '0') {$abc_q2 = $sale_strategy_q2;
                        }else{$abc_q2 = NULL;}
                        $sale_rec->stratery_impact = $abc_q2;
                        $sale_rec->save();
                    }
                    if($num == 1){$sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q3';
                        $sale_rec->event_impact = $Def_event->sales_impact_q3;
                        $sale_strategy_q3 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q3')->sum('stratery_impact');
                        if($sale_strategy_q3 != '0') {$abc_q3 = $sale_strategy_q3;
                        }else{$abc_q3 = NULL;}
                        $sale_rec->stratery_impact = $abc_q3;
                        $sale_rec->save();
                    }
                    if($num == 2){
                        $sale_rec = new Salesrec;
                        $sale_rec->user_id ='SANTOSH';
                        $sale_rec->year ='year1';
                        $sale_rec->type ='event_impact_q2';
                        $sale_rec->flow_id = $game_flow->id;
                        $sale_rec->quarter ='q4';
                        $sale_rec->event_impact = $Def_event->sales_impact_q4;
                        $sale_strategy_q4 = Salesrec::where('user_id', 'SANTOSH')->where('card_name', '!=' , '')->where('quarter', 'q4')->sum('stratery_impact');
                        if($sale_strategy_q4 != '0') {$abc_q4 = $sale_strategy_q4;
                        }else{$abc_q4 = NULL;}
                        $sale_rec->stratery_impact = $abc_q4;
                        $sale_rec->save();
                    }
                }
            }

            $response = ["message" => "Event Card Added successfully in R3",'game_flow'=> $game_flow,'eventq2'=>$Def_event->sales_impact_q2,'eventq3'=>$Def_event->sales_impact_q3,'eventq4'=>$Def_event->sales_impact_q4,'eventcos'=>$Def_event->cos_q3];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function costotalYear1Q2(Request $request){ 
        //  dd($request->all());
         if($request->type == 'product_launch'){$q = 'q1';}else if($request->type == 'product_launch_2'){$q = 'q2';}else if($request->type == 'product_launch_3'){$q = 'q3';}else if($request->type == 'product_launch_4'){$q = 'q4';}

        $costotalYear1Q2_update = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['total_cos' => $request->costotalYear1Q2]);

        $game_flow = Gameflow::where('user_id','SANTOSH')->where('card_type', '=', $request->type)->limit(1)->first();
        $costotal = Cosrec::where('flow_id', '=', $game_flow->id)->limit(1)->update( ['total' => $request->costotalYear1Q2]);

        $balance_sheet = DB::table('balance_sheet')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
                     
        if(isset($balance_sheet->acc_payable) && $balance_sheet->acc_payable == 0){
        $bal_sheet = new Balancesheet;
        $bal_sheet->flow_id = $game_flow->id;
        $bal_sheet->user_id ='SANTOSH';
        $bal_sheet->year ='Year1';
        $bal_sheet->quarter = $q;
        $bal_sheet->cash = $balance_sheet->cash;
        $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
        $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
        $bal_sheet->acc_payable = $request->costotalYear1Q2;
        $bal_sheet->assets = $balance_sheet->assets;    
        $bal_sheet->save();
        }

        $response = ["message" => "Cos total Year Quater 2 Successfully", "costotalYear1Q2_update"=>$costotalYear1Q2_update];
        return response($response,"200");
    }

    public function salesTotalY1Q2(Request $request){
        //   dd($request->all());
            $salesTotalY1Q2 = Gameflow::where('card_type', '=', $request->type)->limit(1)->update( ['total_sales' => $request->salesTotalY1Q2]);
            $response = ["message" => "Sales total Year Quater 2 Successfully", "salesTotalY1Q2"=>$salesTotalY1Q2];
            return response($response,"200");
        }

    public function event_Y1Q2(Request $request){
        //   dd($request->all());
        $abc = Gameflow::where('user_id','SANTOSH')->where('card_name', $request->type)->orderBy('id', 'desc')->first();
        if(is_null($abc->invest_amount)){
        $amt_deduct   = DB::table('gameflows')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
        $amt = (int) $amt_deduct->total_coin + (-(int) $request->m_a);

        $sales_cos = Gameflow::where('card_name', $request->type)->limit(1)->update( ['total_coin'=>$amt,'profit_loss'=>'M_A','invest_amount' => $request->m_a,'total_sales' => $request->sale]);

        $balance_sheet = DB::table('balance_sheet')->where('user_id','SANTOSH')->orderBy('id', 'desc')->first();
        $bal_sheet = new Balancesheet;
        $bal_sheet->flow_id = $abc->id;
        $bal_sheet->user_id ='SANTOSH';
        $bal_sheet->year ='Year1';
        $bal_sheet->quarter ='q2';
        $bal_sheet->cash = $amt ;
        $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
        $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
        $bal_sheet->acc_payable = $balance_sheet->acc_payable;
        $bal_sheet->assets = $balance_sheet->assets + $request->invest;    
        $bal_sheet->save();

        $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
            $proift_loss = new ProfitLoss;
            $proift_loss->user_id = 'SANTOSH';
            $proift_loss->year ='Year1';
            $proift_loss->quarter ='q2';
            $proift_loss->flow_id = $abc->id;
            $proift_loss->sales = $profitAndLoss->sales;
            $proift_loss->discount = $profitAndLoss->discount;
            $proift_loss->cos = $profitAndLoss->cos;
            $proift_loss->resources = $profitAndLoss->resources;
            $proift_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads + (int)$request->m_a;
            $proift_loss->g_n_a = $profitAndLoss->g_n_a;
            $proift_loss->it = $profitAndLoss->it;
            $proift_loss->customer_service = $profitAndLoss->customer_service;                
            $proift_loss->save();
        }
        // dd($sales_cos);
        $sales =Gameflow::where('card_name', $request->type)->first();
        $response = ["message" => "Event 2 Year Quater 2 Successfully", "sales"=>$sales];
        return response($response,"200");
        }
        


    // public function event_3_Y1Q2(Request $request){
    //     // dd($request->all());
    //     $sales_cos = Gameflow::where('card_name', $request->type)->limit(1)->update( ['profit_loss'=>'M_A','invest_amount' => $request->m_a,'total_sales' => $request->sale]);
    //     // dd($sales_cos);
    //     $sales =Gameflow::where('card_name', $request->type)->first();
    //     $response = ["message" => "Event 2 Year Quater 2 Successfully", "sales"=>$sales];
    //     return response($response,"200");
    // }
}