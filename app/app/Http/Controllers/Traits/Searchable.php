<?php

namespace App\Http\Traits;

trait Searchable{

    public function search($query, $request){
        if($request->has('search')){
            $query->where('name','like',"%$request->search%");
        }
        return $query;
    }

}
