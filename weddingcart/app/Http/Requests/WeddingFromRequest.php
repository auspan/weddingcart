<?php

namespace weddingcart\Http\Requests;

use weddingcart\Http\Requests\Request;

class WeddingFromRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'wedding_date'=>'required',
            'bride_img'   =>'required',
            'groom_img'   =>'required',
            'bride_name'  =>'required',
            'groom_name'  =>'required',  
        ];
    }
}
