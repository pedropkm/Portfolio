const appSettings = {
  databaseURL:"https://jwc-data-default-rtdb.europe-west1.firebasedatabase.app/"
}
const person = [{
  email: "example@gmail.com",
  password: "Example01@"
}];

function login() {
 const email = document.getElementById("#txt-input").vlaue;
 const password = document.getElementById("#pwd").vlaue;
 
 for (i = 0; i<person.length; i++){
  if(email == person[i].email && password == person[i].password){
    console.log("logged in ")
 }
}
}