<?php

namespace App\Models;

use App\Models\Scopes\IsActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Model --> Representasi dari Table di database
    // atribute di Model, bisa dioverride untuk menambahkan informasi tentang schema table
    // $table, $primaryKey, $keyType, $incrementing, $timestamp dll
    // secara default eloquent terdapat kolom created_at dan updated_at, jika tidak butuh bisa mengoverride $timestamp menjadi false
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;


    // secara default, semua atribute di Model tidak bisa di set langsung secara masal menggunakan method create()
    // agar bisa di set langsung secara masal dengan create() maka attribute di model harus di daftarkan di $fillable
    protected $fillable = [
        "id",
        "name",
        "description"
    ];


    // Query Scope (cara menambahkan kondisi query secara otomatis, agar setiap melakukan query akan mengikuti kondisi yang telah ditentukan)
    // Query Global Scope --> kondisi ditambahkan di model, secara otomatis ketika melakukan query, kondisi yang ditambahkan akan diterapkan di query builder, contoh ketika menggunakan trait SoftDelete otomatis menambahkan kondisi "where deleted_at = null"
    // contoh menambahkan kondisi Active dan Non Active, dimana setiap melakukan query akan selalu mengambil data yg Active saja di kolom is_active
    // php artisan make:scope NamaScope --> membuat scope di app/Models/Scopes, lalu tambahkan kondisi scope yg sudah dibuat, lalu tambahkan scope ke Model dengan mengoverride booted() dan menggunakan method addGlobalScope(scope)
    protected static function booted(): void
    {
        parent::booted();
        self::addGlobalScope(new IsActiveScope());
    }
}
