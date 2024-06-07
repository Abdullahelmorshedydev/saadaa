<?php

namespace App\Http\Requests\Web\Admin\Event;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\EventTypeEnum;
use Illuminate\Validation\Rule;

class EventUpdateRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255', 'string', 'unique:events,name,' . $this->event->id],
            'description' => ['required', 'min:3', 'max:255', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'type' => ['required', Rule::in(EventTypeEnum::cases())],
            'image' => ['nullable', 'image', 'mimetypes:image/png,image/jpg,image/jpeg', 'mimes:png,jpg,jpeg'],
        ];
    }
}
