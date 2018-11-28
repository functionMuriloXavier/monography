<?php

namespace App\Http\Controllers;

use App\Monografia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = [
            'monografias' => Monografia::all(),
        ];

        return view('monografias.welcome', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fileName = self::store($request);

        $monografia             = new \App\Monografia;
        $monografia->nome       = $request->get('nome');
        $monografia->categoria  = $request->get('categoria');
        $monografia->descricao  = $request->get('descricao');
        $monografia->url        = $fileName;
        $monografia->user_id    = Auth::id();
        $monografia->save();

        return redirect('monografias')
            ->with('success', 'Upload efetuado com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit','1024M');
        // Define o valor default para a variável que contém o nome da imagem 
        $nameFile = null;
    
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('url') && $request->file('url')->isValid()) {
            
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
    
            // Recupera a extensão do arquivo
            $extension = $request->url->extension();
    
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
    
            // Faz o upload:
            $upload = $request->url->storeAs('monografias', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/monografias/nomedinamicoarquivo.extensao
    
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload!')
                            ->withInput();
            return $upload;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monografia $monografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $monografia = Monografia::find($id);

        if(Auth::id() == $monografia->user_id){
            Monografia::find($id)->delete();
            return redirect('monografias')
                ->with('success', 'Operação efetuada com sucesso!');         
        }else{
            return redirect('monografias')
                ->with('error', 'Operação não permitida.');
        }
    }
}
