<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $data = Skill::class;
        $request->validate([
            $data => new \App\Models\Skill
        ]);

        $query = DB::table('skills')->insert([
           'skill'=>$request->input('skill'),
           'svg'=>$request->input('svg'),
        ]);

        if($query){

            return back()->with('success', 'Data have been successfully inserted');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        $skills = DB::select('select * from skills');
        return view('skills', ['skill'=>$skills]);
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
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
