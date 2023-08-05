<?php
namespace App\Services\Movie;


use App\Exceptions\AppError;
use App\Models\Movie;
use Illuminate\Support\Facades\Log;


class UpdateMovieService{
    public function execute(array $data,$id){
       
        $movie = Movie::find($id);

        if (!$movie) {
            throw new AppError('Movie not found', 404);
        }
        $movie->update($data);


        return $movie->refresh();
    }
}