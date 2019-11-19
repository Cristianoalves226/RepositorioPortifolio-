@include('layout.includes.includes.topo')
<div class="center " style="margin-top:-60px;">
    <form  action="{{route('admin.buscar')}}" method="post" enctype="multipart/form-data" lass="col s10" align="center">
      {{csrf_field()}}

        <div style="width:95%;margin:5% auto" class="input-field" align="center">
            <label for="busca"><h5>Texto para busca</h5></label>
            <br><br>
            <input  type="text"  name="titulo" class="validate" align="center" required>

              <button style="margin-bottom:-65px;" class="btn waves-effect waves-light" type="submit" name="action">Pesquisar
                   <i class="material-icons">send</i>
                 </button>
  </div>
    </form>



    <div class="row">
    @foreach($registros as $registro)
<div >
<div class="col s12" style="width:650px;margin-left:15px;  ">
    <div class="video-container"border:2px solid black;">
        <iframe width="400" height="400" src="{{asset($registro->video)}}" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
@endforeach
</diV>
</div>

@include('layout.includes.includes.footer')
