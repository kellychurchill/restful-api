<?php

class StudentsCoursesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @param  int  $student_id
	 * @return Response
	 */
	public function index($student_id = NULL)
	{
		// Log DB interaction
		Log::info('DB: Get all courses for student ' . $student_id);

		// Fake return data 
		$courses = array(
			0 => array(
				'id'         => 1,
				'name'       => 'English I',
				'start_date' => '2014-04-05',
				'end_date'   => '2014-04-30',
				'url'        => '/api/v1/courses/1'
			),
			1 => array (
				'id'         => 2,
				'name'       => 'Math I',
				'start_date' => '2014-04-05',
				'end_date'   => '2014-04-30',
				'url'        => '/api/v1/courses/2'						
			)
		);

		// Return
		return Response::json(array(
			'error'   => false,
			'courses' => $courses),
			200
		);
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
	 * Display the specified resource.
	 *
	 * @param  int  $student_id
	 * @param  int  $course_id
	 * @return Response
	 */
	public function show($student_id = NULL, $course_id = NULL)
	{
		//

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