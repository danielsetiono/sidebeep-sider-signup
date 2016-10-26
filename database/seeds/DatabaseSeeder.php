<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MarketerSeeder::class);
         $this->call(CitySeeder::class);
         $this->call(RefSeeder::class);

        $this->command->info("Seed Success !");
    }

}
class MarketerSeeder extends Seeder
{
    public function run()
    {
        DB::table('marketers')->delete();
        DB::table('marketers')->insert([
            [
                'name' => 'Marketer 0',
                'phone' => '11111',
                'address' => 'Tebet',
            ],
            [
                'name' => 'Marketer 1',
                'phone' => '99999',
                'address' => 'Cawang',
            ],
        ]);
    }
}
class CitySeeder extends Seeder
{
    public function run()
    {
        DB::table('city')->delete();
        DB::table('city')->insert([
            ['name' => 'Jakarta'],
            ['name' => 'Bandung']
        ]);
    }
}

class RefSeeder extends Seeder
{
    public function run()
    {
        DB::table('refs')->delete();
        DB::table('refs')->insert([
            ['description' => 'Sidebeep Marketer'],
            ['description' => 'Social Media'],
            ['description' => 'Chatting Blast'],
            ['description' => 'Internet'],
            ['description' => 'Friends'],
            ['description' => 'Family Member'],
            ['description' => 'Lainnya']
        ]);
    }
}