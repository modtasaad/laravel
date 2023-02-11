<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'description'=>'required',
        ];
    }
    public function massage() {
        ['title.required' => 'ENTER ANOTHER TITLE']; 
        ['description.required' => 'ENTER ANOTHER DESCRIPTION']; 
    }

}
