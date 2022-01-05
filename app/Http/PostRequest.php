<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FromRequest;

class PostRequest extends FromRequest
{
     public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
        ];
    }
}
