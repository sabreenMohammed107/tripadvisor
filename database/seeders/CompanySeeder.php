<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'title'=>' ',
            'subtitle'=>' ',
            'overview'=>' ',
            'address'=>' ',
            'email'=>' ',
            'phone'=>' ',
            'facebook'=>' ',
            'youtube'=>' ',
            'instagram'=>' ',
            'linkedin'=>' ',
            'google_plus'=>' ',
            'what_we_are'=>' ',
            'where'=>' ',
            'when'=>' ',
            'google_map'=>' ',

        ]);
    }
}
