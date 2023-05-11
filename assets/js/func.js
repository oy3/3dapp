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

function swapPage(selected) {
    var home = document.querySelector('#home-page');
    var about = document.querySelector('#about-page');
    var models = document.querySelector('#models-page');

    home.style.display = "none";
    about.style.display = "none";
    models.style.display = "none";

    document.getElementById(selected).style.display = "block";

    // Add active class to the clicked nav item
    var navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(function (item) {
        item.classList.remove('active');
    });
    var selectedNavItem = document.querySelector(`a[href="javascript:swapPage('${selected}')"]`).parentNode;
    selectedNavItem.classList.add('active');
}

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
