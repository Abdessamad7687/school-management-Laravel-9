<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contact;
use App\Models\admin;
use Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("inscription");
    }

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = admin::where('email', '=', $request->email)->first();
        if($user) {
            if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId', $user->id);
              return redirect('/admin');
            } 
        }
    }


    public function admin()
    {
        $inscriptions = Client::orderBy('created_at', 'desc')->paginate(5);
        $Contacts = Contact::orderBy('created_at', 'desc')->paginate(5);
        return view('admin', compact('inscriptions', 'Contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => '',
            'telephone' => '',
            'message' => '',
            'email' => 'required|unique:inscription|email'
        ]);
        Client::create($data);
        return back()->with('message', 'Demande envoyée');
    }

    public function Contacter()
    {
        return view('Contacter');
    }


    public function contact(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'Message' => 'required',
            'email' => 'required|unique:contacter|email'
        ]);
        Contact::create($data);
        return back()->with('message', 'Merci de nous avoir contacter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
