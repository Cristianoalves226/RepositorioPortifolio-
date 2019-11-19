@include('layout.includes.includes.topo')

<form action="{{route('home.salvar')}}" method="post" enctype="multipart/form-data">
    <fieldset class="fsetadd" style="margin-top:5px">

        {{csrf_field()}}

        <div class="input-field">
            <label for="">titulo</label>
            <br>
            <input type="text" name="titulo" value="">

        </div>

        <div class="input-field">
            <label for="">descricao</label>
            <br>
            <input type="text" name="descricao" value="">


        </div>
        <br>

        <div class="file-field input-field">

            <div class="btn blue" align="center">
                <span>video</span>
                <input type="file" name="video">
            </div>

            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

        <div class="input-field">
            <img width="150">
        </div>


        <div class="input-field">
            <p>
                <label>
                    <input type="checkbox" name="publicado" id="test5"
                           {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true"/>
                    <span for="test5">Publicar ?</span>
                </label>
            </p>
            <br>

            <button align="center" class="btn waves-effect waves-light" type="submit" name="action">Salvar
                <i class="material-icons right">send</i>
            </button>
    </fieldset>
</form>


@include('layout.includes.includes.footer')
