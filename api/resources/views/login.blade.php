@extends('principal')
@section('titulo', 'E-Commerce - Login')
@section('conteudo')
  
<section class="w-full h-screen justify-center flex items-center flex-col pt-16  max-[767px]: ">      
<div class="main-login w-full h-full flex max-[767px]:flex-col max-[767px]:items-center ">
        <div class="left-login flex flex-col justify-center items-center w-6/12 h-full p-24 max-[767px]:w-full max-[767px]:h-1/4 max-[767px]:p-10 border  ">
            <h1 class="text-8xl  max-[767px]:text-xl">Acesse sua conta <br> E compre os melhores produtos.</h1>
        </div>
        <div class="right-login w-6/12  flex flex-col justify-center items-center bg-lime-300 max-[767px]:w-full max-[767px]:h-3/4">
            <div class="card-login w-6/12 h-3/5 flex flex-col justify-evenly items-center bg-white max-[767px]:w-10/12 max-[767px]:h-3/4">
                <h1 class="text-5xl font-bold max-[767px]:text-xl">LOGIN</h1>
                <div class="login flex flex-col w-full justify-center items-center gap-2">
                <div class="textfield w-6/12  flex justify-between items-center p-2 max-[767px]:w-full max-[767px]:p-4">
                    <label for="usuario">Usuário</label>
                    <input class="w-8/12" type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield w-6/12  flex justify-between items-center p-2 max-[767px]:w-full  max-[767px]:p-4">
                    <label for="senha">Senha</label>
                    <input class="w-8/12" type="password" name="senha" placeholder="Senha">
                </div>
                
                </div>
                
                <button class="btn-login w-4/12 h-16 bg-lime-300 text-white text-xl hover:bg-lime-500 transition-all duration-200 delay-200 font-bold max-[767px]:text-xl max-[767px]:w-6/12 max-[767px]:h-10">ENTRAR</button>
            </div>
        </div>
    </div>
</section>
@stop
