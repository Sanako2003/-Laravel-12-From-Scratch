<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; 
    }
 
    public function rules(): array
    {
        return [
            'title' => ['required'], 
            'text' => ['required'],
            'category_id' => ['required'],
        
        ];
    }
}
