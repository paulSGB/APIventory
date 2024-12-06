<?php
  session_start();


// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) && (!isset($_SESSION['username']))) {
    header('Location: index.php');
    exit;
}

 include 'pages/variables.php';
 include 'pages/top.php';

 // chargement des versions
 $tab_version_api = array();
 $tab_version = array();
 foreach ($sections as $section) {
	if ((ISSET ($section["sectionsStandard"][0]["versionwin"]))&&(array_search($section["sectionsStandard"][0]["versionwin"],$tab_version) === false)) {
		$valeur = $section["sectionsStandard"][0]["versionwin"];
		array_push($tab_version,$valeur);
	}
	if ((ISSET ($section["sectionsSpecifique"][0]["versionwin"]))&&(array_search($section["sectionsSpecifique"][0]["versionwin"],$tab_version) === false)) {
		$valeur = $section["sectionsSpecifique"][0]["versionwin"];
		array_push($tab_version,$valeur);
	}

	if ((ISSET ($section["sectionsStandard"][0]["versionapi"]))&&(array_search($section["sectionsStandard"][0]["versionapi"],$tab_version_api) === false)) {
		$valeur = $section["sectionsStandard"][0]["versionapi"];
		array_push($tab_version_api,$valeur);
	}
	if ((ISSET ($section["sectionsSpecifique"][0]["versionapi"]))&&(array_search($section["sectionsSpecifique"][0]["versionapi"],$tab_version_api) === false)) {
		$valeur = $section["sectionsSpecifique"][0]["versionapi"];
		array_push($tab_version_api,$valeur);
	}
 }
 // trie du tableau
 asort($tab_version);
 asort($tab_version_api);
 ?>



 <div class="animated animBottom">
   <div class="container-fluid">
     <div class="row justify-content-center parentMainSidebar">
       <div class="col-lg-3 heightCustom scrollableBlock mainSidebar toggleZone">
         <div class="d-flex h-100">
           <div class="">
             <div class="row">
               <div class="col d-none d-lg-block">
                  <svg viewBox="0 0 24 24" width="62" height="62" stroke="currentColor" stroke-width="0.8" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-custom mb-3"><path d="m8 11 2 2 4-4"/><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
               </div>
               <div class="col-auto d-none d-lg-block">
                 <button id="" type="button" class="btn btn-light rounded-pill toggleBtn btn-sm">
                    <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    Réduire
                 </button>
               </div>
             </div>
             <h4>Je recherche</h4>
             <p class="quote small text-muted d-none d-lg-block">Filtrez selon la version, le type ou saisissez le nom de l'élément recherché</p>
           </div>

           <div>
             <div class="">
               <div class="btn-group custom">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Catégorie<span id="badge-categorie" class="badge-pill badge-warning d-none"></span>
                </button>
                <div class="dropdown-menu shadow stopPropa" style="">
                  <span class="font-weight-bold text-custom small">Type</span>
                  <div class="responsiveTab scrollableTab small">
                    <div class="row standard">
                      <div class="col">
                         Standard
                      </div>
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input versionType" id="customSwitcha">
                          <label class="custom-control-label" for="customSwitcha"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                         Spécifique
                      </div>
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input versionType" id="customSwitchb">
                          <label class="custom-control-label" for="customSwitchb"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pt-4">
                    <div class="col">
                      <button type="submit" id="bt_type_effacer" class="btn btn-light">Effacer</button>
                    </div>
                    <div class="col-auto">
                      <button type="submit" id="bt_type_valider" class="btn btn-primary">Valider</button>
                    </div>
                  </div>
                </div><!-- dropdown-menu -->
               </div><!-- Standard - Specifique -->
               <div class="btn-group custom">
                 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 Version API <span id="badge-versionAPI" class="badge-pill badge-warning d-none"></span>
                 </button>
                 <div class="dropdown-menu shadow stopPropa" style="">
                   <span class="font-weight-bold text-custom small">Version API</span>
                   <form class="form-inline customSearch mt-3">
                     <input class="form-control" type="text" placeholder="Je recherche" aria-label="Je recherche">
                     <button class="btn" type="submit">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                     </button>
                   </form>
                   <div class="responsiveTab scrollableTab small">
                    <?php
                    			foreach ($tab_version_api as $version) {
                    				//$section["sectionsStandard"]
                    				echo '
                    					<div class="row standard">
                    						<div class="col">'.$version.'</div>
                    						<div class="col-auto">
                    							<div class="custom-control custom-switch">
                    								<input type="checkbox" class="custom-control-input versionAPI" id="customSwitch'.$version.'">
                    								<label class="custom-control-label" for="customSwitch'.$version.'"></label>
                    							</div>
                    						</div>
                    					</div>
                    				';
                    			}
                    ?>
				           </div>
                   <div class="row pt-4">
                   <div class="col">
                    <button id="bt_versionAPI_effacer" type="submit" class="btn btn-light">Effacer</button>
                   </div>
                   <div class="col-auto">
                    <button id="bt_versionAPI_valider" type="submit" class="btn btn-primary">Valider</button>
                   </div>
                   </div>
                 </div><!-- dropdown-menu -->
               </div><!-- Version APIs -->
               <div class="btn-group custom">
                 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   Version Windev<span id="badge-version" class="badge-pill badge-warning d-none"></span>
                 </button>
                 <div class="dropdown-menu shadow stopPropa" style="">
                   <span class="font-weight-bold text-custom small">Version Windev</span>
                   <div class="responsiveTab scrollableTab small">
                    <?php
                    			foreach ($tab_version as $version) {
                    				//$section["sectionsStandard"]
                    				echo '
                    					<div class="row standard">
                                           <div class="col">'.$version.'</div>
                                           <div class="col-auto">
                                             <div class="custom-control custom-switch">
                                               <input type="checkbox" class="custom-control-input version" id="customSwitch'.$version.'">
                                               <label class="custom-control-label" for="customSwitch'.$version.'"></label>
                                             </div>
                                           </div>
                                         </div>
                    				';
                    			}
                    ?>
                   </div>
                   <div class="row pt-4">
                     <div class="col">
                       <button id="bt_version_effacer" type="submit" class="btn btn-light">Effacer</button>
                     </div>
                     <div class="col-auto">
                       <button id="bt_version_valider" type="submit" class="btn btn-primary">Valider</button>
                     </div>
                   </div>
                 </div><!-- dropdown-menu -->
               </div><!-- Version Windev -->
               <div class="btn-group custom">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Type<span id="badge-type" class="badge-pill badge-warning d-none"></span>
                </button>
                <div class="dropdown-menu shadow stopPropa" style="">
                  <span class="font-weight-bold text-custom small">Type</span>
                  <div class="responsiveTab scrollableTab small">
                    <div class="row standard">
                      <div class="col">
                         API Restful
                      </div>
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input versionType" id="customSwitchf">
                          <label class="custom-control-label" for="customSwitchf"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                         API Restful Acquereur
                      </div>
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input versionType" id="customSwitchg">
                          <label class="custom-control-label" for="customSwitchg"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                         GPSWBSCRM
                      </div>
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input versionType" id="customSwitchh">
                          <label class="custom-control-label" for="customSwitchh"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pt-4">
                    <div class="col">
                      <button type="submit" id="bt_type_effacer" class="btn btn-light">Effacer</button>
                    </div>
                    <div class="col-auto">
                      <button type="submit" id="bt_type_valider" class="btn btn-primary">Valider</button>
                    </div>
                  </div>
                </div><!-- dropdown-menu -->
               </div><!-- Standard - Specifique -->
               <div class="btn-group custom">
                 <button id="supp_filtre" type="button" class="btn" aria-expanded="false">
                   Supp. filtres
                 </button>
               </div><!-- Supp. filtres -->
             </div>
             <hr class="mt-3" />
             <div class="mb-4 row">
               <div class="col">
                 <span class="small text-muted">Voir détails</span>
               </div>
               <div class="col-auto"  data-toggle="collapse" data-target=".mainCollapse" aria-expanded="false" aria-controls="collapseExample">
                 <button  aria-pressed="false" autocomplete="off" class="btn btn-xs btn-toggle mx-2" data-toggle="button">
                     <div class="handle"></div>
                 </button>
               </div>
             </div>
             <form class="form-inline largeSearch">
              <input class="form-control" type="text" placeholder="<?php echo $totalSectionsGeneral; ?> résultats" aria-label="Je recherche">
              <button id="boutonRecherche" class="btn" type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </button>
            </form>
           </div>

         </div><!-- d-flex h-100 -->
       </div><!-- col-lg-3 -->
       <div class="col rwdColumn">
         <div class="row justify-content-center">
           <div class="col-xl-11 start-effect">

              <div class="row align-items-center py-5">
                <div class="col">
                  <h1 class="">
                  <span class="d-inline mr-2"><?php echo $totalSectionsGeneral; ?></span> APIs
                  </h1>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <button type="button" class="btn toggleBtn btn-outline-light rounded-pill btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                    Filtrer
                  </button>
                </div>                
              </div>

              <?php
              // Boucle pour afficher chaque section
              foreach ($sections as $section) {
                $totalSectionsA = count($section["sectionsSpecifique"]);
                $totalSectionsB = count($section["sectionsStandard"]);


                $totalSectionsGlobal = $totalSectionsA + $totalSectionsB;
                  ?>
                  <div class="accordion custom mb-3">
                      <div class="card p-4">
                          <div class="row align-items-center">
                              <div class="col mb-lg-0 d-flex align-items-center">
                                  <div class="avatar mr-3 d-none d-lg-inline-block" style="background-image: url('images/clients/Logo_<?php echo $section['url']; ?>.png');"></div>
                                  <ul>
                                      <li class="small ">
                                          <span class="text-black-50">Màj</span>
                                          <?php echo $section["maj"];?>
                                      </li>
                                      <li class="font-weight-bold"><?php echo $section['nom']; ?></li>
                                  </ul>
                              </div>
                              <div class="col-auto border-right">
                                  <span class="h1 mb-0 text-custom"><?php echo $totalSectionsGlobal; ?></span> APIs
                              </div>
                              <div class="col-auto text-right">
                                  <div class="btn-group custom">
                                      <button class="btn btn dropdown-toggle" data-toggle="collapse" data-target="#<?php echo $section['collapse1']; ?>" aria-expanded="false" aria-controls="<?php echo $section['collapse1']; ?>">
                                          Standards
                                          <span class="badge-pill badge-success"><?php echo $totalSectionsB; ?></span>
                                      </button>
                                  </div>
                                  <div class="btn-group custom">
                                      <button class="btn btn dropdown-toggle" data-toggle="collapse" data-target="#<?php echo $section['collapse2']; ?>" aria-expanded="false" aria-controls="<?php echo $section['collapse2']; ?>">
                                          Spécifiques
                                          <span class="badge-pill badge-primary"><?php echo $totalSectionsA; ?></span>
                                      </button>
                                  </div>
                                  <div class="btn-group custom">
                                      <button class="btn" data-toggle="collapse" data-target=".<?php echo $section['allCollapse']; ?>" aria-expanded="false" aria-controls="collapseExample">
                                          Toutes
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php if ($totalSectionsB > 0): ?>
                      <div class="multi-collapse <?php echo $section['allCollapse']; ?> collapse mainCollapse" id="<?php echo $section['collapse1']; ?>">
                          <div class="card">
                              <div class="card-body py-0">
                                  <div class="responsiveTab start-effect">
                                      <div class="row">
                                          <div class="col-lg col-12">Noms</div>
                                          <div class="col-lg-2 col text-truncate text-right">
                                            <?php echo ucfirst($prestataires); ?>
                                          </div>
                                          <div class="col-lg-1 col text-center">Statut</div>
                                          <div class="col-lg-1 col">APIs</div>
                                          <div class="col-lg-1 col text-truncate">Windev</div>
                                          <div class="col-1"></div>
                                      </div>
                                      <?php include 'pages/collapsesStan.php'; ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php endif; ?>
                      <?php if ($totalSectionsA > 0): ?>
                      <div class="multi-collapse <?php echo $section['allCollapse']; ?> collapse mainCollapse" id="<?php echo $section['collapse2']; ?>">
                          <div class="card">
                              <div class="card-body py-0">
                                  <div class="responsiveTab start-effect">
                                      <div class="row">
                                          <div class="col-lg col-12">Noms</div>
                                          <div class="col-lg-2 col text-truncate text-right">
                                            <?php echo ucfirst($prestataires); ?>
                                          </div>
                                          <div class="col-lg-1 col text-center">Statut</div>
                                          <div class="col-lg-1 col">APIs</div>
                                          <div class="col-lg-1 col text-truncate">Windev</div>
                                          <div class="col-1"></div>
                                      </div>
                                      <?php include 'pages/collapsesSpe.php'; ?>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <?php endif; ?>
                  </div><!-- Fin de l'accordéon -->

               <?php
               }
               ?>

           </div><!-- col-xl-11 start-effect -->
         </div><!-- row justify-content-center -->
       </div><!-- col rwdColumn -->
     </div><!-- parentMainSidebar -->
   </div><!-- container-fluid -->
 </div><!-- animated -->
