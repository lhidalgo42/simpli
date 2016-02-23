<?php

class AutocompleteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /autocomplete
	 *
	 * @return Response
	 */
	public function clients()
	{
		$client = Input::get('client');
		$clients = Clients::where('nombre','like',$client.'%')->take(5)->get();
		return $clients;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /autocomplete/create
	 *
	 * @return Response
	 */
	public function users()
	{
		$user = Input::get('user');
		$users = User::where('nombre','like','%'.$user.'%')->take(5)->get();
		return $users;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /autocomplete
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /autocomplete/{id}
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
	 * GET /autocomplete/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /autocomplete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /autocomplete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}