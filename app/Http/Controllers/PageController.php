<?php

namespace App\Http\Controllers;

use App\Client;
use App\History;
use App\User;
use Image;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use DeepCopy\TypeFilter\Date;

class PageController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('salesware');


    }


    public function profile()
    {
        $user = Auth::user();
        return view('salesUI.profile')->with('user', $user);
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('salesUI.profileEdit')->with('user', $user);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $temp = User::find($user['id']);
//        $temp['name']=$data['name'];
//        $temp['email']=$data['email'];
//        $temp['phone']=$data['phone'];
//        $temp['address']=$data['address'];
        if($request->hasFile('avatar'))
        {

            $avatar=$request->file('avatar');
            $filename= time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('images/'.$filename));
            $temp['image']=$filename;
        }

        $temp['name'] = $request->get('name');
        $temp['email'] = $request->get('email');
        $temp['phone'] = $request->get('phone');
        $temp['address'] = $request->get('address');



        $temp->save();


        return redirect('/profile');

    }


    public function history()
    {
//        $history=History::all();

        $userID = Auth::id();
        $history = History::
        leftJoin('clients', 'histories.Client ID', '=', 'clients.id')
            ->select('histories.*', 'clients.Company_Name', 'clients.Address')
            ->where('histories.Agent ID', $userID)
            ->get();
        return view('salesUI.history')->with('history', $history);
    }




    public function createEntry()
    {
        return view('salesUI.createEntry');
    }

    public function submitEntry(Request $request)
    {

        $user = Auth::id();


        $temp = new Client();
        $temp['Company_Name'] = $request->get('name');
        $temp['Address'] = $request->get('address');
        $temp['Remarks'] = $request->get('remarks');
        $temp['Status'] = $request->get('inlineRadioOptions');
        $temp['Requirement'] = $request->get('requirement');
        $temp['Next_Event'] = $request->get('nextEvent');
        $temp['Event_Info'] = $request->get('eventInfo');
        $temp['Contact_Person'] = $request->get('contactPerson');
        $temp['Contact_Number'] = $request->get('contactNo');
        $temp['Agent_ID'] = $user;


        $temp->save();

        $yo = Client::all()->where('Agent ID', $user)->last();


        $history = new History();
        $history['Agent ID'] = $user;
        $history['Client ID'] = $yo['id'];

        $history['Status'] = $temp['Status'];
        $history['Remarks'] = $temp['Remarks'];

        $history->save();


        return redirect('/create')->with('success', 'Data Stored Successfully');


//        Debug Line
//        return redirect('/create')->with('success',$yo['id']);

    }




    public function updateEntry($id)
    {
//        return session('key');

        //return $request->get('id');


        $client = Client::find($id);

        return view('salesUI.updateEntry')->with('client', $client);


        //return $id;
    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:150|unique:users',
//            'password' => 'required|string|confirmed',
//            'designation' => 'required|string|max:255',
//        ]);
//    }

    public function updateEntrySubmit(Request $request, $id)
    {






        $user = Auth::id();


        $temp = Client::find($id);
//        $temp['Company Name'] = $request->get('name');
//        $temp['Address'] = $request->get('address');
        $temp['Remarks'] = $request->get('remarks');
        $temp['Status'] = $request->get('inlineRadioOptions');
        $temp['Requirement'] = $request->get('requirement');


        $temp['Next_Event']=date('Y-m-d',strtotime($request->get('nextEvent')));

        //$temp['Next event'] = Carbon::createFromFormat('m/d/Y', $request->get('nextEvent'))->format('Y-m-d');
        //$temp['Next event'] = $request->get('nextEvent');
        //$temp['Next event']  = Carbon::createFromFormat('Y-m-d', $request->input('delivery_date'));
        // replace the point from the european date format with a dash
        //$date = str_replace('.', '-', $request->input('delivery_date'));
// create the mysql date format
        //$carbon->createFromFormat('d-m-Y', $date)->toDateString();
        $temp['Event_Info'] = $request->get('eventInfo');
        $temp['Contact_Person'] = $request->get('contactPerson');
        $temp['Contact_Number'] = $request->get('contactNo');
        $temp['Agent_ID'] = $user;

        $temp->save();





        $history = new History();
        $history['Agent ID'] = $user;
        $history['Client ID'] = $id;

        $history['Status'] = $temp['Status'];
        $history['Remarks'] = $temp['Remarks'];

        $history->save();
        return redirect('/home')->with('success', 'Data Stored Successfully');


    }


}
