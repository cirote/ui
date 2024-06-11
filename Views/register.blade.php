<div class="hold-transition register-page">

    <div class="register-box">

        <div class="card card-outline card-primary">

            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">
                    {{ ucwords(strtolower(str_replace('_', ' ', env('APP_NAME', false)))) }}
                </a>
            </div>

            <div class="card-body">

                <p class="login-box-msg">Registrar un nuevo usuario</p>

                <form action="../../index.html" method="post">

                    <x-ui-input-text item='nombre' placeholder='Nombre completo' />

                    <x-ui-input-email item='email' />

                    <x-ui-input-password item='password' />

                    <x-ui-input-password item='password_2' placeholder='Reescriba su password' />

            
                </form>

                {{-- <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
                </a>
                </div> --}}

                <a href="login.html" class="text-center">Ya tengo un usuario</a>

            </div>

            <div class="card-footer">
                <x-ui-row>
                    <x-ui-column number='8'>
                        <x-ui-checkbox item='agree' >
                            Acepto los <a href="#">términos</a>
                        </x-ui-checkbox>
                    </x-ui-column>
    
                    <x-ui-column number='4'>
                        @if($agree)
                            <x-ui-button-store />
                        @endif
                    </x-ui-column>

                </x-ui-row>

            </div>
    
        </div>
    </div>
</div>
