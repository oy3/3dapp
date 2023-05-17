var counter = 0;

function swap(selected) {
    var cokeDs = document.querySelector('#coke-desc');
    var spriteDs = document.querySelector('#sprite-desc');
    var pepperDs = document.querySelector('#pepper-desc');

    cokeDs.classList.remove('active', 'show');
    spriteDs.classList.remove('active', 'show');
    pepperDs.classList.remove('active', 'show');

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
