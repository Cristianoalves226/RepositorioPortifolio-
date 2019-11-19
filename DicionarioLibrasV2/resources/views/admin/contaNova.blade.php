@include('layout.includes.includes.topo')

<fieldset class="fsetconta" style="margin-top:5px;">
    <div class="col s6">
        <h3 id="login" class="center teal lighten-2">Formulario</h3>
    </div>

    <form class="" action="{{route('admin.contaNova.adicionar')}}" method="post">
       
        <div class="input-field col s10" style="margin:15px;">
            <div class="row">
              {{csrf_field()}}
                <label for="busca"><h5>Nome</h5></label>

                <input class="" type="text" name="name" class="validate" required>

                <label for="busca"><h5>Email</h5></label>

                <input class="" type="text" name="email" class="validate" required>
                <label for="busca"><h5>Senha</h5></label>

                <input class="" type="password" name="password" class="validate" required>
                  
              
            </div>
            <div class="">
                <label for="">

                </label>
            </div>
            <div class="center">
                <button class="btn waves-effect waves-light" type="submit" name="action">criar

                </button>

            </div>
        </div>
    </form>

</fieldset>
@include('layout.includes.includes.footer')
