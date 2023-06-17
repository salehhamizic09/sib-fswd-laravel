<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data user dari database
        $users = User::with('role')->get();
        
        // Tampilkan halaman index
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // Ambil data roles dari database
        $roles = Role::all();
        
        // Tampilkan form create user dengan passing data roles
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // ubah nama file gambar/avatar dengan angka random
        $avatarName = time().'.'.$request->avatar->extension(); // 1685433155.jpg

        // upload file gambar ke folder user
        Storage::putFileAs('public/user', $request->file('avatar'), $avatarName);

        // Simpan data ke database
        $user = User::create([
            'avatar' => $avatarName,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'password' => bcrypt('password') // default password, sementara di hardcode
        ]);

        // Redirect ke halaman user.index
        return redirect()->route('user.index');
    }
    
    public function edit($id)
    {
        // Ambil data user berdasarkan id
        $user = User::find($id);
        
        // Ambil data roles dari database
        $roles = Role::all();
        
        // Tampilkan halaman edit dengan passing data user dan roles
        return view('user.edit', compact('user', 'roles'));
    }
    
    public function update(Request $request, $id)
    {
        // cek jika user mengupload avatar di form
        if ($request->hasFile('avatar')) {
            // ambil nama file avatar lama dari database
            $old_avatar = User::find($id)->avatar;

            // hapus file avatar lama dari folder user
            Storage::delete('public/product/'.$old_avatar);

            // ubah nama file
            $avatarName = time() . '.' . $request->avatar->extension();

            // simpan file ke folder public/user
            Storage::putFileAs('public/user', $request->avatar, $avatarName);

            // update data user
            User::where('id', $id)->update([
                'avatar' => $avatarName,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => $request->role
            ]);

        } else {
            // update data user tanpa menyertakan file gambar/avatar
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role_id' => $request->role
            ]);
        }              
        
        // Redirect ke halaman user.index
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
    
    public function destroy($id)
    {
        // Ambil data user berdasarkan id
        $user = User::find($id);
        
        // Hapus data user
        $user->delete();
        
        // Redirect ke halaman user.index
        return redirect()->route('user.index');
    }
}