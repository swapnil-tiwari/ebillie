
var userDatabase = firebase.database().ref().child("store_info");

function writeUserData() {
var name = document.getElementById("stname").value;
var email = document.getElementById("email").value;
var pass = document.getElementById("pass").value;
var mob_num = document.getElementById("mobno").value;
userDatabase.child("userid").set({
    store_name: name,
    email: email,
    password : pass,
    phone_number : mob_num,
  });
}
