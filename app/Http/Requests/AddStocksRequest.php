<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStocksRequest extends FormRequest
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
        $date = 'required';
        $supplier_id = 'required';
        $dataStock = 'required';

        return [
            'date' => $date,
            'supplier_id' => $supplier_id,
            'dataStock' => $dataStock,
        ];
    }
}
