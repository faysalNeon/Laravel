<?php namespace App;
trait CheckActive{
    public function scopeCustom($query){
        foreach ($query->get() as $res) {
            echo $res->name.' => '.$res->email.' => '.$res->password.' <br/> ------------------------------ <br/>';
        }
    }
    public function jkono(){
        echo "something";
    }

}
