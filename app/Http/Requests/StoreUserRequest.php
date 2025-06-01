<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'remember_token' => 'nullable',
            'userName' => 'required',
            'phone' => 'required',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'ورود نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل از نوع ایمیل باید باشد',
            'email.unique' => 'ایمیل وارد شده تکراری است',
            'password.required' => 'پسورد الزامی است',
            'password.same' => 'پسورد با پسورد موجود همخوانی ندارد',
            'password_confirm.required' => 'تکرار پسورد الزامی است',
            'remember_token.nullable' => 'اینفیلد الزامی نیست ',
            'userName.required' => 'نام کاربری الزامی است',
            'phone.required' => 'تلفن الزامی است',

        ];
    }
}
