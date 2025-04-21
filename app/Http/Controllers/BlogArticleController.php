<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class BlogArticleController extends HeadlessBaseController
    {
        public function show(string $blogArticleSlug)
        {
            return response("Blog article page $blogArticleSlug");
        }
    }