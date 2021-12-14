<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/pizzas", [PizzaController::class, "list"]);

Route::get("/pizzas/{id}", [PizzaController::class, "view"]);

Route::post("/pizzas/create", [PizzaController::class, "create"]);

Route::put("/pizzas/edit/{id}", [PizzaController::class, "edit"]);

Route::delete("/pizzas/delete/{id}", [PizzaController::class, "delete"]);