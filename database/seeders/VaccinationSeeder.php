<?php

namespace Database\Seeders;
use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccinations = [
                [
                    'user_id' => '1',
                    'name' => 'Rabies',
                    'description' => 'Rabies is an incurable virus that attacks the brain and spinal cord.',
                    'frequency' => 'Annual',
                    'previous_date' => '2020-08-07',
                    'next_date' => '2021-08-07',
                ],

                [
                    'user_id' => '2',
                    'name' => 'Canine Distempa',
                    'description' => 'Fatal infectious virus',
                    'frequency' => 'Annual',
                    'previous_date' => '2020-08-08',
                    'next_date' => '2021-08-07',
                ],
                [
                    'user_id' => '1',
                    'name' => 'Anti-Pest',
                    'description' => 'Vaccinate against ticks,mites,flees',
                    'frequency' => 'Quaterly',
                    'previous_date' => '2021-05-05',
                    'next_date' => '2021-08-05',
                ],
                [
                    'user_id' => '2',
                    'name' => 'Rabies',
                    'description' => 'Rabies is an incurable virus that attacks the brain and spinal cord.',
                    'frequency' => 'Annual',
                    'previous_date' => '2020-07-07',
                    'next_date' => '2021-07-07',
                ],
                [
                    'user_id' => '2',
                    'name' => 'Dewormer',
                    'description' => 'Keeps pet healthy and protected from worms',
                    'frequency' => 'Monthly',
                    'previous_date' => '2021-07-05',
                    'next_date' => '2021-08-05',
                ],
                [
                    'user_id' => '2',
                    'name' => 'Anti-Pest',
                    'description' => 'Vaccinate against ticks,mites,flees',
                    'frequency' => 'Quaterly',
                    'previous_date' => '2021-05-05',
                    'next_date' => '2021-08-05',
                ],
                [
                    'user_id' => '1',
                    'name' => 'Dewormer',
                    'description' => 'Keeps pet healthy and protected from worms',
                    'frequency' => 'Monthly',
                    'previous_date' => '2021-07-05',
                    'next_date' => '2021-08-05',
                ],

                






        ];
        
        foreach ($vaccinations as $vaccine) {
            Vaccination::create([
                   'user_id' => $vaccine['user_id'],
                   'name' => $vaccine['name'],
                   'description' => $vaccine['description'],
                   'frequency' => $vaccine['frequency'],
                   'previous_date' => $vaccine['previous_date'],
                   'next_date' => $vaccine['next_date'],
                 ]);
        }
    
    }
}
