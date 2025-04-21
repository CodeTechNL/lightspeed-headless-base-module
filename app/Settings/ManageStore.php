<?php

    namespace Modules\HeadlessBase\Settings;

    use Spatie\LaravelSettings\Settings;

    class ManageStore extends Settings
    {
        public bool $product_management = false;
        public bool $brand_management = false;
        public bool $category_management = false;
        public bool $supplier_management = false;

        public static function group(): string
        {
            return 'manage_store';
        }
    }