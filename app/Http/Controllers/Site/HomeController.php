<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function desenvolvimemnto_site()
    {
        return view('site.servicos.desenvolvimento_sites_app');
    }

    public function seo()
    {
        return view('site.servicos.seo');
    }

    public function designer()
    {
        return view('site.servicos.design_grafico');
    }

    public function midia_digital()
    {
        return view('site.servicos.midia_digital');
    }

    public function analise_dados()
    {
        return view('site.servicos.analise_dados');
    }

    public function marketing_digital()
    {
        return view('site.servicos.marketing_digital');
    }
}
