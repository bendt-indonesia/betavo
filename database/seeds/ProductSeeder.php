<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\ProdukKategori;
use App\Models\ProdukSubKategori;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->category();
        $this->dummy_productSeeder();
    }

    public function category() {
        $categories = [
            [
                'nama_kategori' => 'Amplifier',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '/produk_kategori/Amplifier_1.jpeg',
                'subs' => [
                    'Mini Amplifier',
                    'Karaoke Amplifier',
                    'Bird Nest Amplifier',
                ]
            ],
            [
                'nama_kategori' => 'Microphone',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '/produk_kategori/Microphone_1.jpeg',
                'subs' => [
                    'Wire Microphone',
                    'Wireless Microphone',
                    'Meeting Microphone',
                ]
            ],
            [
                'nama_kategori' => 'Speaker',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '',
                'subs' => [
                    'Portable Speaker',
                    'Speaker Active',
                    'Speaker Passive',
                ]
            ],
            [
                'nama_kategori' => 'Mixer',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '',
                'subs' => [
                    'Mixer',
                    'Power Mixer',
                ]
            ],
            [
                'nama_kategori' => 'Accesories',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '',
                'subs' => [
                    'Stand Speaker',
                    'Stand Microphone',
                    'Component',
                ]
            ],
            [
                'nama_kategori' => 'Equaliser',
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'image_url' => '/produk_kategori/Equalizer_1.jpeg',
            ],
        ];

        foreach ($categories as $index=>$cat) {
            $temp = $cat;
            unset($temp['subs']);

            $model = new ProdukKategori($temp);
            $model->meta_title = $model->nama_kategori;
            $model->meta_description = $model->deskripsi;
            $model->process(null,'create');

            if(isset($cat['subs'])) {
                foreach ($cat['subs'] as $ct) {
                    $sub = new ProdukSubKategori([
                        'meta_title' => $ct,
                        'nama_sub_kategori' => $ct,
                        'id_kategori' => $model->id,
                    ]);
                    $sub->process(null,'create');
                }
            }
        }
    }

    public function dummy_productSeeder() {
        for($i = 0; $i < 200; $i++) {
            $model = new Produk([
                'meta_title' => 'Product Name',
                'nama_produk' => 'Product Name - '.($i+1),
                'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s',
                'prioritas' => $i+1,
                'id_kategori' => rand(1,14),
                'image_url_1' => '/produk/thumbs.jpg',
                'image_url_2' => '/produk/thumbs2.jpg',
                'youtube_video_url_1' => 'NE2AvbROl5k',
                "link_tokopedia" => "http://www.tokopedia.com",
                "link_shopee" => "http://www.shopee.co.id",
                "link_bukalapak" => "http://www.bukalapak.com",

            ]);
            $model->process(null,'create');
        }
    }
}
