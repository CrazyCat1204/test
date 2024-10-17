<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được gán giá trị
    protected $fillable = ['title', 'content', 'published_at'];

    // Các quy tắc xác thực (optional, để kiểm tra giá trị không rỗng)
    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'published_at' => 'required|date',
    ];
}
