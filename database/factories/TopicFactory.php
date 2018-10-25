<?php
// 创建话题数据工厂文件

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
    ];
});
