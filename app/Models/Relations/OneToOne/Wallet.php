<?php

namespace App\Models\Relations\OneToOne;

use App\Models\Relations\OneThrough\VirtualAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wallet extends Model
{
    // untuk relasi one to one bisa menggunakan method hasOne() pada model, untuk relasi bidirectional (dua arah) menggunakan method belongsTo() pada model yg lain
    protected $table = "wallets";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = false;

    
    // Relasi one to one antara customer_id dengan id, dengan model customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, "customer_id", "id");
    }


    // relasi HasOneThrough (relasi antar model yang tidak berhubungan langsung, tetapi melewati model lain)
    // contoh relasi model Customer oneToOne ke Wallet, model Wallet oneToOne VirtualAccount, maka bisa membuat relasi antara Customer dengan VirtualAccount yang melewati model Wallet
    public function virtualAccount(): HasOne
    {
        return $this->hasOne(VirtualAccount::class, "wallet_id", "id");
    }
}
