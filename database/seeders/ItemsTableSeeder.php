<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Basic Magazine',
                'description' => '+26% Патроны +15% Урон от пуль',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon9.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'High-Velocity Mag',
                'description' => '+20% к скорости пуль +13% к урону от пуль +65 к прочности щита от пуль',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon1.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Close Quarters',
                'description' => '+5% к сопротивлению пулям. Урон оружия: +25%. Расстояние: 15 метров.',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 1,  // Заполнить соответствующим значением
                'image' => 'items/close_quarters.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Headshot Booster',
                'description' => '+4% Скорострельность. +40 Прочности щита от пуль. +40 к урону в голову',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 1,
                'image' => 'items/headshot_booster.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hollow Point Ward',
                'description' => '+95 к прочности щита от дух. урона (спиритизма). +4 Дух. сила (спиритической мощи). Урон оружия: +22%. ',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 1,
                'image' => 'items/hollow_point_ward.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Monster Rounds',
                'description' => '+30% Урон оружия по крипам. +25% Сопротивление от пуль (ото всех, кроме героев). +30 К здоровью. +1 Регенерация здоровья.',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 1,
                'image' => 'items/monster_rounds.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rapid Rounds',
                'description' => '+11% Скорострельность. +1 м/с Скорость бега',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 1,
                'image' => 'items/rapid_rounds.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Restorative Shot',
                'description' => '+100 к прочности щита от пуль. +6% Урон оружия.',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 1,
                'image' => 'items/restorative_shot.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Active Reload',
                'description' => '+10% Урон оружия. -20% Время перезарядки. Скорострельность: +20%. Вампиризм от пуль: +20%.',
                'cost' => 1250,
                'tier_id' => 2,  // Tier II
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon2.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Berserker',
                'description' => '+4 Патроны. +7% Сопротивление от пуль.',
                'cost' => 1250,
                'tier_id' => 2,  // Tier II
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon8.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kinetic Dash',
                'description' => '+100 Здоровье. +1.5 Восстановление здоровья. Скорострельность: +30%. Временные патроны: +5.',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/kinetic_dash.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Long Range',
                'description' => '+90 к прочности щита от пуль. Урон оружия: +40%. Расстояние: 15 метров.',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/long_range.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Melee Charge',
                'description' => '+12% Урон оружия. +75 Здоровье.',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/melee_charge.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Shot',
                'description' => '+12% Урон оружия. +4 Спиритическая сила',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/mystic_shot.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Slowing Bullets',
                'description' => '+16% Урон оружия. +5 Спиритическая сила',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/slow_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Soul Shredder Bullets',
                'description' => '+7% Урон оружия.',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/soul_shredder_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Swift Striker',
                'description' => '+22% Скорострельность. +10% К боезапасу. -5% Сопротивление от пуль.',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/swift_striker.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fleetfoot',
                'description' => '+90 Здоровье. +25% Дальность подката',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 1,
                'image' => 'items/fleetfoot.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Burst Fire',
                'description' => '+12% Скорострельность. +50% Дальность подката. +70 к Здоровью. +20% к сопротивлению замедлению',
                'cost' => 3000,
                'tier_id' => 3,  // Tier III
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon7.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Escalating Resilience',
                'description' => '+14% Скорострельность. +14% Урон оружия.',
                'cost' => 3000,
                'tier_id' => 3,  // Tier III
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon5.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Crippling Headshot',
                'description' => 'Inflict additional damage on headshots',
                'cost' => 6200,
                'tier_id' => 4,  // Tier IV
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon6.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Frenzy',
                'description' => 'Increase rate of fire and damage output',
                'cost' => 6200,
                'tier_id' => 4,  // Tier IV
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon4.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Health',
                'description' => 'Increase health by a fixed amount',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality7.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Regen',
                'description' => 'Increase health regeneration rate',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality6.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bullet Armor',
                'description' => 'Reduce incoming bullet damage',
                'cost' => 1250,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality1.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Combat Barrier',
                'description' => 'Create a shield that absorbs damage',
                'cost' => 1250,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality10.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fortitude',
                'description' => 'Increase damage resistance over time',
                'cost' => 3000,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality5.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Bullet Armor',
                'description' => 'Further reduce bullet damage',
                'cost' => 3000,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality4.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Inhibitor',
                'description' => 'Reduce the movement speed of enemies',
                'cost' => 7450,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality3.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Leech',
                'description' => 'Siphon health from enemies',
                'cost' => 6200,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality2.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Spirit',
                'description' => 'Increase spirit power for abilities',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit5.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Burst',
                'description' => 'Release a burst of mystical energy',
                'cost' => 500,
                'tier_id' => 1,  // Tier I
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit2.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bullet Resist Shredder',
                'description' => 'Reduce resistance to bullets',
                'cost' => 1250,
                'tier_id' => 2,  // Tier II
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit1.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Duration Extender',
                'description' => 'Increase the duration of your abilities',
                'cost' => 1250,
                'tier_id' => 2,  // Tier II
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit9.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],






            [
                'name' => 'Hunter\'s Aura',
                'description' => 'Охотничья аура',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/hunters_aura.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Intensifying Magazine',
                'description' => 'Усиливающий магазин',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/intensifying_magazine.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pristine Emblem',
                'description' => 'Первозданная эмблема',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/pristine_emblem.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Point Blank',
                'description' => 'Стрельба в упор',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/point_blank.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sharpshooter',
                'description' => 'Прицельная стрельба',
                'cost' => 4250,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/sharpshooter.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tesla Bullets',
                'description' => 'Тесла-пули',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/tesla_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Titanic Magazine',
                'description' => 'Титанический магазин',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/titanic_magazine.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Toxic Bullets',
                'description' => 'Токсичные пули',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/toxic_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alchemical Fire',
                'description' => 'Алхимический огонь',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/alchemical_fire.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Heroic Aura',
                'description' => 'Героическая аура',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/heroic_aura.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Headhunter',
                'description' => 'Охотник за головами',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/headhunter.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Warp Stone',
                'description' => 'Камень переноса',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/warp_stone.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Glass Cannon',
                'description' => 'Стеклянная пушка',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/glass_cannon.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lucky Shot',
                'description' => 'Удачный выстрел',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/lucky_shot.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ricochet',
                'description' => 'Рикошет',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/ricochet.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spiritual Overflow',
                'description' => 'Спиритическое переполнение',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/spiritual_overflow.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Silencer',
                'description' => 'Глушитель',
                'cost' => 4000,
                'tier_id' => 4,
                'type_id' => 1,
                'image' => 'items/silencer.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vampiric Burst',
                'description' => 'Порыв вампиризма',
                'cost' => 4000,
                'tier_id' => 4,
                'type_id' => 1,
                'image' => 'items/vampiric_burst.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Siphon Bullets',
                'description' => 'Вытягивающие пули',
                'cost' => 6300,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/siphon_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Enduring Spirit',
                'description' => 'Спиритическая стойкость',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enduring_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Stamina',
                'description' => 'Добавочная выносливость',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/extra_stamina.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Melee Lifesteal',
                'description' => 'Ударная кража здоровья',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/melee_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sprint Boots',
                'description' => 'Беговые ботинки',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/sprint_boots.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healing Rite',
                'description' => 'Обряд лечения',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/healing_rite.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bullet Lifesteal',
                'description' => 'Пулевая кража здоровья',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/bullet_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Debuff Reducer',
                'description' => 'Уменьшение эффектов',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/debuff_reducer.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Enchanter\'s Barrier',
                'description' => 'Барьер заклинателя',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enchanters_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Enduring Speed',
                'description' => 'Скоростная стойкость',
                'cost' => 1750,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enduring_speed.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healbane',
                'description' => 'Гроза целителей',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/healbane.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healing Booster',
                'description' => 'Усилитель лечения',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/healing_booster.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Reactive Barrier',
                'description' => 'Барьерная реакция',
                'cost' => 1250,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/reactive_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Armor',
                'description' => 'Спиритическая броня',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,// Заполнить соответствующим значением
                'image' => 'items/spirit_armor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Lifesteal',
                'description' => 'Спиритическая кража здоровья',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/spirit_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Divine Barrier',
                'description' => 'Божественный барьер',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/divine_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Health Nova',
                'description' => 'Вспышка исцеления',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/health_nova.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Restorative Locket',
                'description' => 'Живительный медальон',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/restorative_locket.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Return Fire',
                'description' => 'Обратный огонь',
                'cost' => 1250,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/return_fire.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Spirit Armor',
                'description' => 'Улучшенная спиритическая броня',
                'cost' => 4250,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/improved_spirit_armor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lifestrike',
                'description' => 'Витальный удар',
                'cost' => 3500,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/lifestrike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Stamina',
                'description' => 'Превосходная выносливость',
                'cost' => 3500,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/superior_stamina.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Veil Walker',
                'description' => 'Незримый покров',
                'cost' => 3000,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/veil_walker.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Debuff Remover',
                'description' => 'Устранитель эффектов',
                'cost' => 4250,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/debuff_remover.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Majestic Leap',
                'description' => 'Грациозный скачок',
                'cost' => 3000,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/majestic_leap.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Metal Skin',
                'description' => 'Металлическая кожа',
                'cost' => 3000,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/metal_skin.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rescue Beam',
                'description' => 'Спасательный луч',
                'cost' => 3000,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/rescue_beam.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Soul Rebirth',
                'description' => 'Перерождение души',
                'cost' => 6300,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/soul_rebirth.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Colossus',
                'description' => 'Колосс',
                'cost' => 6300,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/colossus.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Phantom Strike',
                'description' => 'Фантомный удар',
                'cost' => 6300,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/phantom_strike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Shadow Weave',
                'description' => 'Сплетение теней',
                'cost' => 6200,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/shadow_weave.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Unstoppable',
                'description' => 'Неудержимость',
                'cost' => 6300,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/unstoppable.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ammo Scavenger',
                'description' => 'Собиратель патронов',
                'cost' => 500,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 3,  // Заполнить соответствующим значением
                'image' => 'items/ammo_scavenger.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Charge',
                'description' => 'Добавочные заряды',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 3,
                'image' => 'items/extra_charge.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Reach',
                'description' => 'Мистический охват',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 3,
                'image' => 'items/mystic_reach.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Strike',
                'description' => 'Спиритический удар',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 3,  // Предположительно Spirit
                'image' => 'items/spirit_strike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Infuser',
                'description' => 'Воодушевитель',
                'cost' => 500,
                'tier_id' => 1,
                'type_id' => 3,
                'image' => 'items/infuser.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Cooldown',
                'description' => 'Улучшенная перезарядка умений',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/improved_cooldown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Vulnerability',
                'description' => 'Мистическая уязвимость',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/mystic_vulnerability.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Quicksilver Reload',
                'description' => 'Ртутная перезарядка',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/quicksilver_reload.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Suppressor',
                'description' => 'Подавитель',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/suppressor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cold Front',
                'description' => 'Холодный фронт',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/cold_front.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Decay',
                'description' => 'Разложение',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/decay.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Slowing Hex',
                'description' => 'Замедляющие чары',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/slowing_hex.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Withering Whip',
                'description' => 'Плеть увядания',
                'cost' => 1250,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/withering_whip.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Burst',
                'description' => 'Улучшенный импульс',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_burst.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Reach',
                'description' => 'Улучшенный охват',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_reach.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Spirit',
                'description' => 'Улучшенный спиритизм',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Slow',
                'description' => 'Мистическое замедление',
                'cost' => 4250,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/mystic_slow.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rapid Recharge',
                'description' => 'Спешные заряды',
                'cost' => 3500,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/rapid_recharge.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Cooldown',
                'description' => 'Превосходная перезарядка умений',
                'cost' => 4250,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/superior_cooldown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Duration',
                'description' => 'Превосходная длительность',
                'cost' => 4250,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/superior_duration.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Surge of Power',
                'description' => 'Прилив сил',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/surge_of_power.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Torment Pulse',
                'description' => 'Терзающий пульс',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/torment_pulse.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ethereal Shift',
                'description' => 'Развоплощение',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/ethereal_shift.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Knockdown',
                'description' => 'Нокдаун',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/knockdown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Silence Glyph',
                'description' => 'Символ безмолвия',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/silence_glyph.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Boundless Spirit',
                'description' => 'Безграничный спиритизм',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/boundless_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Diviner\'s Kevlar',
                'description' => 'Доспех прорицателя',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/diviners_kevlar.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Magic Carpet',
                'description' => 'Ковер-самолет',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/magic_carpet.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Escalating Exposure',
                'description' => 'Растущее воздействие',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/escalating_exposure.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Reverb',
                'description' => 'Мистический отзвук',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/mystic_reverb.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curse',
                'description' => 'Проклятие',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/curse.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Echo Shard',
                'description' => 'Осколок эха',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/echo_shard.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Refresher',
                'description' => 'Обновитель',
                'cost' => 3000,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/refresher.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
