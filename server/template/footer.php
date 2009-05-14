<?php
/*
 * Xibo - Digitial Signage - http://www.xibo.org.uk
 * Copyright (C) 2006,2007,2008 Daniel Garner and James Packer
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version. 
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */
 defined('XIBO') or die("Sorry, you are not allowed to directly access this page.<br /> Please press the back button in your browser.");
?>


<div id="system_working">
	<img src="img/loading.gif"><span style="padding-left:10px">Please Wait ...</span>
</div>

<div id="system_message" style="text-align: center;">
	<span>Message</span>
	<p><input type="submit" value="OK" onclick="$('#system_message').dialog('close')" /></p>
</div>

<div id="div_dialog"></div>
<div id="help_dialog"></div>

</div> <!-- Ends the content div -->
</div> <!-- Ends contentwrap div -->
</div> <!-- Ends the container div -->

</body>
</html>