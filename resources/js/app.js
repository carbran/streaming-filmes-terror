import './bootstrap';
import '../../public/fonts/Creepster-Regular.ttf';
// JavaScript para controlar a reprodução dos vídeos
document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('video');

    var introVideo = document.getElementById('intro-video');
    var mainContent = document.getElementById('main-content');
    var preloader = document.getElementById('preloader');

    // Adiciona um event listener para cada vídeo
    videos.forEach(video => {
        video.addEventListener('play', function() {
            // Pausa todos os outros vídeos que estão reproduzindo
            pauseAllVideos(video);
        });
    });

    function pauseAllVideos(currentVideo) {
        videos.forEach(video => {
            if (video !== currentVideo) {
                video.pause();
            }
        });
    }

    introVideo.onended = function() {
        preloader.remove();
        document.body.style.overflow = 'auto';  // Enable scrolling once the video ends
    };
});
