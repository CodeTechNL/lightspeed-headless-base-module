<?php

    namespace Modules\HeadlessBase\Http\Controllers;

    class SearchController extends HeadlessBaseController
    {
        public function show(string $searchTerm)
        {
            return response("Search page. Term: $searchTerm");
        }
    }