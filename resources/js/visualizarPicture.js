function previewImage(nb) {        
    var reader = new FileReader();         
    reader.readAsDataURL(document.getElementById('subirImagen').files[0]);         
    reader.onload = function (e) {             
        document.getElementById('imagenresgistrar').src = e.target.result;         
    };     
}