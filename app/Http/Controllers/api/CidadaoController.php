<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Endereco;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePessoaRequest;

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
             ->paginate(5);
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
        return  response()->json($pessoa);

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
     //  return  response()->json($pessoa);
     // return $pessoa;
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
     //   ->toSql();
    //     dd($pessoa);
       return $pessoa;
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
        if(!$pessoa = Pessoa::find($id))
        return response()->json("não ha esta pessoa");
        $pessoa->update($request->all());
        return response()->json($pessoa );
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
    }
}
