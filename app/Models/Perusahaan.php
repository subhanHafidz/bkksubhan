<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = "perusahaan";
    protected $guarded =[];


    public static function remove_draft(){
        $data = Perusahaan::all();
        foreach($data as $item){
            if ($item->status == 'AKTIF'){
                $created = strtotime($item->created_at)+(86400*1);
                if(created < time()){
                    $item->delete($data);
                }
            }
        }
    }
}
