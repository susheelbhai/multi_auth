<x-admin.guest-layout>

    <form class="form-horizontal mt-3" method="POST" action="{{ route('admin.login') }}">
        @csrf
        @php
        if (!Auth::guard('admin')->check()) {
            // return Auth::guard('admin')->user();
            echo Auth::guard('admin')->user();
        }
        @endphp
    
        <div class="form-group mb-3 row">
            <div class="col-12">
                <input name="login" class="form-control" type="text" required="" placeholder="Username">
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input  name="password" class="form-control" type="password" required="" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <div class="custom-control custom-checkbox">
                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="form-label ms-1" for="customCheck1">Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group mb-0 row mt-2">
            @if (Route::has('password.request'))
            <div class="col-sm-7 mt-3">
                <a href="{{ route('admin.password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
            </div>
            @endif
        </div>
    </form>


</x-admin.guest-layout>
