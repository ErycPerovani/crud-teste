<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Models\ClienteModel;

class ClienteController extends Controller
{
    private $objUser;
    private $objCliente;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objCliente=new ClienteModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=$this->objCliente->all();
        return view("index", compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view("create", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cadastro = $this->objCliente->create([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'id_user'=>$request->id_user
        ]);
        if ($cadastro) {
            return redirect('cliente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=$this->objCliente->find($id);
        return view("show", compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=$this->objCliente->find($id);
        $users=$this->objUser->all();

        return view('create', compact('cliente', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $this->objCliente->where(['id'=>$id])->update([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'id_user'=>$request->id_user
        ]);

        return redirect('cliente');
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
