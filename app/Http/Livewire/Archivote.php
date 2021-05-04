<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Archivo;
use Livewire\WithPagination;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Persona;
class Archivote extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $titulo,$autor,$editorial,$fecha,$tipo,$idOriginal,$colorpanel,$colorpantalla,$url,$idpersona;
    public $archiv='creararchiv';
    public function render()
    {        
        return view('livewire.archivote',[
            'archivo' => Archivo::join('persona_archivos','persona_archivos.idarchivo','=','archivos.id')
            ->join('personas','persona_archivos.idpersona','=','personas.id')
            ->select('archivos.id','archivos.titulo','archivos.autor','archivos.editorial','archivos.tipo','archivos.fecha','archivos.url')
            ->where('persona_archivos.idpersona','=',$this->idpersona)
            ->get()
        ]);
    }

    public function mount(){
        $post=Empresa::find(3);
        $this->colorpanel=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
        $persona=Persona::where('user_id', Auth::user()->id)->firstOrFail();
        $this->idpersona=$persona->id;
    }
    public function store(){
        
        $this->validate(['titulo'=>'required','autor'=>'required','editorial'=>'required',
                        'fecha'=>'required','tipo'=>'required','url'=>'required' ]);
        
        $nombre='pdf_'.time().'.'.$this->url->guessExtension();
        $nombre1=$this->url->storeAs('pdfs/'.$this->idpersona,$nombre,'public_uploads');
        $archivo=Archivo::create([
          'titulo'=>$this->titulo,
          'autor'=>$this->autor,
          'editorial'=>$this->editorial,
          'fecha'=>$this->fecha,
          'tipo'=>$this->tipo,
          'url'=>$nombre1
        ]);        
        $archivo->persona()->attach($this->idpersona);
        $this->default();
        //dd('correcto '.$nombre.'');
       
    }
    public function editar($idr){        

        $post=Archivo::where('id', $idr)->firstOrFail();
        $this->idOriginal=$post->id;
        $this->titulo=$post->titulo;
        $this->autor=$post->autor;
        $this->editorial=$post->editorial;
        $this->fecha=$post->fecha;
        $this->tipo=$post->tipo;
        $this->url=null;
        $this->archiv='editararchiv';
    }
    public function actualizar(){
        $this->validate(['titulo'=>'required','autor'=>'required','editorial'=>'required',
                        'fecha'=>'required','tipo'=>'required','url'=>'required' ]);     
        if($this->url!=null){
            $nombrePasado=Archivo::find($id); 
            Storage::disk('public_uploads')->delete($nombrePasado->url);

            $nombre='pdf_'.time().'.'.$this->url->guessExtension();
            $nombre1=$this->url->storeAs('pdfs/'.$this->idpersona,$nombre,'public_uploads');
            $arch=Archivo::where('id', $this->idOriginal)            
            ->update(['titulo'=>$this->titulo,'autor'=>$this->autor,'editorial'=>$this->editorial,
            'fecha'=>$this->fecha,'tipo'=>$this->tipo,'url'=>$nombre1 ]);
            $this->default();
        }
       
    }
    public function default(){
        $this->titulo='';
        $this->autor='';
        $this->editorial='';
        $this->fecha='';
        $this->tipo='';
        $this->url=null;
        $this->archiv='creararchiv';
    }

    public function destroy($id){
       $nombre=Archivo::find($id); 
       Storage::disk('public_uploads')->delete($nombre->url);
       Archivo::destroy($id);
       
       //1 -->> File::delete(public_path('pdfs/5/pdf_1619995167.pdf'));
       //2 ->>> Storage::delete('/pdfs/5/pdf_1619995167.pdf');
       
       $this->archiv='creararchiv';
    }
}
