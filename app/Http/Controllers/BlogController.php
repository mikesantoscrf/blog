<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\categoria;
use App\Models\User;
use App\Models\Comentario;



class BlogController extends Controller
{
   public function index()
   {
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
   }

   public function categoria(){
    $categorias = Categoria::orderBy('nome', 'ASC')->get();
    return view('blog.categoria', ['categorias' => $categorias]);
    }

   public function categoriaPostagem($id){
       $postagens = Postagem::where('categoria_id' , $id)->orderBy('id', 'DESC')->get();
       return view('welcome', ['postagens' => $postagens]);
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('blog.autor', ['autores' => $autores]);
        }


        public function autorPostagem($id){
            $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
            return view('welcome', ['postagens' => $postagens]);
            }

            public function postagem($id){
                $postagem = Postagem::find($id);
                return view('blog.postagem', ['postagem' => $postagem]);
                }

                public function postagemComentario(Request $request, $id){



                    $comentario = new Comentario;
                    $comentario->conteudo = $request->conteudo;
                    $comentario->user_id = auth()->user()->id;
                    $comentario->postagem_id = $id;
                    $comentario->save();


                return redirect()->route('blog.postagem' , $id);

                }


        }
