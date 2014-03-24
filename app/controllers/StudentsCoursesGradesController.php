<?php

class StudentsCoursesGradesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @param  int  $student_id
	 * @param  int  $course_id
	 * @return Response
	 */
	public function index($student_id = NULL, $course_id = NULL)
	{
		// Log DB interaction
		Log::info('DB: Get all grades for student ' . $student_id . ' in course ' . $course_id);

		$grades = array(
			0 => array(
				'id' => 1,
				'exam_id' => 2,
				'score'   => 92
			),
			1 => array(
				'id' => 2,
				'exam_id' => 12,
				'score'   => 72
			)
		);

		// Calucated average  = $this->getAverage($grades);
		$average = array(
			0 => array(
				'score' => 82,
				'type'  => 'final' // type = enum(current, final)
			)
		);

		// Return
		return Response::json(array(
			'error'   => false,
			'grades'  => $grades,
			'average' => $average),
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
	public function store($student_id = NULL, $course_id = NULL)
	{
		// Log db action
		Log::info('get student_course_grade object');
		
		// Get updates from request
		$score = Input::get('score');

		// Save
		Log::info('studentCourseGrade object: Save');

		// Fake return data
		$student_course_grade = array(
			'id' => 3,
			'student_id' => $student_id,
			'course_id'  => $course_id,
			'score'      => $score

		);

		// Return
		return Response::json(array(
			'error' => false,
			'data'  => $student_course_grade),
			200
		);
	}

	/**
	 * Display the specified resource.
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
	public function update($student_id = NULL, $course_id = NULL)
	{
		// Log db action
		Log::info('get student_course_grade object');

		// Get updates from request
		$score = Input::get('score');

		// Save
		Log::info('studentCourseGrade object: Save');

		// Fake return data
		$student_course_grade = array(
			'id' => 1,
			'student_id' => $student_id,
			'course_id'  => $course_id,
			'score'      => $score

		);

		// Return
		return Response::json(array(
			'error' => false,
			'data'  => $student_course_grade),
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