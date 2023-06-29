<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\SubDivision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division = Division::select(['division.di_nombre','division.di_id','division.di_colaborador','division.di_embajador',
                        'division.di_nivel',DB::raw('IF(ds.ds_id is null,"--",ds.ds_nombre) as ds_nombre'),
                        DB::raw('COUNT(sd.sd_id) as cantidadSubdivision')])
                        ->join('subdivision as sd','division.di_id','sd.di_id')
                        ->leftjoin('division_superior as ds','division.ds_id','ds.ds_id')
                        ->where('division.di_estado','=',1)
                        ->groupBy('division.di_id')
                        ->get();
        return response()->json($division, 200);
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
        $subdivision = [];
        foreach ($request->itemSubDivision as $key => $value) {
            array_push($subdivision,new SubDivision([
                'sd_nombre' => $value
            ]));
        }

        $division =  new Division;
        $division->di_nombre = $request->itemNombre;
        $division->ds_id = empty($request->itemDivisionSuperior) ? null : $request->itemDivisionSuperior;
        $division->di_colaborador = random_int(0,100);
        $division->di_nivel = random_int(0,20);
        $division->di_embajador = empty($request->itemEmbajador) ? '--' : $request->itemEmbajador;
        $division->save();
        $division->subDivisiones()->saveMany($subdivision);

        return response()->json(true, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $division = Division::find($id);
        return response()->json($division, 200);
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
        $division = Division::find($id);
        $division->di_nombre = $request->itemNombre;
        $division->ds_id = empty($request->itemDivisionSuperior) ? null : $request->itemDivisionSuperior;
        $division->di_embajador = empty($request->itemEmbajador) ? '--' : $request->itemEmbajador;
        $division->save();

        return response()->json(true, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        $division->di_estado = 0;
        $division->save();

        return response()->json(true, 200);
    }

    /**
     *
     * Listar las subdivisiones de una division
     */

    public function listarSubdivision($id) {
        $division = Division::find($id);
        $subdivision = $division->subDivisiones()->get();

        return response()->json($subdivision, 200);
    }
}
