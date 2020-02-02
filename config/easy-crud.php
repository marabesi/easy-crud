<?php

return [
    /**
     * All models that should have a CRUD. The key of the element will
     * appear as the menu label in the admin area
     */
    'models' => [
    ],

    /**
     * URL that should be used to access the gentella admin
     * where you can manage all models that have CRUD
     */
    'url_base' => '/admin',

    /**
     * You might want to have some validation before accessing
     * the gentela admin, to achieve that, just inform the middleware 
     * class name in the array. It will go through each middleware declared 
     * below.
     */
    'middlewares' => [
    ]
];
