<?php

use Illuminate\Database\Seeder;
use Bendt\Autocms\Seeder\ConfigSeeder;

class ConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $configs = [
            "brief_company" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            "address" => "Penjaringan, Jakarta Utara",
            "phone" => "+62 21 6614267",
            "phone2" => "(021) 56640728",
            "whatsapp" => "0817178611",
            "fax" => "021 673814841",
            "working_days" => "Senin - Sabtu",
            "working_hours" => "08:00 s/d 17:00",

            "email" => "betavo.audio@gmail.com",

            "mail_admin_subject" => "Message from Web Visitor",
            "mail_admin_recipients" => "betavo.audio@gmail.com,contact@bendt.io",
            "mail_visitor_subject" => "Terima Kasih sudah menghubungi Betavo Audio",
            "mail_contact_text_header" => "Kami akan segera meresponse pertanyaan Anda.",

            "facebook" => "http://www.facebook.com",
            "instagram" => "http://www.instagram.com",

            "tokopedia" => "http://www.tokopedia.com",
            "shopee" => "http://www.shopee.co.id",
            "bukalapak" => "http://www.bukalapak.com",
        ];

        ConfigSeeder::seed($configs);
    }
}
