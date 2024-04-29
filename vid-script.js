const video = document.getElementById('banner-vid');
const source = video.querySelector('source');

// An array of video segments


// Function to load the next video segment
function loadVideo() {

    source.src = './poster/tmu_video.mp4';
    video.load();
}


// Start by loading the first segment
loadVideo();
