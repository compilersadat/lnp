<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSauce extends Model
{
    public function getFreeAttribute($item_id,$sauce){
    	$item=ItemSauce::where('item_id',$item_id)->where('sauce_id',$suace)->count();
    	if($item==0){
    		return false;
    	}else{
    		return true;
    	}
    }
}