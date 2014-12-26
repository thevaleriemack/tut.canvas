var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

function setImage(newLocation) {
    context.drawImage(images[newLocation], 0, 0, 200, 200);
}