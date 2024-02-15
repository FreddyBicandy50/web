<?php
# Include necessary files

#Global Variables
require(".main/env/env.php");

#DATABASE and FUNCTIONS
require(".main/database/database.php");
require(".main/functions/fetch_agent.php");
require(".main/functions/fetch.php");


#Route
require("router.php");

#something new
# MAIN PAGE
# Check if the URI is the root or has a specific parameter
if (URL('/') || URL('/?i=1')) require($main_page);

# Not Found 404!
else die(include($notfound_page));
