<?php

namespace App\View\Components\User;

use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $settings;
    public function __construct()
    {
        $this->settings = Setting::where('id', 1)->first();
    }


    public function render(): View
    {
        return view('components.'.$this->settings->user_theme.'.layouts.app');
    }
}
