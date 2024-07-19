<?php

namespace App\Http\Controllers;

use App\Services\GambleService;
use App\Services\UrlGeneratorService;
use Illuminate\Http\Request;

class GambleUrlController extends Controller
{
    public function __construct(
        private readonly UrlGeneratorService $urlGeneratorService,
        private readonly GambleService $gambleService,
    ) {
    }

    public function show($code)
    {
        abort_unless(session()->id() === $code, 404, 'Invalid or expired URL');

        return view('welcome');
    }

    public function regenerate()
    {
        session()->regenerate();

        return view('link', [
            'url' => $this->urlGeneratorService->generateUrl(),
        ]);
    }

    public function invalidate()
    {
        session()->invalidate();

        return redirect('/');
    }

    public function imfeelinglucky(Request $request)
    {
        $result = $this->gambleService->getResult();

        session()->push('results', $result);

        return view('welcome', [
            'result' => $result,
        ]);
    }

    public function history()
    {
        $history = session()->get('results');
        $latest = null;

        if (is_array($history)) {
            $latest = array_slice($history, -3, 3, true);
        }

        return view('welcome', [
            'history' => $latest,
        ]);
    }
}
