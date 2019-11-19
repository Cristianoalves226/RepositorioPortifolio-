@include('layout.includes.includes.topo')

<form action="{{route('admin.editar.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
    <fieldset class="fsetadd" style="margin-top:5px">
        <input type="hidden" name="_method" value="put">

        {{csrf_field()}}



        <div class="input-field">
            <label for="">titulo</label>
            <br>
            <input type="text" name="titulo" value="{{$registro->titulo}}">

        </div>

        <div class="input-field">
            <label for="">descricao</label>
            <br>
            <input type="text" name="descricao" value="{{$registro->descricao}}">


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
              <video width="200" src="{{asset($registro->video)}}" alt="{{$registro->titulo}}"/>
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
           <div class="center">
             <button id="fsetbutton"  class="btn  deep-orange" type="submit" name="action">Atualizar

             </button>
           </div>

    </fieldset>
</form>


@include('layout.includes.includes.footer')
