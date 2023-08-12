<?php
namespace App\Libraries\Resource;

use Illuminate\Http\Request;
use Illuminate\Pagination\UrlWindow;
use Illuminate\Support\Collection;

trait Paginator
{
    protected function extend(Request $request, $resource)
    {
        if ($resource->links() instanceof Collection) {
            return $resource->links();
        }

        $resource->appends($request->all());
        $window = UrlWindow::make($resource);

        $elements = array_filter([
            $window['first'],
            is_array($window['slider']) ? '...' : null,
            $window['slider'],
            is_array($window['last']) ? '...' : null,
            $window['last'],
        ]);

        return Collection::make($elements)->flatMap(function ($item) use ($request) {
            if (is_array($item)) {
                return Collection::make($item)->map(function ($url, $page) use ($request) {
                    return [
                        'url' => urldecode($url),
                        'label' => $page,
                        'active' => $page == $request->page,
                    ];
                });
            }
            return [
                ['url' => null, 'label' => '...', 'active' => false],
            ];
        })->prepend([
            'url' => urldecode($resource->previousPageUrl()),
            'label' => 'Previous',
            'active' => false,
        ])->push([
            'url' => urldecode($resource->nextPageUrl()),
            'label' => 'Next',
            'active' => false,
        ]);
    }
}
