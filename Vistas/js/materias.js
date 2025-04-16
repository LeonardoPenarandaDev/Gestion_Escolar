$(".X").on("click", ".EliminarMateria", function(){

    var Mid = $(this).attr("Mid");
    var Cid = $(this).attr("Cid");

    window.location = "https://app.emunah.edu.co/index.php?url=Crear-Materias/"+Cid+"&Mid="+Mid+"&Cid="+Cid;

})