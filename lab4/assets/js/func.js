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