<?php

namespace App\Http\Requests\Web\Admin\Venue;

use Illuminate\Foundation\Http\FormRequest;

class VenueStoreRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'address' => ['required', 'min:3', 'max:255', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'event_id' => ['required', 'integer', 'exists:events,id'],
            'image' => ['required', 'image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }
}
