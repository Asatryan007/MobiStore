var formPreview = document.getElementById('formPreview');
var formImage = document.getElementById('formImage');

formImage.addEventListener('change', () =>{
    uploadFile(formImage.files[0]);
})



function uploadFile(file){

    let reader = new FileReader();
    reader.onload = function(e){
        formPreview.innerHTML = `<img src = "${e.target.result}" alt = "Նկար">`;
    };

    reader.onerror = function(e){
        alert("Նկարը վերբեռնելուց խնդիր");
    };

    reader.readAsDataURL(file)
}