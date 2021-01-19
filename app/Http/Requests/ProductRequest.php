<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;


class ProductRequest extends FormRequest
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
            'title' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];
    }

    /**
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        if (!$validator->fails()) {
            $this->merge([
                'slug' => Str::slug($this->title)
            ]);
        }
    }
}
