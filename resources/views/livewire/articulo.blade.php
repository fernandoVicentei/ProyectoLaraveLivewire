<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($archivo as $item)
    <div class="col">
      <div class="contenido">
        <div class="tarjeta">
            <div class="lad adelante">
              <div class="card text-center" style="height: 100%;">
                <h2 class="card-header">{{$item->titulo}}</h2>
                <div class="card-body">
                  <h4 class="card-text"><b>Autor:</b> {{$item->autor}}</h4>
                  <h4 class="card-text"><b>Editorial:</b> {{$item->editorial}}</h4>
                  <h4 class="card-text"><b>Tipo:</b> {{$item->tipo}}</h4>                 
                </div>
                <div class="card-footer text-muted">
                  {{$item->fecha}}
                </div>
              </div>                
            </div>
            <div class="lad abajo">
              <iframe src="{{ asset($item->url) }}"  style="width:100%; height:100%;" frameborder="0" ></iframe>
             
            </div>           
        </div>       
      </div>
      <div class='container'>
         <a href="{{ asset($item->url) }}" class='btn  mx-auto ml-4' download>
         <i class='fas fa-download' style='font-size:48px;color:green'></i>
         </a> 
         <a href="{{ asset($item->url) }}" class='btn  mx-auto ml-4' target="_blank" >
         <i class='fas fa-eye' style='font-size:48px;color:black'></i>
         </a> 
      </div>      
    </div>
  
  @endforeach
  </div>
   
  <input wire:model='colorpanel' class='form-control' id='colorpa' type='hidden' > 
<input wire:model='colorpantalla' class='form-control' id='colorpant'  type='hidden'> 
</div>
  <style>
.contenido {
	height: 250px;
	margin: auto;
	width: 250px;
	-webkit-perspective: 700;
}

.tarjeta {
	height: 100%;
	width: 100%;
	transition: all 1s;
	transform-style: preserve-3d;
	box-shadow: 0px 0px 5px black;
	position: absolute;
}

.tarjeta:hover{
  transform: rotateY(180deg);
}

.lad{
	position: absolute;
	height: 100%;
	width: 100%;
   background: #F0F0F0;
  backface-visibility: hidden;
}

.adelante{ background-color: crimson; }
.adelante h3 {
   position: absolute;
   font-size: 38px;
   margin-top: 200px;
   color: #fff;
}

.abajo{
  transition: 0.5s;
  display:none;
	height: 100%;
	width: 100%;
  transform: rotateY(180deg);

}
.tarjeta:hover > .abajo{
  display:block;
}
.abajo h3 {
	display: block;
  text-align: center;
  margin: 10px 0;
}
</style>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script>
window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}

</script>
