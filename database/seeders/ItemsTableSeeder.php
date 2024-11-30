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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                 'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
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
                'required_items' => null,
                'tier_id' => 3,  // Tier III
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon5.png',  // Обновлено
                'created_at' => Carbon::now(),

                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Hunter\'s Aura',
                'description' => '+150 Здоровье.Сопротивление от пуль: -9%. Уменьшение скорострельности: 10%. Радиус: 15 метров. ',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/hunters_aura.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'Intensifying Magazine',
                'description' => '+20% Урон оружия. +25% Патроны (боезапас).',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/intensifying_magazine.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Pristine Emblem',
                'description' => '+35% к скорости пуль.+25% к урону от пуль.+12 единиц к спиритической мощи. +12% к сопротивлению спиритизму',
                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/pristine_emblem.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Point Blank',
                'description' => '+15% Сопротивление от пуль. +1 Выносливость.Урон оружия: +40%. Замедление передвижения: 25%.',
                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 1,
                'image' => 'items/point_blank.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Sharpshooter',
                'description' => '+15% Увеличение диапазона оружия. +35% Увеличение прицела оружия. +175 Прочность щита от пуль. Урон оружия: +70%.',
                'cost' => 4250,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/sharpshooter.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Tesla Bullets',
                'description' => '+14% Скорострельность.Урон электричеством: 30.Урона при отскоке заряда: 60.Шанс срабатывания: 25%.Дальность отскока: 8 метров.Макс. отскоков: 2.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/tesla_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Titanic Magazine',
                'description' => '+120% к Патронам.+18% Урон оружия.+12% к Сопротивлению спиритическому урону.+25% к Сопротивлению урона от ближнего боя',
                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/titanic_magazine.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Toxic Bullets',
                'description' => 'Урон кровотечения: 5%/сек.Снижение исцеления: -65%.Длительность: 3 секунды.Эффект за выстрел: 0.8%.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 1,
                'image' => 'items/toxic_bullets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Alchemical Fire',
                'description' => '+225 Здоровье щита от пуль.+14% Урон оружия.+11 Спиритическая сила',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 1,
                'image' => 'items/alchemical_fire.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Heroic Aura',
                'description' => '+20% Вампиризм от пуль.+150 Здоровье.+1м/с Скорость передвижения',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 1,
                'image' => 'items/heroic_aura.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Headhunter',
                'description' => '+15% к урону от пуль.+150 к прочности щита от пуль.+5% к скорости пуль',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/headhunter.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Warp Stone',
                'description' => '+20% Урон оружия.+8 к спиритической мощи.Телепортирует вас вперед, наделяя сопротивлением от пуль.Дальность применения: 11 метров.Сопротивление от пуль: +30%.Длительность эффекта: 5 секунд.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 1,
                'image' => 'items/warp_stone.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Crippling Headshot',
                'description' => '+20% Урон оружия.+10% Вампиризм от пуль.+10% Вампиризм от спиритизма.Уменьшение сопротивления от пуль: 24%.Уменьшение сопротивления от спиритического урона: 24%.',
                'cost' => 6200,
                'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 1,  // Weapon

                'image' => 'items/weapon6.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Glass Cannon',
                'description' => '+70% Урон оружия.+10% Скорострельность.+ 1м/с Скорость передвижения.-15% Максимальное здоровье',
                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/glass_cannon.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Lucky Shot',
                'description' => '+30% Патроны.Доп. урон: 90%.Замедление передвижения: 30%.Шанс срабатывания: 35%.',
                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,

                'image' => 'items/lucky_shot.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Ricochet',
                'description' => '+35% Патроны.+12% Скорострельность.+150 Здоровье.Урон от рикошета: 60%.Целей рикошета: 2.Дальность рикошета: 14 метров.',
                'cost' => 3500,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/ricochet.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Spiritual Overflow',
                'description' => '+20% Скорострельность.+15% Уменьшение перезарядок способностей.+10% Вампиризм от спиритизма.Доп. спиритическая мощь: +45.Эффект за выстрел: 0.8%.',
                'cost' => 3500,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 1,
                'image' => 'items/spiritual_overflow.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Silencer',
                'description' => '+25% Шанс срабатывания замедления.+20% Урон оружия.Следующие 4с, ваши пули моментально накладывают безмолвие. Безмолвие запрещает цели использовать способности.Эффект: Безмолвие.Длительность эффекта: 2 секунды.',
                'cost' => 4000,
                'required_items' => null,
                'tier_id' => 4,
                'type_id' => 1,

                'image' => 'items/silencer.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Vampiric Burst',
                'description' => '+2 м/с к Скорости передвижения.+25% к Урону оружия.+175 к Здоровью',
                'cost' => 4000,
                'required_items' => null,
                'tier_id' => 4,

                'type_id' => 1,
                'image' => 'items/vampiric_burst.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [

                'name' => 'Frenzy',
                'description' => '+12 Патроны.+30% Урон оружия.+200 Здоровье.Когда ваше здоровье опускается ниже 40%, вы получаете прибавку к характеристикам.Скорость передвижения: 4 м/с.Скорострельность: 40%.Сопротивление от пуль: 45. ',
                'cost' => 6200,
                 'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 1,  // Weapon
                'image' => 'items/weapon4.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Extra Health',
                'description' => '+160 Здоровье.+5% Урон оружия.',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Tier I
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality7.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Extra Regen',
                'description' => '+3 Регенерация здоровья.+10% Патроны',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Tier I
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality6.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Bullet Armor',
                'description' => '+20% Сопротивление от пуль.+6% Урон оружия',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality1.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Combat Barrier',
                'description' => '+300 Прочность щита от пуль. Урон оружия с щитом: +28%. Скорость передвижения: +8%. ',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality10.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Fortitude',
                'description' => '+365 к Здоровью.Урон оружия: +27%.Скорость передвижения: +2 м/с.',
                'cost' => 3000,
                'required_items' => 22,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality5.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Improved Bullet Armor',
                'description' => '+45% Сопротивление от пуль.+10% Урон оружия.',

                'cost' => 3000,
                'required_items' => 24,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality4.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Inhibitor',

                'description' => '+25% Урон оружия.+175 Здоровье.Замедление передвижения: 25%.Снижение урона: -35%.Длительность эффекта: 2,5 секунды.',
                'cost' => 7450,
                'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality3.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Leech',
                'description' => '+35% Вампиризм от спиритизма.+35% Вампиризм от пуль.+175 Здоровье.+20% Урон оружия',
                'cost' => 6200,
                 'required_items' => null,
                'tier_id' => 4,  // Tier IV
                'type_id' => 2,  // Vitality
                'image' => 'items/vitality2.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Extra Spirit',
                'description' => '+9 спиритической мощи.+1 Регенерация здоровья.+35 единиц Здоровья',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Tier I
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit5.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [


                'name' => 'Mystic Burst',
                'description' => '+40 прочности щита от спиритизма.+6% Урон от оружия.Дополнительный урон: 35.
Перезарядка: 6,2 секунды.',
                'cost' => 500,
                'required_items' => null,
                'tier_id' => 1,  // Tier I
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit2.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [


                'name' => 'Bullet Resist Shredder',
                'description' => '+100 Здоровье.+15% к сопротивлению урону от ближнего боя.Сопротивление от пуль: -12%.Длительность: 8 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,  // Tier II
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit1.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [


                'name' => 'Duration Extender',
                'description' => '+14% Длительность способностей.+100 Здоровье.+1.75 Регенерация здоровья.+8% Урона от оружия',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,  // Tier II
                'type_id' => 3,  // Spirit
                'image' => 'items/spirit9.png',  // Обновлено
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Siphon Bullets',
                'description' => '+18% к сопротивлению к пулям.Кража здоровья за пулю: 55.Длительность эффекта: 20 секунд.Частота применения: 0.8 секунд.',
                'cost' => 6300,
                'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/siphon_bullets.png',
                'created_at' => Carbon::now(),

                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Enduring Spirit',
                'description' => '+75 Здоровье.+10% Вампиризм от спиритизма.+4 к спиритической силе',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enduring_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Extra Stamina',
                'description' => '+1 Выносливость.+10% Восстановление выносливости.+6% Скорострельность.+35 к Здоровью',
                'cost' => 500,
                'required_items' => null,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/extra_stamina.png',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Melee Lifesteal',
                'description' => '+13% Урон ближней атаки.+75 Здоровье.Ваша следующая ближняя атака по врагу исцелит вас на 90 hp + 20% от нанесенного урона ближней атакой. Лечение от существ, не являющихся героями, имеет лишь 40% эффективности.',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/melee_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Sprint Boots',
                'description' => '+2 м/с Скорость бега.+1 Регенерация здоровья.+4% Урон оружия',
                'cost' => 500,
                'required_items' => null,// Заполнить соответствующим значением
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 2,

                'image' => 'items/sprint_boots.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healing Rite',
                'description' => '+45 Здоровье.+3 К спиритической мощности.Суммарное исцеление: 370.Скорость бега: +2 м/с.Длительность исцеления: 17 секунд.Дальность применения: 30 метров.',
                'cost' => 500,
                'required_items' => null,// Заполнить соответствующим значением
                'tier_id' => 1,

                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/healing_rite.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bullet Lifesteal',
                'description' => '+28% Вампиризм от пуль.+75 Здоровье',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/bullet_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Debuff Reducer',
                'description' => '+75 Здоровье.+6% Урон оружия.Сопротивление эффектам: 30%.',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/debuff_reducer.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Enchanter\'s Barrier',
                'description' => '+300 Здоровье щита от спиритизма.Доп. мощность к спиритизму с щитом: +20.Сокращение времени перезарядки умений: +8%',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enchanters_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Enduring Speed',
                'description' => '+1.1 м/с Скорость передвижения.+2 м/с Скорость бега.+75 Здоровье.+1.5 Регенерация здоровья.Сопротивление замедлениям: +30%.',
                'cost' => 1750,
                 'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/enduring_speed.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healbane',
                'description' => '+75 Здоровье. Вы накладываете на жертву снижение исцеления: -40%. Исцеление за убийство: 350.',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/healbane.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healing Booster',
                'description' => '+6% Сопротивление от спиритизма.+2 Регенерация здоровья. Повышает эффективность вашего лечения на 25%, а также вашу сопротивляемость снижению лечения на 15%.',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/healing_booster.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Reactive Barrier',
                'description' => '+20% Патроны.+75 Здоровье.+2 Регенерация здоровья.Прочность щита от пуль: 400.Прочность щита от спиритизма: 200.Длительность: 9 секунд.',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 2,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/reactive_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Armor',
                'description' => '+20% Сопротивление к спиритизму. +5 к спиритической силе',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,// Заполнить соответствующим значением
                'image' => 'items/spirit_armor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Lifesteal',
                'description' => '+23% Вампиризм от спиритизма.+75 Здоровье',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/spirit_lifesteal.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Divine Barrier',
                'description' => '+8% к дальности умений.+75 к здоровью.+1м/с к скорости бега.Щит от пуль: 260.Щит от спиритизма: 260.Скорость передвижения: +2 м/с.Длительность: 5 секунды.Дальность применения: 35 метров.',
                'cost' => 1250,
                 'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/divine_barrier.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Health Nova',
                'description' => '+10% Урон оружия.+100 Здоровье.+4 к спиритической силе.Суммарное исцеление: 260.Длительность исцеления: 2 секунды.Радиус: 15 метров.',
                'cost' => 1250,

                'required_items' => 58,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/health_nova.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'name' => 'Restorative Locket',
                'description' => '+8% сопротивление к спиритизму.+5 спиритическая сила.Исцеления за эффект: 35. Максимум ед. эффекта: 15 Перезарядка: 30 секунды.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/restorative_locket.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Return Fire',
                'description' => '+125 Здоровье.+7 спиритическая сила.+7% Скорострельность.Возвращаемый урон от пуль: 70%.Возвращаемый урон от спиритизма: 30%.Длительность: 7 секунд.Перезарядка: 25 секунды',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 3,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/return_fire.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'name' => 'Improved Spirit Armor',
                'description' => '+45% сопротивление от спиритизма.+8 спиритическая сила.',

                'cost' => 4250,
                'required_items' => 66,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/improved_spirit_armor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lifestrike',
                'description' => '+35% Урон ближней атаки.+125 Единиц здоровье.+8% Сопротивление от пуль.60% замедление передвижения.2,5 секунды - длительность замедления',

                'cost' => 3500,
                'required_items' => 56,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/lifestrike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Stamina',
                'description' => '+3 Выносливость.+25% Восстановление выносливости.+7% Скорострельность.+12% Спиритическая мощь.Увеличивает количество воздушных рывков и прыжков в воздухе, которые могут быть выполнены перед приземлением с 1 до 2.',
                'cost' => 3500,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/superior_stamina.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Veil Walker',
                'description' => '+250 щит пуль.+200 щит от спиритизма.+12% патроны.+10% урон оружия.Эффект: Невидимость.Скорость передвижения в невидимости: 5 м/с.Длительность невидимости: 5 секунды.Перезарядка: 18 секунд.',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/veil_walker.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Debuff Remover',
                'description' => '+125 Здоровье.+20% Урон оружия.Скорость передвижения: +3 м/с. Длительность: 3 секунды.Перезарядка: 48 секунд.',

                'cost' => 4250,
                'required_items' => 60,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/debuff_remover.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Majestic Leap',
                'description' => '+10 спиритическая сила.+125 здоровья.Вы запускаете себя высоко в воздух. Во время полета, при повторной активации способности, вы начнете падать быстрее. ',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/majestic_leap.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Metal Skin',
                'description' => '+125 здоровье.+8 спиритическая сила.+8% скорострельность.Наделяет вас неуязвимостью к пулям и ближним атакам.Длительность: 3,5 секунды.Перезарядка: 21 секунд.',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/metal_skin.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rescue Beam',
                'description' => '+125 Здоровье.+1 м/c Ускорение.+9 спиритическая сила.Восстановление здоровья: 26%.Время применения: 2,5 секунды,Дальность применения: 32 метра.Перезарядка: 26 секунд.',

                'cost' => 3000,
                'required_items' => 58,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/rescue_beam.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Soul Rebirth',
                'description' => '+12 к спиритической мощи.+20% к урону от оружия.Здоровье при возрождении: 65%.Перезарядка: 240 секунд.',
                'cost' => 6300,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/soul_rebirth.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Colossus',
                'description' => '+600 Здоровье.+20% Урон оружия.Сопротивление от пуль: +40%.Сопротивление от спиритизма: +40%.Замедление передвижения: 30%.Радиус: 12 метров.Длительность: 7 секунд.Перезарядка: 45 секунд.',
                'cost' => 6300,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2, // Заполнить соответствующим значением
                'image' => 'items/colossus.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Phantom Strike',
                'description' => '+15% к сопротивляемости спиритическому урону.+30% Урон оружия.Длительность замедления и обезоруживания: 3 секунды.Замедление передвижения: 50%.Урон: 150.Дальность применения: 25 метров.Перезарядка: 25 секунд.Телепортирует вас к вражеской цели, накладывая на цель обезоруживание, замедление и нанося урон.',
                'cost' => 6300,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/phantom_strike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Shadow Weave',
                'description' => '+15 Регенерация здоровья.+300 Здоровье щита от дух. урона.+30% Патроны.Эффект: Невидимость.Длительность Скрытности: 25 секунд.Скорость бега в невидимости: +2 м/с.Радиус обнаружения: 18 метров.Скорострельность от засады: +40%.Спиритическая мощь от засады: +55.Длительность Засады: 8 секунд.Перезарядка: 48 секунд.',
                'cost' => 6200,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/shadow_weave.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Unstoppable',
                'description' => '+150 Здоровье.+12 Спиритическая сила.+15 к сопротивлению пулям.Вы получаете сопротивление к спиритизму; развеивает отрицательные эффекты и дает неуязвимость к оглушению, сну, оцепенению, обезоруживанию и привязке.Длительность: 6 секунд.Перезарядка: 60 секунды.',
                'cost' => 6300,
                 'required_items' => null,
                'tier_id' => 4,  // Заполнить соответствующим значением
                'type_id' => 2,  // Заполнить соответствующим значением
                'image' => 'items/unstoppable.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ammo Scavenger',
                'description' => '+10 к Патронам.+40 к Здоровью.Боезапасы за душу: 1.Спиритическая мощь за душу: 2.Макс. единиц эффекта: 20.Длительность баффа: 35 секунд',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,  // Заполнить соответствующим значением
                'type_id' => 3,  // Заполнить соответствующим значением
                'image' => 'items/ammo_scavenger.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra Charge',
                'description' => '+1 к числу зарядов умения.+10% к снижению перезарядки умений с зарядами.+6% Урон от пуль.',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,
                'type_id' => 3,
                'image' => 'items/extra_charge.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Reach',
                'description' => '+7% Сопротивляемость пулям.Диапазон способности: 15%',
                'cost' => 500,
                 'required_items' => null,
                'tier_id' => 1,
                'type_id' => 3,
                'image' => 'items/mystic_reach.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spirit Strike',
                'description' => '+80 Здоровье щита от спиритического урона.+0,8 Регенерация здоровья.+12% Урон ближней атаки.Дух. урон: 50.Сопротивление от дух. урона: -10%.Длительность: 13 секунд.Перезарядка: 8 секунд.',
                'cost' => 500,
                'required_items' => null,
                'tier_id' => 1,

                'type_id' => 3,  // Предположительно Spirit
                'image' => 'items/spirit_strike.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Infuser',
                'description' => '+50 Здоровье.+10% Патроны.Доп. дух. сила: +16.Вампиризм от дух. урона: +20%.Длительность: 6 секунд.Перезарядка: 35 секунд.',
                'cost' => 500,
                'required_items' => null,
                'tier_id' => 1,
                'type_id' => 3,

                'image' => 'items/infuser.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Cooldown',
                'description' => 'Уменьшает перезарядку ваших способностей и предметов.+16% Уменьшение перезарядок способностей.+1.5 Регенерация здоровья.+75 К щиту от спиритического урона',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/improved_cooldown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Vulnerability',
                'description' => '+6% Сопротивление от дух. урона.Сопротивление спиритизму: -12%.Длительность: 6 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/mystic_vulnerability.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Quicksilver Reload',
                'description' => '+10% Время перезарядки.Урон: 65.Доп. скорострельность: 15%.Частота применения: 12 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/quicksilver_reload.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Suppressor',
                'description' => '+50 Здоровье.+2,5 Регенерация здоровья.+4 к спиритической мощи.Уменьшение скорострельности: 25%.Длительность: 2 секунды.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,

                'type_id' => 3,
                'image' => 'items/suppressor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cold Front',
                'description' => '+10% Сопротивление от дух. урона.Урон: 87.Замедление передвижения: 40%.Радиус: 14 метров.Длительность: 3 секунды.Перезарядка: 28 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,
                'image' => 'items/cold_front.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Decay',
                'description' => '+7 к спиритической мощи.Снижение исцеления: -50%. Урон кровотечения: 3.1%/сек. Дальность применения: 15 метров. Длительность: 10 секунд. Перезарядка: 32 секунды.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/decay.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Slowing Hex',
                'description' => '+1 м/с Скорость бега.+5 Дух. сила.Спиритический Урон: 78. Замедление передвижения: 20%. Длительность: 3 секунды. Дальность применения: 25 метров. Перезарядка: 26 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/slowing_hex.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Withering Whip',
                'description' => '+100 к прочности щита от пуль. +6 К спиритической мощи. +1 к скорости передвижения.Длительность обезоруживания: 4,5 секунды. Сопротивление от пуль: -14%. Дальность применения: 30 метров. Снижение скорострельности: 45% Перезарядка: 22 секунд.',
                'cost' => 1250,
                'required_items' => null,
                'tier_id' => 2,
                'type_id' => 3,

                'image' => 'items/withering_whip.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Burst',
                'description' => '+100 Здоровье щита от дух. урона+8% Урон оружия.Умения наносят дополнительный урон, если нанесли хотя бы 200 урона за раз. Получив урон от этого предмета, цели будут невосприимчивы к нему следующие 5 сек.Дополнительный урон: 9%.',

                'cost' => 3500,
                'required_items'=>31,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_burst.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Reach',
                'description' => 'Увеличивает дальность и радиус ваших способностей и предметов. +35% Дальность применения усиленного умения. +26% Дальность применения неусиленных умений. +13% К сопротивлению от пуль. +23 Спиритической мощит',

                'cost' => 3500,
                'required_items'=>87,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_reach.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Improved Spirit',
                'description' => '+30 Спиритической мощи. +3 Регенерация здоровья. +1 м/с Скорость бега. +100 Здоровье.',

                'cost' => 3500,
                'required_items'=>30,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/improved_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Slow',
                'description' => '+140 Здоровье.+3 Регенерация здоровья.+6 Дух. сила.Когда цель получает дух. урон, у нее снижаются скорость передвижения и скорострельность.Замедление передвижения: 25%.Уменьшение скорострельности: 40%.Длительность: 2 секунды.',

                'cost' => 4250,
                'required_items'=>93,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/mystic_slow.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rapid Recharge',
                'description' => '+2 к числу зарядов умения. +55% Уменьшение интервала умений с зарядами. +25% Уменьшение времени восстановления умений с зарядами. +12% к урону от пуль.',

                'cost' => 3500,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/rapid_recharge.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Cooldown',
                'description' => 'Уменьшает перезарядку ваших способностей и предметов. +33% Уменьшение перезарядки улучшенной способности. +27% Уменьшение перезарядки неулучшенных способностей. +4 Регенерация здоровья. +150 к прочности щита от спиритического урона',

                'cost' => 4250,
                'required_items'=>90,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/superior_cooldown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Superior Duration',
                'description' => 'Увеличивает длительность ваших способностей и предметов. +33% Длительность улучшенной способности. +27% Длительность неулучшенных способностей. +175 Здоровье. +15% Урон оружия. +4 Восстановление здоровья',

                'cost' => 4250,
                'required_item'=>33,
                'tier_id' => 4,
                'type_id' => 3,
                'image' => 'items/superior_duration.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Surge of Power',
                'description' => 'Усиливает выбранное умение: навсегда увеличивает его спиритическую мощь. Применение этого умения увеличивает вашу скорость передвижения. +34 к спиритической мощности. +10% к скорострельност. +2 м/с к скорости передвижени. 6 секунд: длительность ускорения передвижени. Время восстановления: 10,5 с',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/surge_of_power.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Torment Pulse',
                'description' => '+140 Здоровье. +6 Дух. сила. Периодический урон: 40. Интервал урона: 1.5 секунды. Радиус: 9 метров.',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/torment_pulse.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ethereal Shift',
                'description' => 'Вы входите в состояние пустоты, которое даёт вам неуязвимость и не позволяет выбирать вас целью. Во время этого действия эффекта вы не можете передвигаться или совершать какие-либо действия, а по его окончании мгновенно перезаряжаетесь и получаете бонус к спиритической мощи.. Можно прервать преждевременно.. Длительность: 3,5 секунды. +6 к спиритической мощности. +3 скорости перемещения в течение 5 секунд после возврата. +40% к Сопротивлению спиритизму в течение 5 секунд после возвращения. 10 секунд: длительность бонуса к спиритизму',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/ethereal_shift.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Knockdown',
                'description' => '+1 Выносливость. +200 Здоровье щита от дух. урона. +6 Спиритической мощи.После задержки в 2 с. сбивает цель с ног и оглушает её, прерывая все её действия и выводя её из строя.Эффект: Оглушение.Длительность оглушения: 0,95 секунды.Дальность применения: 45 метров.Перезарядка: 48 секунд.',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/knockdown.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Silence Glyph',
                'description' => '+1500 Здоровье щита от дух. урона.+1 м/с Скорость бега.Выпускает снаряд, который накладывает на цель безмолвие и наносит ей урон. Безмолвие не останавливает прерываемые умения.Эффект: Безмолвие.Наносит 100 уронаДальность применения 25 мДлительность: 3 секунды',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/silence_glyph.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Boundless Spirit',
                'description' => '+65 спиритической мощи. +300 Здоровье. +15 Регенерация здоровья. +30 к урону от пуль. +2 м/с Скорость бега.',

                'cost' => 3000,
                'required_items'=>100,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/boundless_spirit.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Diviner\'s Kevlar',
                'description' => '+20% Вампиризм от дух. урона.+12% Уменьшение перезарядок способностей.Применив ультимативное умение герой на время получает щиты от пуль и спиритизма, а также бонус к спиритической мощи. Щит от пуль: 700. Щит от спиритического урона: 700. Спиритическая мощь: +40. Длительность: 15 секунд. Перезарядка: 64 секунды.',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/diviners_kevlar.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Magic Carpet',
                'description' => '+10% к длительности умений. +15% к спиритической мощи. +150 единиц к здоровью.Призывает ковёр-самолет, который уносит вас прочь и даёт вам щиты от пуль и спиритизма. Во время призыва нельзя использовать умения. Вам даётся невосприимчивость к замедлениям на время полета, но любое ваше действие его прервёт. +400 к прочности щита от пуль. +400 к прочности щита от спиритизма',
                'cost' => 3000,
                 'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/magic_carpet.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Escalating Exposure',
                'description' => '+15% Сопротивление от дух. урона. +125 Здоровье. -12% Сопротивление от дух. урона врагов.Нанося врагу спиритический урон, вы накладываете на него суммирующийся эффект, усиливающий спиритический урон, который вы наносите цели. Дух. урон за заряд: +4%.Длительность: 15 секунд.Макс. частота применения за цель: 0,7 секунд.',

                'cost' => 3000,
                'required_items'=>91,
                'tier_id' => 3,
                'type_id' => 3,
                'image' => 'items/escalating_exposure.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystic Reverb',
                'description' => '+14% Вампиризм от дух. урона.+14% Сопротивление от дух. урона.Усиливает выбранное умение: оно накладывает замедление на цель и наносит урон.Урон: 40%.Замедление передвижения: 40%.Радиус: 18,4 метров.Задержка 3 секунды.Перезарядка: 6,2 секунды.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 3,
                'image' => 'items/mystic_reverb.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Curse',
                'description' => '+20% Урон оружия. +8 Дух. сила.Проклинает врага: прерывает его действия, запрещает ему применять предметы, а также накладывает на него безмолвие и обезоруживание.Эффект: ЗаглушениеДлительность: 3.25 секунды.Дальность применения: 20 метров.Перезарядка: 53 секунд.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,

                'image' => 'items/curse.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Echo Shard',
                'description' => '+1 м/с Скорость передвижения. +16% Сопротивление от пуль. +12% к спиритической мощи.Обновляет перезарядку вашей последней использованной не ультимативной способности.. Перезарядка: 21 секунда.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,
                'type_id' => 3,

                'image' => 'items/echo_shard.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Refresher',
                'description' => '+16% Сопротивление спиритизму. +8% к сопротивлению пулям.Обновляет перезарядку всех ваших способностей и восстанавливает все ваши заряды.. Перезарядка: 212 секунд.',
                'cost' => 3000,
                'required_items' => null,
                'tier_id' => 3,

                'type_id' => 3,
                'image' => 'items/refresher.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

    }
}
