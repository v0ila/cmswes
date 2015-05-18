<?php

return [ 
		

        'positions' => [

    	'logo'       => 'Logo',
        'logo-small' => 'Logo Small',
        'navbar'     => 'Navbar',
        'fullscreen' => 'Fullscreen',
        'top-a'      => 'Top A',
        'top-c'      => 'Top C',
        'top-b'      => 'Top B',
        'sidebar'    => 'Sidebar',
        'bottom'     => 'Bottom',
        'footer'     => 'Footer',
        'offcanvas'  => 'Offcanvas'
	],

	'renderer' => [
            'blank' 	=> 'theme://onover/views/renderer/position.blank.razr',
            'navbar'    => 'theme://onover/views/renderer/position.navbar.razr',
        	'offcanvas' => 'theme://onover/views/renderer/position.offcanvas.razr',
            'grid'      => 'theme://onover/views/renderer/position.grid.php',
            'panel'     => 'theme://onover/views/renderer/position.panel.razr'

    ]
];