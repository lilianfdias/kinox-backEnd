<?php
namespace App\Services\Movie;


use App\Exceptions\AppError;
use App\Models\Movie;


class GetMovieByIdService{
    public function execute($id){
       
        $movie = Movie::find($id);

        if (!$movie) {
            throw new AppError('Movie not found', 404);
        }

        return $movie;
    }
}