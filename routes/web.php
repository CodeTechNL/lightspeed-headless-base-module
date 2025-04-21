<?php

    use Illuminate\Support\Facades\Route;
    use Modules\HeadlessBase\Http\Controllers\BlogArticleController;
    use Modules\HeadlessBase\Http\Controllers\BlogController;
    use Modules\HeadlessBase\Http\Controllers\BrandController;
    use Modules\HeadlessBase\Http\Controllers\ProductController;
    use Modules\HeadlessBase\Http\Controllers\ServicePageController;

    Route::get('search/{searchTerm}', [ProductController::class, 'show'])->name('search');
    Route::get('/{product_slug}.html', [ProductController::class, 'show'])->name('product.show');
    Route::get('/brands/{brand_slug}', [BrandController::class, 'show'])->name('brand.show');
    Route::get('/blogs/{blog_slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/blogs/{blog_slug}/{blog_article_slug}',
        [BlogArticleController::class, 'show'])->name('blog_article.show');
    Route::get('/service/{blog_slug}', [ServicePageController::class, 'show'])->name('blog_article.show');
