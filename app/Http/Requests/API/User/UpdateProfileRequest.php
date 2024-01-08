<?php

namespace App\Http\Requests\API\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . request()->user()->id,
            'mobile' => 'required|numeric|unique:users,mobile,' . request()->user()->id,
            'image' => 'image',
            'state_id' => 'required|numeric|exists:states,id',
            'zone' => 'required|min:6',
            'street' => 'required|min:6',
        ];
    }
}
