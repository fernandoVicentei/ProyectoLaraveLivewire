@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<h1 class="text-center text-info bg-dark">Bienvenido a la Biblioteca Virtual JFDFG</h1>
<p class="text-center">=Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil blanditiis quam pariatur. Aliquam quod minima dolore? Cumque neque sit error ab explicabo necessitatibus in id! Repellendus, optio corrupti fugit illum officia porro expedita iure deserunt autem, ullam, aspernatur cupiditate ratione. Aliquid, quos ullam. Accusantium minima voluptate cumque, officia quam culpa provident ea eveniet facere neque ab explicabo, rerum ad corrupti, veniam placeat quidem architecto rem. Asperiores veritatis tempore quibusdam quisquam, accusamus fugiat maxime, exercitationem omnis consequuntur sit sunt cupiditate consectetur eum. Harum velit sunt asperiores, magnam assumenda perspiciatis aperiam minima id, reiciendis, illum corporis maxime numquam nisi voluptatem dolor? Fugit.</p>
<h1 class="text-center text-info bg-dark">Sientete como en casa y disfruta leyendo los libros que tenemos a tu disposición...</h1>
<p class="text-center">=Lorem, ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus harum recusandae libero excepturi! Voluptate aliquid voluptatem veniam, numquam dicta necessitatibus fugiat! Saepe omnis beatae accusamus dolor id est necessitatibus natus cum voluptas veniam? Nam, nisi neque. Harum magni illum cupiditate, vel animi nulla cumque explicabo dolores eius obcaecati molestiae officiis, exercitationem odit excepturi nesciunt? Iusto magni suscipit porro error ex in dolores deserunt, atque magnam laudantium facilis! At ullam quae fugiat ratione modi quaerat soluta accusantium libero, dolorem architecto minus tempora a est illum quasi quos ipsa laboriosam repellendus! Enim, neque magni. Quos, ratione aliquam. Eum, excepturi, sed consectetur placeat eos nam quibusdam doloribus officiis quidem perferendis molestiae maiores sit repellendus eius tenetur magni dignissimos provident aspernatur nihil. Exercitationem, aut. Nisi deleniti modi quasi harum reprehenderit, sint aliquid eligendi soluta. Necessitatibus quo nobis tenetur, autem ex quisquam nihil id magnam enim. Voluptas consectetur adipisci animi officiis, fugit rerum at!</p>
<input wire:model='colorp' class='form-control' id='colorpa' type='hidden' value='{{$colorp}}'> 
<input wire:model='colorpantalla' class='form-control' id='colorpant'  type='hidden' value='{{$colorpantalla}}'> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
    window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}
    </script>
@stop
