<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\View\Component;

class UserLayout extends Component
{
    public $settings;
    public function __construct()
    {
        $this->settings = Setting::where('id', 1)->first();
    }


    public function render(): View
    {
        return view('user.layouts.'.$this->settings->user_theme.'.app');
    }
}
