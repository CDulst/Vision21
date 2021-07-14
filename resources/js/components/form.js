export const Validator = () => {
const $inputwrappers = document.querySelectorAll(".inputwrapper");

const status = {
name: false,
phone: false,
email:false,
message: false,
}


const checkInputs = (e) => {

console.log(status[e.currentTarget.id]);
$inputwrappers.forEach(wrapper => {
wrapper.querySelector(".form--input").classList.remove("errorBorder");
wrapper.childNodes[1].textContent = "";
});
$inputwrappers.forEach(wrapper => {
// normal validation
console.log(status[wrapper.id]);
if (status[wrapper.id] && wrapper.querySelector(".form--input").value == ""){
wrapper.childNodes[1].textContent = "Field is empty";
wrapper.querySelector(".form--input").classList.add("errorBorder");
}

// phone validatioon
if (wrapper.id == "phone"){
    if (/^[a-zA-Z]+$/.test(wrapper.querySelector(".form--input").value) ||wrapper.querySelector(".form--input").value.length > 10){
        if (status[wrapper.id]){
            wrapper.childNodes[1].textContent = "this is not a valid phone number";
            wrapper.querySelector(".form--input").classList.add("errorBorder");
            }

    }

//check if all

}

// email validation‡
if (wrapper.id == "email"){
if (status[wrapper.id] && wrapper.querySelector(".form--input").value.includes("@")){

}
else{
if (status[wrapper.id]){
wrapper.childNodes[1].textContent = "invalid email, doesn't contain @";
wrapper.querySelector(".form--input").classList.add("errorBorder");
}
}
}

});
status[e.currentTarget.id] = true;
}




//Check if user clicks on any inputfield
const $inputs = document.querySelectorAll(".form--input");
$inputs.forEach(input => {
input.addEventListener("click", checkInputs);
})
}

export const Scroll = () => {
//check if item with class alert exists
const alert = document.querySelector(".alert")
if (alert){
const $element = document.getElementById(`_contact`);
const elementPosition = window.pageYOffset + $element.getBoundingClientRect().top
console.log(elementPosition);
window.focus();
setTimeout(() => {
window.scrollTo({
top: elementPosition + 300,
});
}, 200);
}
}
