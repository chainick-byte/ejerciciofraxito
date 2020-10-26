<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuarios::truncate();
        $faker=\Faker\Factory::create('es_ES');

        //cre 100 usuarios falsos
        for ($i=0;$i<100;$i++){
            App\Usuarios::create(([
                'nombre'=>$faker->name,
                'primerapellido'=>$faker->lastName,
                'segundoapellido'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>$faker->password,
                'algodeinteres'=>$faker->randomNumber($nbDigits=null,$strict=false),
                'nickname'=>$faker->word

            ])
        );
        }
    }
}
