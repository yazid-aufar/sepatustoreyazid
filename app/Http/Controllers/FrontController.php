<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use App\Services\FrontService;

use Illuminate\Http\Request;


class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService) // Dependency injection of the FrontService
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData();
        return view('front.index', $data);
    }

    public function details(Shoe $shoe) // Route model binding for the Shoe model
    {
        $shoe->load(['brand', 'category', 'photos', 'sizes']);

        // Menyediakan data Featured, kategori, dan merek.
        $data = $this->frontService->getFrontPageData();
        $data['shoe'] = $shoe;

        return view('front.details', $data);
    }

    public function category(Category $category)
    {
        return view('front.category', compact('category'));
    }
}
