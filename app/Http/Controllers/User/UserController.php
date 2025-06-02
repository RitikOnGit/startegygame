<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Card;
use App\Models\Gameflow;
use App\Models\ProfitLoss;
use App\Models\Balancesheet;
use App\Models\Matrix;
use App\Models\ads;
use App\Models\productLaunch;
use App\Models\Cosrec;
use App\Models\recsales;

use Illuminate\Support\Facades\Facade;
use Auth;
use Validator;
use DB;

class UserController extends Controller
{
     public function index(Request $request)
    {
        // $player = Auth::id();
        $player = 'SANTOSH';

        $strategy         = Card::where('card_type', '=', 'strategy')->get();
        $product          = Card::where('card_type', '=', 'product')->get();
        $flags_ads_spent  = Card::where('card_type', '=', 'flags_ads_spent')->get();
        $flags_incentive  = Card::where('card_type', '=', 'flags_incentive')->get();
        $It_expense       = Card::where('card_type', '=', 'It_expense')->get();
        $customer_service = Card::where('card_type', '=', 'customer_service')->get();
        // $marketing        = Card::where('card_type', '=', 'ads_marketing')->get();
        // $product_launch   = Card::where('card_type', '=', 'pro_lunch_year_1')->get();

        $product_selected_cus = Gameflow::where('card_type', '=', 'product')->get();
        $strategy_selected  = Gameflow::where('card_type', '=', 'strategy')->where('user_selected', '=', 1)->get();
        // $strategy_count     = Gameflow::where('card_type', '=', 'strategy')->count();
        $product_count      = Gameflow::where('card_type', '=', 'product')->where('user_selected', '=', 1)->count();
        $product_selected   = Gameflow::where('card_type', '=', 'product')->where('user_selected', '=', 1)->get();
        
        $flag_selected      = DB::table('gameflows')->where('card_type', '=', 'FLAG')->where('user_selected', '=', 1)->get();
        $IT                 = DB::table('gameflows')->where('card_type', '=', 'IT')->where('user_selected', '=', 1)->get();
        $CUSTOM             = DB::table('gameflows')->where('card_type', '=', 'CUSTOM')->where('user_selected', '=', 1)->get();

        $cal_ma      = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
        $cal_ga      = DB::table('gameflows')->where('profit_loss', 'G_A')->sum('invest_amount');
        $assets_total      = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
        $assets = (int) $assets_total +(int) 30;
        $IT_amt      = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'IT')->sum('invest_amount');
        $CUSTOM_amt  = DB::table('gameflows')->where('profit_loss', 'IT_CUSTOM')->where('card_type', '=', 'CUSTOM')->sum('invest_amount');        
        $matrix_cal  = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'matrix') ->orderBy('id', 'desc')->limit(1)->first();       
        $matrix_all = DB::table('gameflows')->where('user_selected', 1)->where('card_type', '=', 'event_card') ->orderBy('id', 'desc')->limit(1)->first();     

        $sel_card = Gameflow::get();        
            foreach($sel_card as $selected_cards){
            $selected_card =$selected_cards->card_name;        
            }
        
        $round1 = 'r1';

        // sales_record
        // $record_sales_1      = DB::table('record_sales')->where('quarter', 'q1')->sum('stratery_impact');
        // $record_sales_2      = DB::table('record_sales')->where('quarter', 'q2')->sum('stratery_impact');
        // $record_sales_3      = DB::table('record_sales')->where('quarter', 'q3')->sum('stratery_impact');
        // $record_sales_4      = DB::table('record_sales')->where('quarter', 'q4')->sum('stratery_impact');
        // echo $record_sales_1;   echo $record_sales_2;   echo $record_sales_3;   echo $record_sales_4;exit();

        // if(is_null($player)){
        //     return redirect('/login');
        // }
        // else{
        return view('Game/index',['strategy' => $strategy,'product' => $product,'flags_ads_spent' => $flags_ads_spent,'flags_incentive' => $flags_incentive,
        'It_expense' => $It_expense,'customer_service' => $customer_service,'product_selected'=>$product_selected,'strategy_selected'=>$strategy_selected,
         'selected_card'=>$selected_card,'product_count'=>$product_count,'product_selected_cus'=>$product_selected_cus,
        'cal_ma'=>$cal_ma,'cal_ga'=>$cal_ga,'assets'=>$assets,'flag_selected'=>$flag_selected,'IT'=>$IT,'CUSTOM'=>$CUSTOM,
        'IT_amt'=>$IT_amt,'CUSTOM_amt'=>$CUSTOM_amt,'matrix_cal' => $matrix_cal,'matrix_all'=>$matrix_all,'round1'=>$round1,
    ]); 
