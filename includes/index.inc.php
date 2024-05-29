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
      <p>El dominio de la mecanografía permite una comunicación más eficaz y eficiente. En un entorno profesional, la
        capacidad de redactar correos electrónicos, informes y documentos con rapidez puede marcar una gran diferencia
        en términos de productividad y rendimiento. Además, en el ámbito académico, la rapidez y precisión al teclear
        pueden facilitar la toma de apuntes durante las clases y la realización de trabajos escritos. La mecanografía,
        por lo tanto, no es solo una habilidad técnica, sino una competencia clave que puede mejorar significativamente
        la eficiencia en diversas áreas de la vida.</p>
      <br>
      <hr class="text-warning border-2 opacity-75">
      <br>
      <h2>Productividad y ergonomía</h2>
      <p>Una de las principales razones para aprender mecanografía es el aumento significativo de la productividad que
        ofrece. Imagina poder escribir un correo electrónico, un informe o incluso un mensaje de texto con rapidez y
        eficiencia. Esta habilidad te permite completar tareas en menos tiempo, lo que te deja más espacio para abordar
        otras responsabilidades o simplemente disfrutar de un merecido descanso.</p>
      <p>La mecanografía eficiente permite una mayor fluidez en la creación de contenido, lo que es particularmente
        beneficioso en entornos laborales de alta presión donde el tiempo es un recurso valioso. Además, la mecanografía
        precisa reduce la necesidad de correcciones y revisiones, ahorrando tiempo y mejorando la calidad del trabajo
        final.</p>
      <p>Otro aspecto crucial de la mecanografía es su impacto en la ergonomía. Al aprender la técnica correcta de
        posicionamiento de las manos en el teclado, puedes reducir la tensión en tus músculos y articulaciones, lo que a
        su vez disminuye el riesgo de lesiones por esfuerzo repetitivo (RSI). Una postura adecuada y movimientos fluidos
        son fundamentales para mantener la salud a largo plazo mientras trabajas en un entorno digital.</p>
      <br>
      <hr class="text-warning border-2 opacity-75">
      <br>
      <h2>Prevención de errores por esfuerzo repetitivo (RSI)</h2>
      
      <p>El RSI es un problema común entre aquellos que pasan largas horas frente a una computadora. Los movimientos
        repetitivos y la tensión muscular pueden causar dolores crónicos en las manos, muñecas y brazos. Sin embargo, al
        dominar la mecanografía, puedes minimizar el riesgo de desarrollar estas lesiones, ya que aprenderás a escribir
        con una técnica que reduce la tensión y el estrés en las articulaciones.</p>
      <p>Aprender y practicar la mecanografía adecuada incluye adoptar posturas y técnicas que distribuyen de manera más
        equilibrada el esfuerzo necesario para teclear, reduciendo así la sobrecarga en áreas específicas del cuerpo.
        Esto no solo previene el dolor a corto plazo, sino que también protege contra daños a largo plazo que podrían
        afectar negativamente la capacidad de trabajar.</p>
      <p>La mecanografía va más allá de simplemente aprender a escribir más rápido. Es una habilidad fundamental que
        puede aumentar tu productividad, mejorar tu salud ergonómica y prevenir lesiones a largo plazo. En la era
        digital en la que vivimos, dominar la mecanografía es una inversión en tu futuro laboral y bienestar personal.
      </p>
      <br>
      <hr class="text-warning border-2 opacity-75">
      <br>
      <h2>Técnicas</h2>
      <ul>
        <li>
          <h4>Mecanografía al tacto <span class="text-info">(touch typing)</span></h4>
          <p>
            Esta técnica de escritura con teclado (también llamado escritura a ciegas o Touch typing, en inglés) es un
            estilo que no requiere fijar la vista en el teclado para encontrar las teclas. Un mecanógrafo que lo use,
            sabrá su ubicación en el teclado a través de la memoria muscular, el término se usa a menudo para referirse
            a una forma específica. El touch typing que consiste en colocar los ocho dedos en una fila horizontal a lo
            largo del medio del teclado y hacer que alcancen otras teclas específicas (bajo este uso, los mecanógrafos
            que no miran el teclado pero no usan fila de inicio se conocen como mecanógrafos híbridos). Se puede
            utilizar tanto dos manos (lo más común) como una sola.
          </p>
          <p>Se hace colocando las manos sobre la fila <span class="text-warning">a, s, d, f, g, h, j, k, l, ñ,</span>
            de modo que, respectivamente, los dedos meñiques se posicionen sobre las teclas de las letras <span
              class="text-warning">"a"</span> y <span class="text-warning">"ñ"</span>, los anulares, a las "s" y "l",
            los cordiales o medios a las "d" y "k", y los índices que abarquen las teclas <span
              class="text-warning">"f-g"</span> y <span class="text-warning">"h-j"</span>, utilizando siempre los dedos
            pulgares para la barra espaciadora. De la misma manera se procede en las otras filas de letras. Esto
            facilitará el acceso prácticamente a todo el teclado con leves movimientos de manos.</p>
        </li>
        <li>
          <h4>Mecanografía con dos dedos</h4>
          <p>
            Escribir con dos dedos es una forma común de escribir en la que el mecanógrafo presiona cada tecla
            individualmente. En lugar de confiar en la posición memorizada de las teclas, el mecanógrafo debe encontrar
            cada tecla a simple vista (o bien memorizarlas). Aunque se puede lograr una buena precisión, el uso de este
            método también puede evitar que el mecanógrafo pueda ver lo que se ha escrito sin apartar la mirada de las
            teclas, y es posible que los errores de escritura no se perciban de inmediato. Debido a que solo se usan
            unos pocos dedos en esta técnica, esto también significa que los dedos se ven obligados a moverse una
            distancia mucho mayor.
          </p>
        </li>
        <li>
          <h4>Mecanografía con pulgares</h4>
          <p>Una tendencia de finales del siglo XX en la mecanografía, que se usa principalmente con dispositivos con
            teclados pequeños (como PDA y teléfonos inteligentes), es la escritura con el pulgar o con el pulgar. Esto
            se puede lograr usando solo un pulgar o ambos pulgares, y los mecanógrafos más competentes alcanzan
            velocidades de 100 palabras por minuto. Al igual que los teclados de escritorio y los dispositivos de
            entrada, si un usuario abusa de las teclas que necesitan presionar con fuerza y/o tienen diseños pequeños y
            poco ergonómicos, podría causar tendinitis en el pulgar u otra lesión por esfuerzo repetitivo.</p>
        </li>
        <li>
          <h4>Sin método</h4>
          <p>Hay muchos estilos de escritura idiosincrásicos entre usar los dos dedos al estilo novato y la escritura
            "touch typing". Por ejemplo, muchos mecanógrafos de dos dedos tienen memorizada la distribución del teclado
            y pueden escribir mientras enfocan su mirada en la pantalla. Algunos usan solo dos dedos, mientras que otros
            usan de 3 a 6 dedos. Algunos usan sus dedos de manera muy consistente, con el mismo dedo para escribir el
            mismo carácter cada vez, mientras que otros varían la forma en que usan sus dedos.</p>
          <p>Un estudio que examinó a 30 sujetos, de diferentes estilos y experiencia, encontró una diferencia mínima en
            la velocidad de escritura entre los mecanógrafos que usaban "touch typing" y los mecanógrafos híbridos
            autodidactas. Según el estudio, "El número de dedos no determina la velocidad de escritura... Se descubrió
            que las personas que utilizan estrategias de mecanografía autodidactas son tan rápidas como los mecanógrafos
            capacitados... en lugar de la cantidad de dedos, hay otros factores que predicen la velocidad de
            mecanografía... los mecanógrafos rápidos... mantienen las manos fijas en una posición, en lugar de moverlos
            sobre el teclado, y usar el mismo dedo de manera más consistente para escribir una letra determinada". Para
            citar a la candidata a doctorado Anna Feit: "Nos sorprendió observar que las personas que tomaron un curso
            de mecanografía se desempeñaron a una velocidad y precisión promedio similares a las que se enseñaron a
            escribir por sí mismos y solo usaron 6 dedos en promedio".</p> <!-- // TODO: Revisarlo -->
        </li>
      </ul>
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