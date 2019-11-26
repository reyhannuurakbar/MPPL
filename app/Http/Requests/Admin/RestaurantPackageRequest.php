<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantPackageRequest extends FormRequest
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
            'image' => 'required|image',
            'title' => 'required|max:255',
            'about' => 'required',
            'packages_description' => 'required',
            'packages_1' => 'required|max:255',
            'packages_2' => 'required|max:255',
            'packages_3' => 'required|max:255',
            'packages_4' => 'required|max:255',
            'time' => 'required|max:255',
            'location' => 'required|max:255',
            'price_booking' => 'required|integer'
        ];
    }
}
