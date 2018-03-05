<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;
use App\History;
use App\User;
use Image;

class BDxPageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bdware');


    }

    public function clientInfo()
    {
        return view('BDExecutive.BDPages.clientInfo');
    }

    public function clientUpdate() {
        return view('BDExecutive.BDPages.clientUpdate');
    }




    public function clients()
    {
        $clients= Client::all();


        return view('BDExecutive.BDPages.clients')->with('clients', $clients);


    }


    public function updateClient(Request $request)    {


        $clientById = Client::find($request->client_id);
        $user=Auth::id();
        //return "ss";

        //        $temp['name']=$data['name'];
//        $temp['email']=$data['email'];
//        $temp['phone']=$data['phone'];
//        $temp['address']=$data['address'];

        $clientById['Contact_Person'] = $request->get('Contact_Person');
        $clientById['Company_Name']=$request->get('Company_Name');

        $clientById['Address']=$request->get('Address');

        /****/
        $clientById['Agent_ID']=$user;


        $clientById['Contact_Number']=$request->get('Contact_Number');
        $clientById['Status']=$request->get('Status');
        $clientById['Event_Info']=$request->get('Event_Info');
        $clientById['Requirement']=$request->get('Requirement');
        $clientById['Next_Event']=$request->get('Next_Event');
        $clientById['Deadline']=$request->get('Deadline');
        $clientById['Remarks']=$request->get('Remarks');



        $clientById->save();



        $yo = Client::all()->where('Agent_ID', $user)->last();


        $history = new History();
        $history['Agent ID'] = $user;
        $history['Client ID'] = $yo['id'];

        $history['Status'] = $clientById['Status'];
        $history['Remarks'] = $clientById['Remarks'];

        $history->save();






        return redirect('/clients');

    }

    public function clientProfile ($id) {
        $clientById = Client::find($id);
        //return "ss";

        return view('BDExecutive.BDPages.clientProfile', compact("clientById"));
    }


    public  function submitClientInfo(Request $request)
    {

        // $user = Auth::user()->id;
        $user=Auth::id();


        $temp= new Client();
        $temp['Contact_Person'] = $request->get('name');
        $temp['Company_Name'] = $request->get('CompanyName');
        $temp['Address']=$request->get('Address');
        //$temp['Location']=$request->get('Location');
        $temp['Remarks']=$request->get('Remarks');
        $temp['Status']=$request->get('Status');
        $temp['Requirement']=$request->get('Requirement');
        $temp['Next_Event']=$request->get('NextEvent');
        $temp['Event_Info']=$request->get('EventInfo');
        $temp['Deadline']=$request->get('Deadline');
        $temp['Contact_Number']=$request->get('Phone');
        $temp['Agent_ID']=$user;

//        $data= array('firstname'=>$name, 'address'=>$address, 'contactNo'=>$contactNo)
//
//            DB::table('Clients')->insert($data);
//
//

        $temp->save();

        //  $yo=Client::all()->where('Agent ID',$user)->last();




        return redirect('/clientUpdate')->with('success','Data Stored Successfully');


//        Debug Line
//        return redirect('/create')->with('success',$yo['id']);

    }





    public function editClientProfile($id)
    {
        // $clients= Client::all();
        //$clients=Client::get()->last();

        $editClient = Client::find($id);

        //return view('BDExecutive.BDPages.editClientProfile')->with('editClient',$editClient);
        return view('BDExecutive.BDPages.editClientProfile', compact("editClient"));

    }
    public function BDMeetingList()
    {
        $clients= Client::where ('Agent_ID',Auth::user()->id)
            ->get();


        return view('BDExecutive.BDPages.BDMeetingList')->with('clients',$clients);

    }

    public function BDEprofile()
    {
        $user = Auth::user();
        return view('BDExecutive.BDPages.BDEProfile')->with('user', $user);
    }
    public function editProfileBDE()
    {
        $user = Auth::user();
        return view('BDExecutive.BDPages.profileEditBDE')->with('user', $user);

    }
    public function updateProfile(Request $request)
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
        $temp['email']=$request->get('email');
        $temp['phone']=$request->get('phone');
        $temp['address']=$request->get('address');


        $temp->save();






        return redirect('/BDEprofile');

    }


    public function bdHistory()
    {
        $userID = Auth::id();
        $history = History::
        leftJoin('clients', 'histories.Client ID', '=', 'clients.id')
            ->select('histories.*', 'clients.Company_Name', 'clients.Address')
            ->where('histories.Agent ID', $userID)
            ->get();
        return 123;
        //return view('salesUI.history')->with('history', $history);
    }



}
