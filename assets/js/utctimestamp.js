// display utc timestamp

var utc_time = new Date().toISOString().replace('T', ' ').split(".")[0];

console.log(utc_time);

var paragraph = document.getElementById("date");

var replace_date = paragraph.textContent += utc_time;

$("body").children().each(function () {
  $(this).html( $(this).html().replace("Blog", replace_date) );
});

