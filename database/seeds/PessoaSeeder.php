<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Pessoa;
use App\Models\Contato;
use App\Models\Endereco;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      try {
      DB::transaction(function () {
      });
      $pessoas = factory( Pessoa::class ,  50)->make()->toArray();
      foreach ($pessoas as $pessoa){
      $pessoa = Pessoa::create($pessoa);

       $pessoa->contato()->create([
      'telefone' => 199944745,
      'email' => Str::random(10).'@gmail.com',
          ]);

      $endereco = factory(Endereco::class)->make();
      $pessoa->endereco()->create($endereco->toArray());
        }
      DB::commit();
        } catch (Exception $e){
      DB::rollBack();
      }
    }
}
