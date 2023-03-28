<?php

namespace App\Http\Requests\Estate;

use Illuminate\Foundation\Http\FormRequest;

class EstateUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required',
            'price'=> 'required',
            'country_id'=> 'required',
            'city_id'=> 'required',
            'county_id'=> 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
