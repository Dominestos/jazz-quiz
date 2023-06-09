@extends('layout')

@section('content')
<div class="container">

    <div class="row jumbotron p-4 h-75 p-md-5 text-white rounded bg-info bg-opacity-10">
        <div class="col-md-6">
            <h1 class="display-4 font-italic">Любишь слушать джаз и проводить время в праздничной атмосферной обстановке?</h1>
            <p class="lead my-3">Ты пришел по нужному адресу! Domusic-v - это проект, в котором есть большая доля праздника, отдыха, немножечко мозгового штурма и щепотка винтажной атмосферы. </p>
            <p class="lead my-3"> </p>
            <p class="lead my-3"></p>
            <?/*?><p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p><?*/?>
        </div>
        <div class="col-md-6 h-100 border-left border-dark">
            <img class="my-image img-fluid" src="/storage/img/main/proxy-image2.jpg" alt="Image">
        </div>
        <div class="col-md-6 h-100 border-left border-dark">
            <img class="my-image img-fluid" src="/storage/img/main/proxy-image.jpg" alt="Image">
        </div>
        <div class="col-md-6">
            <h1 class="display-4 font-italic">Прекрасная атмосфера!</h1>
            <p class="lead my-3">Джаз - это не просто музыка, это настоящее искусство. И если вы хотели бы проверить свои знания о джазе и стать частью этого увлекательного мира, то вы попали на нужный сайт. На нашем сайте вы найдете информацию о ближайших мероприятиях, а также возможность принять участие во викторинах на реальных или виртуальных мероприятиях. Присоединяйтесь к нам и погрузитесь в мир джаза!</p>
            <p class="lead my-3">Джаз - это музыка, которая соединяет людей. И мы создали этот сайт, чтобы помочь вам присоединиться к джазовому сообществу и провести время, посвященное любимому жанру. На нашем сайте вы можете найти информацию о ближайших мероприятиях, узнать новости и интересные факты о джазовой музыке, а также повысить свой уровень знаний в наших квизах и викторинах.</p>
            <?/*?><p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p><?*/?>
        </div>
        <div class="col-md-6">
            <h1 class="display-4 font-italic">Особенности нашего проекта:</h1>
            <p class="lead my-3">Пригодятся вообще любые знания: вы точно получите удовольствие от своего ума</p>
            <p class="lead my-3">Во время игры можно вкусно есть и пить, а еще забыть про телефон на пару часов </p>
            <p class="lead my-3">Разыгрываем много призов от себя и партнеров, на каждой игре профессионально фотографируем игроков </p>
            <p class="lead my-3">Отличный повод для встреч с друзьями в баре или с коллегами из другой страны в онлайн-формате </p>
            <?/*?><p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p><?*/?>
        </div>
        <div class="col-md-6 h-100 border-left border-dark">
            <img class="my-image img-fluid" src="/storage/img/main/proxy-image(mini).jpg" alt="Image">
        </div>
    </div>

    <hr>
    <?/*?>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                </div>
            </div>
        </div>
    </div>
    <?*/?>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                О том как проходят наши мероприятия
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title">Правила игры</h2>
                {{-- <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
                <p> Вас ждёт большое количество раундов с небольшими перерывами и музыкальными паузами после каждого раунда, чтобы вы не могли соскучиться. Количество раундов будет зависеть от тематики и формата мероприятия</p>

                <p>Если у вас будут появляться вопросы перед игрой или в течение ее, не стесняйтесь задавать их нашему персоналу.</p>
                    
                <p>Полные правила мероприятия можно почитать вот <a href="#">тут</a>.</p>

                <p>Также ни в коем случае нельзя забывать вкусно есть и пить во время игры! За этот пункт вашего досуга отвечают наши партнерские крутые бары.</p>
                <p>Ниже будет галерея</p>
                {{-- <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby, <a href="#">you're a firework</a>. Maybe a reason why all the doors are closed. Open up your heart and just let it begin. So très chic, yeah, she's a classic.</p>
                <blockquote>
                <p>Bikinis, zucchinis, Martinis, no weenies. I know there will be sacrifice but that's the price. <strong>This is how we do it</strong>. I'm not sticking around to watch you go down. You think you're so rock and roll, but you're really just a joke. I know one spark will shock the world, yeah yeah. Can't replace you with a million rings.</p>
                </blockquote>
                <p>Trying to connect the dots, don't know what to tell my boss. Before you met me I was alright but things were kinda heavy. You just gotta ignite the light and let it shine. Glitter all over the room <em>pink flamingos</em> in the pool. </p>
                <h2>Heading</h2>
                <p>Suiting up for my crowning battle. If you only knew what the future holds. Bring the beat back. Peach-pink lips, yeah, everybody stares.</p>
                <h3>Sub-heading</h3>
                <p>You give a hundred reasons why, and you say you're really gonna try. Straight stuntin' yeah we do it like that. Calling out my name. ‘Cause I, I’m capable of anything.</p>
                <pre><code>Example code block</code></pre>
                <p>Before you met me I was alright but things were kinda heavy. You just gotta ignite the light and let it shine.</p>
                <h3>Sub-heading</h3>
                <p>You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out.</p>
                <ul>
                <li>Got a motel and built a fort out of sheets.</li>
                <li>Your kiss is cosmic, every move is magic.</li>
                <li>Suiting up for my crowning battle.</li>
                </ul>
                <p>Takes you miles high, so high, 'cause she’s got that one international smile.</p>
                <ol>
                <li>Scared to rock the boat and make a mess.</li>
                <li>I could have rewrite your addiction.</li>
                <li>I know you get me so I let my walls come down.</li>
                </ol>
                <p>After a hurricane comes a rainbow.</p> --}}
            </div><!-- /.blog-post -->

            <?/*?><div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>I am ready for the road less traveled. Already <a href="#">brushing off the dust</a>. Yeah, you're lucky if you're on her plane. I used to bite my tongue and hold my breath. Uh, She’s a beast. I call her Karma (come back). Black ray-bans, you know she's with the band. I can't sleep let's run away and don't ever look back, don't ever look back.</p>
                <blockquote>
                <p>Growing fast into a <strong>bolt of lightning</strong>. Be careful Try not to lead her on</p>
                </blockquote>
                <p>I'm intrigued, for a peek, heard it's fascinating. Oh oh! Wanna be a victim ready for abduction. She's got that international smile, oh yeah, she's got that one international smile. Do you ever feel, feel so paper thin. I’m gon’ put her in a coma. Sun-kissed skin so hot we'll melt your popsicle.</p>
                <p>This is transcendental, on another level, boy, you're my lucky star.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>From Tokyo to Mexico, to Rio. Yeah, you take me to utopia. I'm walking on air. We'd make out in your Mustang to Radiohead. I mean the ones, I mean like she's the one. Sun-kissed skin so hot we'll melt your popsicle. Slow cooking pancakes for my boy, still up, still fresh as a Daisy.</p>
                <ul>
                <li>I hope you got a healthy appetite.</li>
                <li>You're never gonna be unsatisfied.</li>
                <li>Got a motel and built a fort out of sheets.</li>
                </ul>
                <p>Don't need apologies. Boy, you're an alien your touch so foreign, it's <em>supernatural</em>, extraterrestrial. Talk about our future like we had a clue. I can feel a phoenix inside of me.</p>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>
            <?*/?>

        </div><!-- /.blog-main -->

        @include('layouts.aside')

    </div><!-- /.row -->

</main><!-- /.container -->
@endsection