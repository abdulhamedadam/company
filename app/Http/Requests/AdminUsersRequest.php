<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUsersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'gender' => 'required|in:male,female',
            'status' => 'required|in:active,not_active',
            'img' => 'nullable|image|mimes:jpeg,png,gif|max:800',
        ];
    }

    public function messages()
    {
       return [
        'firstname.required' => 'The firstname field is required.',
        'lastname.required' => 'The lastname field is required.',
        'email.required' => 'The email field is required.',
        'city.required' => 'The city field is required.',
        'phone.required' => 'The phone field is required.',
        'gender.required' => 'The gender field is required.',
        'status.required' => 'The status field is required.',
        'img.image' => 'The selected file must be an image.',
        'img.mimes' => 'Only JPEG, PNG, and GIF formats are allowed.',
        'img.max' => 'The image size must not exceed 800KB.',

       ];
    }
}
