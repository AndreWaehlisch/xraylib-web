<?php

define("XRL_MACRO", 0);
define("XRL_FUNCTION", 1);
define("XRL_PROCEDURE", 2);

function display_none_all(){
	global $ElementStyle;
	global $CompoundStyle;
	global $ElementOrCompoundStyle;
	global $ShellStyle;
	global $EnergyStyle;
	global $ThetaStyle;
	global $PhiStyle;
	global $LinetypeStyle;
	global $MomentumTransferStyle;
	global $CKTransStyle;
	global $DensityStyle;
	global $PZStyle;
	global $AugerTransStyle;
	global $NISTcompoundStyle;
	global $RadioNuclideStyle;

	$ElementStyle="display:none";
	$CompoundStyle="display:none";
	$ElementOrCompoundStyle="display:none";
	$ShellStyle="display:none";
	$EnergyStyle="display:none";
	$ThetaStyle="display:none";
	$PhiStyle="display:none";
	$LinetypeStyle="display:none";
	$MomentumTransferStyle="display:none";
	$CKTransStyle="display:none";
	$DensityStyle="display:none";
	$PZStyle="display:none";
	$AugerTransStyle="display:none";
	$NISTcompoundStyle="display:none";
	$RadioNuclideStyle="display:none";
}

?>
