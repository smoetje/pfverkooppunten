<?php

namespace Smoetje\Pfverkooppunten;

//use Smoetje\Pfverkooppunten\VerkooppuntenModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerkooppuntenController extends Controller
{
    private $verkooppuntenModel;

    public function __construct(VerkooppuntenModel $verkooppuntenModel){
        $this->verkooppuntenModel = $verkooppuntenModel;
    }

    public function overview()
    {
        return view('pages.admin.website.verkooppunten');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->verkooppuntenModel->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verkooppunt = $this->verkooppuntenModel->create($request->all());
        return $verkooppunt;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VerkooppuntenModel  $verkooppuntenModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->verkooppuntenModel->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VerkooppuntenModel  $verkooppuntenModel
     * @return \Illuminate\Http\Response
     */
    public function edit(VerkooppuntenModel $verkooppuntenModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VerkooppuntenModel  $verkooppuntenModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $verkooppunt = $this->verkooppuntenModel->findOrFail($id);
        $verkooppunt->update($request->all());

        return $verkooppunt;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VerkooppuntenModel  $verkooppuntenModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verkooppunt = $this->verkooppuntenModel->findOrFail($id);
        $verkooppunt->delete();
        return '';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VerkooppuntenModel  $verkooppuntenModel
     * @return \Illuminate\Http\Response
     */
    public function updateCoords(Request $request, VerkooppuntenModel $verkooppuntenModel, $id)
    {
        $record = $verkooppuntenModel->find($request->get('id'));
        $record->coord = $request->get('coord');
        $record->update();
        return $record;
    }
}
