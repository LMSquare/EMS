function approveRequest(button) {
  var row = button.parentNode.parentNode;
  row.cells[4].innerHTML = 'Approved';
  alert("Request approved!");
}
 
function disapproveRequest(button) {
  var row = button.parentNode.parentNode;
  row.cells[4].innerHTML = 'Disapproved';
  alert("Request denied!");
}
