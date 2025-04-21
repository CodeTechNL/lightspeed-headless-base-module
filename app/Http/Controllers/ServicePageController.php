<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class ServicePageController extends HeadlessBaseController
    {
        public function show(string $slug)
        {
            return response("Service page $slug");
        }
    }