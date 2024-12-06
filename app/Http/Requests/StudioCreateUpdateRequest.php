<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudioCreateUpdateRequest extends FormRequest
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
            'cinema_id' => 'required|exists:cinemas,id',
            'studio_number' => 'required|integer|unique:studios,studio_number,' .$this->id. ',id,cinema_id,' .$this->cinema_id,
            'total_seats' => 'required',
        ];
    }

    public function attributes(){
        return[
            'cinema_id' => 'cinema',
            'studio_number' => 'studio',
            'total_seats' => 'seats',
        ];
    }

}
