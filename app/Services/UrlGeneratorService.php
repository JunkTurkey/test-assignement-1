<?php

namespace App\Services;

class UrlGeneratorService
{
    public function generateUrl(): string
    {
        return url('/' . session()->getId());
    }
}
