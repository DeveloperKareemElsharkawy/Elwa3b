<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\System\Admin\CreateSystemUserRequest;
use App\Http\Requests\Admin\System\Admin\UpdateSystemUserRequest;
use App\Http\Requests\Admin\User\CreateUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\State;
use App\Models\User;
use App\Services\Admin\Images\UploadImageService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
use function view;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * List All Users
     *
     * LiveWire Component in Blade File
     *
     * @return Application|Factory|View
     *
     */
    public function index()
    {
        return view('admin-panel.users.index');
    }


    public function show($user_id)
    {
        $user = User::query()->with('archives')->find($user_id);
        $states = State::query()->get();

        return view('admin-panel.users.show', compact('user', 'states'));
    }


    /**
     * Show create Form
     *
     * @return Application|Factory|View
     *
     */
    public function create()
    {
        $states = State::query()->get();
        return view('admin-panel.users.create', compact('states'));
    }

    /**
     * Save New User in System
     *
     * @return RedirectResponse
     *
     */
    public function store(CreateUserRequest $request, UploadImageService $uploadImageService)
    {
        $this->ajaxValidationCheck($request); // Check Ajax Request

        $validated = $request->safe(); // return only validate Data From Form Request

        if ($request['image']) {
            $image = $uploadImageService->execute('system/users', $validated['image']);
            $validated = $request->safe()->merge(['image' => $image]);
        }

        User::create($validated->all());

        return to_route('admin.users.index')->with('successful_message', trans('admin/messages.users.created'));
    }

    /**
     * Show Edit Form
     *
     * @return Application|Factory|View
     *
     */
    public function edit($systemUserId)
    {
        $user = User::findOrFail($systemUserId);
        $states = State::query()->get();

        return view('admin-panel.users.edit', compact('user', 'states'));
    }


    /**
     * Update System User
     *
     * @return RedirectResponse
     *
     */
    public function update(UpdateUserRequest $request, UploadImageService $uploadImageService)
    {
        $this->ajaxValidationCheck($request); // Check Ajax Request

        $validated = ($request->safe()); // return only validate Data From Form Request

        if ($request['image']) {
            $image = $uploadImageService->execute('system/users', $validated['image']);
            $validated = $request->safe()->merge(['image' => $image]);
        }

        User::where('id', $validated['user_id'])->update($validated->except(['user_id']));

        return to_route('admin.users.index')->with('successful_message', trans('admin/messages.users.updated'));
    }

}
