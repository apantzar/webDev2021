window.onload = init;

function init(){
    const map = new ol.map({
        view: new ol.view({
            center:[0,0],
            zoom: 2
        }),
        layers:[
            new ol.layer.Title({
                source: new ol.source.OSM()
            })
        ],
        target:'js-map'
    })
}

