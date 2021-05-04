<div class="container">
<form class='contacto' action="danielgerman335@gmail.com" method="post">
    <div class="row align-items-center">
            <div class="col">
                <h1>Contactanos</h1><br>
                <h3><b>Direccion:</b> av. santi esteban Nº439</h3><br>
                <h3><b>Telefono:</b> 73627431 - 3355748</h3><br>
                <h3><b>Correo Electronico:</b> bibliotecagroup4@gmail.com</h3><br>
                <h3>Bolivia - Santa Cruz</h3>
            </div>
            <img src='img/empresa.jpg' width='200' heigth='200' >            
    </div>
</form>       
        
    <input wire:model='colorpanel' class='form-control' id='colorpa' type='hidden' > 
<input wire:model='colorpantalla' class='form-control' id='colorpant'  type='hidden'> 
</div>

<style>
.contacto{
    border: 1px solid #CED5D7;
    border-radius: 6px;
    padding: 45px 45px 20px;
    margin-top: 50px;
    background-color: white;
    box-shadow: 0px 5px 10px #B5C1C5, 0 0 0 10px #EEF5F7 inset;
}
.contacto div{
    margin-bottom: 15px;
}
h1{
  width: 100%;
  color: #000000;
  font-size: 80px;
  letter-spacing: 5px;
  
  text-shadow: -1px -1px 0px #64FF00,
    3px 3px 0px #64FF00,
    6px 6px 0px #64FF00;
}
</style>
<script>
window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}
</script>