<?php

namespace App\Http\Controllers\Backend;

use App\Config\ConfigStore;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigsController extends Controller
{
    public $configStore;
    public function __construct(ConfigStore $configStore)
    {
        $this->configStore = $configStore;
    }

    public function index()
    {
        return view('backend.configs', [
            'config' => $this->configStore->data()
        ]);
    }

    public function indexPost(Request $request)
    {
        $this->configStore->updateMany($request->input());
        $request->session()->flash('success', 'Configs updated!');
        return back();
    }
}
