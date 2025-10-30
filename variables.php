<?php

// js.variables //

/// let groupName = "PT2025";// string tipa mainīgais 
/// let size = 25; 
/// let isActive = false ; 
/// const EULER = 2.718;
/// console.log ("groupName:",groupName );
/// console.log ("size:", size);
/// console.log ("isActive:",isActive);
/// console.log ("EULER:",EULER);

// php
// b) String mainīgais.
$groupName = "WEB-1";

// c) Number mainīgais.
$size = 16;

// d) Boolean mainīgais (NAV patiesa).
$isActive = false;

// e) Konstante ar define.
define("EULER", 2.718);

// Izvade, lai pārbaudītu.
echo "Group name: $groupName\n";
echo "Group size: $size\n";
echo "Is active: " . ($isActive ? "true" : "false") . "\n";
echo "EULER constant: " . EULER . "\n";
