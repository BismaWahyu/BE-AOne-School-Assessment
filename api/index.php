<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'show']);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     // Handle GET request
//     echo json_encode(['message' => 'Hello from /api/index.php']);
// } else {
//     // Handle other HTTP methods
//     http_response_code(405); // Method Not Allowed
//     echo json_encode(['error' => 'Method not allowed']);
// }