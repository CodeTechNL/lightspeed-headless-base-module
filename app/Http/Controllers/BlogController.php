<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class BlogController extends HeadlessBaseController
    {
        public function show(string $slug)
        {
            return response("Blog page $slug");
        }
    }