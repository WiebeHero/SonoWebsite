//document.addEventListener('DOMContentLoaded', function () {
function logInCheck(check){
  if(check == true){
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Logged in 123456!</p>";
  }
  else if(check == false){
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Invalid Login!</p>";
  }
  else{
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Something went wrong...</p>";
  }
}
function registerCheck(check){
  if(check == true){
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Your account has been registerd!</p>";
  }
  else if(check == false){
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Invalid Register!</p>";
  }
  else{
    document.getElementById("TextLogin").innerHTML = "<p style='text-align = center;'>Something went wrong...</p>";
  }
}
//});
