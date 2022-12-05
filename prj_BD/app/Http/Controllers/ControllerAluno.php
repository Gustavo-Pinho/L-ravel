<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\ModelAluno;

class ControllerAluno extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = $this->objAluno->all();

        return view('index', compact('aluno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $cadAluno = $this->objAluno->create([
            'nm_aluno'=>$request->nome_aluno,
            'nm_mae_aluno'=>$request->nome_mae,
            'nm_pai_aluno'=>$request->nome_pai,
        ]);

        if($cadAluno)
        {
            return redirect('/aluno')->with('mensagem', 'Aluno cadastrado com sucesso!');
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
        $aluno = $this->objAluno->find($id);
        return view('show',compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = $this->objAluno->find($id);
        return view('create',compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, $id)
    {
        $UpdateAluno = $this->objAluno->where(['cd_rm_aluno'=>$id])->update([
            'nm_aluno'=>$request->nome_aluno,
            'nm_mae_aluno'=>$request->nome_mae,
            'nm_pai_aluno'=>$request->nome_pai,
        ]);

        if($UpdateAluno)
        {
            return redirect('/aluno')->with('mensagem', 'Aluno atualizado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objAluno->destroy($id);
    }

    private $objAluno;

    public function __construct()
    {
        $this->objAluno = new ModelAluno();
    }

}
