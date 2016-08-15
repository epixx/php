<?php
namespace Epic;

use Epic\EpicFunctions\Core as Functions;
use Epic\Libs\Http;

require 'namespace_one.php';
require 'namespace_two.php';

echo Functions\hello();
echo Http\hello();
