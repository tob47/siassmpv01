<?php
function paginate($reload, $hal, $thals, $adjacents) {
	$prevlabel = "&lsaquo; Prev";
	$nextlabel = "Next &rsaquo;";
	$out = '<div class="pagin green">';

	

	if($hal==1) {
		$out.= "<span>$prevlabel</span>";
	} else if($hal==2) {
		$out.= "<a href='".$reload."&hal=".($hal-1)."'>$prevlabel</a>";
	}else {
		$out.= "<a href='".$reload."&hal=".($hal-1)."'>$prevlabel</a>";

	}
	
	
	if($hal>($adjacents+1)) {
		$out.= "<a href='".$reload."&hal=1'>1</a>";
	}
	
	if($hal>($adjacents+2)) {
		$out.= "...\n";
	}

	

	$pmin = ($hal>$adjacents) ? ($hal-$adjacents) : 1;
	$pmax = ($hal<($thals-$adjacents)) ? ($hal+$adjacents) : $thals;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$hal) {
			$out.= "<span>$i</span>";
		}else if($i==1) {
			$out.= "<a href='".$reload."&hal=$i'>$i</a>";
		}else {
			$out.= "<a href='".$reload."&hal=$i'>$i</a>";
		}
	}

	

	if($hal<($thals-$adjacents-1)) {
		$out.= "...\n";
	}

	

	if($hal<($thals-$adjacents)) {
		$out.= "<a href='".$reload."&hal=$thals'>$thals</a>";
	}

	

	if($hal<$thals) {
		$out.= "<a href='".$reload."&hal=".($hal+1)."'>$nextlabel</a>";
	}else {
		$out.= "<span>$nextlabel</span>";
	}
	$out.= "</div>";
	return $out;
}
?>