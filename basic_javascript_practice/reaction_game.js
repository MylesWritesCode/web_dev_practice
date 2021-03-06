var startTime = new Date().getTime();
circle = document.getElementById("circle")

function getRandomColor () {
  var letters = '0123456789ABCDEF'.split('');
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
};

function shapeAppear() {
  var randTop = Math.random() * 400;
  var randLeft = Math.random() * 600;
  var randWidth = (Math.random() * 300) + 50;
  circle.style.backgroundColor = getRandomColor();
  circle.style.top = randTop + "px";
  circle.style.left = randLeft + "px";
  circle.style.width = randWidth + "px";
  circle.style.height = randWidth + "px";
  circle.style.display = "block";
  startTime = new Date().getTime();
};

function shapeDelay() {
  setTimeout(shapeAppear, Math.random() * 2000);
};

shapeDelay();

circle.onclick = function() {
  circle.style.display = "none";
  var endTime = new Date().getTime();
  var timeTaken = (endTime - startTime) / 1000;
  document.getElementById("timer").innerHTML = timeTaken + "s";
  shapeDelay();
};
