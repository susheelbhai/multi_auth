<?php

namespace App\View\Components\Admin;

use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Config;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public $settings;
    public function __construct()
    {
        $this->settings = Config::get('settings');
    }


    public function render(): View
    {
        return view('admin.layouts.'.$this->settings->admin_theme.'.app');
    }
}
