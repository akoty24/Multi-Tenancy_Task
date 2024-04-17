<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        if ($this->isMethod('POST')) {
            return $this->createRules();
        } else {
            return $this->updateRules();
        }
    }

    /**
     * Get the create validation rules that apply to the request.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ];
    }

    /**
     * Get the update validation rules that apply to the request.
     *
     * @return array
     */
    public function updateRules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ];

        // // Check if the 'image' field is present in the request
        // if ($this->hasFile('image')) {
        //     // If 'image' is present, validate it as required
        //     $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        // } else {
        //     // If 'image' is not present, make it not required
        //     $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
        // }

        return $rules;
    }
}


