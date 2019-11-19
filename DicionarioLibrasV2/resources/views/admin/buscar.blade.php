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
<div class="video" style="width:600px">
<h3 class="row center "  style="font-weight:bold;margin-bottom:-5px;border:2px solid #696969 ">{{$titulo->titulo}}</h3>
    <div class="video-container" style="padding:auto 0;border:2px solid black;">
        <iframe width="200" height="200" src="{{asset($titulo->video)}}" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
</diV>
@include('layout.includes.includes.footer')
