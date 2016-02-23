<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$today = date('Y-m-d');
		$code = Session::get('auth')[0]->codigo;
		$exists = DB::select('SELECT * FROM his WHERE usuario="'.$code.'" AND fecha = "'.$today.'" LIMIT 1');
		if(count($exists) == 0){
			$activities = DB::select("select *, count(usuario) as cantidadasig, ( select nombre from cli where cli.id = det.cliente limit 1 ) as nombrecli from det where usuario = '".$code."'  and realizado = 0 group by cliente");
			return View::make('activities')->with(compact('activities'));
		}
		return View::make('home');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function update()
	{
        $data = Input::get('data');
        $code = Session::get('auth')[0]->codigo;
        for ($i =0;$i<count($data);$i++) {
            $his = new Historial();
            $his->usuario = $code;
            $his->fecha = date('Y-m-d');
            $his->horas = $data[$i]['horas'];
            $his->cliente = $data[$i]['cliente'];
            if(!$his->save()){
                return Response::make('',500);
            }
            return 200;
        }
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}



	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}