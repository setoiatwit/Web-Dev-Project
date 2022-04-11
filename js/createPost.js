var createPostModal = document.getElementById("create-post-modal");
var createPostButton = document.getElementById("create-post-button");
var closeButton = document.getElementsByClassName("create-post-modal-close")[0];

createPostButton.onclick = function() {
    createPostModal.style.display = "block";
}

closeButton.onclick = function() {
    createPostModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == createPostModal) {
        createPostModal.style.display = "none";
    }
}