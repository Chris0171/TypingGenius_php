<?php
session_start();
?>
<div class="row justify-content-center align-items-center m-0 mt-5">
  <div class="col-11 col-md-10">
    <?php
    if (isset($_SESSION['isOk'])) {
      $isOk = $_SESSION['isOk'];
      if ($isOk) {
        ?>
        <div class="alert alert-success fw-bold">
          Las estadísticas de usuario han sido actualizadas. ¡Disfrute de nuestro sitio web!
        </div>
        <?php
      } else {
        ?>
        <div class="alert alert-danger fw-bold">
          Las estadísticas de usuario no han sido actualizadas. Ha habido algún error. Lo solucionaremos en breve.
        </div>
        <?php
      }
    }
    ?>
  </div>
</div>

<div class="row justify-content-center align-items-center m-0 mt-3">
  <div class="col-11 col-md-10 mb-3 mb-md-0 text-white">
    <div class="card-bg-tech p-4">
      <h1 class="text-center text-warning">Fundamentos de la Mecanografía</h1> <br>
      <h2>¿Por qué es tan importante aprender a escribir rápido y preciso?</h2>
      <p>En un mundo cada vez más digitalizado, la habilidad de mecanografía se ha convertido en un activo invaluable.
        ¿Por qué? Porque la capacidad de escribir rápidamente y con precisión en un teclado no solo es una destreza
        técnica, sino también una herramienta esencial para el éxito en el ámbito laboral y académico. En este artículo,
        exploraremos los fundamentos de la mecanografía y por qué es crucial dominarla en la era digital.</p>
      <br>
      <h2>Productividad y ergonomía</h2>
      <p>Una de las principales razones para aprender mecanografía es el aumento significativo de la productividad que
        ofrece. Imagina poder escribir un correo electrónico, un informe o incluso un mensaje de texto con rapidez y
        eficiencia. Esta habilidad te permite completar tareas en menos tiempo, lo que te deja más espacio para abordar
        otras responsabilidades o simplemente disfrutar de un merecido descanso.</p>
      <br>
      <p>Otro aspecto crucial de la mecanografía es su impacto en la ergonomía. Al aprender la técnica correcta de
        posicionamiento de las manos en el teclado, puedes reducir la tensión en tus músculos y articulaciones, lo que a
        su vez disminuye el riesgo de lesiones por esfuerzo repetitivo (RSI). Una postura adecuada y movimientos fluidos
        son fundamentales para mantener la salud a largo plazo mientras trabajas en un entorno digital.</p>
      <br>
      <h2>Prevención de errores por esfuerzo repetitivo (RSI)</h2>
      <p>El RSI es un problema común entre aquellos que pasan largas horas frente a una computadora. Los movimientos
        repetitivos y la tensión muscular pueden causar dolores crónicos en las manos, muñecas y brazos. Sin embargo, al
        dominar la mecanografía, puedes minimizar el riesgo de desarrollar estas lesiones, ya que aprenderás a escribir
        con una técnica que reduce la tensión y el estrés en las articulaciones.</p>
      <br>
      <p>La mecanografía va más allá de simplemente aprender a escribir más rápido. Es una habilidad fundamental que
        puede aumentar tu productividad, mejorar tu salud ergonómica y prevenir lesiones a largo plazo. En la era
        digital en la que vivimos, dominar la mecanografía es una inversión en tu futuro laboral y bienestar personal.
      </p>
    </div>
  </div>
</div>

