<?php

namespace App\Http\Controllers;

use App\Http\Requests\movie\CreateMovieRequest;
use App\Http\Requests\movie\UpdateMovieRequest;
use App\Services\Movie\CreateMovieService;
use App\Services\Movie\DeleteMovieService;
use App\Services\Movie\GetAllMoviesService;
use App\Services\Movie\GetMovieByIdService;
use App\Services\Movie\UpdateMovieService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller{
    public function create(CreateMovieRequest $request){
        
        $createMovieService = new CreateMovieService();
        return $createMovieService->execute($request->all());
    }

    public function get(){
        
        $getAllMoviesService = new GetAllMoviesService();
        $allMovies = $getAllMoviesService->execute();
        return $allMovies;
    }

    public function getById(string $id)
    {
        $getMovieByIdService = new GetMovieByIdService();
        return $getMovieByIdService->execute($id);
    }
    public function update(UpdateMovieRequest $request, string $id){
        
        $UpdateMovieService = new UpdateMovieService();
        return $UpdateMovieService->execute($request->all(),$id);
    }
    public function delete(string $id){
        
        $DeleteMovieService = new DeleteMovieService();
        return $DeleteMovieService->execute($id);
    }
}