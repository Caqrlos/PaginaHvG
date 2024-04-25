document.getElementById("inicio-btn").addEventListener("click", function() {
    // Aquí puedes agregar la lógica para iniciar sesión
    console.log("Iniciando sesión...");
  });
  
  document.getElementById("registrar-btn").addEventListener("click", function() {
    document.getElementById("opciones-registro").style.display = "block";
    document.getElementById("ingresar-btn").style.display = "block";
  });
  
  document.getElementById("generar-contraseña").addEventListener("click", function() {
    // Generar contraseña al azar
    var caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var contraseña = "";
    for (var i = 0; i < 8; i++) {
      contraseña += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
    }
    document.getElementById("contraseña").value = contraseña;
  });
  