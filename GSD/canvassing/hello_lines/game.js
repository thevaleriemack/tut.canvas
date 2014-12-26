var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

context.beginPath();

/* H */
context.moveTo(20, 20);
context.lineTo(20, 50);

context.moveTo(20, 35);
context.lineTo(35, 35);

context.moveTo(35, 20);
context.lineTo(35, 50);

/* I */
context.moveTo(50, 22);
context.lineTo(65, 22);

context.moveTo(57, 22);
context.lineTo(57, 49);

context.moveTo(50, 49);
context.lineTo(65, 49);

/* Y */
context.moveTo(90, 20);
context.lineTo(100, 35);

context.moveTo(100, 35);
context.lineTo(110, 20);

context.moveTo(100, 35);
context.lineTo(100, 50);

/* O */
context.moveTo(120, 21);
context.lineTo(135, 21);

context.moveTo(120, 22);
context.lineTo(120, 50);

context.moveTo(120, 50);
context.lineTo(135, 50);

context.moveTo(135, 50);
context.lineTo(135, 22);

/*U*/
context.moveTo(145, 22);
context.lineTo(145, 50);

context.moveTo(145, 50);
context.lineTo(160, 50);

context.moveTo(160, 50);
context.lineTo(160, 22);

context.strokeStyle = '#cccff1';
context.lineWidth = 3;
context.lineCap = 'round';
context.stroke();