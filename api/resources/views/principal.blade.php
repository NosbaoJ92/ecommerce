<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="_KwPT5EKHpE9uoS5uQ1kBuEHjSsVpFLSNk5_daYw95o" />
    <meta name="description" content="Artefato Arquitetura - Combinamos experiência em várias disciplinas, locais e setores. A prática é um líder de pensamento ativo na prática social, desenvolvendo projetos arquitetônicos premiados e estratégias urbanas em uma variedade de escalas.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
       function toggleFav(cardIndex) {
        var heartEmpty = document.getElementById("heartEmpty" + cardIndex);
        var heartFull = document.getElementById("heartFull" + cardIndex);

        heartFull.style.display = heartFull.style.display === "none" ? "block" : "none";
    }

        window.addEventListener("scroll", function() {
        const header = document.querySelector(".header");
            if (window.scrollY > 0) {
                header.style.boxShadow = "0 5px 20px rgba(0, 0, 0, 0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="/src/img/icone.png" type="image/png">
    
    <link rel="icon" href="/src/img/logo2.png" type="png">
    <title>E-COMMERCE - CARD/LIST</title>
    <style>
        .header {
        background-color: #ffffff;
        box-shadow: none; /*Valor inicial de estado*/
        transition: box-shadow 0.5s ease; /*Transição de efeito suave*/    
        }
    </style>
</head>
<body  id="inicio" class="w-screen h-screen overflow-x-hidden overflow-visible relative bg-white ">
    <header class="header flex w-full justify-center h-16 bg-white fixed z-20 max-[767px]:h-24 ">
        <div class="header w-full h-full flex justify-between items-center pl-10 pr-10 gap-10 min-[1024px]:w-3/5 min-[1024px]:p-0 ">
        <i class="fa-brands fa-shopify text-5xl text-lime-300"></i>
            <div class="flex w-full justify-between max-[767px]:hidden">
                <div class="left">
                    <ul class="flex items-center gap-6">
                        <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="index">Início</a></li>
                        <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Produtos</a></li>
                        <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Contato</a></li>
                    </ul>
                </div>
                <div class="right flex gap-4">
                    <a href="login" class="perfil flex items-center gap-2 hover:text-lime-500">
                        <i class="fa-solid fa-user "></i>
                        <p class="">Entrar</p>
                    </a>
                    <a href="#" class="perfil flex items-center gap-2 hover:text-lime-500">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p class="">Carrinho</p>
                    </a>
                </div>
            </div>
            <button id="menuHide" class=" cursor-pointer"><i class="fa-solid fa-bars min-[768px]:hidden"></i></button>
        </div>
            
    </header>
<section>
        @yield('conteudo')
</section>
</body>
</html>
