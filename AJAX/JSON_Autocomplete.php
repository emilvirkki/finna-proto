<?php

print file_get_contents('http://www.finna.fi/AJAX/JSON_Autocomplete?' . $_SERVER['QUERY_STRING']);