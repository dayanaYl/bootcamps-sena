<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;


class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //1.Leer el archivo de datos 
            $json=File::get('database/_data/bootcamps.json');
            //2.convertir los datos en un arreglo 
            $arreglo_bootcamps = json_decode($json);
            //3.recorrer el areglo 
            foreach($arreglo_bootcamps as $bootcamps){
                  //4. registrar el usuario en base datos 
                  // se utiliza el metodo ::create 
                   Bootcamp::create(
                    [

                        "name" => $bootcamps->name,
                        "description"=> $bootcamps->description,
                        "website"=> $bootcamps->website,
                        "phone"=>$bootcamps->phone,
                        "user_id" => $bootcamps->user_id
                        
                    ]
                   ); 
            } 
            //un <<entity>>
    }
}
