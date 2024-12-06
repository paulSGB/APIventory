<?php

// B = AFFICHE LES STANDARDS

if (!empty($section["sectionsStandard"])) {
  foreach ($section["sectionsStandard"] as $sectionB) {
      ?>
      <div class="row  ligneAPI" versionwindev="<?php echo $sectionB['versionwin']; ?>" >
        <!--
          déclencheur de la modal
          données à afficher dans la modal
        -->
        <a href="#" class="btn open-modal-btn"
                data-nom="<?php echo $section['nom']; ?>"
                data-titre="<?php echo $sectionB['titre']; ?>"
                data-type="<?php echo $sectionB['prestataires']; ?>"
                data-type="<?php echo $sectionB['type']; ?>"
                data-versionapi="<?php echo $sectionB['versionapi']; ?>"
                data-versionwin="<?php echo $sectionB['versionwin']; ?>">
        </a>
        <!--
          Ligne
          API
        -->
        <div class="col-lg col-12">
          <ul>
             <li><?php echo $sectionB['titre']; ?></li>
             <li class="small text-muted">
               <?php echo $sectionB['type']; ?>
             </li>
           </ul>
        </div>
        <div class="col-lg-2 col text-truncate text-right">
          <?php echo $sectionB['prestataires']; ?>
        </div>
        <div class="col-lg-1 col text-center">
          <span class="badge badge-pill badge-success">
            St
          </span>
        </div>
        <div class="col-lg-1 col"><?php echo $sectionB['versionapi']; ?></div>
        <div class="col-lg-1 col"><?php echo $sectionB['versionwin']; ?></div>
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
