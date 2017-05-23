<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

  public function __construct(){
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view("index", [
          "projects" => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view ("create_project");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $request->image;

        if ($project->title == NULL
        or $project->description == NULL
        or $project->image == NULL) {
         return redirect()->back();
        }

        $project_id = DB::connection->getPdo->lastInsertId();
        $tool = $request->get("tool");

        DB::table('project_tool')->insert(
          [
            "project_id" => $project_id;
            "tool_id" => $tool->id;
          ]);
          $project->save();
          return redirect()->back();


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $tools = Tool::all();
        return view("index", [
          "project" => $project,
          "tools" => $tools
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view ("index", [
          "project" => $project
        ]);
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
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $request->image;
        $project->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return view("welcome");
    }
}
