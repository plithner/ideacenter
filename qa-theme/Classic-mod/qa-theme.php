<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-theme/Candy/qa-theme.php
	Description: Override base theme class for Classic theme


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

<?php

class qa_html_theme extends qa_html_theme_base
{
    function nav_user_search() // reverse order from qa_html_theme_base
    {
        $this->search();
        $this->nav('user');
    }

    function page_link_content($page_link) // override ellipsis behavior on tags page only
    {
        if ( ($page_link['type']=='ellipsis') && ($this->template=='tags') )
            $this->output('<SPAN class="qa-page-ellipsis">&mdash;</SPAN>');
        else
            qa_html_theme_base::page_link_content($page_link);
    }
}

