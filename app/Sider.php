<?php
/**
 * Created by PhpStorm.
 * User: danmarcel15
 * Date: 10/25/16
 * Time: 5:14 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sider extends Model
{

    public function marketer()
    {
        if($this->marketerID != null){
            return $this->belongsTo('App\Marketer','marketerID');
        }
        return null;
    }
    public function city(){
        return $this->belongsTo('App\City' , 'cityID');
    }

    public function ref(){
        return $this->belongsTo('App\Ref', 'refID');
    }
}