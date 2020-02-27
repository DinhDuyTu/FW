<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct (
        UserRepositoryInterface  $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getAll();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            if ($request->hasFile('avatar')) {
                $avatar = $this->uploadImage($request);
            } else {
                $avatar = "/images/product/default.jpeg";
            }
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'role_id' => $request->get('role_id'),
            ];
            $attr['avatar'] = $avatar;
            $this->userRepository->create($attr);

            return redirect()->route('admin.users.index');
        } else {
            return redirect()->route('admin.users.create');
        }
    }

    private function uploadImage(Request $request)
    {
        $destinationDir = public_path('images/avatar');
        $fileName = uniqid('avatar') . '.' . $request->avatar->extension();
        $request->avatar->move($destinationDir, $fileName);

        return $image = "/images/avatar/".$fileName;
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
    public function edit($id)
    {
        try {
            $user = $this->userRepository->find($id);

            return view('admin.users.edit', compact('user'));
        } catch (\Throwable $th) {
            //throw $th;
        }
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
        if ($request->password == $request->confirm_password) {
            $user = $this->userRepository->find($id);
            if ($request->hasFile('avatar')) {
                $avatar = $this->uploadImage($request);
            } else {
                $avatar = $user->avatar;
            }
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'role_id' => $request->get('role_id'),
            ];
            $attr['avatar'] = $avatar;
            $user->update($attr);

            return redirect()->route('admin.users.index');
        } else {
            return redirect()->route('admin.users.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
