<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Facade;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class AdminDashboardController extends Controller
{
    // public function uploadexcel(Request $request){
    //     dd($request->all());
    // }
    public function fileImportExport()
    {
       return view('file-import');
    }   
    public function uploadexcel(Request $request) 
    {
        // dd($request->all());
        // Excel::import($request->file('file')->store('temp'), function($reader) {

            // Getting all results
            // $results = $reader->get();

            // ->all() is a wrapper for ->get() and will work the same
        
        // });
        // print_r($results);
        // exit();
        // $import = new UsersImport;
        // $exceldata = Excel::import($import, $request->file('file')->store('temp'));
        // $importedData = $import->getImportedData();
      
    
        $file = $request->file('file');
        $file->store('temp');
    
        // Import the Excel data using the UsersImport class
        $import = new UsersImport;
        Excel::import($import, 'temp/' . $file->hashName());
    
        $importedData = $import->getImportedData();
        // dd($importedData);
      

        $mydataexcel = DB::table('users');
        return response(['exceldata'=>$importedData]);
    }
}
