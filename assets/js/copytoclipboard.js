// handle copytoclipboard email

function copyEmail() {
  var text_to_copy = document.getElementById("text_to_copy").innerHTML;
  var copy_button = document.getElementById("copy_button");
  
  var temp = document.createElement("INPUT");
  temp.value = text_to_copy;
  document.body.appendChild(temp);
  temp.select();
  document.execCommand("copy");
  temp.remove();
  var tool_tip = document.getElementById("myTooltip");
  tool_tip.innerHTML = "Copied!"; 
  };


function outFunc() {
  var tool_tip = document.getElementById("myTooltip");
  tool_tip.innerHTML = "Copy to clipboard";
}