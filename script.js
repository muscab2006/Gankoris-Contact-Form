function validateForm() {
    var fullname = document.getElementById("fullname").value;
    var businessname = document.getElementById("businessname").value;
    var businesstype = document.getElementById("businesstype").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var budgetmoney = document.getElementById("budgetmoney").value;
    var budgettime = document.getElementById("budgettime").value;
    var targetedarea = document.getElementById("targetedarea").value;

    if (fullname === "" || businessname === "" || businesstype === "" || email === "" || phone === "" || budgetmoney === "" || budgettime === "" || targetedarea === "") {
        alert("Please fill in all required fields.");
        return false;
    }
    return true;
}