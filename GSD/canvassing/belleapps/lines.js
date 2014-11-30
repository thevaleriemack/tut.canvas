var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

context.beginPath();

context.moveTo(20, 20);
context.lineTo(20, 50);

context.strokeStyle = '#cccff1';
context.lineWidth = 3;
context.lineCap = 'round';
context.stroke();