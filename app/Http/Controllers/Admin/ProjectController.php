<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Project;
use App\Services\ProjectsService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $projects = Project::paginate(10);
       return view('admin.projects.index',compact('projects')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();

            $request->validate([
                'title_ar'=>'required',
                'title_en'=>'required',
                'description_ar'=>'required',
                'description_en'=>'required',
                'location_ar'=>'required',
                'location_en'=>'required',
                // 'prochure'=>'required',
                'gps'=>'required',
                'images'=>'required'
               ]);
        
               $project = Project::create([
                'title'=> ['ar'=>$request->title_ar ,'en'=>$request->title_en] ,
                'description'=>['ar'=>$request->description_ar ,'en'=>$request->description_en],
                'location'=>['ar'=>$request->location_ar ,'en'=>$request->location_en],
                'gps'=>$request->gps 
               ]);
               $images = $request->images ;
               $prochure = $request->prochure ;
        
               foreach($images as $image){
                $image->storeAs($project->getTranslation('title', 'en'),$image->getClientOriginalName(),'images');
                Image::create([
                    'image'=>$image->getClientOriginalName(),
                    'imageable_type'=>'App\Models\Project',
                    'imageable_id'=>$project->id 
                ]);
        
                
        
               }
               $prochure->storeAs($project->getTranslation('title', 'en'),$prochure->getClientOriginalName(),'images');
        
                $project->prochure = $prochure->getClientOriginalName() ;
                $project->save();
               DB::commit();
               return redirect()->route('projects.index');

        }catch(Exception $e){

            DB::rollBack();
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        
        try{
            DB::beginTransaction();

            $request->validate([
                'title_ar'=>'required',
                'title_en'=>'required',
                'description_ar'=>'required',
                'description_en'=>'required',
                'location_ar'=>'required',
                'location_en'=>'required',
                'gps'=>'required',
               ]);
        
               $project->update([
                'title'=> ['ar'=>$request->title_ar ,'en'=>$request->title_en] ,
                'description'=>['ar'=>$request->description_ar ,'en'=>$request->description_en],
                'location'=>['ar'=>$request->location_ar ,'en'=>$request->location_en],
                'gps'=>$request->gps 
               ]);
        
               if($request->has('prochure')){
                Storage::disk('images')->delete($project->getTranslation('title','en').'/'.$project->prochure);
                $prochure = $request->prochure ;

                $prochure->storeAs($project->getTranslation('title', 'en'),$prochure->getClientOriginalName(),'images');
        
                $project->prochure = $prochure->getClientOriginalName() ;
                $project->save();
               }

               $images = $request->images ;

            //    foreach($images as $image){
            //     $image->storeAs($project->getTranslation('title', 'en'),$image->getClientOriginalName(),'images');
            //     Image::create([
            //         'image'=>$image->getClientOriginalName(),
            //         'imageable_type'=>'app\Models\Project',
            //         'imageable_id'=>$project->id 
            //     ]);
        
            //    }
               
               DB::commit();
               return redirect()->route('projects.index');

        }catch(Exception $e){

            DB::rollBack();
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::disk('images')->deleteDirectory($project->getTranslation('title','en'));
        $project->delete();
        $project->images()->delete();

        return back();
    }

    public function project_images($id){

        $project = Project::findOrFail($id);
        $images = $project->images ;
        return view('admin.projects.images',compact('project','images'));
    }

    public function add_images(Request $request ,$id){

        $project  = Project::findOrFail($id);

        $images = $request->images ;
              
        
               foreach($images as $image){
                $image->storeAs($project->getTranslation('title', 'en'),$image->getClientOriginalName(),'images');
                Image::create([
                    'image'=>$image->getClientOriginalName(),
                    'imageable_type'=>'App\Models\Project',
                    'imageable_id'=>$project->id 
                ]);
        
                }

                return back();

    }

    public function delete_project_image($id){
        $image = Image::findOrFail($id);
        
        $project = Project::findOrFail($image->imageable_id);
        
        Storage::disk('images')->delete($project->getTranslation('title','en').'/'.$image->image);

        $image->delete();
        return back();


    }
}
