<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;

class Controllers extends BaseController
{
    const DASHBOARD = DashboardController::class;
    // Thêm các controller khác cho admin ở đây
    // const PRODUCTS = ProductController::class;
    // const CATEGORIES = CategoryController::class;
    // const ORDERS = OrderController::class;
    // const USERS = UserController::class;

    public function __construct()
    {
        $this->middleware('auth');
    }
}
