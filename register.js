const first = document.getElementById("first")
const last = document.getElementById("last")
const father = document.getElementById("father")
const dob = document.getElementById("dob")
const mobile = document.getElementById("mobile")
const email = document.getElementById("email")
const radio = document.querySelectorAll(".radio")
const submitBtn = document.querySelector(".submit")

let data = {
    first: String,
    last: String,
    father: String,
    email: String,
    dob: String,
    mobile: String,
    gender: String
}

radio.forEach((r) => {
    r.addEventListener("change", () => {
        if (r.checked) {
            data.gender = r.value
        }
    })
})

first.oninput = (e) => {
    data.first = e.target.value
}
last.oninput = (e) => {
    data.last = e.target.value
}
father.oninput = (e) => {
    data.father = e.target.value
}
email.oninput = (e) => {
    data.email = e.target.value
}
dob.oninput = (e) => {
    data.dob = e.target.value
}
mobile.oninput = (e) => {
    data.mobile = e.target.value
}


submitBtn.addEventListener("click", () => {
    localStorage.setItem("register", JSON.stringify(data))
})







