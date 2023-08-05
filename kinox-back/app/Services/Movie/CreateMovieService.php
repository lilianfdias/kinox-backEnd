<?php
namespace App\Services\Movie;


use App\Exceptions\AppError;
use App\Models\Movie;


class CreateMovieService{
    public function execute(array $data){
       

        $movieFound = Movie::firstWhere('title',$data['title']);

        if(!is_null($movieFound)){
            throw new AppError ('Filme já cadastrado',400);
        }

        return Movie::create($data);
    }
}