<script type="text/javascript">
	const buttonVersionAPI = document.getElementById("bt_versionAPI_effacer");
	const buttonValiderVersionAPI = document.getElementById("bt_versionAPI_valider");
	let countSelectVersionAPI	=	0;

	buttonVersionAPI.addEventListener("click", (event) => {
		countSelectVersionAPI	=	0;
		var elements = document.getElementsByClassName('versionAPI');
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				elements[i].checked = false ;
		}

		let badge = document.getElementById("badge-versionAPI");
		badge.classList.add("d-none");
        $(".dropdown-toggle").dropdown('hide');
	});

	buttonValiderVersionAPI.addEventListener("click", (event) => {
		var elements = document.getElementsByClassName('versionAPI');
		countSelectVersionAPI	=	0;
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				countSelectVersionAPI++;
		}

		let badge = document.getElementById("badge-versionAPI");
		badge.classList.remove("d-none");
		badge.innerHTML = countSelectVersionAPI;
		$(".dropdown-toggle").dropdown('hide');
	});

	const buttonVersion = document.getElementById("bt_version_effacer");
	const buttonValiderVersion = document.getElementById("bt_version_valider");
	let countSelectVersion	=	0;

	buttonVersion.addEventListener("click", (event) => {
		countSelectVersion	=	0;
		var elements = document.getElementsByClassName('version');
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				elements[i].checked = false ;
		}

		let badge = document.getElementById("badge-version");
		badge.classList.add("d-none");
        $(".dropdown-toggle").dropdown('hide');
	});

	buttonValiderVersion.addEventListener("click", (event) => {
		var elements = document.getElementsByClassName('version');
		countSelectVersion	=	0;
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				countSelectVersion++;
		}

		let badge = document.getElementById("badge-version");
		badge.classList.remove("d-none");
		badge.innerHTML = countSelectVersion;
		$(".dropdown-toggle").dropdown('hide');
	});

	const buttonType = document.getElementById("bt_type_effacer");
	const buttonValiderType = document.getElementById("bt_type_valider");
	let countSelectType	=	0;

	buttonType.addEventListener("click", (event) => {
		countSelectType	=	0;
		var elements = document.getElementsByClassName('versionType');
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				elements[i].checked = false ;
		}

		let badge = document.getElementById("badge-type");
		badge.classList.add("d-none");
        $(".dropdown-toggle").dropdown('hide');
	});

	buttonValiderType.addEventListener("click", (event) => {
		var elements = document.getElementsByClassName('versionType');
		countSelectType	=	0;
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				countSelectType++;
		}

		let badge = document.getElementById("badge-type");
		badge.classList.remove("d-none");
		badge.innerHTML = countSelectType;
		$(".dropdown-toggle").dropdown('hide');
	});

	const buttonSuppFiltre = document.getElementById("supp_filtre");

	buttonSuppFiltre.addEventListener("click", (event) => {
		var elements = document.getElementsByClassName('custom-control-input');
		elementsLength = elements.length;
		for (var i = 0 ; i < elementsLength ; i++) {
			if (elements[i].checked	)
				elements[i].checked = false ;
		}

		let badge1 = document.getElementById("badge-versionAPI");
		badge1.classList.add("d-none");
		let badge2 = document.getElementById("badge-version");
		badge2.classList.add("d-none");
		let badge3 = document.getElementById("badge-type");
		badge3.classList.add("d-none");
        $(".dropdown-toggle").dropdown('hide');
	});

	const buttonRecherche = document.getElementById("boutonRecherche");

	buttonRecherche.addEventListener("click", (event) => {
		/*if (countSelectVersionAPI == 0)
			alert(10);
		else
			alert(20);*/
/*
		if (countSelectVersion !== 0) {
			var elementsligneAPI = document.getElementsByClassName('ligneAPI');
			elementsLength = elementsligneAPI.length;
			for (var i = 0 ; i < elementsLength ; i++) {
				console.log(elementsligneAPI[i].getAttribute("versionwindev"));
				//elementsligneAPI[i].classList.add("d-none");
			}
		}

		if (countSelectType == 0) {
		}*/

	});

</script>

  <?php
  //modalDetailApi.php
  include 'pages/modalB.php';
   include 'pages/bottom.php';
  ?>
  <script>
  $(document).ready(function () {
    $('.open-modal-btn').click(function () {
      // Récupérer les données depuis les attributs data-*
      const nom = $(this).data('nom');
      const titre = $(this).data('titre');
      const type = $(this).data('type');
      const prestataires = $(this).data('prestataires');
      const versionAPI = $(this).data('versionapi');
      const versionWin = $(this).data('versionwin');

      // Mettre à jour le contenu du modal
      $('#modalTitle').text(`Détails de ${titre}`);
      $('#modalNom').text(nom);
      $('#modalTitre').text(titre);
      $('#modalType').text(type);
      $('#modalPrestataires').text(prestataires);
      $('#modalVersionAPI').text(versionAPI);
      $('#modalVersionWin').text(versionWin);

      // Afficher le modal
      $('#detailModal').modal('show');
    });
  });
</script>
