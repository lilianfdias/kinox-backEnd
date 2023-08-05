<?php
namespace App\Services\Movie;


use App\Models\Movie;
use Illuminate\Support\Facades\Log;

class GetAllMoviesService{
    public function execute(){
        // Log::debug('service do get');

       
        $allMovies = Movie::all();

        return $allMovies;
    }
}