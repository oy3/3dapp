Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });




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

// var spinning = false;
// var lightOn = true;

// function spin() {
//     spinning = !spinning;
//     document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
// }

// function stopRotation() {
//     spinning = false;
//     document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
// }

// function animateModel() {
//     if (document.getElementById('model__RotationTimer').getAttribute('enabled') != 'true') {
//         document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
//     } else {
//         document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
//     }
// }

// function wireframe() {
//     var e = document.getElementById('model');
//     e.runtime.togglePoints(true);
//     // e.runtime.togglePoints(true);
// }

// function lighting() {
//     lightOn = !lightOn;
//     document.getElementById('model__lighting').setAttribute('headlight', lightOn.toString());
// }

// function cam1() {
//     document.getElementById('model__Camera001').setAttribute('bind', 'true');
// }

// function cam2() {
//     document.getElementById('model__Camera002').setAttribute('bind', 'true');
// }
