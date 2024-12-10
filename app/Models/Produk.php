<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quotation;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';


    protected $fillable = ['nama', 'merk', 'tipe', 'link', 'gambar', 'tentang_produk','kegunaan', 'deskripsi', 'spesifikasi', 'user_manual','kategori_id', 'vendor_id'];

    public function images()
    {
        return $this->hasMany(ProdukImage::class, 'produk_id');
    }

    public function videos()
    {
        return $this->hasMany(ProdukVideo::class, 'produk_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_produk', 'produk_id', 'user_id');
    }
    public function documentCertificationsProduk()
    {
        return $this->hasMany(DocumentCertificationsProduk::class); // or hasMany() if multiple
    }

    public function brosur()
    {
        return $this->hasMany(Brosur::class); // or use a different relationship type if necessary
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class, 'produk_id');
    }

    public function quotationProducts()
    {
        return $this->hasMany(QuotationProduct::class, 'produk_id'); // Sesuaikan jika kolomnya adalah 'product_id'
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
