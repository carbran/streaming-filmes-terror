<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super 8 - Filmes de Terror</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    <div id="preloader">
        <video id="intro-video" src="{{asset('storage/videos/intro/giphy.mp4')}}" autoplay muted></video>
    </div>
    <div id="main-content">
        <div class="container">
            <div class="super8">
                <img class="super8-img" src="{{asset('storage/images/super8.png')}}" alt="Super8">
            </div>
            <h1>Filmes de Terror</h1>
            <div class="video-grid">
                @foreach ($videoData as $data)
                    <div class="video-item">
                        <h3 class="video-title">{{$data['name']}}</h3>
                        <video controls preload="none" poster="{{ asset('storage/' . $data['image']) }}">
                            <source src="{{$data['video']}}"
                                type="video/{{ pathinfo($data['video'], PATHINFO_EXTENSION) }}">
                            Seu navegador não suporta a tag de vídeo.
                        </video>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-foot">
        <div class="row-foot">
            <div class="col-foot">
                <h3>Sobre o Site</h3>
                <p>Este site é um projeto fictício de streaming de vídeos.</p>
            </div>
            <div class="col-foot">
                <h3>Créditos dos Vídeos</h3>
                <p>Os vídeos apresentados são propriedade do canal <a href="https://www.youtube.com/@otaviouga">Super 8</a>.</p>
            </div>
        </div>
    <div class="credits">
        <p>&copy; 2024 Super 8 Filmes de Terror - Nenhum direito reservado.</p>
    </div>
</div>
</body>
</html>
