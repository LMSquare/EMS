function approveRequest(button) {
  var row = button.parentNode.parentNode;
  row.cells[3].innerHTML = 'Approved';
  alert("Request Approved!");
}
 
function disapproveRequest(button) {
  var row = button.parentNode.parentNode;
  row.cells[3].innerHTML = 'Disapproved';
  alert("Request denied!");
}
