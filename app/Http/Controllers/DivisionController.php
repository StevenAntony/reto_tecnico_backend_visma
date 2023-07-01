<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\SubDivision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Validator\Message;

class DivisionController extends Controller
{
    private $response = [
        'data' => [],
        'success' => true,
        'message' => '',
        'error' => [
            'code' => '--',
            'message' => []
        ]
    ];

    public function notFoundDivision() {
        $this->response['success'] = false;
        $this->response['message'] = 'División no encontrado';
        $this->response['error']['code'] = '404';
        $this->response['error']['message'] = 'División no encontrado';
    }

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
                        ->leftjoin('subdivision as sd','division.di_id','sd.di_id')
                        ->leftjoin('division_superior as ds','division.ds_id','ds.ds_id')
                        ->where('division.di_estado','=',1)
                        ->groupBy('division.di_id')
                        ->get();

        $this->response['data'] = $division;
        $this->response['message'] = 'Registros encontrados';
        return response()->json($this->response, 200);
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
        $validator = Validator::make($request->all(),[
            'itemNombre' => 'required|string|unique:division,di_nombre|max:45',
            'itemDivisionSuperior' => 'nullable|numeric',
            'itemEmbajador' => 'required|string',
            'itemSubDivision'=> 'nullable|array'
        ], Message::createDivision());

        if ($validator->fails()) {
            $this->response['success'] = false;
            $this->response['message'] = 'Verificar Datos Correctamente';
            $this->response['error']['code'] = '400';
            $this->response['error']['message'] =   $validator->errors();
            return response()->json($this->response, 200);
        }

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

        $this->response['data'] = $division;
        $this->response['message'] = 'División registrado correctamente';
        return response()->json($this->response, 200);
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
        if(empty($division)){
            $this->notFoundDivision();
            return response()->json($this->response, 200);
        }

        $this->response['data'] = $division;
        $this->response['message'] = 'División encontrada';

        return response()->json($this->response, 200);
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

        $this->response['success'] = false;
        if(empty($division)){
            $this->notFoundDivision();
            return response()->json($this->response, 200);
        }

        $roleItemNombre = $division->di_nombre == $request->input('itemNombre') ? 'required|string|max:45' : 'required|string|unique:division,di_nombre|max:45';

        $validator = Validator::make($request->all(),[
            'itemNombre' => $roleItemNombre,
            'itemDivisionSuperior' => 'nullable|numeric',
            'itemEmbajador' => 'required|string'
        ], Message::editarDivision());

        if ($validator->fails()) {
            $this->response['message'] = 'Verificar Datos Correctamente';
            $this->response['error']['code'] = '400';
            $this->response['error']['message'] =   $validator->errors();
            return response()->json($this->response, 200);
        }

        $division->di_nombre = $request->itemNombre;
        $division->ds_id = empty($request->itemDivisionSuperior) ? null : $request->itemDivisionSuperior;
        $division->di_embajador = empty($request->itemEmbajador) ? '--' : $request->itemEmbajador;
        $division->save();

        $this->response['success'] = true;
        $this->response['data'] = $division;
        $this->response['message'] = 'División actualizado correctamente';

        return response()->json($this->response, 200);
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

        if(empty($division)){
            $this->notFoundDivision();
            return response()->json($this->response, 200);
        }
        $division->di_estado = 0;
        $division->save();

        $this->response['data'] = [];
        $this->response['message'] = 'División Eliminada';

        return response()->json($this->response, 200);
    }

    /**
     *
     * Listar las subdivisiones de una division
     */

    public function listarSubdivision($id) {
        $division = Division::find($id);

        if(empty($division)){
            $this->notFoundDivision();
            return response()->json($this->response, 200);
        }

        $subdivision = $division->subDivisiones()->get();

        $this->response['data'] = $subdivision;
        $this->response['message'] = 'Listado de subDivisiones encontrados';
        return response()->json($this->response, 200);
    }
}
