<?php

 $searchSelect = $_POST["selectStyle"];
 $theQuery = $_POST["queryTemp"];
 $radioSelection = $_POST["radioSelection"];

//https://cuny-gc.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_GC:CUNY_GC&query=creator,contains,delany&tab=Everything&search_scope=IZ_CI_AW&sortby=rank&mfacet=rtype,include,books,1&mfacet=rtype,include,book_chapters,1&lang=en&mode=basic&offset=0


 $redirect = 'https://cuny-ny.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_NY:CUNY_NY';

switch ($searchSelect){
        case "Everything":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.$theQuery.'&tab=Everything&search_scope=IZ_CI_AW&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&pcAvailabilityMode=false';
                header('Location:'.$redirect);
                break;

        case "Articles":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.'$theQuery&tab=Everything&search_scope=IZ_CI_AW&mode=basic&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,articles';
                header('Location:'.$redirect);
                break;

        case "Books (Print + eBooks)":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.$theQuery.'&tab=Everything&search_scope=IZ_CI_AW&search_scope=IZ_CI_AW&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&pcAvailabiltyMode=false';
                header('Location:'.$redirect);
                break;

        case "Books (Print)":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.$theQuery.'&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&face=tlevel,include,available_p&pcAvailabilityMode=false';
		header('Location:'.$redirect);
                break;

        case "eBooks":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.$theQuery.'&search_scope=IZ_CI_AW&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&facet=tlevel,include,online_resources&pcAvailabilityMode=false';
                header('Location:'.$redirect);
                break;

        case "Media":

                $redirect = $redirect.'&query='.$radioSelection.',contains,'.$theQuery.'&search_scope=IZ_CI_AW&&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,videos&pcAvailabilityMode';
                header('Location:'.$redirect);
                break;

}
?>



