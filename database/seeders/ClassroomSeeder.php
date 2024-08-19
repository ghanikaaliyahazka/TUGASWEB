<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //multiple insert
         foreach($data as $value){
            ClassRoom::insert([
                'name'=>$value['name']
                //'created_at'=>Carbon::now(),
                //'update_at'=>Carbon::now(),

            ]);
         }

         //disable foreignkey
         Schema::disableForeignKeyConstraints();
         //mengosongkan isi table
         ClassRoom::truncate();
         //enable foreignkey
         Scehma::enableForeignKeyConstrainsts();




        //1.eloquent DRM(rekomendasi)
        //ClassRoom::insert([
          //  'name'=> '12 TKJ c',
            //'created_at'=>Carbon::now(),
            //'update_at'=>Carbon::now(),
           //]);

           //2. query builder
           //DB::table('class')->insert([
            //'name'=> '12 TKJ D',
            //'created_at'=>Carbon::now(),
            //'update_at'=>Carbon::now(),
           //]);
    }
}
