<?php
/*
 * Written by Damian Zaremba <damian@damianzaremba.co.uk>
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 

 */
require_once('phpcoord.php');

/* 
 * Array of checkpoints - key doesn't matter
 * Required items:
 * id - Checkpoint ID
 * OSGB - OSGB reference 
 * name - Checkpoint name
 * detail - Any other details
 */
$checkpoints = array(
	0 => array(
		"id" => "0",
		"OSGB" => "SP897006",
		"name" => "START",
		"details" => "The Misbourne School",
	),
	1 => array(
		"id" => "1",
		"OSGB" => "SP922024",
		"name" => "Herberts Hole",
		"details" => "Park in front of the gateway to the bridal path,  only room for one vehicle. No shelter required on this checkpoint. Leave room on the bridal path for horses.",
	),
	2 => array(
		"id" => "2",
		"OSGB" => "SP956016",
		"name" => "Chesham In St.",
		"details" => "Mary’s Guide HQ in the park.",
	),
	3 => array(
		"id" => "3",
		"OSGB" => "SP987016",
		"name" => "Ley Hill",
		"details" => "Car park opposite pub.",
	),
	4 => array(
		"id" => "4",
		"OSGB" => "SP970039",
		"name" => "Nashleigh Farm",
		"details" => "Set up on the north point of the island on the east of the A416. Formed between the old and new road.",
	),
	5 => array(
		"id" => "5",
		"OSGB" => "SP947062",
		"name" => "Hawridge",
		"details" => "Set up on side of road at the pub car park.",
	),
	6 => array(
		"id" => "6",
		"OSGB" => "SP939082",
		"name" => "Unserviced checkpoint",
		"details" => "Park where footpath crosses road at bottom of dip.",
	),
	7 => array(
		"id" => "7",
		"OSGB" => "SP915092",
		"name" => "Hastoe",
		"details" => "Set up by entrance to wood. Take care not to block footpath or bridleway.",
	),
	8 => array(
		"id" => "8",
		"OSGB" => "SP892057",
		"name" => "Kings Ash",
		"details" => "Use the wide grass verge opposite to the end of the track, do not obstruct the lane/track as it may be in use. Support cars are not allowed at this checkpoint.",
	),
	9 => array(
		"id" => "9",
		"OSGB" => "SP863073",
		"name" => "Coombe hill bottom",
		"details" => "Set up in the lay-by at the bottom of the hill.",
	),
	10 => array(
		"id" => "10",
		"OSGB" => "SP851062",
		"name" => "Coombe hill car park",
		"details" => "Set up in car park for coombe hill. If you contact the residence of Hunters Lodge, they will probably let you have water as they have an outside stand-pipe.",
	),
	11 => array(
		"id" => "11",
		"OSGB" => "SP833045",
		"name" => "Longdown",
		"details" => "Set up in lay-by/ car park at the bottom of hill.",
	),
	12 => array(
		"id" => "12",
		"OSGB" => "SP805040",
		"name" => "Princes Risborough",
		"details" => "In the scout HQ, no support vehicles allowed at this checkpoint.",
	),
	13 => array(
		"id" => "13",
		"OSGB" => "SP783011",
		"name" => "Ickneild Way",
		"details" => "Set up either on the verge well clear of the road junction or in the lane leading from the road junction near the farm.",
	),
	14 => array(
		"id" => "14",
		"OSGB" => "SP760002",
		"name" => "Chinnor Ridgeway",
		"details" => "Set up on the ridgeway path not too far from the road. Probably best on the west side of the road near to the quarry entrance.",
	),
	15 => array(
		"id" => "15",
		"OSGB" => "SU756986",
		"name" => "Crowel Hill",
		"details" => "Park on the corner in the edge of wood. Avoid noise so as not to disturb nearby housing.",
	),
	16 => array(
		"id" => "16",
		"OSGB" => "SU746973",
		"name" => "Kingston Hill",
		"details" => "On the grass at side of lane. Liase with nearby household.",
	),
	17 => array(
		"id" => "17",
		"OSGB" => "SU761966",
		"name" => "Stokenchurch HQ",
		"details" => "In the scout HQ, support vehicles not allowed near scout HQ. Park in the playing fields car parkby the community centre and walk across playing fields.",
	),
	18 => array(
		"id" => "18",
		"OSGB" => "SU789970",
		"name" => "Radnage",
		"details" => "Set up on lay-by used as gravel tip.",
	),
	19 => array(
		"id" => "18A",
		"OSGB" => "SP801002",
		"name" => "Ridgeway Path",
		"details" => "Park so you can see approaching walkers on ridgeway path, take care not to block driveway to house.",
	),
	20 => array(
		"id" => "19",
		"OSGB" => "SU807996",
		"name" => "Saunderton Lee",
		"details" => "Set up on grass between lane and main road near the archery club.",
	),
	21 => array(
		"id" => "20",
		"OSGB" => "SP836018",
		"name" => "Redland End",
		"details" => "Set up on wide verge by road junction. Keep tentage well back from road so as not to obscure the view for vehicles.",
	),
	22 => array(
		"id" => "21",
		"OSGB" => "SP855004",
		"name" => "Denner Hill",
		"details" => "Set up on T-junction of lanes. Tight for space but try to provide shelter for walkers who may be very cold and tired. Few drop-outs here but need encouragement and a smile! Do not enter the field or disturb local residents for any reason at all.",
	),
	23 => array(
		"id" => "22",
		"OSGB" => "SP877006",
		"name" => "Prestwood HQ",
		"details" => "Set up in HQ",
	),
	24 => array(
		"id" => "23",
		"OSGB" => "SP897006",
		"name" => "THE FINISH",
		"details" => "The Misbourne School",
	),
);

