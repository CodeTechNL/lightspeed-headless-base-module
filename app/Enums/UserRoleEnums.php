<?php

    namespace Modules\HeadlessBase\Enums;

    enum UserRoleEnums: string
    {
        case SuperAdmin = 'Super Admin';
        case StoreOwner = 'Store Owner';
        case Admin = 'Admin';
        case Developer = 'Developer';
    }
