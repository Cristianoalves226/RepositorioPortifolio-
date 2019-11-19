@include('layout.includes.includes.topo')

<fieldset class="fset" style="margin-top:75px;">

    <div class="col s6">
        <h3 id="login" class="center teal lighten-2">Login</h3>
    </div>
    <form class="" action="{{route('admin.login.entrar')}}" method="post">
        {{csrf_field()}}
        <div class="input-field col s10" style="margin:15px;">
            <div class="row">
                <label for="busca"><h5>Email</h5></label>

                <input class="" type="text" name="email">

                <label for="busca"><h5>Senha</h5></label>

                <input class="" type="password" name="password" >

                <input type="hidden" 
        name="_token" value="{{ csrf_token() }}" />  
            </div>
            <div class="center">
                <button class="btn waves-effect waves-light" type="submit" name="action">entrar

                </button>
                <br>
                <a href="{{route('admin.contaNova')}}">criar conta</a>
            </div>

        </div>
    </form>

</fieldset>
@include('layout.includes.includes.footer')
