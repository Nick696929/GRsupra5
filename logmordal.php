<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="css1/profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  .modal{
    margin-left: 406px;
    margin-top: 29px;
  }
  .back{
    background-color: #f3eded;
    border: 2px solid #bdbbbb;
  }

</style>
  </head>

<body>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  modalw" >
        <h1 class="modal-title fs-5" id="exampleModalLabel"><b> <strong>My Toyota</strong></b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="back">
        <img style="
     width: 38px;
    height: 46px;
    margin: 9px;
    margin-left: 22px;
    margin-bottom: 9px;
"src="img/user.png" alt="">
      
      <div id="image-container">
       <img id="uploaded-image" src="#" alt="" />
    </div><div class="word"><?php echo $_SESSION['username'];?></div>
    </div>
    
            

        
      </div>
      <div class="modal-footer">
      <input
      type="file"
      id="upload-input"
      accept="image/*"
      onchange="displayImage()"
    />
    <label for="upload-input" class="btn" id="upload-label">Change profile</label>
       <a href="logout.php"><button type="button" class="logout" >Logout</button></a> 
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>document
  .getElementById("upload-input")
  .addEventListener("change", displayImage);

function displayImage() {
  const input = document.getElementById("upload-input");
  const file = input.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (event) {
      const imageDataUrl = event.target.result;
      updateImageSrc(imageDataUrl);
    };
    reader.onerror = function (error) {
      console.error("Error reading the file:", error);
    };
    reader.readAsDataURL(file);
  }
}

function updateImageSrc(src) {
  const uploadedImage = document.getElementById("uploaded-image");
  uploadedImage.src = src;
}</script>
</body>

</html>