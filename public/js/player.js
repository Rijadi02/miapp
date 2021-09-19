var source = (number) => document.getElementById("source-" + number);
var playBtn = (number) => document.getElementById("playbtn-" + number);
var seekbar = (number) => document.getElementById("seekbar-" + number);
var currentTime = (number) => document.getElementById("current-time-" + number);
var duration = (number) => document.getElementById("duration-" + number);

var volumeBox = (number) => document.getElementById("volume-box-" + number);
var volume = (number) => document.getElementById("volume-" + number);

var sources = [];

var audio = 1;

function handlePlay(number) {
    if (source(number).paused) {
        sources.map((number) => {
            source(number).pause();
            volumeBox(number).classList =
                "volume-box d-none flex-row justify-center align-center";
            playBtn(number).className = "play";
            playBtn(number).innerHTML = '<i class="fas fa-play"></i>';
        });

        volumeBox(number).classList =
            "volume-box d-flex flex-row justify-center align-center";
        volume(number).value = audio;
        source(number).volume = audio;

        source(number).play();
        playBtn(number).className = "pause";
        playBtn(number).innerHTML = '<i class="fas fa-pause"></i>';
    } else {
        source(number).pause();
        playBtn(number).className = "play";
        playBtn(number).innerHTML = '<i class="fas fa-play"></i>';
    }
}

function sourceEnded(number) {
    playBtn(number).className = "play";
    playBtn(number).innerHTML = '<i class="fas fa-play"></i>';
    source(number).currentTime = 0;

    var index = parseInt(source(number).dataset.index);
    if (sources.length - 1 <= index) {
        var element = document.querySelector(`[data-index='0']`);
        handlePlay(parseInt(element.dataset.num));
    } else {
        var element = document.querySelector(`[data-index='${index + 1}']`);
        handlePlay(parseInt(element.dataset.num));
    }
}

function addZeros(number) {
    if (number <= 9) {
        return "0" + number;
    }
}

function onSourceLoad(number) {
    seekbar(number).max = source(number).duration;
    var ds = parseInt(source(number).duration % 60);
    var dm = parseInt((source(number).duration / 60) % 60);
    duration(number).innerHTML = dm + ":" + addZeros(ds);
    sources.push(number);
}

function ontTimeUpdate(number) {
    seekbar(number).value = source(number).currentTime;
    var cs = parseInt(source(number).currentTime % 60);
    var cm = parseInt((source(number).currentTime / 60) % 60);
    currentTime(number).innerHTML = cm + ":" + addZeros(cs);
}

function handleSeekBar(number) {
    source(number).currentTime = seekbar(number).value;
}

// repeat
var repIcon = (number) => document.getElementById("repeat-" + number);

function handleRepeat(number) {
    if (source(number).loop == true) {
        source(number).loop = false;
        repIcon(number).classList.toggle("active");
    } else {
        source(number).loop = true;
        repIcon(number).classList.toggle("active");
    }
}

// volume
// var volIcon = document.querySelector(".volume");
// var volBox = document.querySelector(".volume-box");
// var volumeRange = (number) => document.getElementById("volume-" + number);
// var volumeDown = document.querySelector(".volume-down");
// var volumeUp = document.querySelector(".volume-up");

// function handleVolume() {
//     volIcon.classList.toggle("active");
//     volBox.classList.toggle("active");
// }

// volumeDown.addEventListener("click", handleVolumeDown);
// volumeUp.addEventListener("click", handleVolumeUp);

// function handleVolumeDown() {
//     volumeRange.value = Number(volumeRange.value) - 20;
//     source(number).volume = volumeRange.value / 100;
// }

// function handleVolumeUp() {
//     volumeRange.value = Number(volumeRange.value) + 20;
//     source(number).volume = volumeRange.value / 100;
// }