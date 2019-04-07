<?php

// local segmentation
// setup default site runs only on desktop to minimize maintenance
$segments_config["www"] = array(
	
	"desktop"       => "desktop",
	"desktop_ie11"  => "desktop",
	"desktop_ie10"  => "desktop",

	"smartphone"    => "smartphone",

	"desktop_ie9"   => "desktop",
	"desktop_light" => "unsupported",
	"tv"            => "desktop",

	"tablet"        => "desktop",
	"tablet_light"  => "desktop",

	"mobile"        => "unsupported",
	"mobile_light"  => "unsupported",

	"seo"           => "seo"

);

?>