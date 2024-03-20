let inputFile = document.getElementById("input-file");
let submitButton = document.querySelector(".submit-button");
let profilePic = document.getElementById("profile-pic");

inputFile.addEventListener('change', function() {
    if (inputFile.files && inputFile.files[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            profilePic.setAttribute('src', e.target.result);
            submitButton.style.display = "block";
            submitButton.style.fontSize="15px";
            submitButton.style.padding="7px 5px";
            submitButton.style.width="150px";
            submitButton.style.margin="20px auto 0";
            submitButton.style.backgroundColor = 'transparent'; 
            submitButton.style.borderRadius="30px";
            

        }

        reader.readAsDataURL(inputFile.files[0]);
    }
});
function back() {
    history.back();
}
function submitImage() {
    // Scripting of Image
    document.querySelector(".title p")
}