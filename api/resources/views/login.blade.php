@extends('principal')
@section('titulo', 'E-Commerce - Login')
@section('conteudo')
  
<section class="w-full h-screen justify-center flex items-center flex-col pt-16  max-[767px]: ">      
<div class="main-login w-full h-full flex max-[767px]:flex-col max-[767px]:items-center ">
        <div class="left-login flex flex-col justify-center items-center w-6/12 h-full p-24 max-[767px]:w-full max-[767px]:h-1/4 max-[767px]:p-10 ">
            <h1 class="text-8xl  max-[767px]:text-xl">Acesse sua conta <br> e aproveite os melhores produtos.</h1>
        </div>
        <div class="right-login w-6/12  flex flex-col justify-center items-center bg-lime-300 max-[767px]:w-full max-[767px]:h-full">
            <div class="card-login w-4/12 h-2/4 flex flex-col justify-evenly items-center bg-white max-[767px]:w-10/12 max-[767px]:h-3/4 ">
                <h1 class="text-5xl font-bold max-[767px]:text-3xl">LOGIN</h1>
                <div class="login flex flex-col w-full h-48 justify-center items-center gap-4">
                    <div class="relative">
                        <input type="text" id="floating_outlined" type="text" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-lime-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " require />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark: px-2 peer-focus:px-2 peer-focus:text-lime-300 peer-focus:dark:text-lime-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Usuário</label>
                    </div>
                    <div class="relative">
                        <input type="text" id="floating_outlined" type="password" minlength="8" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-lime-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " onclick="myFunction()" require/>
                        <label for="floating_outlined"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark: px-2 peer-focus:px-2 peer-focus:text-lime-300 peer-focus:dark:text-lime-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Senha</label>
                    </div>
                    <button class="btn-login w-4/12 h-10 bg-lime-300 text-white text-xl hover:bg-lime-500 transition-all duration-200 delay-200 font-bold max-[767px]:text-xl max-[767px]:w-4/12 max-[767px]:h-10" type="submit">ENTRAR</button>
                    <a href="" class="text-lime-300 font-medium hover:text-lime-500">cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
