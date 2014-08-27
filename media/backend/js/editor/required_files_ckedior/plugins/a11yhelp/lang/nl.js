﻿/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.plugins.setLang('a11yhelp','nl',{
    accessibilityHelp:{
        title:'Toegankelijkheidsinstructies',
        contents:'Help inhoud. Druk op ESC om dit dialoog te sluiten.',
        legend:[{
            name:'Algemeen',
            items:[{
                name:'Werkbalk tekstverwerker',
                legend:'Druk op ${toolbarFocus} om naar de werkbalk te navigeren. Om te schakelen naar de volgende en vorige werkbalkgroep, gebruik TAB en SHIFT+TAB. Om te schakelen naar de volgende en vorige werkbalkknop, gebruik de PIJL RECHTS en PIJL LINKS. Druk op SPATIE of ENTER om een werkbalkknop te activeren.'
            },{
                name:'Dialoog tekstverwerker',
                legend:'In een dialoogvenster, druk op TAB om te navigeren naar het volgende veld. Druk op SHIFT+TAB om naar het vorige veld te navigeren. Druk op ENTER om het dialoogvenster te verzenden. Druk op ESC om het dialoogvenster te sluiten. Voor dialoogvensters met meerdere tabbladen, druk op ALT+F10 om naar de tabset te navigeren. Schakel naar het volgende tabblad met TAB of PIJL RECHTS. Schakel naar het vorige tabblad met SHIFT+TAB of PIJL LINKS. Druk op SPATIE of ENTER om het tabblad te selecteren.'
            },{
                name:'Contextmenu tekstverwerker',
                legend:'Druk op ${contextMenu} of APPLICATION KEY om het contextmenu te openen. Schakel naar de volgende menuoptie met TAB of PIJL OMLAAG. Schakel naar de vorige menuoptie met SHIFT+TAB of PIJL OMHOOG. Druk op SPATIE of ENTER om een menuoptie te selecteren. Op een submenu van de huidige optie met SPATIE, ENTER of PIJL RECHTS. Ga terug naar de bovenliggende menuoptie met ESC of PIJL LINKS. Sluit het contextmenu met ESC.'
            },{
                name:'Keuzelijst tekstverwerker',
                legend:'In een keuzelijst, schakel naar het volgende item met TAB of PIJL OMLAAG. Schakel naar het vorige item met SHIFT+TAB of PIJL OMHOOG. Druk op SPATIE of ENTER om het item te selecteren. Druk op ESC om de keuzelijst te sluiten.'
            },{
                name:'Elementenpad werkbalk tekstverwerker',
                legend:'Druk op ${elementsPathFocus} om naar het elementenpad te navigeren. Om te schakelen naar het volgende element, gebruik TAB of PIJL RECHTS. Om te schakelen naar het vorige element, gebruik SHIFT+TAB or PIJL LINKS. Druk op SPATIE of ENTER om een element te selecteren in de tekstverwerker.'
            }]
        },{
            name:'Opdrachten',
            items:[{
                name:'Ongedaan maken opdracht',
                legend:'Druk op ${undo}'
            },{
                name:'Opnieuw uitvoeren opdracht',
                legend:'Druk op ${redo}'
            },{
                name:'Vetgedrukt opdracht',
                legend:'Druk up ${bold}'
            },{
                name:'Cursief opdracht',
                legend:'Druk op ${italic}'
            },{
                name:'Onderstrepen opdracht',
                legend:'Druk op ${underline}'
            },{
                name:'Link opdracht',
                legend:'Druk op ${link}'
            },{
                name:'Werkbalk inklappen opdracht',
                legend:'Druk op ${toolbarCollapse}'
            },{
                name:'Toegankelijkheidshulp',
                legend:'Druk op ${a11yHelp}'
            }]
        }]
    }
});
