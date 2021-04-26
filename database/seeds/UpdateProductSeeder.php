<?php

use Illuminate\Database\Seeder;
use App\Models\Produk;

class UpdateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->updateProductShortDescription();
    }

    public function updateProductShortDescription() {
        $products = Produk::all();

        foreach ($products as $product) {
            $product->short_description = $this->parser($product->deskripsi);
            $product->save();
        }
    }

    public function parser($deskripsi) {
        $desc = str_replace('<h4>','<p>',$deskripsi);
        $desc = str_replace('</h4>','</p>',$desc);
        $desc = str_replace('<p>','',$desc);
        $desc = str_replace('</p>','<br>',$desc);
        $desc = str_replace('<br />','<br>',$desc);
        $desc = strip_tags($desc,'<br>');

        $test = explode("<br>", $desc);
        $string = '';
        foreach ($test as $idx=>$line) {
            if($idx===6) break;

            $string .= $line.PHP_EOL;
        }

        if(strlen($string) > 1000) {
            $string = substr($string, 0, 1000);
        }

        $string = str_replace('&nbsp;',' ',$string);
        $string = str_replace('&amp;','&',$string);
        $string = trim($string);

        return $string;
    }
}
