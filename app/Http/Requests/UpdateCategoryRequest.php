<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**<?php
     *
     * namespace App\Http\Requests;
     *
     * use Illuminate\Foundation\Http\FormRequest;
     *
     * class StoreCategoryRequest extends FormRequest
     * {
     * /**
     * Determine if the user is authorized to make this request.
     * /
     * public function authorize(): bool
     * {
     * return true;
     * }
     *
     * /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     * /
     * public function rules(): array
     * {
     * return [
     * 'title' => 'required|unique:categories|max:100',
     * 'rank' => 'required|int',
     * 'status' => 'required',
     * ];
     * }
     *
     * //NOTE: fOR CUSTOM VALIDATION ERROR
     * public function messages()
     * {
     * return [
     * 'title.required' => 'Please enter title',
     * 'rank.required' => 'Please enter rank',
     * 'rank.integer' => 'Rank must be an integer',
     * ];
     * }
     * }
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
