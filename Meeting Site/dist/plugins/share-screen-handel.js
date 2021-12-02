/*********************************start screen capture************************************/
//variables
var videoContainer = document.getElementById('video');
var startBtn = document.getElementById('start_share_screen');

/////Options for getDisplayMedia()/////
var displayMediaOptions = {
    video: {
      cursor: "always"
    },
    audio: false
};

/////stat capure button/////
startBtn.addEventListener('click', (e) => {
    startCapture();
})

/////start screen capture function/////
async function startCapture(displayMediaOptions) {
    try {
        videoContainer.srcObject = await navigator.mediaDevices.getDisplayMedia(displayMediaOptions);
    } catch(err) {
      console.error("Error: " + err);
    }
}
/*********************************end  screen capture************************************/

/********************************* start full screen video btn************************************/
var fullSreenBtn =  document.getElementById('full_screen');

fullSreenBtn.addEventListener('click', (e) => {
  if (videoContainer.requestFullscreen) {
    videoContainer.requestFullscreen();
  } else if (videoContainer.webkitRequestFullscreen) { /* Safari */
    videoContainer.webkitRequestFullscreen();
  } else if (videoContainer.msRequestFullscreen) { /* IE11 */
    videoContainer.msRequestFullscreen();
  }
})
/*********************************end full screen video btn************************************/
