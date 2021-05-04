
<h1 class="text-center text-info bg-dark">Bienvenido a la Biblioteca Virtual JFDFG</h1>
<p class="text-center">Somos una Biblioteca Virtual que nació con el deseo de...<br>
    =Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis iusto magnam doloribus nostrum cum, at reiciendis, repellat laudantium adipisci quas aut eum a alias, totam ab amet iste culpa praesentium ratione molestiae perferendis sapiente nemo expedita nesciunt. Nulla, quibusdam voluptatem ut esse cumque molestias, mollitia ullam culpa consequuntur ipsam cum tempore quisquam, odit eum quod expedita possimus necessitatibus fugit. Praesentium maxime sit doloremque error commodi dolore nihil ea tempora fuga, obcaecati magnam quibusdam veritatis consequuntur numquam similique inventore, ad tempore, necessitatibus beatae. Dolore sint natus dolores odit minus quas dolorum eaque eligendi similique laboriosam! In veniam corporis cumque rem expedita.
</p>

<h1 class="text-center text-info bg-dark">Éste proyecto fue realizado en la materia de TW2</h1>
<p class="text-center">Utilizando la tecnología de Laravel-Livewire que fue implementada por los estudiantes: <br>
    Fernando Vicente<br>
    Fernanda Salvatierra<br>
    Gustavo Soto<br>
    Daniel Medina<br>
    Jesús Espinoza<br>
</p>
<input wire:model='colorpantalla' class='form-control' id='colorpant' type='hidden' value='{{$colorpantalla}}'>
<input wire:model='colorpanel' class='form-control' id='colorpa' type='hidden' value='{{$colorpanel}}'>  
    <script>
    window.onload = function () {
        document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
        document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
        }
    </script>
