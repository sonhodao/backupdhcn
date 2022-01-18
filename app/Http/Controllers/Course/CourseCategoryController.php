<?php

namespace App\Http\Controllers\Course;
use App\Http\Requests\CourseCategoryStore;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Cache;
    
class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $this->authorize('courses.categories.index');
        $currentCategory = null;
        $categories = CourseCategory::with(implode('.', array_fill(0, 10, 'children')))
            ->whereNull('parent_id')
            ->paginate();

        if ($request->has('id')) {
            $currentCategory = CourseCategory::findOrFail($request->get('id'));
        }
        return view('courses.categories.index',compact('currentCategory','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CategoryStore $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CourseCategoryStore $request, CourseCategory $coursecategory): RedirectResponse
    {
        
        $data = $request->all();
        $category = CourseCategory::create($data);
      

        Cache::pull('course_options');
        return redirect()
            ->back()
            ->with('success', __('Created category: :name', ['name' => $data['title']]));
    }
    

     /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CategoryUpdate $request
     * @param \App\Models\Category              $category
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CourseCategoryStore $request, CourseCategory $coursecategory): RedirectResponse
    {

        $data = $request->all();

        $coursecategory->update($data);
        
        Cache::pull('course_options');
        return redirect()
            ->back()
            ->with('success', __('Updated category: :name', ['name' => $data['title']]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     *
     * @return void
     */
    public function destroy($id)
    {
      
        $this->authorize('categories.destroy');
        Cache::pull('course_options');
        // $courseCategory->delete();
        CourseCategory::where('id',$id)->delete();
       
    }
}
