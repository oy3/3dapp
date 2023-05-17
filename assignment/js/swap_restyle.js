var counter = 0;

function swap(selected) {
    resetDefault();

    var cokeDs = document.querySelector('#coke-desc');
    var spriteDs = document.querySelector('#sprite-desc');
    var pepperDs = document.querySelector('#pepper-desc');

    cokeDs.classList.remove('active', 'show');
    spriteDs.classList.remove('active', 'show');
    pepperDs.classList.remove('active', 'show');

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


function changeLook() {
    counter += 1;
    // Get all card elements
    let cards = document.getElementsByClassName('card');
    // Get all button with dark color
    let btn_dark = document.getElementsByClassName('btn-dark');
    let btn_dark_array = Array.from(btn_dark);
 // Get all button with light color
    let btn_light= document.getElementsByClassName('btn-light');
    let btn_light_array = Array.from(btn_light);
    switch (counter) {
        case 1: //Dark mode
            // Loop through the card elements and add the dark-mode class
            for (let i = 0; i < cards.length; i++) {
                cards[i].classList.add('bg-dark');
                cards[i].classList.add('text-white');
            }
            // Loop through the button elements with dark color and add the light-mode class
            for (let i = 0; i < btn_dark_array.length; i++) {
                btn_dark_array[i].classList.add('btn-light');
                btn_dark_array[i].classList.remove('btn-dark');
            }
            document.getElementById('body').style.setProperty('background-color', '#181818', 'important');
            document.getElementById('header').style.setProperty('background-color', 'black', 'important');
            document.getElementById('footer').style.setProperty('background-color', 'black', 'important');
            break;
        case 2:
            // Loop through the card elements and change to light mode
            for (let i = 0; i < cards.length; i++) {
                cards[i].classList.remove('bg-dark');
                cards[i].classList.remove('text-white');
            }
            // Loop through the button elements with dark color and returns to default
            for (let i = 0; i < btn_light_array.length; i++) {
                btn_light_array[i].classList.remove('btn-light');
                btn_light_array[i].classList.add('btn-dark');
            }
            document.getElementById('body').style.setProperty('background-color', 'lightgray', 'important');
            document.getElementById('header').style.setProperty('background-color', '#008000', 'important');
            document.getElementById('footer').style.setProperty('background-color', 'darkgray', 'important');;
            break;
        case 3:
                // Loop through the card elements and change to light mode
            for (let i = 0; i < cards.length; i++) {
                cards[i].classList.remove('bg-dark');
                cards[i].classList.remove('text-white');
            }
             // Loop through the button elements with dark color and returns to default
             for (let i = 0; i < btn_light_array.length; i++) {
                btn_light_array[i].classList.remove('btn-light');
                btn_light_array[i].classList.add('btn-dark');
            }
            document.getElementById('body').style.setProperty('background-color', '#F7F7F7', 'important');
            document.getElementById('header').style.setProperty('background-color', '#ED1C16', 'important');
            document.getElementById('footer').style.setProperty('background-color', '#FFC700', 'important');
            break;
        case 4:
                // Loop through the card elements and change to light mode
            for (let i = 0; i < cards.length; i++) {
                cards[i].classList.remove('bg-dark');
                cards[i].classList.remove('text-white');
            }
             // Loop through the button elements with dark color and returns to default
             for (let i = 0; i < btn_light_array.length; i++) {
                btn_light_array[i].classList.remove('btn-light');
                btn_light_array[i].classList.add('btn-dark');
            }
            counter = 0;
            document.getElementById('body').style.setProperty('background-color', '#FFFFFF', 'important');
            document.getElementById('header').style.setProperty('background-color', '#282828', 'important');
            document.getElementById('footer').style.setProperty('background-color', '#B3B3B3', 'important');
            break;
    }
}

function changeBack() {
    // Get all card elements
    let cards = document.getElementsByClassName('card');
        // Get all button with dark color
        let btn_light = document.getElementsByClassName('btn-light');
        let btn_light_array = Array.from(btn_light);

      // Loop through the card elements and change to light mode
    for (let i = 0; i < cards.length; i++) {
        cards[i].classList.remove('bg-dark');
        cards[i].classList.remove('text-white');
    }
     // Loop through the button elements with dark color and returns to default
     for (let i = 0; i < btn_light_array.length; i++) {
        btn_light_array[i].classList.remove('btn-light');
        btn_light_array[i].classList.add('btn-dark');
    }
    document.getElementById('body').style.setProperty('background-color', 'white', 'important');
    document.getElementById('header').style.setProperty('background-color', '#343a40', 'important');
    document.getElementById('footer').style.setProperty('background-color', '#f8f9fa', 'important');
}
