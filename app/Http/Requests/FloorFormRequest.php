<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FloorFormRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'investment_id' => 'required|integer',
            'type' => '',
            'area_range' => '',
            'cords' => '',
            'html' => '',
            'meta_title' => '',
            'meta_description' => ''
        ];
    }
}
