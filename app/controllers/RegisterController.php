<?php

class RegisterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function Home(){
		return View::make('home.index')
			->with('title','Home Page');
	}

	public function index()
	{
		$registers =register::all();
		return View::make('register.index')
			->with('registers',$registers)
			->with('title','User Account');
		//return View::make('register.index',compact('registers'));
		

	}

	public function get_new(){
		return View::make('register.new')
			->with('title','Register Page');
	}

	public function get_edit($id){
		return View::make('register.edit')
			->with('title','Edit User Profile Page')
			->with('list',register::find($id));

	}

	public function putEdit(){
		$id = Input::get('id');
		$validation = register::validate(Input::all());

		if($validation->fails()){
			return Redirect::route('register_edit',$id)
			->withErrors($validation);
		}
		else{
			$register_id=register::find($id);
			$register_id->username=Input::get('name');
			$register_id->email=Input::get('email');
			$register_id->description=Input::get('description');
			$register_id->save();

			return Redirect::route('user_account')
			->with('message','Update Successfully');
		}

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$validation=register::validate(Input::all());

		if($validation->fails()){
			return Redirect::to('register')
			->withErrors($validation)
			->withInput();
		}else{
				register::create(array(
				'username'=>Input::get('name'),
				'email'=>Input::get('email'),
				'description'=>Input::get('description')
	

		));
			return Redirect::to('/') //Use to to redirect the home pages when register successfully
			->with('message','The member was register successfully!');
			}
	}

	public function delete_user(){
		register::find(Input::get('id'))->delete();
		return Redirect::route('user_account')
		->with('message','Delete Successfully');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$list = register::findOrFail($id);
		return View::make('register.show')
			->withList($list)
			->with('title','User Profile Page');
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
