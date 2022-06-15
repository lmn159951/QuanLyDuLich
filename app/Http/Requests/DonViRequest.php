<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DonViRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return (empty($this->input('ma_don_vi')) ? $this->createRules() : $this->updateRules());
    }

    public function createRules()
    {
        return [
            'ten_don_vi' => 'required|unique:don_vi',
            'dia_chi' => 'required'
        ];
    }

    public function updateRules()
    {
        return [
            'ma_don_vi' => 'required',
            'ten_don_vi' => ['required', Rule::unique('don_vi')->ignore( $this->ma_don_vi, 'ma_don_vi')],
            'dia_chi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống.',
            'unique' => ':attribute đã tồn tại.',
        ];
    }

    public function attributes()
    {
        return [
            'ten_don_vi' => 'Tên đơn vị',
            'dia_chi' => 'Địa chỉ',
        ];
    }
}
