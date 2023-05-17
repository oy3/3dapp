$(document).ready(function () {

    $.getJSON('./application/model/data.json', function (jsonObj) {
        console.log(jsonObj);

        $('#home_link').html(jsonObj.pageButtonData[0].home);
        $('#about_link').html(jsonObj.pageButtonData[0].about);
        $('#models_link').html(jsonObj.pageButtonData[0].models);
        $('#contact_link').html(jsonObj.pageButtonData[0].contact);

        $('#coke-banner').attr("src", jsonObj.pageImageData[0].cokeImg);
        $('#sprite-banner').attr("src", jsonObj.pageImageData[0].spriteImg);
        $('#pepper-banner').attr("src", jsonObj.pageImageData[0].pepperImg);

        $('.moreBtn').html(jsonObj.pageButtonData[0].more);

        $('#title_home').html(jsonObj.pageTextData[0].title);
        $('#subTitle_home').html(jsonObj.pageTextData[0].subTitle);
        $('#description_home').html(jsonObj.pageTextData[0].description);

        $('#title_left').html(jsonObj.pageTextData[1].title);
        $('#subTitle_left').html(jsonObj.pageTextData[1].subTitle);
        $('#description_left').html(jsonObj.pageTextData[1].description);

        $('#title_centre').html(jsonObj.pageTextData[2].title);
        $('#subTitle_centre').html(jsonObj.pageTextData[2].subTitle);
        $('#description_centre').html(jsonObj.pageTextData[2].description);

        $('#title_right').html(jsonObj.pageTextData[3].title);
        $('#subTitle_right').html(jsonObj.pageTextData[3].subTitle);
        $('#description_right').html(jsonObj.pageTextData[3].description);

        $('#model_title_coke').html(jsonObj.pageTextData[4].x3dModelTitle);
        $('#model_method_coke').html(jsonObj.pageTextData[4].x3dCreationMethod);
        $('#title_coke').html(jsonObj.pageTextData[4].title);
        $('#subTitle_coke').html(jsonObj.pageTextData[4].subTitle);
        $('#description_coke').html(jsonObj.pageTextData[4].description);

        $('#model_title_sprite').html(jsonObj.pageTextData[5].x3dModelTitle);
        $('#model_method_sprite').html(jsonObj.pageTextData[5].x3dCreationMethod);
        $('#title_sprite').html(jsonObj.pageTextData[5].title);
        $('#subTitle_sprite').html(jsonObj.pageTextData[5].subTitle);
        $('#description_sprite').html(jsonObj.pageTextData[5].description);

        $('#model_title_pepper').html(jsonObj.pageTextData[6].x3dModelTitle);
        $('#model_method_pepper').html(jsonObj.pageTextData[6].x3dCreationMethod);
        $('#title_pepper').html(jsonObj.pageTextData[6].title);
        $('#subTitle_pepper').html(jsonObj.pageTextData[6].subTitle);
        $('#description_pepper').html(jsonObj.pageTextData[6].description);

        $('#cokeX3D').find("inline").attr("url", jsonObj.x3dUrlPath[0].cokeUrl);
        $('#spriteX3D').find("inline").attr("url", jsonObj.x3dUrlPath[0].spriteUrl);
        $('#pepperX3D').find("inline").attr("url", jsonObj.x3dUrlPath[0].pepperUrl);

        $('#gallery-title').html(jsonObj.pageTextData[7].galleryTitle);
        $('#gallery-desc').html(jsonObj.pageTextData[7].galleryDescription);

        $('#camera-title').html(jsonObj.pageTextData[8].cameraTitle);
        $('#camera-desc').html(jsonObj.pageTextData[8].cameraSubtitle);

        $('#anim-title').html(jsonObj.pageTextData[9].animationTitle);
        $('#anim-desc').html(jsonObj.pageTextData[9].animationSubtitle);

        $('#light-title').html(jsonObj.pageTextData[10].renderTitle);
        $('#light-desc').html(jsonObj.pageTextData[10].renderSubtitle);

        $('#about_title').html(jsonObj.pageTextData[11].about_page_title);
        $('#about_description').html(jsonObj.pageTextData[11].about_page_desc);
    });
});