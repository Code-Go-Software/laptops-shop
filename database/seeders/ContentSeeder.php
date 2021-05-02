<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = new Content();
        $currency->key = 'currency';
        $currency->value = '2000';
        $currency->save();

        $address = new Content();
        $address->key = 'address';
        $address->value = 'دمشق - البحصة';
        $address->save();

        $phone = new content();
        $phone->key = 'phone';
        $phone->value = '+963 9xxxxxxxx';
        $phone->save();

        $fixed_phone = new Content();
        $fixed_phone->key = 'fixed_phone';
        $fixed_phone->value = '011-120-130';
        $fixed_phone->save();

        $help_email = new Content();
        $help_email->key = 'help_email';
        $help_email->value = 'help-center@company.com';
        $help_email->save();

        $slide1 = new Content();
        $slide1->key = 'slide1';
        $slide1->value = 'banner-1.jpg';
        $slide1->save();

        $slide2 = new Content();
        $slide2->key = 'slide2';
        $slide2->value = 'banner-2.jpg';
        $slide2->save();

        $slide3 = new Content();
        $slide3->key = 'slide3';
        $slide3->value = 'banner-3.jpg';
        $slide3->save();

        $facebook = new Content();
        $facebook->key = 'facebook_link';
        $facebook->value = 'www.facebook.com';
        $facebook->save();

        $telegram = new Content();
        $telegram->key = 'telegram_link';
        $telegram->value = 'www.telegram.com';
        $telegram->save();

        $instgram = new Content();
        $instgram->key = 'instagram_link';
        $instgram->value = 'www.instgram.com';
        $instgram->save();

        $whatsapp = new Content();
        $whatsapp->key = 'whatsapp_number';
        $whatsapp->value = '+963 9xxxxxxxx';
        $whatsapp->save();

        $about_us = new Content();
        $about_us->key = 'about_us';
        $about_us->value = 'مقال حول الشركة';
        $about_us->save();
    }
}