//  }
    }

    public function strategy_card(Request $request){
        // dd($request->all());
        // $player = Auth::id();
        $player = 'SANTOSH';

        try{
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $total_balance = $amt_deduct->total_coin - $request->invest;
          
            $proft_loss = new ProfitLoss;
            $bal_sheet = new Balancesheet;
            $game_flow = new Gameflow;
            $game_flow->user_id = $player;
            $game_flow->year ='Year1';
            $game_flow->quarter ='Setup_r';
            $game_flow->card_id = $request->id;
            $game_flow->card_type = $request->type;
            $game_flow->card_name = $request->card_name;
            $game_flow->card_image = $request->image;            
            $game_flow->selected = $request->select;
            $game_flow->trans_type = 2;
            $game_flow->invest_amount = $request->invest;

            $impact_value   = Card::where('card_name', '=',$request->card_name)->first();
            // dd($impact_value);

            
            if($request->id == 1){
                $game_flow->profit_loss = "M_A";
            }
            elseif($request->id == 2 ||$request->id == 3 ||$request->id == 4 ||$request->id == 5 ||$request->id == 6 ){
                $game_flow->profit_loss = "G_A";
            }
            $game_flow->total_coin = $total_balance;
            $game_flow->user_selected = 1;
               
            $game_flow->save();

            if(isset($impact_value) && $impact_value->impact_value_cos != ''){
                $game_flow->impact_value_cos        =   $impact_value->impact_value_cos;
                $game_flow->impact_value_cos_y1q2   =   $impact_value->impact_value_cos_y1q2;
                $game_flow->impact_value_cos_y1q3   =   $impact_value->impact_value_cos_y1q3;
                $game_flow->impact_value_cos_y1q4   =   $impact_value->impact_value_cos_y1q4;

                $game_flow->save();
                //add values in cor_record table
                for( $num = 0; $num <= 3; $num++) {
                    if($num == 0){
                         $cor_rec = new Cosrec;
                         $cor_rec->user_id = $player;
                         $cor_rec->flow_id = $game_flow->id;
                        $cor_rec->year = "year1";
                        $cor_rec->quarter = "q1";
                        $cor_rec->card_name = $game_flow->card_name;
                        $cor_rec->stratery_impact = $impact_value->impact_value_cos;
                        $cor_rec->save();
                    }
                    elseif($num == 1){
                        $cor_rec = new Cosrec;
                        $cor_rec->user_id = $player;
                        $cor_rec->flow_id = $game_flow->id;
                        $cor_rec->year = "year1";
                        $cor_rec->quarter = "q2";
                        $cor_rec->card_name = $game_flow->card_name;
                        $cor_rec->stratery_impact = $impact_value->impact_value_cos_y1q2;
                        $cor_rec->save();
                    }
                    elseif($num == 2){
                        $cor_rec = new Cosrec;
                        $cor_rec->user_id = $player;
                        $cor_rec->flow_id = $game_flow->id;
                        $cor_rec->year = "year1";
                        $cor_rec->quarter = "q3";
                        $cor_rec->card_name = $game_flow->card_name;
                        $cor_rec->stratery_impact = $impact_value->impact_value_cos_y1q3;
                        $cor_rec->save();
                    }
                    elseif($num == 3){
                        $cor_rec = new Cosrec;
                        $cor_rec->user_id = $player;
                        $cor_rec->flow_id = $game_flow->id;
                        $cor_rec->year = "year1";
                        $cor_rec->quarter = "q4";
                        $cor_rec->card_name = $game_flow->card_name;
                        $cor_rec->stratery_impact = $impact_value->impact_value_cos_y1q4;
                        $cor_rec->save();
                    }
                }

            }
            elseif(isset($impact_value) && $impact_value->impact_value_sales != ''){             
                $game_flow->impact_value_sales = $impact_value->impact_value_sales;
                $game_flow->impact_value_sales_y1q2 = $impact_value->impact_value_sales_y1q2;
                $game_flow->impact_value_sales_y1q3 = $impact_value->impact_value_sales_y1q3;
                $game_flow->impact_value_sales_y1q4 = $impact_value->impact_value_sales_y1q4;

                $game_flow->save();
                  //add values in cor_record table
                  for( $num = 0; $num <= 3; $num++) {
                    if($num == 0){
                        $rec_sales = new recsales;
                        $rec_sales->user_id = $player;
                        $rec_sales->flow_id = $game_flow->id;
                        $rec_sales->year = "year1";
                        $rec_sales->quarter = "q1";
                        $rec_sales->card_name = $game_flow->card_name;
                        $rec_sales->stratery_impact = $impact_value->impact_value_sales;
                        $rec_sales->save();
                    }
                    elseif($num == 1){
                        $rec_sales = new recsales;
                        $rec_sales->user_id = $player;
                        $rec_sales->flow_id = $game_flow->id;
                        $rec_sales->year = "year1";
                        $rec_sales->quarter = "q2";
                        $rec_sales->card_name = $game_flow->card_name;
                        $rec_sales->stratery_impact = $impact_value->impact_value_sales_y1q2;
                        $rec_sales->save();
                    }
                    elseif($num == 2){
                        $rec_sales = new recsales;
                        $rec_sales->user_id = $player;
                        $rec_sales->flow_id = $game_flow->id;
                        $rec_sales->year = "year1";
                        $rec_sales->quarter = "q3";
                        $rec_sales->card_name = $game_flow->card_name;
                        $rec_sales->stratery_impact = $impact_value->impact_value_sales_y1q3;
                        $rec_sales->save();
                    }
                    elseif($num == 3){
                        $rec_sales = new recsales;
                        $rec_sales->user_id = $player;
                        $rec_sales->flow_id = $game_flow->id;
                        $rec_sales->year = "year1";
                        $rec_sales->quarter = "q4";
                        $rec_sales->card_name = $game_flow->card_name;
                        $rec_sales->stratery_impact = $impact_value->impact_value_sales_y1q4;
                        $rec_sales->save();
                    }
                }
            }


        // ** profit & loss table add ** // 
            $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
            // dd($profitAndLoss);
            if(isset($profitAndLoss)){
            $proft_loss->user_id = $player;
            $proft_loss->year ='Year1';
            $proft_loss->quarter ='Setup_r';
            $proft_loss->flow_id = $game_flow->id;

            if($profitAndLoss->g_n_a != ''){
                if($request->id == 1){
                    if($profitAndLoss->marketing_n_ads != ''){
                        $proft_loss->marketing_n_ads = (int)$profitAndLoss->marketing_n_ads + $request->invest;
                        $proft_loss->g_n_a = $profitAndLoss->g_n_a;
                    }
                    else{
                        $proft_loss->marketing_n_ads = $request->invest;
                        $proft_loss->g_n_a = $profitAndLoss->g_n_a;
                    }                   
                }
                elseif($request->id == 2 ||$request->id == 3 ||$request->id == 4 ||$request->id == 5 ||$request->id == 6 ){
                    $proft_loss->g_n_a = $profitAndLoss->g_n_a + $request->invest;
                    $proft_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                    if($request->id == 6){
                        $proft_loss->marketing_n_ads = -1;
                    }
                }
            }   
            else{
                if($request->id == 1){
                    $proft_loss->marketing_n_ads = $request->invest;
                }
                elseif($request->id == 2 ||$request->id == 3 ||$request->id == 4 ||$request->id == 5 ||$request->id == 6 ){
                    $proft_loss->g_n_a = $request->invest;
                    $proft_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                    if($request->id == 6){
                        $proft_loss->marketing_n_ads = (int)$proft_loss->marketing_n_ads + -1;
                    }
                }
        }
            $proft_loss->save();
        }
        else{
            $proft_loss->user_id = $player;
            $proft_loss->year ='Year1';
            $proft_loss->quarter ='Setup_r';
            $proft_loss->flow_id = $game_flow->id;

            if($request->id == 1){
                $proft_loss->marketing_n_ads = $request->invest;
            }
            elseif($request->id == 2 ||$request->id == 3 ||$request->id == 4 ||$request->id == 5 ||$request->id == 6 ){
                $proft_loss->g_n_a = $request->invest;
                $pnl = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                if($request->id == 6){
                    $proft_loss->marketing_n_ads =  -1;
                }
            }
            $proft_loss->save();
            }
            
            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
            // dd($balance_sheet->user_id);
            $bal_sheet->user_id = $player;
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter ='Setup_r';
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
            $bal_sheet->assets = $balance_sheet->assets;
            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->cash = $total_balance;
            $bal_sheet->save();


            $strategy_cos1 = DB::table('record_cos')->where('user_id', $player)->where('quarter', 'q1')->sum('stratery_impact');
            $strategy_cos2 = DB::table('record_cos')->where('user_id', $player)->where('quarter', 'q2')->sum('stratery_impact');
            $strategy_cos3 = DB::table('record_cos')->where('user_id', $player)->where('quarter', 'q3')->sum('stratery_impact');
            $strategy_cos4 = DB::table('record_cos')->where('user_id', $player)->where('quarter', 'q4')->sum('stratery_impact');
          
            // dd($strategy_cos1);
            $record_sales_1 = DB::table('record_sales')->where('user_id', $player)->where('quarter', 'q1')->sum('stratery_impact');
            $record_sales_2 = DB::table('record_sales')->where('user_id', $player)->where('quarter', 'q2')->sum('stratery_impact');
            $record_sales_3 = DB::table('record_sales')->where('user_id', $player)->where('quarter', 'q3')->sum('stratery_impact');
            $record_sales_4 = DB::table('record_sales')->where('user_id', $player)->where('quarter', 'q4')->sum('stratery_impact');

            $response = ["message" => "Card Added successfully",'strategy_cos1'=>$strategy_cos1,
        'strategy_cos2'=>$strategy_cos2,'strategy_cos3'=>$strategy_cos3,'strategy_cos4'=>$strategy_cos4,
        'record_sales_1'=>$record_sales_1,'record_sales_2'=>$record_sales_2,'record_sales_3'=>$record_sales_3,'record_sales_4'=>$record_sales_4
        ];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }

    }

    public function find_strategy(Request $request){
        // dd($request->all());
        if($request->card_name == 's6'){
                     
            $find_MA   = DB::table('gameflows')->where('profit_loss' , "M_A")->orderBy('id', 'desc')->first();

            if(isset($find_MA) && $find_MA->invest_amount != '' ){
                $reduce_MA = (int) $find_MA->invest_amount  -1; 
                // $find_MA = Gameflow::where('profit_loss' , "M_A")->update( ['invest_amount' => $reduce_MA]);
                
                // $game_flow_add = Gameflow::where('profit_loss' , "M_A")->where('card_name',$request->card_name)->first();
                // dd($game_flow_add);

                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                $total_balance = $amt_deduct->total_coin - $request->invest;

                $game_flow_add = new Gameflow;
                $game_flow_add->user_id ='SANTOSH';
                $game_flow_add->card_id = $request->card_id;
                $game_flow_add->card_type = $request->card_type."add";
                $game_flow_add->card_name = $request->card_name;
                $game_flow_add->total_coin = $total_balance;
             
                $game_flow_add->profit_loss = "M_A";
                $game_flow_add->invest_amount = -1;
                $game_flow_add->save();
                $total_amt = DB::table('gameflows')->where('profit_loss', 'M_A')->sum('invest_amount');

            }
            else{
               
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                $total_balance = $amt_deduct->total_coin - $request->invest;
              
                $game_flow_add = new Gameflow;
                $game_flow_add->user_id ='SANTOSH';
                $game_flow_add->card_id = $request->card_id;
                $game_flow_add->card_type = $request->card_type."add";
                $game_flow_add->card_name = $request->card_name;
                $game_flow_add->total_coin = $total_balance;
             
                $game_flow_add->profit_loss = "M_A";
                $game_flow_add->invest_amount = -1;
                $game_flow_add->save();
                $total_amt = DB::table('gameflows')->where('profit_loss', 'M_A')->sum('invest_amount');
                // dd($game_flow);
               
            }      
        }
        $response = ["message" => "Strategy matrix successfully",'game_flow_add'=>$game_flow_add,'total_amt'=>$total_amt];
        //  dd($response);     
        return response($response,"200");
    }

    public function product_card(Request $request){
        // dd($request->all());
        try{
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $total_balance = $amt_deduct->total_coin - $request->invest;
          
            $game_flow = new Gameflow;
            $game_flow->user_id ='SANTOSH';
            $game_flow->card_id = $request->id;
            $game_flow->card_type = $request->type;
            $game_flow->card_name = $request->card_name;
            $game_flow->card_image = $request->image;
            $game_flow->invest_amount = $request->invest;
            $game_flow->selected = $request->select;
            $game_flow->trans_type = 2;
            
            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
            $bal_sheet = new Balancesheet;
            $bal_sheet->user_id ='SANTOSH';
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter ='Setup_r';
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
            $bal_sheet->assets = $balance_sheet->assets + $request->invest;
            $bal_sheet->cash = $total_balance;
            // $bal_sheet->flow_id = $request->id;


            if($request->id == 1 || $request->id == 2 ||$request->id == 3 || $request->id == 4 ||$request->id == 5 ||$request->id == 6 ){
                $game_flow->profit_loss = "ASSETS";
            }
            $game_flow->total_coin = $total_balance;
            $game_flow->user_selected = 1;
            $game_flow->save();

            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->save();

            $response = ["message" => "Card Added successfully"];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }  
    
    public function flag_card(Request $request){
        // dd($request->all());
        try{
            $multi_image = array();
            $multi_image[] = '"'.$request->flag_ads_src_1.'"';
            $multi_image[] = '"'.$request->flag_inc_src_4.'"';
            $multi_image[] = '"'.$request->flag_ads_src_2.'"';
            $multi_image[] = '"'.$request->flag_inc_src_5.'"';
            $multi_image[] = '"'.$request->flag_ads_src_3.'"';
            $multi_image[] = '"'.$request->flag_inc_src_6.'"';
            $multi_image =  join(',', $multi_image);            
        // dd($multi_image);

            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $total_balance = $amt_deduct->total_coin - $request->total;          

            $user = 'SANTOSH';
            $game_flow = new Gameflow;
            $game_flow->user_id = $user;
            $game_flow->card_id = "all";
            $game_flow->card_type = 'flag';
            $game_flow->card_name = 'Flag ADS & INCENTIVE';
            $game_flow->multi_flag = '['.$multi_image.']';
            $game_flow->invest_amount = $request->total;
            $game_flow->profit_loss = "FLAG";
            $game_flow->total_coin = $total_balance;
            $game_flow->user_selected = 1;
            $game_flow->save();


            $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
            $totalGna = DB::table('profit_n_loss')->where('user_id', $user)->sum('g_n_a');
            // dd($totalGna);
            $proft_loss = new ProfitLoss;
            $proft_loss->user_id = $user;
            $proft_loss->year ='Year1';
            $proft_loss->quarter ='Setup_r';
            $proft_loss->g_n_a = $profitAndLoss->g_n_a;
            // if($totalGna == '0'){
            //     $proft_loss->g_n_a = "NULL";
            // }
            // else{
            //     $proft_loss->g_n_a = $totalGna;
            // }
            $proft_loss->flow_id = $game_flow->id;

            if(isset($profitAndLoss) && $profitAndLoss->marketing_n_ads != '' ){
                $proft_loss->marketing_n_ads = (int)$profitAndLoss->marketing_n_ads + $request->total;
            }
            else{
                $proft_loss->marketing_n_ads = $request->total;
            }

            
            // //  balancesheet // //
            $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
            
            $bal_sheet = new Balancesheet;
            $bal_sheet->user_id = $user;
            $bal_sheet->year ='Year1';
            $bal_sheet->quarter ='Setup_r';
            $bal_sheet->flow_id = $game_flow->id;
            $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
            $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
            $bal_sheet->assets = $balance_sheet->assets;
            $bal_sheet->cash = $total_balance;
            // print_r($game_flow);              
           
            $proft_loss->save();
            $bal_sheet->save();

            $ads_market = new ads;
            $ads_market->user_id ='SANTOSH';
            $ads_market->year ='Year1';
            $ads_market->flow_id = $game_flow->id;
            $ads_market->ad_store = $request->a;
            $ads_market->int_store = $request->d;
            $ads_market->ad_agent = $request->b;
            $ads_market->int_agent = $request->e;
            $ads_market->ad_online = $request->c;
            $ads_market->int_online = $request->f;
            $ads_market->save();

            $response = ["message" => "Flag Added successfully", 'game_flow' => $game_flow ];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }
    
    public function IT_service_card(Request $request){
        // dd($request->all());
        try{            
            if($request->a ){
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                $total_balance = $amt_deduct->total_coin - $request->a;          
                // image_id_1
                $game_flow_it = new Gameflow;
                $game_flow_it->user_id ='SANTOSH';
                $game_flow_it->card_id = $request->card_id_1;
                $game_flow_it->card_type = 'IT';
                $game_flow_it->card_name = $request->card_name_1;
                $game_flow_it->card_image = $request->img_src_1;
                $game_flow_it->invest_amount =  $request->a;
                $game_flow_it->profit_loss = "IT_CUSTOM";
                $game_flow_it->total_coin = $total_balance;
                $game_flow_it->user_selected = 1;
                $game_flow_it->save();

                $profitAndLoss = DB::table('profit_n_loss')->orderBy('id', 'desc')->first();
                $proft_loss = new ProfitLoss;
                $proft_loss->user_id ='SANTOSH';
                $proft_loss->flow_id = $game_flow_it->id;
                $proft_loss->marketing_n_ads = $profitAndLoss->marketing_n_ads;
                $proft_loss->g_n_a = $profitAndLoss->g_n_a;
                $proft_loss->it = $request->a;
                $proft_loss->year ='Year1';
                $proft_loss->quarter ='Setup_r';
                $proft_loss->save();
                $pnl_id = $proft_loss->id;
                
                $balance_sheet = DB::table('balance_sheet')->orderBy('id', 'desc')->first();
                $bal_sheet = new Balancesheet;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='Setup_r';
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->assets = $balance_sheet->assets;
                $bal_sheet->flow_id = $game_flow_it->id;
                $bal_sheet->cash =$total_balance;
                $bal_sheet->save();
                
                $ads_market = new ads;
                $ads_market->year ='Year1';
                $ads_market->user_id ='SANTOSH';
                $ads_market->flow_id = $game_flow_it->id;
                $ads_market->it_exps = $request->a;
                $ads_market->save();
                $id = $ads_market->id;

            }
            if($request->b ){

                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                $total_balance = $amt_deduct->total_coin - $request->b;
                $game_flow_custom = new Gameflow;
                $game_flow_custom->user_id ='SANTOSH';
                $game_flow_custom->card_id = $request->card_id_2;
                $game_flow_custom->card_type = 'CUSTOM';
                $game_flow_custom->card_name = $request->card_name_2;
                $game_flow_custom->card_image = $request->img_src_2;
                $game_flow_custom->invest_amount =  $request->b;
                $game_flow_custom->profit_loss = "IT_CUSTOM";
                $game_flow_custom->total_coin = $total_balance;
                $game_flow_custom->user_selected = 1;
                $game_flow_custom->save();
                
                $bal_sheet = new Balancesheet;
                $bal_sheet->user_id ='SANTOSH';
                $bal_sheet->year ='Year1';
                $bal_sheet->quarter ='Setup_r';
                $bal_sheet->long_term_debt = $balance_sheet->long_term_debt;
                $bal_sheet->acc_receivable = $balance_sheet->acc_receivable;
                $bal_sheet->assets = $balance_sheet->assets;
                $bal_sheet->flow_id = $game_flow_custom->id;
                $bal_sheet->cash =$total_balance;
                $bal_sheet->save();

                $find_MA = ads::where('id' , $id)->update( ['customer_service' => $request->b]);
                $pnl_cust = ProfitLoss::where('id' , $pnl_id)->update( ['customer_service' => $request->b]);

                $response = ["message" => "Flag Added successfully",'game_flow_custom'=>$game_flow_custom, 'game_flow_it' => $game_flow_it ];
                return response($response,"200");
            }           
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function single_data(Request $request){
        // return response ($request->all());
        try{
            if($request->type == 'strategy'){

            if(isset($request->id) && $request->id != '') $data['id'] = $request->id;
            $result  = Gameflow::where('card_type', '=', 'strategy')->where('card_id', '=', $request->id)->get();

            if(isset($result['0'])  && isset($result['0']) != ''){ 
                $strategy_reload =  $result['0'];
            }
            else{
                return $result;
            }
           return response($strategy_reload);
        }
        if($request->type == 'product'){

            if(isset($request->id) && $request->id != '') $data['id'] = $request->id;
            $result  = Gameflow::where('card_type', '=', 'product')->where('card_id', '=', $request->id)->get();

            if(isset($result['0'])  && isset($result['0']) != ''){ 
                $strategy_reload =  $result['0'];
            }
            else{
                return $result;
            }
           return response($strategy_reload);
        //    return view('Game.single_data',['strategy_reload'=>$strategy_reload])->render();
        }
    }

        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }

    }

    public function add_coin(Request $request){
                    // dd($request->all());
        try{
            if($request->type == 'strategy' && $request->card_name == 's1'  || $request->type == 'flag'){
                $cal_ga  = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                return response([$cal_ga,'s1',$amt_deduct]);
            }
            if($request->type == 'strategy' && $request->card_name == 's2' || $request->card_name == 's3'|| $request->card_name == 's4' ||$request->card_name == 's5' || $request->card_name == 's6' ){
                $cal_ma  = DB::table('gameflows')->where('profit_loss', 'G_A')->sum('invest_amount');
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                // $find_updated   = DB::table('gameflows')->where('profit_loss' , "M_A")->orderBy('id', 'desc')->first();
// dd($amt_deduct);
                return response([$cal_ma,'s2',$amt_deduct]);
            }
            if($request->type == 'product'){
                $assets_total = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
                $assets = (int) $assets_total +(int) 30;
                $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();                
                return response([$assets,'assets',$amt_deduct]);
            }
            
            // if($request->type == 'flag'){
            //     $flag = DB::table('gameflows')->where('profit_loss', 'M_A')->orWhere('profit_loss', 'FLAG')->sum('invest_amount');
            //     // dd($flag);
            // return response([$flag,'flag']);
            // }
    }

        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function get_matrix(Request $request){
        try{           
            if(isset($request->card_name ) && $request->card_name != ''){
                $strategy   = Card::where('card_name', '=', $request->card_name )->first(); 
                // dd($strategy)      ;         
                return response($strategy);
            }            
          }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }

    public function add_matrix(Request $request){
        // dd($request->all());
        try{
            $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
            $game_flow = new Gameflow;
            $game_flow->user_id ='SANTOSH';
            $game_flow->card_id = $request->id;
            $game_flow->card_type = 'matrix';//$request->type;
            $game_flow->card_name = $request->card_name;
            $game_flow->matrix_value = $request->total;
            $game_flow->brand_val = $request->total_brand;
            $game_flow->emp_engagement = $request->total_employee;
            $game_flow->col_effi = $request->total_collection;
            $game_flow->user_selected = 1;
            $game_flow->total_coin = $amt_deduct->total_coin;              

            $game_flow->save();

            $matrix = new Matrix;
            
            $matrix->user_id ='SANTOSH';
            $matrix->year ='Year1';
            $matrix->quarter ='Setup_r';
            $matrix->flow_id = $game_flow->id;
            $matrix->c_sat = $request->total;
            $matrix->brand_equity = $request->total_brand;
            $matrix->employee = $request->total_employee;
            $matrix->col_efficient = $request->total_collection;
            $matrix->save();

            $response = ["message" => "Matrix Added successfully",'game_flow'=> $game_flow];
            return response($response,"200");
        }
        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    } 

    public function product_launch(Request $request){
        // dd($request->all());
        
        $flag =$request->flaggs;
        $flag_val = json_decode($flag);
        $multi_flags =  (array) $flag_val;
 
        $multi_flag =json_encode($multi_flags);
   
        try{
            // dd($multi_flag);
            $pro_launch = DB::table('gameflows')->where('card_type', 'product_launch')->first();

            if(isset($pro_launch) ){
     
            }
            else{
                if($request->pro_entries['0']['0'] ==  'undefined'  && $request->flag_entries['0']['0'] ==  'undefined'){              
                    $response = ["message" => "Plz Select Product","status"=>"fail"];
                    return response($response);
                }
                elseif($request->pro_entries['0']['0'] !=  ''  && $request->flag_entries['0']['0'] ==  'undefined'){
                    $response = ["message" => "Plz Select Product","status"=>"fail"];
                    return response($response);
                }
                elseif($request->pro_entries['0']['0'] ==  'undefined'   && $request->flag_entries['0']['0'] !=  ''){
                    $response = ["message" => "Plz Select Product","status"=>"fail"];
                    return response($response);
                }
                elseif($request->flag_entries && $request->pro_entries){
                    $amt_deduct   = DB::table('gameflows')->orderBy('id', 'desc')->first();
                    $total_balance = $amt_deduct->total_coin - $request->pro_total_val;     

                    for( $num = 0; $num <= 3; $num++) {
                    
                        $game_flow = new Gameflow;                        
                        $game_flow->user_id ='SANTOSH';
                        if($num == 0){
                            $game_flow->card_type = 'product_launch';
                            $game_flow->profit_loss = "ASSETS";
                        }else{
                            $game_flow->card_type = 'product_launch_'.$num+1;
                            $game_flow->profit_loss = "ASSETS_".$num+1;
                        }
                        $game_flow->multi_flag =$multi_flag;
                        $game_flow->total_coin = $total_balance;
                        $game_flow->invest_amount =  $request->pro_total_val;
                        $game_flow->user_selected = 1;
                        $game_flow->save();
                        
                        $pro_launch = new productLaunch;
                        $pro_launch->user_id ='SANTOSH';
                        $pro_launch->year ='Year1';
                        $pro_launch->quarter ='q'.(int)$num +1;
                        $pro_launch->flow_id = $game_flow->id;
                        $pro_launch->store = $multi_flags['key5']['0'];
                        $pro_launch->agent = $multi_flags['key5']['1'];
                        $pro_launch->online = $multi_flags['key5']['2'];
                        $pro_launch->save();

                    }
                    $assets_total = DB::table('gameflows')->where('profit_loss', 'ASSETS')->sum('invest_amount');
                    $assets = (int) $assets_total +(int) 30;

                    $decode = json_decode($game_flow->multi_flag);
                    $response = ["message" => "Product Added successfully",'game_flow'=> $game_flow,'decode'=> $decode,'assets'=>$assets];
                    return response($response,"200");
                }
            }
        }

        catch(Exception $e){
            return response('insert')->with('failed',"operation failed");
        }
    }
    

}
