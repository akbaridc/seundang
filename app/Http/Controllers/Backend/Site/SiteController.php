<?php

namespace App\Http\Controllers\Backend\Site;

use App\Http\Controllers\Controller;
use App\Libraries\Helpers\RouteHelper;
use App\Models\Site\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('backend.sites.index', [
            'title' => 'Site Setting',
            'resource' => Site::first()
        ]);
    }

    public function edit(Site $site)
    {
        return view('backend.sites.edit', [
            'title' => 'Edit Site',
            'resource' => $site
        ]);
    }

    public function update(Request $request, Site $site)
    {
        $site->fill($request->all());
        $site->logo = $request->hasFile('logo') ?
            $request->logo->store('logo', 'public') :
            RouteHelper::ImageUrlToDb($request->logo);
        $site->save();

        return redirect()->route('backoffice.site.index')->with('success', 'Site berhasil disimpan');
    }
}
