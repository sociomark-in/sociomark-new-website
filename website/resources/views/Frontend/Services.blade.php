@extends('Frontend.layout.app')

@section('content')
<h1>Services</h1>
<!DOCTYPE HTML>
<html>
<head>
<style>
  #div1, #div2 {
    float: left;
    width: 250px;
    min-height: 100px;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
  }
  .draggable {
    padding: 5px;
    margin: 5px;
    background-color: lightgray;
    cursor: grab;
  }
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var draggedElement = document.getElementById(data);
  if (ev.target.classList.contains("dropzone")) {
    ev.target.appendChild(draggedElement);
  }
}
</script>
</head>
<body>

<h2>Drag and Drop Multiple Texts</h2>
<p>Drag the text items back and forth between the two div elements.</p>

<div id="div1" class="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)">
  <div id="text1" class="draggable" draggable="true" ondragstart="drag(event)">Text 1</div>
  <div id="text2" class="draggable" draggable="true" ondragstart="drag(event)">Text 2</div>
  <div id="text3" class="draggable" draggable="true" ondragstart="drag(event)">Text 3</div>
</div>

<div id="div2" class="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)">

 <div id="text1" class="draggable" draggable="true" ondragstart="drag(event)">Text 4</div>
  <div id="text2" class="draggable" draggable="true" ondragstart="drag(event)">Text 5</div>
</div>

</body>
</html>

@endsection