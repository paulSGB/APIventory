<?php
// Boucle pour afficher chaque section
if (!empty($section["sectionsSpecifique"])) {
  foreach ($section["sectionsSpecifique"] as $sectionA) {
      ?>
        <div class="row ligneAPI" versionwindev="<?php echo $sectionA['versionwin']; ?>">
          <!--
            déclencheur de la modal
            données à afficher dans la modal
          -->
          <a href="#" class="btn open-modal-btn"
                  data-nom="<?php echo $section['nom']; ?>"
                  data-titre="<?php echo $sectionA['titre']; ?>"
                  data-type="<?php echo $sectionA['prestataires']; ?>"
                  data-type="<?php echo $sectionA['type']; ?>"
                  data-versionapi="<?php echo $sectionA['versionapi']; ?>"
                  data-versionwin="<?php echo $sectionA['versionwin']; ?>">
          </a>
          <!--
            Ligne
            API
          -->
          <div class="col-lg col-12">
            <ul>
               <li><?php echo $sectionA['titre']; ?></li>
               <li class="small text-muted">
                 <?php echo $sectionA['type']; ?>
               </li>
             </ul>
          </div>
          <div class="col-lg-2 col text-truncate text-right">
            <?php echo $sectionA['prestataires']; ?>
          </div>
          <div class="col-lg-1 col text-center">
            <span class="badge badge-pill badge-primary">
              Sp
            </span>
          </div>
          <div class="col-lg-1 col"><?php echo $sectionA['versionapi']; ?></div>
          <div class="col-lg-1 col"><?php echo $sectionA['versionwin']; ?></div>
          <!-- <div class="col-1 text-right customPopOver">
            <button class="btn"><span>Détails</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            </button>
          </div> -->
        </div>

      <?php
  }
}
?>
