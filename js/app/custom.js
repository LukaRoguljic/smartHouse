function heat_function() {
    var x = Math.floor((Math.random() * 13) + 15);
    document.getElementById("heat_demo").innerHTML = x;
}

function moisture_function() {
    var y = Math.floor((Math.random() * 35) + 25);
    document.getElementById("moisture_demo").innerHTML = y;
}

function illumination_function() {
    var z = Math.floor((Math.random() * 300) + 50);
    document.getElementById("illumination_demo").innerHTML = z;
}