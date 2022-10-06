<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
           
                //postun kontrolünü validate ile yapabiliyoruz
                'author.name'=>'required|max:100',
                'hatali'=>'required|max:100',
                //boş bırakabilr
                'bail'=>'nullable|max:100'
                //'name'=>['required','max:100']
            
        ];
    }
    //Attributes adı kontrolü
    public function attributes(){

        return [
            'author.name'=>'Yazar Adı'
        ];

    }
    //Hata mesaj içerik kontrolü 
    public function messages(){

        return [
            'hatali.required'=>'Bu Alan Boş Bırakalamaz'
        ];

    }
}
