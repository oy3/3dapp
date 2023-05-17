$(document).ready(function () {

    var xmlHttp = new XMLHttpRequest();
    var htmlCode = "";
    var response;
    var send = "scripts/php/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);


    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            response = xmlHttp.responseText.split("~");

            for (var i = 0; i < response.length; i++) {
                htmlCode += '<a href="' + response[i] + '" data-lightbox="models" data-title="3D images">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '" id="image_thumbnail"/>';
                htmlCode += '</a>';
            }

            document.getElementById('gallery_coke').innerHTML = htmlCode;
            // document.getElementById('gallery_sprite').innerHTML = htmlCode;
            // document.getElementById('gallery_pepper').innerHTML = htmlCode;
        }
    }
});