<div class="row justify-content-center align-items-center m-0 mt-5">
  <div class="col-10">
    <div class="card card-bg-tech">
      <div class="card-body">
        <h5 class="card-title text-center">Niveles de mecanografía</h5>
        <div class="row justify-content-center align-items-center mb-4 mt-4 text-center">
          <div class="col-12 col-md-2">
            <input type="radio" class="btn-check" name="level" id="1" value="1">
            <label class="level-box level-1" for="1">Principiante</label>
          </div>
          <div class="col-12 col-md-2">
            <input type="radio" class="btn-check" name="level" id="2" value="2">
            <label class="level-box level-2" for="2">Intermedio</label>
          </div>
          <div class="col-12 col-md-2">
            <input type="radio" class="btn-check" name="level" id="3" value="3">
            <label class="level-box level-3" for="3">Avanzado</label>
          </div>
          <div class="col-12 col-md-2">
            <input type="radio" class="btn-check" name="level" id="4" value="4">
            <label class="level-box level-4" for="4">Profesional</label>
          </div>
          <div class="col-12 col-md-2">
            <input type="radio" class="btn-check" name="level" id="5" value="5">
            <label class="level-box level-5" for="5">Experto</label>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-12">
            <p class="fw-bold p-2">Esta sesión de practicas consta de <span class=" text-warning">5</span> de
              niveles dificultad. En cada intento puede visualizar sus errores y un recordatorio del nivel
              en el que se encuentra. Mejore sus habilidades con cada intento. <span class="text-info">¡Mucha
                suerte!</span></p>
          </div>
        </div>
        <br>
        <div class="text-center">
          <a href="match.php" class="btnMenu fw-bold">Practica ahora</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center align-items-center m-0 mt-3">
  <div class="col-11 col-md-5 mb-3 mb-md-0">
    <div class="card card-bg-tech">
      <div class="card-body">
        <h5 class="card-title">Práctica regular</h5>
        <p class="card-text">La práctica constante es fundamental para mejorar la velocidad y precisión en la
          mecanografía. Dedica más tiempo a practicar la escritura, preferiblemente todos los días. Puedes
          utilizar recursos como programas en línea, libros o aplicaciones especializadas que te proporcionen ejercicios
          de mecanografía para practicar. La prataforma más recomendada sería TypingClub.</p>
        <br>
        <div class="text-center">
          <a href="https://www.typingclub.com/" target="_blank" rel="noopener noreferrer" class="btnMenu">Visitar
            TypingClub</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-11 col-md-5 m-0 mb-3 mb-md-0">
    <div class="card card-bg-tech">
      <div class="card-body">
        <h5 class="card-title">Aprender la técnica adecuada</h5>
        <p class="card-text">Aprender y practicar la técnica adecuada de mecanografía es esencial para mejorar tu
          velocidad y precisión. Esto implica mantener una postura ergonómica, colocar los dedos correctamente en el
          teclado (utilizando todos los dedos y sin mirar las teclas), y usar la técnica de "toque" en lugar de mirar y
          buscar las letras. Una heramienta recomendada sería Keybr.</p><br>
        <div class="text-center">
          <a href="https://www.keybr.com/" target="_blank" rel="noopener noreferrer" class="btnMenu">Visitar Keybr</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center m-0 align-items-center mt-3">
  <div class="col-11 col-md-5 mb-3 mb-md-0">
    <div class="card card-bg-tech">
      <div class="card-body">
        <h5 class="card-title">Realizar ejercicios de velocidad y precisión</h5>
        <p class="card-text">Además de practicar regularmente, realiza ejercicios específicos para mejorar tanto la
          velocidad como la precisión. Puedes realizar pruebas cronometradas para medir tu velocidad de escritura y
          realizar ejercicios de corrección de errores para mejorar la precisión. Una plataforma recomendada sería
          Typing.com.</p><br>
        <div class="text-center">
          <a href="https://www.typing.com/" target="_blank" rel="noopener noreferrer" class="btnMenu">Visitar Typing</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-11 col-md-5 mb-3 mb-md-0">
    <div class="card card-bg-tech">
      <div class="card-body">
        <h5 class="card-title">Participar en desafíos y competencias:</h5>
        <p class="card-text">Únete a desafíos de mecanografía en línea o participa en competencias de velocidad de
          escritura. Estos eventos pueden motivarte a mejorar tus habilidades y proporcionarte una medida objetiva de tu
          progreso. Una plataforma recomendada sería Nitro Type.</p>
        <div class="text-center"><br>
          <a href="https://www.nitrotype.com/" target="_blank" rel="noopener noreferrer" class="btnMenu">Visitar Nitro
            Type</a>
        </div>
      </div>
    </div>
  </div>
</div>
