<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view("auth.register");
    }
    public function traitement(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'adresse' => 'required|string|max:255',
                'telephone' => 'required|string|max:15|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'photo' => 'nullable|image|mimes:gif,png,webp,jpg,jpeg|max:2048'
            ]);
            
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->telephone = $request->telephone;
            $user->adresse = $request->adresse;
            $user->password = Hash::make($request->password);

            // if ($request->hasFile('photo')) {
            //     $image = $request->file('photo');
            //     $filename = time() . '.' . $image->getClientOriginalExtension();
            //     $image->move(public_path("assets/uploads"), $filename);
            //     $user->photo = $filename;
            // }

            $user->role_id = 1;


            $user->save();
            Alert::toast('Inscription réussie', 'success');
            return redirect()->route('tologin')->with('success', 'Inscription');
        } catch (Exception $e) {
            Alert::error("",'Erreur' . $e->getMessage());
            return redirect()->back()->with('error', 'Erreur' . $e->getMessage())->withInput();
        }
    }
    public function addimage(){
        return view("auth.supplement.addimage");
    }
    public function addtraiter(Request $request , $id){
        $user=User::find($id);
        $validator = Validator::make($request->all(),[
            'photo' => 'required|image|mimes:gif,png,webp,jpg,jpeg|max:2048'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('photo')) {
            /**
             * $image=request->photo;
             */
            $image = $request->file('photo'); 
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("assets/uploads"), $filename); 
            $user->photo = $filename;

            /**
             * $update->photo=$filename;
             * $update->save();
             */
        }
        $user->save();
        
        return redirect()->route("home")->with('success', 'Image ajoutée');
    }
    public function tocreatecompany(){
        return view ('auth.addcompany');
    }
    public function createcompany(Request $request , $id){
        // try {
            $validator = Validator::make($request->all(), [
                'company_name' => 'required|string|max:255',
                'company_email' => 'required|string|email|max:255|unique:users',
                'company_siege' => 'required|string|max:255|unique:users',
                'company_telephone' => 'required|string|max:15',
                'regle' => 'required',
                'company_logo' => 'nullable|image|mimes:gif,png,webp,jpg,jpeg|max:2048'
            ]);
            
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $user = User::find($id);
            $user->company_name = $request->company_name;
            $user->company_email = $request->company_email;
            $user->company_telephone = $request->company_telephone;
            $user->company_siege = $request->company_siege;

            if ($request->hasFile('company_logo')) {
                $image = $request->file('company_logo');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("assets/uploads"), $filename);
                $user->company_logo = $filename;
            }

            $user->role_id = 2;
            $user->update();
            Alert::success('', 'Inscription réussie');
            return redirect()->route('home')->with('success', 'Inscription');
        // } catch (Exception $e) {
        //     return redirect()->back()->with('error', 'Erreur' . $e->getMessage())->withInput();
        // }
    }
}
