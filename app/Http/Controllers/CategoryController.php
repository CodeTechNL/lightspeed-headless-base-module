<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class CategoryController extends HeadlessBaseController
    {
        public function show(string $slug)
        {
            return response("Category page $slug");
        }
    }