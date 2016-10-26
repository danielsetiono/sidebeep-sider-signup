<?php
/**
 * Created by PhpStorm.
 * User: danmarcel15
 * Date: 10/25/16
 * Time: 5:20 PM
 */

namespace App\Http\Controllers;


use App\City;
use App\Marketer;
use App\Ref;
use App\Sider;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class SiderController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $refs = Ref::all();
        $marketers = Marketer::all();

        return view('sider-registration', compact(['cities','refs','marketers']));
    }
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'phone' => 'required',
            'nik' => 'required|numeric',
            'skill' => 'required',
            'tag' => 'required',
            'role' => 'required',
            'userImg' => 'required|image',
            'ktpImg' => 'required|image',
            'ref' => 'required',
            'agree' => 'required',
        ]);
        if($validator->fails())
        {
//            dd($validator->errors());
            return redirect('sider-registration')->withInput($request->all())->withErrors($validator);
        }
//        dd($request);
        $sider = new Sider();
        //Input Info
        $sider->firstName = $request->firstName;
        $sider->lastName = $request->lastName;

        $formattedDOB = Carbon::parse($request->dob)->format('Y/m/d');
        $sider->dob = $formattedDOB;

        $sider->gender = $request->gender;
        $sider->email = $request->email;
        $sider->cityID = $request->city;
        $sider->phone = $request->phone;
        $sider->nik = $request->nik;
        $sider->npwp = $request->npwp;
        $sider->skill = $request->skill;
        $sider->tag = $request->tag;
        $sider->role = $request->role;
        $sider->referenceID = $request->ref;
        $sider->university = $request->university;

        //Reference is Sidebeep Marketer
        if($request->ref == 1){
            $sider->marketerID = $request->marketerID;
        }

        //Store Images
        $sider->userImg = $request->userImg->store('img/pas-foto');;
        $sider->ktpImg = $request->ktpImg->store('img/ktp');
        $sider->save();

        return view('success-registration');
    }
}