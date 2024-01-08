<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\User\UpdatePasswordRequest;
use App\Http\Requests\API\User\UpdateProfileRequest;
use App\Http\Resources\API\User\UserResource;
use App\Services\Admin\Images\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getProfile()
    {
        return $this->respondData(new UserResource(auth('api')->user()));
    }

    public function updateProfile(UpdateProfileRequest $request, UploadImageService $uploadImageService)
    {
        $user = auth('api')->user();

        if ($request['image']) {
            $image = $uploadImageService->execute('system/users', $request['image']);
            $request = $request->safe()->merge(['image' => $image]);
        }

        $user->update($request->all());

        return $this->respondData(new UserResource($user));
    }

    public function updatePassword(UpdatePasswordRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = auth('api')->user();

        $user->update(['password' => $request['password']]);

        return $this->respondMessage('تم تغيير كلمه المرور بنجاح');
    }
}
