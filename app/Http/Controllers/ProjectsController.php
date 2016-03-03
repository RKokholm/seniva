<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cloudinary;
use Cloudinary\Uploader;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cloudinary::config(array( 
          "cloud_name" => "seniva", 
          "api_key" => "572854663344648", 
          "api_secret" => "8YqjessAxqDJeOtU4SUYUPedRV8" 
        ));
     
        $file = $request->file('image_file')->getRealPath();

        $image = Uploader::upload($file);

        $project = Project::create($request->only('title', 'description'));
        $project->images()->create(['public_id' => $image['public_id']]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        $project = Project::find($project);
        return view('admin_edit_project', ['project' => $project]);
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
    public function destroy($project)
    {
        Cloudinary::config(array( 
          "cloud_name" => "seniva", 
          "api_key" => "572854663344648", 
          "api_secret" => "8YqjessAxqDJeOtU4SUYUPedRV8" 
        ));
        
        $project = Project::find($project);
        foreach ($project->images as $image)
        {

            Cloudinary\Uploader::destroy($image->public_id);
            $image->delete();
            
        }

        $project->delete();
        return redirect()->back();

        

        
    }
}
