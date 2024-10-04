<?php

use App\controllers\ProductController;

return [
    ['GET', '/products'=> [ProductController::class, 'index']],
    ['POST', '/products'=> [ProductController::class, 'create']],
    ['DELETE', '/products/{id}' => [ProductController::class, 'destroy']],
];