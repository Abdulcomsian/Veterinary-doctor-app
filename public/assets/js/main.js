// IMAGE UPLOADING FEATURE

document
  .getElementById("file-input")
  .addEventListener("change", function (event) {
    const files = event.target.files;
    const imageContainer = document.getElementById("image-container");
    let totalSize = 0;
    let totalImages = imageContainer.querySelectorAll(".uploaded-image").length;

    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      if (file.type.startsWith("image/") && file.size <= 5 * 1024 * 1024) {
        if (totalImages >= 5) {
          alert("You can only upload up to 5 images.");
          return;
        }

        totalSize += file.size;
        if (totalSize > 5 * 1024 * 1024) {
          alert("Total size of images exceeds 5MB limit");
          return;
        }

        // Display selected image
        const reader = new FileReader();
        reader.onload = function (e) {
          const imageBox = document.createElement("div");
          const img = document.createElement("img");
          img.src = e.target.result;
          img.classList.add("uploaded-image");

          imageBox.classList.add("image-box");
          imageBox.append(img);

          const deleteBtn = document.createElement("button");
          deleteBtn.innerHTML = "x";
          deleteBtn.classList.add("delete-btn");
          deleteBtn.addEventListener("click", function () {
            imageContainer.removeChild(img);
            totalImages--;
          });

          imageContainer.appendChild(imageBox);
          imageBox.appendChild(deleteBtn);
        };
        reader.readAsDataURL(file);

        totalImages++;
      } else {
        alert(
          "Please select valid image files (up to 5 images, total size not exceeding 5MB)."
        );
        return;
      }
    }
  });


  document.querySelector(".user-name-box").addEventListener("click" , function(e){
    let menu = document.querySelector(".header-dropdown-menu");
    menu.classList.contains("d-none") ? menu.classList.remove("d-none") : menu.classList.add("d-none")
  })

  document.addEventListener("click" , function(event){
    let element = event.target;
    if(!element.classList.contains("user-name-box") || !element.closest(".user-name-box")) document.querySelector(".header-dropdown-menu").classList.add("d-none");
  })
