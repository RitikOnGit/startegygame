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


class Y1SummaryController extends Controller
{
     public function summary(Request $request)
    {
        $myuser = 'SANTOSH';
        $strategy_selected  = Gameflow::where('card_type', '=', 'strategy')->where('user_selected', '=', 1)->get();
        $product          = Card::where('card_type', '=', 'product')->get();
        $event_card_q4  = DB::table('cards')->where('card_type', '=', 'event_card_q4')->get();
        $event_card_selected  = DB::table('gameflows')->where('card_type', '=', 'event_card_q4')->where('user_selected', '=', 1)->first();
        $product_launch_val_3 = DB::table('gameflows')->where('user_id', $myuser)->where('card_type', '=', 'product_launch_3')->first();
        $product_launch_val_2 = DB::table('gameflows')->where('user_id', $myuser)->where('card_type', '=', 'product_launch_2')->first();
        $product_launch_val = DB::table('gameflows')->where('user_id', $myuser)->where('card_type', '=', 'product_launch')->first();
        $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();

        // y1q4
        $product_launch_val_4 = DB::table('gameflows')->where('user_id', $myuser)->where('card_type', '=', 'product_launch_4')->first();
       
        // $prod_flag = '';
        //     if(isset($product_launch_val_4) && $product_launch_val_4 != ''){
        //         $multi_flags = $product_launch_val_4->multi_flag;            
        //         $multi_flagss = json_decode($multi_flags);        
        //         $prod_flag = (array) $multi_flagss;
        //     }
        $cal_ma      = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
        $cal_ga      = DB::table('gameflows')->where('profit_loss', 'G_A')->sum('invest_amount');
        $assets_total      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
        $assets = (int) $assets_total +(int) 30;

        $IT_amt      = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'IT')->sum('invest_amount');
        $CUSTOM_amt  = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'CUSTOM')->sum('invest_amount'); 
        $matrix_cal  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();
        $matrix_all  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();     
        $matrix_all_2  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q2') ->orderBy('id', 'desc')->limit(1)->first();     
        $matrix_all_3  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q3') ->orderBy('id', 'desc')->limit(1)->first(); 
        $matrix_all_4  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card_q4') ->orderBy('id', 'desc')->limit(1)->first();     

        $round5 = 'r5';

        $sales      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->orWhere('profit_loss', 'ASSETS_4')->orWhere('card_name','event_card_3_Y1Q2')->orWhere('card_name', 'event_card_2_Y1Q2')->orWhere('card_name', 'event_card_3_Y1Q3')->orWhere('card_name', 'event_card_2_Y1Q3')->sum('total_sales');

        $dis      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->orWhere('profit_loss', 'ASSETS_4')->sum('compute_discount');
        $cos      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->orWhere('profit_loss', 'ASSETS_4')->sum('final_cos_val');
        $resources= DB::table('gameflows')->where('profit_loss', 'ASSETS')->orWhere('profit_loss', 'ASSETS_2')->orWhere('profit_loss', 'ASSETS_3')->orWhere('profit_loss', 'ASSETS_4')->sum('resources');
        $event_cosq3  = Event_flow::where('user_id', $myuser)->where('quarter','q2')->where('option','A')->first();
        $acc_receivable_q4  =  Gameflow::where('user_id', $myuser)->where('card_type', '=', 'add_coin_q4')->first();

        // $Events_cards_4  = Events_cards::where('quater_year',"quarter_4")->get();

        // $event_impactq2  = Salesrec::where('user_id', $myuser)->where('type','event_impact_q2')->where('quarter','q2')->sum('event_impact');
        // $event_impactq3  = Salesrec::where('user_id', $myuser)->where('quarter','q3')->where('type','event_impact_q3')->sum('event_impact');
        // $event_impactq4  = Salesrec::where('user_id', $myuser)->where('quarter','q4')->where('type','event_impact_q3')->sum('event_impact');

        // G&A and Rent&Utility
        $gna_card  = Card::where('card_type', '=', 'gna_box_val')->first();
        $gna_prev_box_q4 = Event_flow::where('user_id', $myuser)->where('quarter','q4')->where('option', 'A')->first();
        $gna_prev_box_q3 = Event_flow::where('user_id', $myuser)->where('quarter','q3')->where(function ($query){$query->where('option', 'A')
              ->orWhere('option', 'C');})->first();

        if(isset($gna_prev_box_q4) && $gna_prev_box_q4->gna_box_q4 != ''){
            if(isset($gna_prev_box_q3)){
            $ga_box_new = $gna_card->card_invest + $gna_prev_box_q3->gna_box_q3 + $gna_prev_box_q3->gna_box_q4 + $gna_prev_box_q4->gna_box_q4;
            }else{
            $ga_box_new = $gna_card->card_invest + $gna_prev_box_q4->gna_box_q4;
            }
        }
        else if(isset($gna_prev_box_q3)){
        $ga_box_new = $gna_card->card_invest + $gna_prev_box_q3->gna_box_q3 + $gna_prev_box_q3->gna_box_q4;
        }else{ $ga_box_new = $gna_card->card_invest; }

        $gna_box_val = $ga_box_new;
      
        $ru_box  = Card::where('card_type', '=', 'rent_box_val')->first();
        $ru_box_q3 = Event_flow::where('user_id', $myuser)->where('quarter','q3')->where('option', 'A')->first();

       if(isset($ru_box_q3)){
        $ru_box_new = $ru_box->card_invest + $ru_box_q3->ru_box_q3 + $ru_box_q3->ru_box_q4;
        }else{ $ru_box_new = $ru_box->card_invest; }
        $rent_box_val = $ru_box_new;

        $matrx_impt_default = DB::table('matrix')->where('id', 1)->orderBy('id', 'desc')->first();
        $matrx_impact = DB::table('matrix')->where('user_id', $myuser)->orderBy('id', 'desc')->first();
        // dd($matrx_impact);



        
        // echo "<pre>";
        // print_r($rent_box_val);
        // exit();


        return view('Game/y1summary',['matrix_all'=> $matrix_all,'matrix_all_2'=> $matrix_all_2,'round5'=> $round5,'matrix_cal'=>$matrix_cal,'matrix_all_3'=>$matrix_all_3,'matrix_all_4'=>$matrix_all_4,'cal_ga'=>$cal_ga,'cal_ma'=>$cal_ma,'assets'=>$assets,'IT_amt'=>$IT_amt,'CUSTOM_amt'=>$CUSTOM_amt,'event_card_q4'=>$event_card_q4,'event_card_selected'=>$event_card_selected,'product'=>$product,'amt_deduct'=>$amt_deduct,'strategy_selected'=>$strategy_selected,'product_launch_val'=>$product_launch_val,'sales'=>$sales,'dis'=>$dis,'cos'=>$cos,'resources'=>$resources,'event_cosq3'=>$event_cosq3,'acc_receivable_q4'=>$acc_receivable_q4,'gna_box_val'=>$gna_box_val,'rent_box_val'=>$rent_box_val,'matrx_impt_default'=>$matrx_impt_default,'matrx_impact'=>$matrx_impact]);
    }

    public function matrix_impact_card(Request $request){
        $myuser = 'SANTOSH';
        try{
            // dd($request->all());
            if($request->pay_to == 'customer_satisfaction' || $request->pay_to == 'brand_equity'){
                if($request->pay_to == 'customer_satisfaction'){
                    $card_name = 'cash_by_csat';
                }else if($request->pay_to == 'brand_equity'){
                    $card_name = 'cash_by_be';              }

            $cust_money = DB::table('gameflows')->where('customer_money', '!=' ,'')->where('user_id', $myuser)->orderBy('id', 'desc')->first();
            $last_money = DB::table('gameflows')->where('user_id', $myuser)->orderBy('id', 'desc')->first();
            $new_amt = $last_money->total_coin + (int) $request->coin;
            $new_cust_amt = $cust_money->customer_money - (int) $request->coin;
            $game_flow = new Gameflow;
            $game_flow->total_coin = $new_amt;
            $game_flow->invest_amount = $request->acc_pay;
            $game_flow->user_id = $myuser;
            $game_flow->customer_money = $new_cust_amt;
            $game_flow->invest_amount = $request->coin;
            $game_flow->card_name = $card_name;
            $game_flow->card_type = $card_name;
            $game_flow->save();

            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
            $bal_sheet = new Balancesheet;
            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->user_id = $myuser;
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter = 'Summary_y1';
            $bal_sheet->cash = $new_amt;
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
            $bal_sheet->acc_payable = 0;
            $bal_sheet->assets = $balance_sheet->assets;    
            $bal_sheet->save();

            }
            else{
            // dd($request->all());
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                $game_flow = new Gameflow;
                $game_flow->user_id = $myuser;
                $matrix->year ='Year1';
                $matrix->quarter ='Summary_y1';
                $game_flow->card_type = 'matrix';
                $game_flow->card_name = $request->card_name;
                $game_flow->matrix_value = $request->total;
                $game_flow->brand_val = $request->total_brand;
                $game_flow->emp_engagement = $request->total_employee;
                $game_flow->col_effi = $request->total_collection;
                $game_flow->user_selected = 1;
                $game_flow->total_coin = $amt_deduct->total_coin;              
    
    
                $matrx_impact = DB::table('matrix')->where('user_id', $myuser)->orderBy('id', 'desc')->first();
                $matrix = new Matrix;
                
                $matrix->user_id = $myuser;
                $matrix->year ='Year1';
                $matrix->quarter ='Summary_y1';
                $matrix->flow_id = $game_flow->id;
                $matrix->c_sat = $matrx_impact->c_sat + $request->c_sat;
                $matrix->brand_equity = $matrx_impact->brand_equity;
                $matrix->employee = $matrx_impact->employee;
                $matrix->col_efficient = $matrx_impact->col_efficient;

                if($matrx_impact->quarter != 'Summary_y1'){
                    $game_flow->save();
                    $matrix->save();
                }else{
                    echo 'alerady there';
                }
                // dd($matrx_impact->quarter);
            }
            $message = "Matrix impact card clicked successfully";
            $response = ["message" => $message,'game_flow'=> $game_flow];
           return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function q2selectOpt_y1q4(Request $request){
        // dd($request->all());
        try{
           $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();

           $game_flow = new Gameflow;
           $game_flow->user_id ='SANTOSH';
           $game_flow->card_id = $request->a;
           $game_flow->card_type = 'event_card_q4';
           $game_flow->card_name = $request->div_id;
           $game_flow->selected = $request->a;
           $game_flow->card_image = $request->image;
           $game_flow->total_coin = $amt_deduct->total_coin;
           $game_flow->user_selected = 1;
           $game_flow->save();

           $Def_event = Events_cards::where('quater_year' , "quarter_4")->where('type',$request->a)->first();            
           $event_flow = new Event_flow;
           $event_flow->user_id ='SANTOSH';
           $event_flow->year ='year1';
           $event_flow->quarter ='q4';
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

           $response = ["message" => "Event Card Added successfully in R5",'game_flow'=> $game_flow,'event_flow'=>$event_flow];
           return response($response,"200");
       }
       catch(Exception $e){
           return response('insert')->with('failed',"operation failed");
       }
   }

   public function selectOpt_update_y1q4(Request $request){
    try{
        $sales_latesh = '';
        if($request->div_id == 'event_card_1_Y1Q4'){
            // dd($request->all());
            $employees = (int) $request->employee + (int) $request->ee;
            $customer_ = (int) $request->customer_ + (int) $request->cs;
            // dd($employees);

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer_,'col_effi' => $request->collection,
            'emp_engagement' => $employees,'brand_val' => $request->brand,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'invest_amount'=>$request->GA]);

            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer_,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $request->brand,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce,'invest_amount'=>$request->GA]);           
            }
        }
        elseif($request->div_id == 'event_card_2_Y1Q4'){
            // dd($request->all());

            $employees = (int) $request->employee + (int) $request->ee;
            $customer_ = (int) $request->customer_ + (int) $request->cs;

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer_,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $request->brand,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);

            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer_,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $request->brand,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);           
            }
            
        }
        elseif($request->div_id == 'event_card_3_Y1Q4'){
            // dd($request->all());

            $customer = (int) $request->customer_ + (int) $request->cs;
            $employees = (int) $request->employee + (int) $request->ee;
            // dd($employees);

            $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $customer,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $request->brand,
            'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);

            if(isset($card_event) && $card_event == 0){
                $card_event = Gameflow::where('card_name', '=', $request->div_id)->update( ['matrix_value' => $request->customer,'col_effi' => $request->collection,'emp_engagement' => $employees,'brand_val' => $request->brand,
                'car_def_val_cs' => $request->cs,'car_def_val_be' => $request->be,'car_def_val_ee' => $request->ee,'car_def_val_ce' => $request->ce]);           
            }
        }
        
        $event_selected  = DB::table('gameflows')->where('card_name', '=', $request->div_id)->where('user_selected', '=', 1)->first();       

        $response = ["message" => "Event Card matrix Calculated for Y1 Q3 successfully",'card_event'=> $card_event,'event_selected'=>$event_selected,'sales_latesh'=>$sales_latesh];
        return response($response,"200");
    }
    catch(Exception $e){
        return response('insert')->with('failed',"operation failed");
    }

   }
}