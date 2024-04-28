<div class="text-center">
  <p class="display-4 fw-bold mb-4 text-white">Hora de practicar</p>
</div>
<div class="counter mt-5 mb-3">00:00</div>

<div class="row justify-content-center align-items-center m-0 mb-3">
  <div class="col-8 card-bg-tech p-4">
    <h4>
      <span class="text-done"></span><span class="text-typing"></span><span class="text-well"></span>
    </h4>
  </div>
</div>
<div class="row justify-content-center align-items-center m-0">
  <div class="col-auto p-2 pe-5 ps-5 text-white card-bg-tech">
    <!-- Errores -->
    <div class="row">
      <div class="col-auto fs-5 text-center">
        <i class="bi bi-star-fill text-warning"><span class="ps-2 fw-medium text-white">Nivel: <span
              class="nivelNum">0</span></span></i>
      </div>
      <div class="col-auto fs-5 text-center">
        <i class="bi bi-exclamation-circle-fill text-danger"><span class="ps-2 fw-medium text-white">Errores: <span
              class="errorNum">0</span></span></i>
      </div>
    </div>
  </div>
</div>

<!-- Over Modal -->
<button type="button" id="modalButton" data-bs-toggle="modal" data-bs-target="#overMdoal"></button>
<div class="modal fade mt-5" id="overMdoal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-box">
      <div class="modal-header">
        <h2 class="modal-title text-center" id="over-title">
          Se ha acabado el tiempo.
        </h2>
      </div>
      <div class="modal-body">
        <i class="bi bi-star-fill text-warning fs-4"><span class="ps-2 fw-medium text-white">Nivel: <span
              class="nivelNum">0</span></span></i>
        <br />
        <i class="bi bi-exclamation-circle-fill text-danger fs-4"><span class="ps-2 fw-medium text-white">Errores: <span
              class="errorNum">0</span></span></i>
        <div id="moBody" class="mt-3 fs-5">
          No ha conseguido superar con éxito la prueba en el nivel actual.
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="retryBtn" class="btnMenu btn-re" data-bs-dismiss="modal">
          Reintentar
        </button>
        <button type="button" id="menuBtn" class="btnMenu btn-re">
          Inicio
        </button>
      </div>
    </div>
  </div>
</div>