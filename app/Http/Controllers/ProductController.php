<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class ProductController extends HeadlessBaseController
    {
        public function show(string $slug)
        {
            return response("Product page $slug");
        }
    }