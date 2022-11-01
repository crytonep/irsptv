jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
var playerInstance = jwplayer("player");

playerInstance.setup({
    playlist: [
        {
            sources: [
                {
                    default: false,
                    file: atob(source),
                    drm: {
                        clearkey: { keyId: atob(key), key: atob(key2) },
                    },
                    label: "0",
                },
            ],
        },
    ],
    width: "80%",
    height: "100%",
    aspectratio: "16:9",
    mute: false,
    autostart: false,
    logo: {
        file: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        hide: "false",
        position: "top-left",
    },
    cast: {},
    sharing: {},
});