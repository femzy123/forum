<?php

use Illuminate\Database\Seeder;
use Forum\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 5.8',
            'slug' => str_slug('Laravel 5.8')
        ]);

        Channel::create([
            'name' => 'Vue Js',
            'slug' => str_slug('vue Js')
        ]);

        Channel::create([
            'name' => 'React Js',
            'slug' => str_slug('React Js')
        ]);

        Channel::create([
            'name' => 'Node Js',
            'slug' => str_slug('Node Js')
        ]);
    }
}
