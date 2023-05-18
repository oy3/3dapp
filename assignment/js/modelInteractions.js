var spinning = false;
let model;
let lightOn = true;


function getModel() {
    var modelName = getActiveTab();
    if (modelName) {
        model = modelName;
    }
}

function spin() {
    getModel();
    spinning = !spinning;
    document.getElementById(model + '__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
    getModel();
    spinning = false;
    document.getElementById(model + '__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    getModel();
    if (document.getElementById(model + '__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById(model + '__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById(model + '__RotationTimer').setAttribute('enabled', 'false');
}

var isPointsToggled = false;


function wireframe() {
    getModel();
    var e = document.getElementById(model + 'X3D');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
    // isPointsToggled = false;

}

// function vertex() {
//     getModel();

//     var e = document.getElementById(model + 'X3D');
//     if (!isPointsToggled) {
//         e.runtime.togglePoints(true);
//         isPointsToggled = true;
//     }
// }

function backDefault() {
    getModel();
    document.getElementById(model + '__headlight').setAttribute('headlight', 'true');
}

function resetDefault() {
    getModel();
    document.getElementById(model + '__CameraFront').setAttribute('bind', 'true');
    document.getElementById(model + '__headlight').setAttribute('headlight', 'true');

    document.getElementById(model + '__Omni001').setAttribute('on', 'true');
    document.getElementById(model + '__Omni002').setAttribute('on', 'true');
    document.getElementById(model + '__Omni003').setAttribute('on', 'true');
    document.getElementById(model + '__Omni004').setAttribute('on', 'true');

    // var e = document.getElementById(model + 'X3D')
    // if (!isPointsToggled) {
    //     e.runtime.togglePoints(false);
    //     isPointsToggled = true;
    // }
}

function headlight() {
    getModel();
    lightOn = !lightOn;
    let headlightElement = document.getElementById(model + '__headlight');

    if (headlightElement) {
        headlightElement.setAttribute('headlight', lightOn.toString());
    }
}

function omniLights() {
    getModel();
    lightOn = !lightOn;

    document.getElementById(model + '__Omni001').setAttribute('on', lightOn.toString());
    document.getElementById(model + '__Omni002').setAttribute('on', lightOn.toString());
    document.getElementById(model + '__Omni003').setAttribute('on', lightOn.toString());
    document.getElementById(model + '__Omni004').setAttribute('on', lightOn.toString());
    if (model == 'coke' || model == 'pepper') {
        document.getElementById(model + '__Omni005').setAttribute('on', lightOn.toString());
        document.getElementById(model + '__Omni006').setAttribute('on', lightOn.toString());
    }
}

function cameraFront() {
    getModel();
    document.getElementById(model + '__CameraFront').setAttribute('bind', 'true');

}

function cameraBack() {
    getModel();
    document.getElementById(model + '__CameraBack').setAttribute('bind', 'true');

}

function cameraLeft() {
    getModel();
    document.getElementById(model + '__CameraLeft').setAttribute('bind', 'true');

}

function cameraRight() {
    getModel();
    document.getElementById(model + '__CameraRight').setAttribute('bind', 'true');

}

function cameraTop() {
    getModel();
    document.getElementById(model + '__CameraTop').setAttribute('bind', 'true');

}

function cameraBottom() {
    getModel();
    document.getElementById(model + '__CameraBottom').setAttribute('bind', 'true');

}