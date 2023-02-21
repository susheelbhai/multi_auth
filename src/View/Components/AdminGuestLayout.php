<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Config;

class AdminGuestLayout extends Component
{
    public $settings;
    public function __construct()
    {
        $this->settings = Config::get('settings');
    }


    public function render(): View
    {
        return view('components.'.$this->settings->admin_theme.'.guest');
    }
}
