<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beasiswas')->insert([
            [
                'name' => 'Binus University',
                'city' => 'Jakarta',
                'image' => 'assets/school6.jpeg',
                'category' => 'Beasiswa Swasta',
                'type' => 'Kuliah',
                'address' => 'Jl. Raya Kebon Jeruk no. 27, Kemanggisan, Palmerah, Jakarta Barat',
                'phone' => '08041696969',
                'email' => 'halobinus@binus.edu',
                'website' => 'binus.ac.id'
            ],
            [
                'name' => 'SMA Don Bosco 2',
                'city' => 'Jakarta',
                'image' => 'assets/school1.png',
                'category' => 'Beasiswa Sekolah',
                'type' => 'SMA',
                'address' => 'Jl. Pulomas Barat V No. 20, Kayu Putih, Jakarta Timur',
                'phone' => '0214714863',
                'email' => 'smadonbosco2@pancadharma.org',
                'website' => 'donbosco.sch.id'
            ],
            [
                'name' => 'SMP Kalam Kudus III',
                'city' => 'Jakarta',
                'image' => 'assets/school1.png',
                'category' => 'Beasiswa Sekolah',
                'type' => 'SMP',
                'address' => 'Jl. Komplek Green Garden B4 No. 1-20, Kedoya Utara, Jakarta Barat',
                'phone' => '0215817501',
                'email' => 'admin@skkkjakarta.sch.id',
                'website' => 'skkkjakarta.sch.id'
            ],
            [
                'name' => 'SD Santa Maria',
                'city' => 'Jakarta',
                'image' => 'assets/school2.jpg',
                'category' => 'Beasiswa Sekolah',
                'type' => 'SD',
                'address' => 'Jl. Batu Tulis Raya No. 30, Kebon Kelapa, Jakarta Pusat',
                'phone' => '0213523069',
                'email' => 'infosd@santamaria.sch.id',
                'website' => 'sanmarokesd.santamaria.sch.id'
            ],
        ]);

        $faker = Faker::create();
        for($i = 0; $i < 200; $i++){
            $bea =  new Beasiswa();
            $bea->name = $faker->firstName() . $faker->randomElement($array = array(' School', ' University'));
            $originalString = $bea->name;
            $stringWithoutSpace = str_replace(' ', '', $originalString);
            $schoolName = strtolower($stringWithoutSpace);

            $bea->city = $faker->randomElement($array = array('Jakarta', 'Bandung', 'Surabaya'));
            $bea->image = $faker->randomElement($array = array('assets/school1.png', 'assets/school2.jpg', 'assets/school3.jpeg', 'assets/school4.jpg', 'assets/school5.jpeg', 'assets/school6.jpeg'));
            $bea->category = $faker->randomElement($array = array('Beasiswa Pemerintah', 'Beasiswa Swasta', 'Beasiswa Negara Maju', 'Beasiswa Komunitas', 'Beasiswa Sekolah'));
            
            if(strpos($bea->name, 'University')){
                $bea->type = 'Kuliah';
            }
            else{
                $bea->type = $faker->randomElement($array = ['SD', 'SMP', 'SMA']);
            }

            $bea->address = $faker->address();
            $bea->phone = $faker->phoneNumber();
            $bea->email = $schoolName . '@gmail.com';
            $bea->website = 'www.' . $schoolName . '.com';
            $bea->save();
        }
    }
}
