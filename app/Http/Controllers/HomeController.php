<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramEvaluation;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application evaluation button.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getEvaluation()
    {
        return view('get_evaluation_form');
    }

    /**
     * Show the application evaluation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getEvaluationForm()
    {
        return view('get_submit_evaluation_form');
    }

    /**
     * Save the application evaluation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveEvaluationForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'university' => 'required',
            'course_name' => 'required',
            'city' => 'required',
            'program_degree_pursuing' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $verified_pro_member = 'no';
        if($request->verified_pro_member == 'yes')
            $verified_pro_member = $request->verified_pro_member;

        $followed_up_for_employment = 'no';
        if($request->followed_up_for_employment == 'yes')
            $followed_up_for_employment = $request->followed_up_for_employment;

        $programEvaluation = new ProgramEvaluation();
        $programEvaluation->name = $request->name;
        $programEvaluation->email = $request->email;
        $programEvaluation->university = $request->university;
        $programEvaluation->course_name = $request->course_name;
        $programEvaluation->course_number = $request->course_number;
        $programEvaluation->program_degree_pursuing = $request->program_degree_pursuing;
        $programEvaluation->program_course_description = $request->program_course_description;
        $programEvaluation->verified_pro_member = $verified_pro_member;
        $programEvaluation->city_state_country = $request->city;
        $programEvaluation->program_course_long_description = $request->program_course_long_description;
        $programEvaluation->hows_instructors = $request->hows_instructors;
        $programEvaluation->comments = $request->comments;
        $programEvaluation->followed_up_for_employment = $followed_up_for_employment;
        $programEvaluation->save();

        // $request->session()->flash('success', 'Hooray! Your program evaluation submited successfully..!');

        return redirect()->route('evaluation')->withSuccess('Hooray!!! Your program evaluation submited successfully.');
    }

    /**
     * Show the application evaluation search.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function searchEvaluationForm(Request $request)
    {
        $result = [];
        if(isset($request->city) || isset($request->university) || isset($request->program_degree)){
            $programEvaluation = (new ProgramEvaluation)->newQuery();
            // $programEvaluation->where(1);

            if(isset($request->university)){
                $programEvaluation->where('university', $request->input('university'));
            } 
            if(isset($request->city)){
                $programEvaluation->where('city_state_country', $request->input('city'));
            } 
            if(isset($request->program_degree)){
                $programEvaluation->where('program_degree_pursuing', $request->input('program_degree'));
            }

            // Get the results and return them.
            $result = $programEvaluation->paginate(10);
            // dd($result);
        }

        return view('get_search_evaluation_form', compact('result'));
    }
}
