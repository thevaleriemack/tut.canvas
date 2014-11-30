var canvas = document.getElementById('lines');
var context = canvas.getContext('2d');

context.beginPath();
var w = window.innerWidth;
var h = window.innerHeight;
canvas.width = w;
canvas.height = h;

var m = 20;
var n = 20;

function save(a, b) {
    // saves numbers set for a and b
    m = a
    n = b
}

function connector(x, y) {
    // x and y are numbers
    context.moveTo(m, n);
    context.lineTo(x, y);
    save(x, y);
}

// h1
connector(100,20);

// v1
connector(100,100);

// h2
connector(40, 100);

// v2
connector(40, 200);

// h3
connector(100, 200);

// v3
connector(100, 400);

// h4
connector(20, 400);

context.strokeStyle = '#000000';
context.lineWidth = 3;
context.lineCap = 'round';
context.stroke();