<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UserArchiveFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if (Request()->route()->named('admin.users_archives.store')) {
            return $this->createRules();
        } elseif (Request()->route()->named('admin.users_archives.update')) {
            return $this->updateRules();
        }
    }


    public function createRules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'images' => 'required',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar',
        ];
    }

    public function updateRules(): array
    {
        return [
            'userArchive_id' => 'required|exists:user_archives,id',
            'title' => 'required|string|max:255',
            'description' => 'string',
            'images' => 'required',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar',

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
            'userArchive_id' => $this->route('user_archive_id'),
            'user_id' => $this->route('user_id'),
        ]);
    }

}
