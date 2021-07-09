<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CardsGame</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('site/css/main.css') }}">

    </head>
    <body class="antialiased">
        <nav>
            <div>
                <img src="{{asset('images/logo.png')}}" alt="imagem logo">
                <h1>SuperGiantGames</h1>
            </div>
        </nav>

        <section id="home" class="section__home">
            <div class="home__img__fundo">
                <div class="container home__card__pai">
                    <div class="home__card">
                        <div>
                            <p>
                                {{ $data['inico']->titulo }}
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('storage/' . $data['inico']->foto)}}" alt="Imagem" class="img-fluid">
                        </div>
                        <div>
                            <p>
                                {{ $data['inico']->descricao }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <section class="section__cards__pai">
            <div id="cards" class="section__cards splide">
                <div class="cards splide__track">
                    <ul class="ul-cards splide__list">

                    @foreach($data['cards'] as $c)

                        <li class="li-cards splide__slide">
                            <div class="div-card">
                                <div><img src="{{asset('storage/' . $c->foto)}}" alt="Imagem" class="img-fluid"></div>
                                <div>
                                    <p>
                                        {{ $c->descricao }}
                                    </p>
                                </div>
                            </div>
                        </li>

                    @endforeach
                    </ul>
                </div>
            </div>

        </section>

        <section class="form-section" id="form">
            <div class="container">
                <div class="home__card__form">
                    <div class="form-titulo">
                        <h1>Formulario</h1>
                    </div>

                    <div class="form-paragrafo">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="form-formulario">
                        <form action="">
                            <div class="input-form">
                                <input type="text" class="style-input" name="" id="" placeholder="Nome">
                                <input type="email" class="style-input" name="" id="" placeholder="Email">
                            </div>

                            <div class="text-area-form">
                                <textarea name="" id="" class="style-text-area" placeholder="Mensagem"></textarea>
                            </div>

                            <div>
                                <button type="submit" class="contact__button">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>

        </footer>




    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <script>
        new Splide( '#cards', {
            type     : 'slide',
            rewind   : true,
            autoWidth: true,

            trimSpace: false,
            gap			 : '3rem',
            focus    : 'center',

            padding	 : {
                right	 : '5rem',
                left	 : '5rem',
            },

            breakpoints: {
                640: {
                    trimSpace: true,
                    gap			 : '3rem',
                },
            }
        } ).mount();
    </script>
    </body>

</html>
