<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// 全件取得
// Route::get('reviews',[ReviewController::class, 'index']);

// 特定の作品取得
Route::get('/reviews/{media_type}/{media_id}',[ReviewController::class, 'index']);
// レビュー登録
Route::post('/reviews',[ReviewController::class, 'store']);
// レビュー削除
Route::delete('/review/{review}',[ReviewController::class, 'destroy']);
// レビュー編集
Route::put('/review/{review}',[ReviewController::class, 'update']);
