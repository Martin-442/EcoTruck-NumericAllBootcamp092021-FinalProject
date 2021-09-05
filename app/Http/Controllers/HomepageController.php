<?php

namespace App\Http\Controllers;

use App\Models\Dropoff;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomepageController extends Controller
{
    public function getHomepage() {
        return view('/home');
    }

    public function getSitemap($debug='') {
        // https://stackoverflow.com/questions/18394891/how-to-get-a-list-of-registered-route-paths-in-laravel
        $routeCollection = Route::getRoutes();
        $routesGET = $routeCollection->getRoutesByMethod()['GET'];
        $excludeRoutes = array (
            '_ignition/health-check' => $routesGET['_ignition/health-check'],
            '_ignition/scripts/{script}' => $routesGET['_ignition/scripts/{script}'],
            '_ignition/styles/{style}' => $routesGET['_ignition/styles/{style}'],
            'sanctum/csrf-cookie' => $routesGET['sanctum/csrf-cookie'],
            'api/user' => $routesGET['api/user']
        );
        $excludeRoutes = array (
            '_ignition/health-check',
            '_ignition/scripts/{script}',
            '_ignition/styles/{style}',
            'sanctum/csrf-cookie',
            'api/user',
            'reset-password/{token}',
            'confirm-password',
            'email/verify',
            'email/verify/{id}/{hash}',
            'delete/equipment/{id}',
            'dropoff/delete/{id}',

            // '/',
            // 'sitemap/{debug}',
            // 'update/equipment/{id}',
            // 'show/equipment/{id}',
            // 'dropoff/detail/{id}',
            // 'dropoff/update/{id}'
        );
        foreach ($excludeRoutes as $key => $value) {
            unset($routesGET[$value]);
        }
        $routesExamples = array();
        foreach ($routesGET as $key => $value) {
            if (str_contains($key, '{debug}')) {
                $value->action['arg'] = array( 'value' => 'debug', 'arg' => 'debug');
                $routesExamples[$key] = $value;
            } else if (str_contains($key, 'equipment/{id}')) {
                $lastID = Equipment::select('id')->orderby('id','desc')->first();
                $value->action['arg'] = array( 'value' => $lastID->id, 'arg' => 'id');
                $routesExamples[$key] = $value;
            } else if (str_contains($key, 'dropoff/detail/{id}')) {
                $lastID = Dropoff::select('id')->orderby('id','desc')->first();
                $value->action['arg'] = array( 'value' => $lastID->id, 'arg' => 'id');
                $routesExamples[$key] = $value;
            } else if (str_contains($key, 'dropoff/update/{id}')) {
                $lastID = Dropoff::select('id')->orderby('id','desc')->first();
                $value->action['arg'] = array( 'value' => $lastID->id, 'arg' => 'id');
                $routesExamples[$key] = $value;
            } else {
                $routesExamples[$key] = $value;
            }
        }
        if ($debug == 'debug') {
            dd(['exclude routes',$excludeRoutes], $routesExamples);
        }
        //dd($excludeRoutes, $routesGET);
        $routesGET = array_diff_assoc($routesGET, $excludeRoutes);
        return view('/sitemap', ['routeCollection' => $routeCollection, 'routesExamples' => $routesExamples]);
    }
}
