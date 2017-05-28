<?php

namespace App\Http\Controllers;
use App\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => ['index','show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tools = Tool::all();
        return view("tools.tools", [
          "tools" => $tools
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tools.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tool = new Tool;
        $tool->name = $request->get('name');
        $tool->description = $request->get('description');
        $tool->image = $request->get('image');

        if ($tool->name == NULL
        or $tool->description == NULL
        or $tool->image == NULL) {
         return redirect()->back();
        }
        else {
          $tool->save();
        return view("tools.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tool = Tool::find($id);
        $tool->projects = $tool->projects;
        return view("tools.show", [
          "tool" => $tool
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
        $tool = Tool::find(id);
        return view("tools.edit", [
          "tool" => $tool
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
      $tool = Tool::find($id);
      $tool->title = $request->title;
      $tool->description = $request->description;
      $tool->image = $request->image;
      $tool->save();
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
        Tool::destroy($id);
        return view("welcome");
    }
}
