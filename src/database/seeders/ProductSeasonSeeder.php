<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Season;

class ProductSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ProductSeasonMapping = [
            'キウイ' => ['秋', '冬'],
            'ストロベリー' => ['春'],
            'オレンジ' => ['冬'],
            'スイカ' => ['夏'],
            'ピーチ' => ['夏'],
            'シャインマスカット' => ['夏', '秋'],
            'パイナップル' => ['春', '夏'],
            'ブドウ' => ['夏', '秋'],
            'バナナ' => ['夏'],
            'メロン' => ['春', '夏'],
        ];

        // 季節データを取得
        $seasons = Season::pluck('id', 'name');

        foreach ($ProductSeasonMapping as $productName => $seasonNames) {
            // 商品を取得または作成
            $product = Product::firstOrCreate(['name' => $productName]);

            foreach ($seasonNames as $seasonName) {
                // 季節IDを取得
                $seasonId = $seasons[$seasonName];

                if ($seasonId) {
                    // 中間テーブルに関連付け
                    $product->seasons()->attach($seasonId);
                }
            }
        }
    }
}