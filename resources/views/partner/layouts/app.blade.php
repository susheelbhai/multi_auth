@php
  $variables = [
    'home_page_url' => route('partner.dashboard'),
    'profile_page_url' => route('partner.profile.edit'),
    'logout_url' => route('partner.logout'),
    ];
@endphp
<x-theme.app :settings="$settings" :theme="$settings->partner_theme" :user="$user" :profilepic="$profile_pic" :variables="$variables">
    <x-slot name="common_head_tag">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('storage/common/images/logo/' . $settings->favicon) }}">
    </x-slot>

    <x-slot name="side_menu">
    @relativeInclude('sidebar')
    </x-slot>


    {{$slot}}
</x-theme.app>