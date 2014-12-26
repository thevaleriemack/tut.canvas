var cntr = 3;

function resetCntr() {
      cntr = 3;
    }

(function() {
    var canvas = document.querySelector('#paint');
    var ctx = canvas.getContext('2d');

    var mouse = {x: 0, y: 0};
    var last_mouse = {x: 0, y: 0};

    /* Mouse Capturing Work */
    canvas.addEventListener('mousemove', function(e) {
        last_mouse.x = mouse.x;
        last_mouse.y = mouse.y;

        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
    }, false);


    /* Drawing on Paint App */
    ctx.lineWidth = 5;
    ctx.lineJoin = 'round';
    ctx.lineCap = 'round';
    ctx.strokeStyle = '#cccccc';

    canvas.addEventListener('click', function(e) {
      if (cntr==3) {
      canvas.addEventListener('mousemove', onPaint, false);
      cntr = 4;};
    }, false);

    canvas.addEventListener('mousedown', function() {
        canvas.removeEventListener('mousemove', onPaint, false);
    }, false);

    var onPaint = function() {
        ctx.beginPath();
        ctx.moveTo(last_mouse.x, last_mouse.y);
        ctx.lineTo(mouse.x, mouse.y);
        ctx.closePath();
        ctx.stroke();
    };

}());

      // save canvas image as data url (png format by default)
      var dataURL = document.querySelector('#paint').toDataURL();

      // set canvasImg image src to dataURL
      // so it can be saved as an image
      document.getElementById('canvasImg').src = dataURL;

    function clearCanvas() {
        ctx.clearRect(0, 0, 400, 400);
      };