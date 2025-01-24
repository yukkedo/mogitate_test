<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => ['required'],
            'price' => ['required', 'numeric', function ($attribute, $value, $fail) {
                if ($value < 0 || $value > 10000) {
                    $fail('価格は0円以上10000円以内で入力してください。');
                }
            }],
            'image' => ['required', 'mimes:png,jpeg'],
            'description' => ['required', 'max:120'],
            'season' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品を入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '数値で入力してください',
            'image.required' => '商品画像を登録してください',
            'image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください',
            'description.required' => '商品説明をしてください',
            'description.max' => '120文字以内で入力してください',
            'season.required' => '季節を選択してください'
        ];
    }
}
