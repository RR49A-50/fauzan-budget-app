<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutcameController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

route::middleware('auth:api')->group(function(){

    //Outcome
    route::get("/Outcame",[OutcameController::class, "index"]);
    route::get("/Outcame/{id}",[OutcameController::class, "show"]);
    route::post("/Outcame",[OutcameController::class, "store"]);
    route::delete("/Outcame/{id}",[OutcameController::class, "destroy"]);

    //Income
    route::get("/Income",[IncomeController::class, "index"]);
    route::get("/Income/{id}",[IncomeController::class, "show"]);
    route::post("/Income",[IncomeController::class, "store"]);
    route::delete("/Income/{id}",[IncomeController::class, "destroy"]);

    //User
    route::get("/User",[UserController::class, "index"]);
    route::get("/User/{id}",[UserController::class, "show"]);
    route::post("/User",[UserController::class, "store"]);
    route::delete("/User/{id}",[UserController::class, "destroy"]);

});
    //Login
    route::post("/login",[AuthController::class, "login"]);
