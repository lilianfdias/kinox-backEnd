<?php
namespace App\Services\Movie;

use App\Exceptions\AppError;
use App\Models\Movie;
use Error;
use Illuminate\Support\Facades\Log;


class DeleteMovieService{
    public function execute($id){
       
        $movie = Movie::find($id);

        if (!$movie) {
            throw new AppError('Movie not found', 404);
        }
        $movie->delete();
        return [];
    }
}