<?php

namespace App\Http\Controllers;

use App\Services\EstudanteService;

use App\Http\Requests\EstudanteStoreRequest;
use App\Http\Requests\EstudanteUpdateRequest;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    //
    private $estudanteService;

    public function __construct(EstudanteService $estudanteService)
    {
        $this -> estudanteService = $estudanteService;
    }

    public function index()
    {
        $infoForView = $this -> estudanteService -> getInfoForIndexView();

        return view('estudante.index', $infoForView);
    }

    public function create()
    {
        $infoForView = $this -> estudanteService -> getInfoForCreateView();

        return view('estudante.create', $infoForView);
    }

    public function store(EstudanteStoreRequest $estudanteStoreRequest)
    {
        $response = $this -> estudanteService -> store($estudanteStoreRequest -> all());
        if($response){
            return back() -> with('success', 'feito com sucesso');
        }
        return back()->with('error', 'falha ao salvar');
    }

    public function show(string $id)
    {
        $infoForView = $this -> estudanteService -> getInfoForShowView($id);

        return view('estudante.show', $infoForView);
    }

    public function edit(string $id)
    {
        $infoForView = $this->estudanteService->getInfoForShowView($id);
        

        return view('estudante.edit', $infoForView);
    }

    public function update(EstudanteUpdateRequest $estudanteUpdateRequest, string $id)
    {
        $response = $this -> estudanteService -> update($estudanteUpdateRequest -> all(), $id);
        if($response){
            return back()->with('success', 'feito com sucesso');
        }
        return back()->with('error', 'nao foi possivel');
    }

    public function destroy(string $id)
    {
        $reponse = $this -> estudanteService -> destroy($id);
        if($reponse){
            return back() -> with('success', 'feito com sucesso');
        }
        return back()->with('error', 'nao foi possivel');
    }
}
