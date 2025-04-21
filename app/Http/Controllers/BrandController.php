<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class BrandController extends HeadlessBaseController
    {
        public function show(string $slug)
        {
            return response("Brand page $slug");
        }
    }