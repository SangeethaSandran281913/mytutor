function previewFile() {
    const preview = document.querySelector('.w3-image');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
        // convert image file to base64 string
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}


function confirm_pw() {
    var pw = document.getElementById("idpass").value;
    var cpw = document.getElementById("confirm_idpass").value;
    
    if(pw != cpw) {
        alert("Passwords Do not match");
        document.getElementById("reg").disabled = true;
    } else {
        document.getElementById("reg").disabled = false;
    }
}