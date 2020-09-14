<?php

use Bendt\Autocms\Seeder\LanguageSeeder;
use Bendt\Autocms\Seeder\PageSeeder;
use Illuminate\Database\Seeder;

class BendtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedLanguages();
        $this->seedGroup();
        $this->seedHome();
        $this->seedAbout();
        $this->seedContact();
    }

    public function seedGroup()
    {
        PageSeeder::group('Meta', 'Meta Header');
    }

    public function seedLanguages()
    {
        LanguageSeeder::create('Indonesia', 'id');
    }

    public function seedMetas($title = '') {
        return [
            PageSeeder::element('id',
                'meta-title',
                $title.'Betavo Audio',
                [
                    'type' => 'text',
                    'rules' => 'required|max:160',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'meta-description',
                '',
                [
                    'type' => 'text',
                    'rules' => 'max:160',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'meta-keys',
                'Betavo Audio',
                [
                    'type' => 'text',
                    'rules' => 'max:160',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
        ];
    }

    public function seedHome()
    {
        $metas = $this->seedMetas();
        $page = PageSeeder::page(NULL, 'Home', 'home', array_merge($metas,[
            //main-title
            PageSeeder::element('id',
                'left-menu-intro-label',
                'INTRO',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'left-menu-about-label',
                'ABOUT',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'left-menu-product-label',
                'PRODUK',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'left-menu-contact-label',
                'KONTAK',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'previous',
                'Previous',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'next',
                'Next',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'scroll',
                'SCROLL',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),

            PageSeeder::element('id',
                'intro-title',
                'Betavo Audio',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'intro-description',
                '<p>Betavo merupakan salah satu leading brand untuk market audio di Indonesia. Berdiri pada tahun 2007, Betavo menjadi salah satu brand yang dipercaya oleh pasar Indonesia. Pada awal berdirinya, Betavo hanya memproduksi audio karaoke untuk pasar low-end, tapi seiring berkembangnya teknologi, dengan melihat pertumbuhan market yang ada saat ini, Betavo mengembangkan divisi riset dan marketing internal-nya, untuk fokus ke arah yang lebih tinggi lagi, sehingga menciptakan produk terbaik dan berkualitas tinggi.</p>',
                [
                    'type' => 'textarea',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>',
                ]
            ),
            PageSeeder::element('id',
                'intro-button-text',
                'PRODUK KAMI',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'intro-button-url',
                'PRODUK KAMI',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => 'https://www.bendt.io',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'intro-background',
                '/Amplifier-Background.jpg',
                [
                    'type' => 'file',
                    'rules' => 'image|max:5120',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'Recommendation picture size ( 1800 x 1200 ) px',
                ]
            ),


        ]));
    }

    public function seedAbout()
    {
        $metas = $this->seedMetas('Tentang - ');
        $page = PageSeeder::page(NULL, 'About', 'about', array_merge($metas,[
            PageSeeder::element('id',
                'about-title',
                'Betavo Audio',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'about-description',
                'Betavo merupakan salah satu leading brand untuk market audio di Indonesia. Berdiri pada tahun 2007, Betavo menjadi salah satu brand yang dipercaya oleh pasar Indonesia. Pada awal berdirinya, Betavo hanya memproduksi audio karaoke untuk pasar low-end, tapi seiring berkembangnya teknologi, dengan melihat pertumbuhan market yang ada saat ini, Betavo mengembangkan divisi riset dan marketing internal-nya, untuk fokus ke arah yang lebih tinggi lagi, sehingga menciptakan produk terbaik dan berkualitas tinggi.',
                [
                    'type' => 'textarea',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>',
                ]
            ),
            PageSeeder::element('id',
                'about-button-text',
                'TENTANG KAMI',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'about-button-url',
                'PRODUK KAMI',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => 'https://www.bendt.io',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'about-background',
                '/about.jpg',
                [
                    'type' => 'file',
                    'rules' => 'image|max:5120',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'Recommendation picture size ( 1800 x 1200 ) px',
                ]
            ),
        ]));
    }

    public function seedContact()
    {
        $metas = $this->seedMetas('Kontak Kami - ');
        $page = PageSeeder::page(NULL, 'Contact', 'contact', array_merge($metas,[
            PageSeeder::element('id',
                'contact-title',
                'Kontak kami',
                [
                    'type' => 'text',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => '',
                ]
            ),
            PageSeeder::element('id',
                'contact-description',
                'Untuk informasi dan kemitraan lebih lanjut, silakan kirim pesan kepada kami',
                [
                    'type' => 'textarea',
                    'rules' => '',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>',
                ]
            ),
            PageSeeder::element('id',
                'contact-background',
                '/about.jpg',
                [
                    'type' => 'file',
                    'rules' => 'image|max:5120',
                    'label' => '',
                    'placeholder' => '',
                    'note' => 'Recommendation picture size ( 1800 x 1200 ) px',
                ]
            ),
        ]));
    }

}
