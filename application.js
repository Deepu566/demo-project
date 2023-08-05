const first = document.getElementById("first")
const last = document.getElementById("last")
const father = document.getElementById("father")
const dob = document.getElementById("dob")
const mobile = document.getElementById("mobile")
const email = document.getElementById("email")
const radio = document.querySelectorAll(".radio")


const data = JSON.parse(localStorage.getItem("register"))

first.value = data.first
last.value = data.last
father.value = data.father
dob.value = data.dob
email.value = data.email
mobile.value = data.mobile


radio.forEach((r) => {
    if (r.value === data.gender) {
        r.setAttribute("checked", "checked")
    }
})




