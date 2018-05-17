<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'sub-admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'b2b' => [
            'profile' => 'r,u'
        ],
        'customer' => [
            'profile' => 'r,u'
        ],

        'owner' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
