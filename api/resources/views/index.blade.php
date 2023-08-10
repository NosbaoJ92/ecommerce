@extends('principal')
@section('titulo', 'E-Commerce')
@section('conteudo')
  
<section class="w-full h-auto justify-center flex items-center flex-col pt-16  max-[767px]:pt-24">      
    <h1 class="font-semibold text-4xl mt-4 max-[767px]:text-xl ">NOVOS PRODUTOS</h1>
    <div class="w-8/12 flex flex-wrap justify-center gap-2 mt-6 max-[767px]:w-full max-[767px]:gap-3 ">
        <?php
            $cards = array(      
                array('image' => '/src/img/earbuds.png', 'content' => 'Eardbuds', 'moeda' => 'R$', 'preco' => '89,99'),                         
                array('image' => './src/img/notebook_xiaomi.png', 'content' => 'Xiaomi Mi Notebook Air 12.5', 'moeda' => 'R$', 'preco' => '5.785,99'),                          
                array('image' => './src/img/headset.png', 'content' => 'Headset Logitech', 'moeda' => 'R$', 'preco' => '289,99'),                          
                array('image' => './src/img/mouseG502.png', 'content' => 'Mouse Logitech', 'moeda' => 'R$', 'preco' => '358,99'),                          
                array('image' => './src/img/ps4.png', 'content' => 'Playstation 4', 'moeda' => 'R$', 'preco' => '3.899,99'),                          
                array('image' => './src/img/xiaomi.png', 'content' => 'Xiaomi Mi', 'moeda' => 'R$', 'preco' => '899,99'),                          
            );

            foreach ($cards as $index => $card) {
                //inicia-card
                echo '<a href="#" method="Post" class="item relative rounded-xl flex flex-col w-2/12 h-96 border-b pb-6 bg-white items-center hover:drop-shadow-2xl hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 max-[767px]:flex-row max-[767px]:w-full max-[767px]:h-56 max-[767px]:rounded-none max-[767px]:pb-0 min-[768px]:w-5/12 min-[1300px]:w-5/12 min-[1600px]:w-3/12   ">';
                    //inicia-imagem
                    echo '<div class="img relative w-full h-3/4 bg-zinc-300 rounded-t-xl max-[767px]:h-full max-[767px]:w-6/12 max-[767px]:rounded-none">';
                        echo '<img class="w-full h-full object-scale-down p-6 max-[767px]:object-contain " src="' . $card['image'] . '" alt="Imagem">';
                    echo '</div>';
                    //termina-imagem

                    // Elemento do botão de favorito vazio
                    echo '<div class="absolute flex justify-center items-center w-10 h-10 right-3 top-3 rounded-full p-2 z-10 max-[767px]:right-6">';
                    echo '<i id="heartEmpty' . $index . '" class="fa-regular fa-heart text-white text-2xl max-[767px]:text-zinc-300" onclick="toggleFav(' . $index . ')"></i>';
                    echo '</div>';

                    // Elemento do botão de favorito cheio
                    echo '<div id="heartFull' . $index . '" class="absolute  justify-center items-center w-10 h-10 right-3 top-2 rounded-full p-2 z-10 hidden max-[767px]:right-6">';
                    echo '<i class="fa-solid fa-heart text-2xl text-red-500 w-full h-full ... " onclick="toggleFav(' . $index . ')"></i>';
                    echo '</div>';

                    //inicia-preco
                    echo'<div class="texts p-4 flex w-full justify-between items-center max-[767px]:flex-col max-[767px]:w-6/12 max-[767px]:justify-around  max-[767px]:h-full">';
                        echo '<div class="item w-8/12">';
                            echo '<h1 class="text-sm">' . $card['content'] . '</h1>';
                    
                        echo '</div>';
                        echo '<div class="price flex justify-start text-2xl relative ">';
                            echo '<p  class="font-semibold">'.'<span class="absolute -top-2 -left-1 text-xs">'.$card['moeda'] .'</span>' . $card['preco'] . '</p>';
                        echo '</div>';
                    echo '</div>';
                    //termina-preco

                    echo '<i class="fa-solid fa-circle-plus absolute bottom-2 hover:rounded-xl w-full text-center text-lime-300 text-lg max-[767px]:bottom-4 max-[767px]:drop-shadow-xl max-[767px]:"></i>';

                    echo '</a>';
                    //termina-card
            }
        ?>     
    </div>
</section>
@stop
