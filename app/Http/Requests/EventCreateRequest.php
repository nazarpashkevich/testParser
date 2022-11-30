<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['string', 'required'],
            'check_period' => ['integer', 'required'],
            'page_check_count' => ['integer', 'required'],
            'track_idealist_check' => [],
            'track_idealist_text' => [],
            'track_olx_check' => [],
            'track_olx_text' => [],
            'track_fb_check' => [],
            'track_fb_text' => [],
        ];
    }
}
