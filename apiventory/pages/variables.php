<?php
// liste des clients
$ACCUEIL = "ACCUEIL";
$AEGIDE = "AEGIDE";
$AETHICA = "AETHICA";
$BNP = "BNP";
$BROWNFIELDS = "BROWNFIELDS";
$CAPELLI = "CAPELLI";
$CIB = "CIB";
$COFFIM = "COFFIM";
$COGEDIM = "COGEDIM";
$CONSTRUCTA = "CONSTRUCTA";
$DUBOIS = "DUBOIS";
$ERISMA = "ERISMA";
$THOMAS = "ETS THOMAS";
$EMERIGE = "EMERIGE";
$ICADE = "ICADE";
$INTERCONSTRUCTION = "INTERCONSTRUCTION";
$GGL = "GGL";
$KB = "KB";
$LEGENDRE = "LEGENDRE";
$NOVAXIA = "NOVAXIA";
$OGIC = "OGIC";
$PICHET = "PICHET";
$QUARTUS = "QUARTUS";
$REALITES = "REALITES";
$SAGEC = "SAGEC";
$SEFRI = "SEFRI CIME";
$SIGLA = "SIGLA NEUF";
$SOGEPROM = "SOGEPROM";
$UNITI = "UNITI";
$URBAN = "URBAN";
$VALORIA = "VALORIA";
$VERRECCHIA = "VERRECCHIA";
$VINCI = "VINCI";

// Liste des versions et du type de techno
$versionPPM = "2.18.13";
$VersionAPIs = "17-05";
$windev22 = "22";
$soap = "SOAP";
$rest = "REST";
$prestataires = "prestataires";
$standard = "Standard";
$success = "badge-success";
$specifique = "Spécifique";
$primary = "badge-primary";


// Gestions des tableaux

