<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Schema;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(5);
        $i = (request()->input('page', 1) - 1) * 5;
        return view('index', compact('user','i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('user_image')) {
            $destination_path = 'public/images/users';
            $image = $request->file('user_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('user_image')->storeAs($destination_path, $image_name);
            $data['user_image'] = $image_name;
        }
         User::create([
            'user_fullname' => $data['user_fullname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
      //      'user_type' => $data['user_type'],
       //     'user_version' => $data['user_version'],
            'user_image' => $data['user_image'], //image
        ]);
        return redirect()->route('user.index')->with('thongbao', 'Thêm người dùng thành công');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        return redirect()->route('user.index')->with('thongbao', 'Sửa người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('thongbao', 'Xóa người dùng thành công');
    }
}