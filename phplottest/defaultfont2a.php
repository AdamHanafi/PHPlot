<?php
# $Id$
# Testing phplot - Default TT font (2a): Local path and default font.
# This test requires a specific font (see TEST_FONT) be present in the images/
# directory. The listed font is redistributable under the Open Fonts License.
require_once 'phplot.php';
define('TEST_FONT', 'FreeUniversal-Regular.ttf');

$data = array(
  array('A', 3,  6),
  array('B', 2,  4),
  array('C', 1,  2),
);
$p = new PHPlot(800, 800);
$p->SetDataType('text-data');
$p->SetDataValues($data);
$p->SetPlotType('bars');
$p->SetTitle('Local TTF path and default font');
$p->SetXTitle('X Axis Title');
$p->SetYTitle('Y Axis Title');
$p->SetTTFPath(getcwd() . DIRECTORY_SEPARATOR . 'images');
$p->SetDefaultTTFont(TEST_FONT);
$p->SetUseTTF(True);
$p->DrawGraph();
fwrite(STDERR, "OK defaultfont2a: default_ttfont=".$p->default_ttfont."\n");
