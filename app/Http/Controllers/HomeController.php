<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
      // $users = DB::table('user')                                              
      //     ->join('department', 'department.id', '=','user.fk_department') 
      //      ->join('designation', 'designation.id', '=','user.fk_designation') 
      //     //->where('categoryid',19)                                                
      //     ->get();


// $users =User::select('users.*')
//     ->join('department', 'department.id', '=','users.fk_department') 
//            ->join('designation', 'designation.id', '=','users.fk_designation') 
// ->get();

 // $users = User::select('users.*')                                              
 //           ->join('department', 'department.id', '=','users.fk_department') 
 //           ->join('designation', 'designation.id', '=','users.fk_designation') 
 //          //->where('categoryid',19)                                                
 //          ->get();

 // $users =User::from('users as items_alias')
 //    ->join('department as att', DB::raw( 'att.id' ), '=', DB::raw('items_alias.fk_department') )
 //    ->select( DB::raw( 'items_alias.*' ) )
 //    ->get();
$users = DB::table('users AS pr')
        ->leftJoin('department AS pf', 'pf.id', '=', 'pr.fk_department')
         ->leftJoin('designation AS desig', 'desig.id', '=', 'pr.fk_designation')
        ->select('pr.id as id','pr.name as username' ,'pf.name as departmentname', 'pf.id as departmentid','desig.name as designationname', 'desig.id as designationid')
       // ->orderBy('pr.id', 'desc')
        ->get();

        return view('index', compact('users'));
    }
}