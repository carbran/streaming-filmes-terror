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
                            <source src="{{ asset('storage/' . $data['video']) }}"
                                type="video/{{ pathinfo($data['video'], PATHINFO_EXTENSION) }}">
                            Desculpe, seu navegador não suporta vídeos incorporados, mas não se preocupe,
                            você pode
                            <a href="{{ asset('storage/' . $data['video']) }}">baixá-lo</a>
                            e assisti-lo com seu player de vídeo favorito!
                        </video>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
