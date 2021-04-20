<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\add_admin;
use App\Helpers\ValidatorMsgHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class addController extends Controller
{
    public function adding(){
        return view('add');
    }

    public function save_data(Request $request){

        $this->validate($request,[
            'add_name'=>'required|max:100|min:3',
            'add_status'=>'required',
            'add_email'=>'required|email',
            'add_mobile'=>'required|regex:/^[0-9]{10}+$/|min:10|max:10',
            'add_address'=>'required',
            'add_password'=>'required|max:20|min:6'            
                        
        ]);

        // $member = DB::table('add_admin')
        //     ->where('email','=',$request->add_email)
        //     ->count();
        //     if($member != 0)
        //     {
        //         $validator->getMessageBag()->add('add_email', 'Email already exist!');            
        //     }

        $add = new User;
        $add-> name=$request->add_name;
        $add-> mobile=$request->add_mobile;
        $add-> status=$request->add_status;
        $add-> email=$request->add_email;
        $add-> address=$request->add_address;                
        $add-> password=Hash::make($request->add_password);
        $add->save();

        $add = new add_admin;
        $add-> name=$request->add_name;
        $add-> mobile=$request->add_mobile;
        $add-> status=$request->add_status;
        $add-> email=$request->add_email;
        $add-> address=$request->add_address;                
        $add-> password=Hash::make($request->add_password);
        $add->save();

        return redirect('/viewadmin');
    }

    public static function delete($id){
        $data=add_admin::find($id);
        $data->delete();
        return redirect('/viewadmin');
    }

    public static function viewadmin(){
        $data=add_admin::all();
        return View("viewadmin")->with(array('data'=>$data));
    }

    public static function update($id){

        $data=add_admin::find($id);
        return View("update")->with(array('data'=>$data));
    }

    public static function update_data(Request $request){

        $data=User::find($request->id);
        $data->name=$request->up_name;
        $data->email=$request->up_email;
        $data->Status=$request->up_status;
        $data->mobile=$request->up_mobile;
        $data->address=$request->up_address;
        $data->save();

        $data=add_admin::find($request->id);
        $data->name=$request->up_name;
        $data->email=$request->up_email;
        $data->Status=$request->up_status;
        $data->mobile=$request->up_mobile;
        $data->address=$request->up_address;
        // $data->username=$request->up_username;
        // $data->password=$request->up_password;
        $data->save();
        return redirect('/viewadmin');
    }

    public function commision_rate(){
        return view ('commision_rate');
    }

    // public function admin_list(){
    //     return view ('admin');
    // }


    public function restaurant_list(){
        return view ('restaurant_list');
    }

    public function reseller_commision(){
        return view ('reseller_commision');
    }

    public static function admin_list(){
        $data=add_admin::all();
        return View("admin")->with(array('data'=>$data));
    }

    public function reseller(){
        return view ('reseller');
    }

    public function userlogin(Request $request){

        if (Auth::attempt(['email' => $request->log_email, 'password' => $request->log_pass])) {
            $member = DB::table('add_admin')
            ->where('email','=',$request->log_email)
            ->select('Status')
            ->get();

            if($member[0]->Status=="Admin" ){
                return redirect('/viewadmin');
            }else{
                return redirect('/reseller');
            }

        }else{
            return redirect()->back();
         }



    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }






}
