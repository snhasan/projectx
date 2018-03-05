<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

use App\History;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminware');


    }

    public function AdminProfile()
    {
        return 123;
    }

    /*******************/
    public function AdminClients()
    {
        $clients = Client::all();

        return view('Admin.AdminPages.AdminClients', compact("clients"));
    }

    public function AdminBDxList()
    {
        $users = User::where('type', 'bd')
            ->get();

        return view('Admin.AdminPages.AdminBDEList', compact("users"));
    }

    public function AdminClientProfile($id)
    {
        $clientById = Client::find($id);
        //return "ss";

        return view('Admin.AdminPages.AdminClientProfile', compact("clientById"));
    }

    public function AdminSalesProfile ($id) {
        $SEById = User::find($id);
        //return "ss";

        return view('admin.AdminPages.AdminSEProfile', compact("SEById"));
    }

    public function AdminSalesList() {
        $users= User::where ('type','sales')
            ->get();

        return view('Admin.AdminPages.AdminSEList',compact("users"));
    }


    /**************************/


    public function AdminEditClientProfile($id)
    {
        // $clients= Client::all();
        //$clients=Client::get()->last();

        $AeditClient = Client::find($id);
        //dd($AeditClient);

        $agents=User::where('type','sales')->orWhere('type','bd')->get();

        //return view('BDExecutive.BDPages.editClientProfile')->with('editClient',$editClient);
        return view('admin.AdminPages.AdminEditClientProfile', compact("AeditClient","agents"));

    }


    public function AdminBDEProfile($id)
    {
        // $clients= Client::all();
        //$clients=Client::get()->last();

        $BDEById = User::find($id);

        $Interested = DB::table('clients')

            ->where('Agent_ID', '=', $BDEById['id'])
            ->where('Status', 'Interested')
            ->count();

        // dd($Interested);

        //return view('BDExecutive.BDPages.editClientProfile')->with('editClient',$editClient);
        //dd($BDEById);
        return view('admin.AdminPages.AdminBDEProfile', compact(['BDEById', 'Interested']));

    }


    public function AupdateClient(Request $request)
    {


        $clientById = Client::find($request->client_id);
        //return "ss";

        //        $temp['name']=$data['name'];
//        $temp['email']=$data['email'];
//        $temp['phone']=$data['phone'];
//        $temp['address']=$data['address'];

        $clientById['Status'] = $request->get('Status');
        $clientById['Contact_Person'] = $request->get('Contact_Person');

        $clientById['Agent_ID'] = $request->get('Agent_ID');
        $clientById['Remarks'] = $request->get('Remarks');


        $clientById->save();


        //return view('BDExecutive.BDPages.clientProfile', compact("clientById"));


        return redirect('/AdminClients');

    }


    public function AdminMeetingList()
    {

        $clients = Client::all()    ;
        return view('admin.AdminPages.AdminMeetingList', compact('clients'));

    }

    public function AdminFollowupList()
    {

        $clients = Client::all()->where('status','followup');
        return view('admin.AdminPages.AdminMeetingList', compact('clients'));

    }


}
