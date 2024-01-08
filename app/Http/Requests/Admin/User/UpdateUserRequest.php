<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [
            'user_id' => 'exists:users,id',
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:admins,email,' . request()->input('system_user_id'),
            'mobile' => 'required|numeric|unique:admins,mobile,' . request()->input('system_user_id'),
            'image' => 'image',
            'state_id' => 'required|numeric|exists:states,id',
            'zone' => 'required|min:6',
            'street' => 'required|min:6',
        ];
        if (request()->input('password')) {
            $rules['password'] = ['required', 'min:6']; // to remove it from validated array if empty
        }
        return $rules;
    }
}