/* Convert the OSGB data to lat/long data for the map api */
foreach($checkpoints as $id => &$checkpoint) {
	$os = getOSRefFromSixFigureReference($checkpoint['OSGB'])->toLatLng();
	$checkpoint['lat'] = $os->lat; 
	$checkpoint['long'] = $os->lng;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"> 
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>endurance 80 route</title>
		<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAArKyS_yRXmMvmOZ3CeYtMhSbVERVGJZi4Ct5OgVLzBqpvd-PzhS6jpIwg6wG4gGTbtAAFQsA2MKi5A" type="text/javascript"></script>
		<script type="text/javascript">
			function createMarker(point, id, name, details, npoint) {
				var marker = new GMarker(point);
				GEvent.addListener(marker, "click", function() {
					var html = '<h1>Checkpoint ' + id + '</h1>';
					html += '<p>Name: ' + name + '</p>';
					html += '<p>Details: </p><p>' + details + '</p>';
					marker.openInfoWindowHtml(html);
				});
				return marker;
			}

			function initialize() {
				if (GBrowserIsCompatible()) {
					var map = new GMap2(document.getElementById("map_canvas"));
					map.addControl(new GSmallMapControl());
					map.addControl(new GMapTypeControl());
					map.setCenter(new GLatLng(<?php echo $checkpoints[0]['lat']; ?>, <?php echo $checkpoints[0]['long']; ?>), 11);

					<?php
					/* Write out each checkpoint */
					for($i=0; $i < count($checkpoints); $i++) {
					$id = $checkpoints[$i]['id'];
					$name = str_replace(array('"', "\n"), array('\"', " "), $checkpoints[$i]['name']);
					$details = str_replace(array('"', "\n"), array('\"', " "), $checkpoints[$i]['details']);
					$lat = $checkpoints[$i]['lat'];
					$long = $checkpoints[$i]['long'];

					echo('
					var cp' . $id . ' = new GLatLng(' . $lat . ', ' . $long . ');
					var cpm' . $id . ' = createMarker(cp' . $id . ', "' . $id . '", "' . $name . '", "' . $details . '");
					map.addOverlay(cpm' . $id . ');
					');

					}
					?>

					<?php
					/* Write out each checkpoint link */
					for($i=0; $i < count($checkpoints); $i++) {
					$ni = $i; $ni++;

					$id = $checkpoints[$i]['id'];
					$nid = $checkpoints[$ni]['id'];

					if($nid) {
					echo ('
					var cpl'. $id . '_' . $nid . ' = new GPolyline([cp' . $id . ', cp' . $nid . ']);
					map.addOverlay(cpl' . $id . '_' . $nid . ');
					');
					}
					}
					?>

				}
			}
		</script>

		<style type="text/css">
			html {
				height: auto;
			}

			body {
				height: auto;
				margin: 0;
				padding: 0;
			}

			#map_canvas {
				height: auto;
				position: absolute;
				bottom: 0;
				left: 0;
				right: 0;
				top: 0;
			}

			@media print {
				#map_canvas {
					height: 950px;
				}
			}
		</style>
	</head>
	<body onload="initialize()" onunload="GUnload()">
		<div id="map_canvas"></div>
	</body>
</html>
