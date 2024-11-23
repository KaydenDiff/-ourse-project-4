<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Указываем таблицу, если имя таблицы не соответствует стандарту
    protected $table = 'items';

    // Заполняемые поля для массового присвоения
    protected $fillable = [
        'name',
        'description',
        'cost',
        'required_items',
        'tier_id',
        'type_id',
        'image',
    ];

    // Определение связи с моделью Build (если необходимо)
    public function buildsitem()
    {
        return $this->belongsTo(BuildItem::class);
    }
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
