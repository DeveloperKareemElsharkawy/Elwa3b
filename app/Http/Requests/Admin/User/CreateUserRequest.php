<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
         return [
             'name' => 'required|min:3|max:40',
             'email' => 'required|email|unique:users,email',
             'mobile' => 'required|numeric|unique:users,mobile',
             'image' => 'required|image',
             'status' => 'required|boolean',
             'password' => 'required|min:4',
             'state_id' => 'required|numeric|exists:states,id',
             'zone' => 'required|min:4',
             'street' => 'required|min:6',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'status' => (bool)$this['status'] == 'on',
        ]);
    }

}
