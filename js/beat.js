const padsConfig = {
    D: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit3/hihat.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'CIMB',
    },
    F: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit3/snare.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'SPLASH',
    },
    J: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit3/kick.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'KICK',
    },
    K: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit3/tom3.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'CASE',
    },
    U: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit8/hihat.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'CLICK',
    },
    I: {
        audio: 'https://demo.agektmr.com/drumpad/samples/Kit8/snare.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'CLAP',
    },
    V: {
        audio: 'https://demo.agektmr.com/drumpad/samples/LINN/snare.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'KISS',
    },
    W: {
        audio: 'https://demo.agektmr.com/drumpad/samples/CR78/tom1.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'TIP',
    },
    E: {
        audio: 'https://demo.agektmr.com/drumpad/samples/CR78/tom2.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'BIP',
    },
    R: {
        audio: 'https://demo.agektmr.com/drumpad/samples/CR78/tom3.wav',
        color: 'rgba(0, 10, 89, .7)',
        text: 'BOOP',
    },
}

const keys = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

let editMode = false;

$(document).ready(function () {


    keys.forEach((key) => {
        $("." + key).mousedown(() => {
            //open editor;
            $(".editor").css("display", "block");
            editMode = true;
            $("#editorKey").text(key)
            $("#editorKey").addClass(key)
            $("#audio").val(padsConfig[key].audio)
            $("#text").val(padsConfig[key].text)
            $("#color").val(padsConfig[key].color)
        });
    })

    const pads = {}
    for (key in padsConfig) {
        let pad = new Audio(padsConfig[key].audio);
        $("." + key).css("background-color", padsConfig[key].color);
        $("." + key).text(padsConfig[key].text);
        pads[key] = pad;
    };

    $(window).keydown(function (e) {
        var kc = getKey(e.keyCode);
        if (kc) {
        }

        if (pads[kc] && !editMode) {
            $("." + kc).addClass("active");
            loadAndPlay(pads[kc]);
        }
    });

    $(window).keyup(function (e) {
        var kc = getKey(e.keyCode);
        if (kc && !editMode) {
            $("." + kc).removeClass("active");
        }
    });

    $("#editor").submit(function (e) {
        e.preventDefault();
        $(".editor").css("display", "none");
        editMode = false
        const key = $("#editorKey").text();
        let audio = $("#audio").val() !== "" ? $("#audio").val() : padsConfig[key].audio;
        let text = $("#text").val() !== "" ? $("#text").val() : padsConfig[key].text;
        let color = $("#color").val() !== "" ? $("#color").val() : padsConfig[key].color;

        let pad = new Audio(audio);
        $("." + key).css("background-color", color);
        $("." + key).text(text);
        pads[key] = pad;
    });

});

const getKey = (keyCode) => {
    //make sure its a letter
    if (keyCode < 60|| keyCode > 90) {
        return;
    }
    return String.fromCharCode(keyCode);

}

const loadAndPlay = (pad) => {
    pad.load();
    pad.play();
}