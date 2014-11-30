var canvas = document.getElementById('lines');
var context = canvas.getContext('2d');

context.beginPath();
var w = window.innerWidth;
var h = window.innerHeight;
canvas.width = w;
canvas.height = h;

/** Create lines that connect to each other by
 * saving the endpoint of one and making it the
 * starting point of the next.
 **/

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

/* Create backing labels for text */

function orangeBack(x, y) {
    context.beginPath();
    connector(x, y);
    context.lineWidth = 20;
    context.strokeStyle = '#fa7e00';
    context.lineCap = 'round';
    context.stroke();
}

/* Create standard text */
function label(t, x, y) {
    // t is a string. x and y are numbers
    context.fillStyle = "#000";
    context.font = "12px Helvetica";
    context.fillText(t, x, y);
}

// h1
connector(100,20);

// v1
connector(100,100);

// h2
connector(40, 100);

// v2
connector(40, 200);

label('See your deliverer', m, 204);
orangeBack(100, 200);

// END LINES
context.stroke();


// START LINES
context.beginPath();

// h3
connector(100, 200);

// v3
connector(100, 400);

// h4
connector(20, 400);

context.strokeStyle = '#ccc';

context.lineWidth = 3;
context.lineCap = 'round';
context.stroke();

      // save canvas image as data url (png format by default)
      var dataURL = canvas.toDataURL();

      // set canvasImg image src to dataURL
      // so it can be saved as an image
      document.getElementById('canvasImg').src = dataURL;