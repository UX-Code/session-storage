<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo con Session Storage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="center">SESSION STORAGE</h1>
          <p>La propiedad sessionStorage te permite almacenar un elemento al objeto Storage del equipo Session del cliente. <br>El sessionStorage tiene fecha de expiración y se ejecuta mientras el navegador se encuentre abierto.</p>
          <h3>EJEMPLO</h3>
          <p>Para crear un sessionStorage seria:</p>
          <p>sessionStorage.<span class="red-text">setItem</span>(<span class="green-text">'Key'</span>, 'Valor');</p>
          <p>Para cargar un sessionStorage seria:</p>
          <p>sessionStorage.<span class="red-text">getItem</span>(<span class="green-text">'Key'</span>);</p>

          <h3>EJEMPLO PRACTICO</h3>
          <label for="txtField">Escribe cualquier cosa</label>
          <input type="text" id="txtField">
          <p><button onclick="save()" type="button" class="btn green">Guardar en Session Storage</button> <button class="btn red" onclick="clean()" type="button">Limpiar mi Session Storage</button></p>
          <div id="result"></div>
          <p>haz click en el botón para guardar.</p>
          <p>Actualiza la ventana para que verifiques que los datos siguen allí</p>
          <p>Revisa en el inspector de código que los datos estan el objeto Session Storage</p>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>

    // GUARDAR Session STORAGE
    function save() {
      if (typeof(Storage) !== "undefined") {
        var valor = $("#txtField").val();
        sessionStorage.setItem('DatoGuardado',valor);
        showSessionData();
      } else {
        $("#result").html("Tu navegador no soporta web storage...");
      }
    }

    // CARGAR Y MOSTRAR Session STORAGE
    function showSessionData() {
      $("#result").html("El dato guardado en Session Storage es: <b> " + sessionStorage.getItem('DatoGuardado') + "</b>");
    }

    // LIMPIAR Session STORAGE
    function clean() {
      sessionStorage.clear();
    }
    </script>
  </body>
</html>
