<div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
    @auth    
        <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
    @endauth
    <div class="info">
        @auth
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @endauth
        @guest
            <a href="#" class="d-block">
                @lang('Bienvenido')
            </a>
        @endguest
    </div>
</div>
