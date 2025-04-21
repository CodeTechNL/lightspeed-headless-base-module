<?php

    use Spatie\LaravelSettings\Migrations\SettingsMigration;

    return new class extends SettingsMigration {
        public function up(): void
        {
            $this->migrator->add('manage_store.product_management', false);
            $this->migrator->add('manage_store.brand_management', false);
            $this->migrator->add('manage_store.category_management', false);
            $this->migrator->add('manage_store.supplier_management', false);
        }
    };
