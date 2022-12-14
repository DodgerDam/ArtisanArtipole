<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class EditionController extends Controller
{

    public function index()
    {
        return view("admin/admin");
    }

    public function show()
    {
        $editions = Edition::select('*')->get();
        return view("admin/editions", compact('editions'));
    }

    public function update(Request $request)
    {
        DB::update("UPDATE editions SET edition_name=?, summary=?, content_1=?, content_2=?, content_3=? WHERE id=?",
            [$request->edition_name, $request->summary, $request->content_1, $request->content_2, $request->content_3, $request->id]);

        return redirect()->route('admin.show');
    }

}
