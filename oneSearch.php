<?php
 
 $searchSelect = $_POST["selectStyle"];
 $theQuery = $_POST["queryTemp"];
 
 //echo $searchSelect;
 //echo '<br>'.$theQuery;


 $redirect = 'http://onesearch.cuny.edu/primo_library/libweb/action/dlSearch.do?institution=NY&vid=ny&group=GUEST&onCampus=true';

switch ($searchSelect){
	case "Everything":
		$redirect = $redirect.'&search_scope=everything&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;	
		
	case "Articles":
		$redirect = $redirect.'&search_scope=everything&fctN=facet_rtype&fctV=articles&rfnGrp=1&rfnGrpCounter=1&highlight=true&displayField=title&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;

	case "Books (Print + eBooks)":
		$redirect = $redirect.'&search_scope=everything&fctN=facet_rtype&fctV=books&rfnGrp=1&rfnGrpCounter=1&highlight=true&displayField=title&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;

	case "Books (Print)": 
			$redirect = $redirect.'&search_scope=everything&fctN=facet_tlevel&fctV=available&rfnGrp=show_only&fctN=facet_rtype&fctV=books&rfnGrp=1&rfnGrpCounter=1&highlight=true&displayField=title&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;

	case "eBooks":
			$redirect = $redirect.'&search_scope=everything&fctN=facet_tlevel&fctV=online_resources&rfnGrp=show_only&fctN=facet_rtype&fctV=books&rfnGrp=1&rfnGrpCounter=1&highlight=true&displayField=title&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;

	case "Media":
			$redirect = $redirect.'&search_scope=everything&fctN=facet_rtype&fctV=media&rfnGrp=1&rfnGrpCounter=1&highlight=true&displayField=title&query=any%2Ccontains%2C'.$theQuery.'&queryTemp='.$theQuery;
		header('Location:'.$redirect);
		break;

}?>
