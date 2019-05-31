document.getElementById("tombol_form").
addEventListener("click", tampilkan_nilai_form);
 
function tampilkan_nilai_p() {
    var nilai_andika=document.getElementById("nilai_andika").innerHTML;
    var nilai_joko=document.getElementById("nilai_joko").innerHTML;
    document.getElementById("hasil").innerHTML=
    nilai_andika+" dan "+nilai_joko;
}
 
function tampilkan_nilai_form(){
    var nilai_form=document.getElementById("input_form").value;
    document.getElementById("hasil").innerHTML=nilai_form;
    var tulisan2 = document.getElementById("hasil").innerHTML;
    responsiveVoice.speak(tulisan2, "Indonesian Female", {rate: 1.0});
}