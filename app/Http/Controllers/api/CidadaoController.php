<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Endereco;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;

class CidadaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $pessoas = Pessoa::with([ 'endereco','contato'])
           ->orderBy('nome','asc')
           ->paginate(10);
         return response()->json($pessoas);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePessoaRequest $request)
    {

        DB::beginTransaction();
        $pessoa = Pessoa::create($request->all());
        $pessoa->contato()->create($request->all());
        $pessoa->endereco()->create($request->all());
        DB::Commit();
        $menssagem = 'Cidadão incluido com sucesso!';
        return  response()->json([$menssagem, $pessoa]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pessoa = Pessoa::findOrFail($id);
       return response()->json( $pessoa->with('contato','endereco')->findOrFail($id));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa = Pessoa::findOrFail($id);
        return response()->json( $pessoa->with('contato','endereco')->findOrFail($id));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscaCpf (Request $request)
    {
        $cpf = $request->cpf;
        $pessoa = Pessoa::where('cpf', '=',$cpf )
         ->get();
       return $pessoa;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePessoaRequest $request, $id)
    {
       DB::beginTransaction();
       $pessoa = Pessoa::find($id);
       $pessoa->update($request->all());
       $pessoa->endereco->update($request->all());
       $pessoa->contato->update($request->all());
       DB::Commit();
       $menssagem = 'Cidadão editado com sucesso!';
       return  response()->json([$menssagem, $pessoa]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::FindOrFail($id);
        $pessoa->delete();
        $menssagem = 'Cidadão deletado com sucesso!';
        return  response()->json([$menssagem, $pessoa]);

    }
}
