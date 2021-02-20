<?php

namespace App\Http\Requests\Api\Users;

use App\Http\Requests\Api\Request;

class ImportRequest extends Request
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
            'users'                          => ['required', 'array'],
            'users.*.id'                     => ['required', 'string', 'max:6', 'min:6'],
            'users.*.name'                   => ['required', 'string', 'max:255'],
            'users.*.age'                    => ['required', 'integer', 'min:0', 'max:255'],
            'users.*.companies'              => ['array'],
            'users.*.companies.*.id'         => ['required_unless:users.*.companies,', 'string', 'max:6', 'min:6'],
            'users.*.companies.*.name'       => ['required_unless:users.*.companies,', 'string', 'max:255'],
            'users.*.companies.*.started_at' => ['required_unless:users.*.companies,', 'date_format:Y-m-d']
        ];
    }

}
