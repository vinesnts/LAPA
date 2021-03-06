@extends('layouts.app')

@section('titulo', 'Editar postagem')
@section('content')
        <div class="container">
            <h2>Editar postagem</h2>
            <form action="{{ route('auth.postagem.atualizar', $registro->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('auth.postagem._form')
                <div class="input-btn">
                    <input name="rascunho" type="submit" class="btn btn-outline" value="Salvar como rascunho">
                    <input name="publicar" type="submit" class="btn" value="Publicar agora">
                </div>
            </form>
        </div>
@endsection
@section('scripts')

    <script>        
         function changeStatus(){
            var status= document.getElementById("tipo_postagem");
            if(status.value == "evento"){
                
                document.getElementById("dh").style.display = "block";
                
            }
            else{
                 document.getElementById("dh").style.display = "none";
                
            }
        }

        
    </script>
   
@endsection