$sections = [

    [
        "nom" => $ACCUEIL,
        "url" => ucfirst(strtolower($ACCUEIL)),
        "collapse1" => "stand".$ACCUEIL,
        "collapse2" => "standB".$ACCUEIL ,
        "allCollapse" => "all".$ACCUEIL ,
        "sectionsStandard" => [
          [
            "titre" => "API Restful",
            "prestataires" => "Imolead",
            "type" => $rest,
            "versionapi" => "2.14.19",
            "versionwin" => $windev22
          ],
        ],
        "sectionsSpecifique" => [
            // VIDE
        ],
		    "maj" => "08/03/2023 00:34:52"
    ],
    [
        "nom" => $AEGIDE, "url" => ucfirst(strtolower($AEGIDE)),  "collapse1" => "stand".$AEGIDE,  "collapse2" => "standB".$AEGIDE , "allCollapse" => "all".$AEGIDE ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.17.7", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
            ["titre" => "API Restful Acquereur", "type" => $rest, "versionapi" => "1.2.0", "versionwin" => "24"],
        ],
		"maj" => "24/06/2024 15:39:44"
    ],
    [
        "nom" => $AETHICA, "url" => ucfirst(strtolower($AETHICA)),  "collapse1" => "stand".$AETHICA,  "collapse2" => "standB".$AETHICA , "allCollapse" => "all".$AETHICA ,
        "sectionsStandard" => [
        ],
        "sectionsSpecifique" => [
            ["titre" => "GPSWBSCRM", "type" => $soap, "versionapi" => "19.04", "versionwin" => "20"],
        ],
		"maj" => "24/01/2019 11:55:55"
    ],
    [
        "nom" => $BNP, "url" => ucfirst(strtolower($BNP)),  "collapse1" => "stand".$BNP,  "collapse2" => "standB".$BNP , "allCollapse" => "all".$BNP ,
        "sectionsStandard" => [
        ],
        "sectionsSpecifique" => [
            ["titre" => "API Restful BNP", "type" => $rest, "versionapi" => "24.01G", "versionwin" => "24"],
        ],
		"maj" => "08/04/2024 18:28:46"
    ],
    [
        "nom" => $BROWNFIELDS, "url" => ucfirst(strtolower($BROWNFIELDS)),  "collapse1" => "stand".$BROWNFIELDS,  "collapse2" => "standB".$BROWNFIELDS , "allCollapse" => "all".$BROWNFIELDS ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.16.4 (AZURE)", "versionwin" => "28"],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "15/07/2024 07:59:42"
    ],
    [
        "nom" => $CAPELLI, "url" => ucfirst(strtolower($CAPELLI)),  "collapse1" => "stand".$CAPELLI,  "collapse2" => "standB".$CAPELLI , "allCollapse" => "all".$CAPELLI ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "1.6.2", "versionwin" => $windev22],
			["titre" => "API Restful", "type" => $rest, "versionapi" => "2.3.9", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
            ["titre" => "WBS Controle", "type" => $soap, "versionapi" => "17.05", "versionwin" => $windev22],
        ],
		"maj" => "17/02/2022 16:20:42"
    ],
    [
        "nom" => $CIB, "url" => ucfirst(strtolower($CIB)),  "collapse1" => "stand".$CIB,  "collapse2" => "standB".$CIB , "allCollapse" => "all".$CIB ,
        "sectionsStandard" => [
			["titre" => "API Restful", "type" => $rest, "versionapi" => "2.14.41", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "24/05/2023 08:46:32"
    ],
    [
        "nom" => $COFFIM, "url" => ucfirst(strtolower($COFFIM)),  "collapse1" => "stand".$COFFIM,  "collapse2" => "standB".$COFFIM , "allCollapse" => "all".$COFFIM ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.11.2", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "15/12/2022 16:54:06"
    ],
    [
        "nom" => $COGEDIM, "url" => ucfirst(strtolower($COGEDIM)),  "collapse1" => "standard1",  "collapse2" => "standard2", "allCollapse" => "all".$COGEDIM ,
        "sectionsStandard" => [
          ["titre" => "API Restful", "type" => $rest , "versionapi" => "2.18.13", "versionwin" => $windev22 ],
        ],
        "sectionsSpecifique" => [
          ["titre" => "COGWBSVIR", "type" => $soap , "versionapi" => "17.05", "versionwin" => $windev22  ],
          ["titre" => "WBS COGWBS", "type" => $soap , "versionapi" => "17.05", "versionwin" => $windev22  ],
          ["titre" => "WBS Afedim", "type" => $soap , "versionapi" => "17.05", "versionwin" => $windev22  ],
          ["titre" => "WBS Controle", "type" => $soap , "versionapi" => "17.05", "versionwin" => $windev22  ],
          ["titre" => "WBS Participation", "type" => $soap , "versionapi" => "17.05", "versionwin" => $windev22  ],
          ["titre" => "API CRM REST", "type" => $rest , "versionapi" => "1.0", "versionwin" => $windev22  ],
        ],
		"maj" => "24/10/2024 17:55:06"
    ],
    [
        "nom" => $CONSTRUCTA, "url" => ucfirst(strtolower($CONSTRUCTA)),  "collapse1" => "stand".$CONSTRUCTA,  "collapse2" => "standB".$CONSTRUCTA , "allCollapse" => "all".$CONSTRUCTA ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.13.32", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "28/12/2023 23:38:38"
    ],
    [
        "nom" => $DUBOIS, "url" => ucfirst(strtolower($DUBOIS)),  "collapse1" => "stand".$DUBOIS,  "collapse2" => "standB".$DUBOIS , "allCollapse" => "all".$DUBOIS ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.16.7 (AZURE)", "versionwin" => "28"],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "30/09/2024 09:01:23"
    ],
    [
        "nom" => $EMERIGE, "url" => ucfirst(strtolower($EMERIGE)),  "collapse1" => "stand".$EMERIGE,  "collapse2" => "standB".$EMERIGE , "allCollapse" => "all".$EMERIGE ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest , "versionapi" => "2.3.10", "versionwin" => $windev22 ],
			["titre" => "API Restful", "type" => $rest , "versionapi" => "2.17.0", "versionwin" => $windev22 ],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "13/05/2024 13:40:14"
    ],
    [
        "nom" => $THOMAS, "url" => "Thomas",  "collapse1" => "stand".$THOMAS,  "collapse2" => "standB".$THOMAS , "allCollapse" => "all".$THOMAS ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.16.3", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "15/07/2024 07:41:45"
    ],
    [
        "nom" => $ERISMA, "url" => ucfirst(strtolower($ERISMA)),  "collapse1" => "stand".$ERISMA,  "collapse2" => "standB".$ERISMA , "allCollapse" => "all".$ERISMA ,
        "sectionsStandard" => [
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "15/10/2020 11:41:45"
    ],
    [
        "nom" => $ICADE, "url" => ucfirst(strtolower($ICADE)),  "collapse1" => "stand".$ICADE,  "collapse2" => "standB".$ICADE , "allCollapse" => "all".$ICADE ,
        "sectionsStandard" => [
			["titre" => "API Restful", "type" => $rest, "versionapi" => "2.9.4", "versionwin" => $windev22],
			["titre" => "API Restful", "type" => $rest, "versionapi" => "2.13.3", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "12/05/2023 10:35:45"
    ],
    [
        "nom" => $INTERCONSTRUCTION, "url" => ucfirst(strtolower($INTERCONSTRUCTION)),  "collapse1" => "stand".$INTERCONSTRUCTION,  "collapse2" => "standB".$INTERCONSTRUCTION , "allCollapse" => "all".$INTERCONSTRUCTION ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.17.9", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "29/10/2024 11:52:28"
    ],
    [
        "nom" => $GGL, "url" => ucfirst(strtolower($GGL)),  "collapse1" => "stand".$GGL,  "collapse2" => "standB".$GGL , "allCollapse" => "all".$GGL ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.14.33", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "02/05/2023 22:58:24"
    ],
    [
        "nom" => $KB, "url" => ucfirst(strtolower($KB)),  "collapse1" => "stand".$KB,  "collapse2" => "standB".$KB , "allCollapse" => "all".$KB ,
        "sectionsStandard" => [
        ],
        "sectionsSpecifique" => [
            ["titre" => "API Restful KB", "type" => $rest, "versionapi" => "1.0.0", "versionwin" => "28"],
        ],
		"maj" => "01/09/2024 15:39:24"
    ],
    [
        "nom" => $LEGENDRE, "url" => ucfirst(strtolower($LEGENDRE)),  "collapse1" => "stand".$LEGENDRE,  "collapse2" => "standB".$LEGENDRE , "allCollapse" => "all".$LEGENDRE ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.13.38", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "21/10/2024 16:05:34"
    ],
    [
        "nom" => $NOVAXIA, "url" => ucfirst(strtolower($NOVAXIA)),  "collapse1" => "stand".$NOVAXIA,  "collapse2" => "standB".$NOVAXIA , "allCollapse" => "all".$NOVAXIA ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.12.8", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "19/10/2022 15:41:28"
    ],
    [
        "nom" => $OGIC, "url" => ucfirst(strtolower($OGIC)),  "collapse1" => "stand".$OGIC,  "collapse2" => "standB".$OGIC , "allCollapse" => "all".$OGIC ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.14.83", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
            ["titre" => "GPSWBSWKF", "type" => $soap, "versionapi" => "21.04", "versionwin" => "24"],
        ],
		"maj" => "08/10/2024 08:39:08"
    ],
    [
        "nom" => $PICHET, "url" => ucfirst(strtolower($PICHET)),  "collapse1" => "stand".$PICHET,  "collapse2" => "standB".$PICHET , "allCollapse" => "all".$PICHET ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.18.3", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
            ["titre" => "GPSWBSWKF", "type" => $soap, "versionapi" => "21.04", "versionwin" => "24"],
        ],
		"maj" => "14/11/2024 10:09:36"
    ],
    [
        "nom" => $QUARTUS, "url" => ucfirst(strtolower($QUARTUS)),  "collapse1" => "stand".$QUARTUS,  "collapse2" => "standB".$QUARTUS , "allCollapse" => "all".$QUARTUS ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.14.88", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "28/10/2024 17:38:28"
    ],
    [
        "nom" => $REALITES, "url" => ucfirst(strtolower($REALITES)),  "collapse1" => "stand".$REALITES,  "collapse2" => "standB".$REALITES , "allCollapse" => "all".$REALITES ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.8.12", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
			["titre" => "API Restful Acquereur", "type" => $rest, "versionapi" => "1.0.0 (RECETTE)", "versionwin" => "24"],
        ],
		"maj" => "31/08/2022 12:07:38"
    ],
    [
        "nom" => $SAGEC, "url" => ucfirst(strtolower($SAGEC)),  "collapse1" => "stand".$SAGEC,  "collapse2" => "standB".$SAGEC , "allCollapse" => "all".$SAGEC ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "1.5.5", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "16/01/2020 16:45:08"
    ],
    [
        "nom" => $SEFRI, "url" => "SefriCime",  "collapse1" => "stand".$SEFRI,  "collapse2" => "standB".$SEFRI , "allCollapse" => "all".$SEFRI ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "1.5.7", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "22/11/2022 14:45:08"
    ],
    [
        "nom" => $SIGLA, "url" => "SiglaNeuf",  "collapse1" => "stand".$SIGLA,  "collapse2" => "standB".$SIGLA , "allCollapse" => "all".$SIGLA ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.1.4", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "23/03/2020 11:02:08"
    ],
    [
        "nom" => $SOGEPROM, "url" => ucfirst(strtolower($SOGEPROM)),  "collapse1" => "stand".$SOGEPROM,  "collapse2" => "standB".$SOGEPROM , "allCollapse" => "all".$SOGEPROM ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.16.3", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
            ["titre" => "GPSWBSWKF", "type" => $soap, "versionapi" => "23.01", "versionwin" => "24"],
			["titre" => "API COMIN", "type" => $rest, "versionapi" => "1.0.0", "versionwin" => $windev22]
        ],
		"maj" => "01/07/2024 21:54:02"
    ],
	[
        "nom" => $UNITI, "url" => ucfirst(strtolower($UNITI)),  "collapse1" => "stand".$UNITI,  "collapse2" => "standB".$UNITI , "allCollapse" => "all".$UNITI ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.18.2 (AZURE)", "versionwin" => "28"],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "04/10/2024 13:33:50"
    ],
    [
        "nom" => $URBAN, "url" => ucfirst(strtolower($URBAN)),  "collapse1" => "stand".$URBAN,  "collapse2" => "standB".$URBAN , "allCollapse" => "all".$URBAN ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.16.3 (AZURE)", "versionwin" => "28"],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "15/07/2024 07:41:46"
    ],
    [
        "nom" => $VALORIA, "url" => ucfirst(strtolower($VALORIA)),  "collapse1" => "stand".$VALORIA,  "collapse2" => "standB".$VALORIA , "allCollapse" => "all".$VALORIA ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.1.2", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
        ],
		"maj" => "06/11/2019 09:48:15"
    ],
    [
        "nom" => $VERRECCHIA, "url" => ucfirst(strtolower($VERRECCHIA)),  "collapse1" => "stand".$VERRECCHIA,  "collapse2" => "standB".$VERRECCHIA , "allCollapse" => "all".$VERRECCHIA ,
        "sectionsStandard" => [
            ["titre" => "API Restful", "type" => $rest, "versionapi" => "2.6.12", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
			["titre" => "WBS Controle", "type" => $soap, "versionapi" => "21.04", "versionwin" => $windev22],
        ],
		"maj" => "18/03/2022 09:47:46"
    ],
    [
        "nom" => $VINCI, "url" => ucfirst(strtolower($VINCI)),  "collapse1" => "stand".$VINCI,  "collapse2" => "standB".$VINCI , "allCollapse" => "all".$VINCI ,
        "sectionsStandard" => [
			["titre" => "API Restful", "type" => $rest, "versionapi" => "2.12.26", "versionwin" => $windev22],
        ],
        "sectionsSpecifique" => [
			["titre" => "API Restful Acquereur", "type" => $rest, "versionapi" => "1.1.0", "versionwin" => "24"],
			["titre" => "GPSWBSWKF", "type" => $soap, "versionapi" => "21.04", "versionwin" => "24"],
			["titre" => "VCIWBSCRM", "type" => $soap, "versionapi" => "21.04", "versionwin" => "24"],
        ],
		"maj" => "25/11/2022 16:39:18"
    ]
];



// Calcul du total général des sections spécifiques et standards avant la boucle d'affichage
$totalSectionsGlobalA = 0;
$totalSectionsGlobalB = 0;

// Première boucle pour calculer le total global avant d'afficher les sections
foreach ($sections as $section) {

    $totalSectionsGlobalA += (ISSET ($section["sectionsSpecifique"])) ? count($section["sectionsSpecifique"]) : 0;
    $totalSectionsGlobalB += (ISSET ($section["sectionsStandard"])) ? count($section["sectionsStandard"]) : 0;
}

// Affichage du total général
$totalSectionsGeneral = $totalSectionsGlobalA + $totalSectionsGlobalB;
?>
