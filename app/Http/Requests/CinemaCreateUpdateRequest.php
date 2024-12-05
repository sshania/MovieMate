<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CinemaCreateUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'max:20|required',
            'location' => 'max:50|required',
            'total_studios' => 'required',
            'contact' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'name wajib diisi',
            'name.max' => 'name max :max character',
            'total_studios.required' => 'name wajib diisi',
            'contact.required' => 'name wajib diisi',
        ];
    }
}
