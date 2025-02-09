<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Build extends Model
{
    use HasFactory;

    // Имя таблицы
    protected $table = 'builds';

    // Заполняемые поля для массового присвоения
    protected $fillable = [
        'name',         // Название сборки
        'character_id', // ID персонажа
        'user_id',      // ID пользователя
    ];

    // Связь с таблицей characters ("многие к одному")
    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    // Связь с таблицей users ("многие к одному")
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Связь "многие ко многим" через таблицу builditems
    public function items()
    {
        return $this->belongsToMany(
            Item::class,       // Модель предметов
            'builditems',      // Имя промежуточной таблицы
            'build_id',        // Внешний ключ для сборки в builditems
            'item_id'          // Внешний ключ для предметов в builditems
        )->withPivot('part_id'); // Добавить поле part_id из промежуточной таблицы
    }
}
