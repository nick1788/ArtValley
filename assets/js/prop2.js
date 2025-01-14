document.getElementById("modifyBtn").addEventListener("click", function() {
  var columnElement = document.getElementById("columnElement");
  var mapFrame = document.getElementById("mapFrame");
  
  if (columnElement) {
    
    columnElement.classList.remove("col-md-6");
    columnElement.classList.add("col-md-9");
  } else {
    alert("Column element not found!");
  }
  
  if (mapFrame) {
   
    mapFrame.remove();
  } else {
    alert("Map iframe not found!");
  }
});