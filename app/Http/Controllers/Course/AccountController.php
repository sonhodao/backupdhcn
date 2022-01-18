<?php

namespace App\Http\Controllers\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseRegister;
use App\Http\Requests\{CourseRegisterRequest,CourseLoginRequest};
use Illuminate\Support\Facades\Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
class AccountController extends Controller
{
    //
    public function getRegister()

    {
        return view('courses.accounts.register');
    }

    public function postRegister(CourseRegisterRequest $request)
    {
        if ($request->check == true) {
            $validated = $request->validated();
            $data = CourseRegister::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'password' => bcrypt($validated['password'])
            ]);
            return redirect()->route('login');    
        }else{
            return back()->with('error', 'Vui lòng chấp nhận điều khoản !!');
        }
        
    }
   
    public function getLogin()

    {
        return view('courses.accounts.login');
    }
    
    public function postLogin(Request $request )
    {      
        $arr = [
            'phone' => $request->phone,
            'password' => $request->password
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        
        if (Auth::guard('course_register')->attempt($arr)) 
        {        
            return redirect()->route('course-index')->with('Đăng nhập thành công!!');
        } 
        else 
        {
           return back()->with('Đăng nhập thất bại!!');
        }
    }
    public function getLogout()
    {
        Auth::guard('course_register')->logout();
        return redirect()->route('course-index')->with('Đăng xuất thành công !!');
    }
    

    public function getInfo()

    {
        return view('courses.accounts.info');
    }

    public function getChanges()

    {
        return view('courses.accounts.password_change');
    }
}
