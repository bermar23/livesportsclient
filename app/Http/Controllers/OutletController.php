<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = array();
		$outlet = new Outlet;
		$data['outlets'] = $outlet->all();
		return view('outlet.outlet')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data['page_title'] = 'Outlet';

		return view('outlet.create')->with($data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data['page_title'] = 'Outlet';

		$outlet = new Outlet;

		$outlet->id = $request->id;
		$outlet->code = $request->code;
		$outlet->name = $request->name;
		$outlet->description = $request->description;		
		$outlet->created_by = $request->session()->get('user_id');

		$outlet->save();

		return view('outlet.show')->with($data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$data['page_title'] = 'Outlet';
		
		$data['outlet'] = Outlet::where('id', '=', $id)->firstOrFail();;

		return view('outlet.show')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data['page_title'] = 'Outlet';
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_page($id)
	{
		$data['page_title'] = 'Create Page for Outlet: ' . $id;

		return view('outlet.page.create')->with($data);
	}
}
