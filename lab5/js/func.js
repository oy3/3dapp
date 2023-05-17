var counter = 0;

function swap(selected) {
    // var coke = document.querySelector('.coke');
    // var sprite = document.querySelector('.sprite');
    // var pepper = document.querySelector('.pepper');

    var cokeDs = document.querySelector('#coke-desc');
    var spriteDs = document.querySelector('#sprite-desc');
    var pepperDs = document.querySelector('#pepper-desc');

    // coke.classList.remove('active', 'show');
    // sprite.classList.remove('active', 'show');
    // pepper.classList.remove('active', 'show');

    cokeDs.classList.remove('active', 'show');
    spriteDs.classList.remove('active', 'show');
    pepperDs.classList.remove('active', 'show');

    // document.getElementById(selected).classList.add('active', 'show');
    document.getElementById(selected.concat('-desc')).classList.add('active', 'show');
}

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('body').style.setProperty('background-color', 'lightgray', 'important');
            document.getElementById('header').style.setProperty('background-color', '#008000', 'important');
            document.getElementById('footer').style.setProperty('background-color', 'darkgray', 'important');
            break;
        case 2:
            document.getElementById('body').style.setProperty('background-color', 'white', 'important');
            document.getElementById('header').stylee.setProperty('background-color', 'black', 'important');
            document.getElementById('footer').style.setProperty('background-color', '#darkgray', 'important');
            break;
        case 3:
            document.getElementById('body').style.setProperty('background-color', '#F7F7F7', 'important');
            document.getElementById('header').style.setProperty('background-color', '#ED1C16', 'important');
            document.getElementById('footer').style.setProperty('background-color', '#FFC700', 'important');
            break;
        case 4:
            counter = 0;
            document.getElementById('body').style.setProperty('background-color', '#FFA500', 'important');
            document.getElementById('header').style.setProperty('background-color', '#C8102E', 'important');
            document.getElementById('footer').style.setProperty('background-color', '#000000', 'important');
            break;
    }
}

function changeBack() {
    document.getElementById('body').style.setProperty('background-color', 'white', 'important');
    document.getElementById('header').style.setProperty('background-color', '#343a40', 'important');
    document.getElementById('footer').style.setProperty('background-color', '#f8f9fa', 'important');
}







// function swapPage(selected) {
//     var home = document.querySelector('#home-page');
//     var about = document.querySelector('#about-page');
//     var models = document.querySelector('#models-page');

//     home.style.display = "none";
//     about.style.display = "none";
//     models.style.display = "none";

//     document.getElementById(selected).style.display = "block";

//     // Add active class to the clicked nav item
//     var navItems = document.querySelectorAll('.nav-item');
//     navItems.forEach(function (item) {
//         item.classList.remove('active');
//     });
//     var selectedNavItem = document.querySelector(`a[href="javascript:swapPage('${selected}')"]`).parentNode;
//     selectedNavItem.classList.add('active');
// }

var spinning = true;
var lightOn = true;

function spin() {
    spinning = !spinning;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function wireframe() {
    var e = document.getElementById('model');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function lighting() {
    lightOn = !lightOn;
    document.getElementById('model__lighting').setAttribute('headlight', lightOn.toString());
}

function cam1() {
    document.getElementById('model__Camera01').setAttribute('bind', 'true');
}

function cam2() {
    document.getElementById('model__Camera02').setAttribute('bind', 'true');
}
