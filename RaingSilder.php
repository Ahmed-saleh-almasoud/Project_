<?//php
//session_start();
//include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 70%;
  height: 15px;
  background: #4fa9c9;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #8a8b9c;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
    
    
    #On{
  width: 170px;
  height:35px;
  background: none;
  align-content: center;
        
    }
    
    #On:hover {
  color: white;
  background: black;
}
    
        #sa{
  width: 170px;
  height:35px;
  background: none;
  align-content: center;
        
    }
    
    #sa:hover {
  color: white;
  background: black;
}
    
            #off{
  width: 300px;
  height:35px;
  background: none;
  align-content: center;
        
    }
    
    # off:hover {
  color: white;
  background: black;
}
   
</style>
</head>
<body>

<h1> Range Slider for Motors</h1>

<form action="pagephp.php" method="post">
<div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange" name="motor1">
  <p>Value for motor 1 : <span id="demo"></span></p>
</div>
    
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange1" name="motor2">
  <p>Value for motor 2 :  <span id="demo1"></span></p>
</div>
    
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange2" name="motor3">
  <p>Value for motor 3 :  <span id="demo2"></span></p>
</div>
        <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange3" name="motor4">
  <p>Value for motor 4 :  <span id="demo3"></span></p>
</div>

        <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange5" name="motor5">
  <p>Value for motor 5 :  <span id="demo5"></span></p>
</div>
    
            <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange6" name="motor6">
  <p>Value for motor 6 :  <span id="demo6"></span></p>
</div>
    

    <div class="buttonD">
     
    

 <!-- <button id="sa" type="submit" name="sav">Save</button>-->
  
        <input id="sa" type="submit">
   
    
    </div>
    
    </form>
    

    
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

</script>
    
    <script>
    var slider1 = document.getElementById("myRange1");
var outputt = document.getElementById("demo1");
outputt.innerHTML = slider1.value;

slider1.oninput = function() {
  outputt.innerHTML = this.value;
}
    
    
    </script>
    
        <script>
    var slider2 = document.getElementById("myRange2");
var output3 = document.getElementById("demo2");
output3.innerHTML = slider2.value;

slider2.oninput = function() {
  output3.innerHTML = this.value;
}
    
    
    </script>
            <script>
    var slider3 = document.getElementById("myRange3");
var output4 = document.getElementById("demo3");
output4.innerHTML = slider3.value;

slider3.oninput = function() {
  output4.innerHTML = this.value;
}
    
    
    </script>

                <script>
    var slider4 = document.getElementById("myRange4");
var output5 = document.getElementById("demo4");
output5.innerHTML = slider4.value;

slider4.oninput = function() {
  output5.innerHTML = this.value;
}
    
    
    </script>
    
                <script>
    var slider4 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider4.value;

slider4.oninput = function() {
  output5.innerHTML = this.value;
}
    
    
    </script>
    
                    <script>
    var slider5 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider5.value;

slider5.oninput = function() {
  output6.innerHTML = this.value;
}
    
    
    </script>
    
</body>
</html>
      