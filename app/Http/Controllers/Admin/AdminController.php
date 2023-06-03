<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30',
            ];

            $customMessages = [
                'email.required' => "E-Mail is required",
                'email.email' => 'Valid E-Mail is required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request, $rules, $customMessages);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect("/admin/dashboard");
            } else {
                return redirect()->back()->with("error_message", "Invalid Email or Password!");
            }
        }
        return view('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function checkcurrpasswd(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['currentpasswd'], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function profile(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'admin_name' => 'max:255',
                'admin_mobile' => 'nullable|max:30',
                'admin_image' => 'nullable|image'
            ];

            $customMessages = [
                'admin_name.max' => "Name exceeds maximum length",
                'admin_mobile.max' => "Mobile Number exceeds maximum length",
            ];

            $this->validate($request, $rules, $customMessages);

            $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
            if ($admin) {
                if (!empty($data['admin_name'])) {
                    $admin->name = $data['admin_name'];
                }

                if ($request->hasFile('admin_image')) {
                    // Sadece veritabanında resim kaydı varsa dosya kontrolü yap
                    if ($admin->image) {
                        $old_image_path = public_path('assets/admin/images/photos/') . $admin->image;

                        // Eski resim varsa sil
                        if (file_exists($old_image_path)) {
                            unlink($old_image_path);
                        }
                    }

                    $image_tmp = $request->file('admin_image');
                    if ($image_tmp->isValid()) {
                        $extension = $image_tmp->getClientOriginalExtension();
                        $imageName = rand(111, 99999) . '.' . $extension;
                        $image_path = public_path('assets/admin/images/photos/') . $imageName;
                        Image::make($image_tmp)->save($image_path);

                        $admin->image = $imageName; // Yeni resim adını admin kaydına kaydet
                    }
                }

                if (empty($data['admin_mobile'])) {
                    $data['admin_mobile'] = $admin->mobile;
                }

                $admin->mobile = $data['admin_mobile'];

                if (!empty($data['currentpasswd']) && !empty($data['newpasswd']) && !empty($data['confirmpasswd'])) {
                    if (Hash::check($data['currentpasswd'], Auth::guard('admin')->user()->password)) {
                        if ($data['newpasswd'] == $data['confirmpasswd']) {
                            $admin->password = bcrypt($data['newpasswd']);
                        } else {
                            return redirect()->back()->with('error_message', 'New and Confirm Password is not Match!');
                        }
                    } else {
                        return redirect()->back()->with('error_message', 'Your current password is incorrect!');
                    }
                }

                $admin->save();

                return redirect()->back()->with('success_message', 'Profile has been updated!');
            }
        }
        return view('admin.profile');
    }
}