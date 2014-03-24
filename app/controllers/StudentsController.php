<?php

class StudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	* Return the student with the given id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Log DB interaction
		Log::info('DB: Get student with id: ' . $id);

		// Fake return data
		if ($id == '123456') {
			$student = array(
				'full_name'  => 'Bart Simpson',
				'school'     => 'Springfield Elementary School',
				'phone'      => '555-555-5555',
				'email'      => 'bart.simpson@springfield.k12.us',
				'student_id' => '123456',
				'url'        => '/api/v1/students/123456'
			);
		} elseif ($id == '123457') {
			$student = array(
				'full_name'  => 'Lisa Simpson',
				'school'     => 'Springfield Elementary School',
				'phone'      => '512-555-5555',
				'email'      => 'lisa.simpson@springfield.k12.us',
				'student_id' => '123457',
				'url'        => '/api/v1/students/123457'
			);
		}

		// Return
		return Response::json(array(
			'error'   => false,
			'student' => $student),
			200
		);
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
		// Init
		$email = '';
		$phone = '';

		// Log DB interaction
		Log::info('DB: Get student object with given id: ' . $id);

		// Get updates from request - limited to email and phone for illustrative purposes
		$email = Input::get('email');
		$phone = Input::get('phone');

		// Save
		Log::info('Object: Save');

		// Fake return data
		if ($id == '123456') {
			$student = array(
				'full_name'  => 'Bart Simpson',
				'school'     => 'Springfield Elementary School',
				'phone'      => ($phone) ? $phone : '555-555-5555',
				'email'      => ($email) ? $email : 'bart.simpson@springfield.k12.us',
				'student_id' => '123456',
				'url'        => '/api/v1/students/123456'
			);
		} elseif ($id == '123457') {
			$student = array(
				'full_name'  => 'Lisa Simpson',
				'school'     => 'Springfield Elementary School',
				'phone'      => ($phone) ? $phone : '512-555-5555',
				'email'      => ($email) ? $email : 'lisa.simpson@springfield.k12.us',
				'student_id' => '123457',
				'url'        => '/api/v1/students/123457'
			);
		}

		// Return
		return Response::json(array(
			'error'   => false,
			'message' => 'student updated',
			'student' => $student),
			200
		);
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