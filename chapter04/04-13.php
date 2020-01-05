<?php
echo preg_replace("/This is a (.+)/", "That is a \\1", "This is a pen");
