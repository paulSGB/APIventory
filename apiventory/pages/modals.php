
  <div class="modal fade custom" tabindex="-1" role="dialog" id="XXXXXXX" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header px-5">
          <h5 class="modal-title">Détails</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </button>
        </div>
        <div class="modal-body px-xl-5">
          <div class="responsiveTab start-effect">
            <div class="row standard">
              <div class="col-4">
                <span class="small text-muted">Nom</span>
              </div>
              <div class="col text-right">
                XXXXXXXXXXXX
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <span class="small text-muted">Statut</span>
              </div>
              <div class="col text-right">
                <span class="badge badge-pill badge-success">
                  Standard
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="modal-footer justify-content-center">
          <button type="button" class="btn bg-light p-lg-3" data-dismiss="modal">Annuler</button>
          <button type="button" class="btn bg-custom p-lg-3">Valider</button>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Modal de Suppression -->
  <div class="modal fade" tabindex="-1" role="dialog" id="Supprimer" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modalAlerte">
        <div class="modal-header">
          <h5 class="quote pl-2">Voulez-vous supprimer ?</h5>
          <button type="button" class="close fas fa-times" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body px-5 pt-4 pb-5">
          <span><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> Cette suppression sera définitive.</span>
          <div class="mt-4 d-flex justify-content-center">
            <button type="button" class="btn bg-light p-lg-3 mr-2" data-dismiss="modal">Annuler</button>
            <button type="button" class="btn bg-custom p-lg-3">Supprimer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
