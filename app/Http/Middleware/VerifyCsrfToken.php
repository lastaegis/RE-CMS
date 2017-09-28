<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "admin/datatables/country-default",
        "admin/datatables/province-default",
        "admin/datatables/city-default",
        "admin/datatables/district-default",
        "admin/datatables/cafe-default",
        "admin/file/create/submit",
        "admin/helper/detail-file",
    ];
}
