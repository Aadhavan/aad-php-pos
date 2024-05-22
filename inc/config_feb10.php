<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'              => 'Pacific Force',
    'version'           => '1.0',
    'author'            => 'Infogenx',
    'robots'            => 'noindex, nofollow',
    'title'             => 'Pacific Force ERP',
    'description'       => 'Pacific Force',
    // true                     enable page preloader
    // false                    disable page preloader
    'page_preloader'    => false,
    // true                     enable main menu auto scrolling when opening a submenu
    // false                    disable main menu auto scrolling when opening a submenu
    'menu_scroll'       => true,
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar'     => 'navbar-default',
    // ''                       empty for a static layout
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header'            => '',
    // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
    // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
    // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-mini sidebar-visible-lg-mini'           for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
    // 'sidebar-mini sidebar-visible-lg'                for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)
    // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
    // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
    // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
    'sidebar'           => 'sidebar-partial sidebar-visible-lg sidebar-no-animations',
    // ''                       empty for a static footer
    // 'footer-fixed'           for a fixed footer
    'footer'            => '',
    // ''                       empty for default style
    // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
    'main_style'        => '',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire', 'coral', 'lake',
    // 'forest', 'waterlily', 'emerald', 'blackberry' or '' leave empty for the Default Blue theme
    'theme'             => '',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content'    => '',
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'index.php',
        'icon'  => 'gi gi-stopwatch'
    ),
     array(
        'name'  => 'Master',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
        'url'   => 'header',
    ),
     array(
        'name'  => 'Master Pages',
        'icon'  => 'gi gi-notes_2',
        'sub'   => array(
            array(
                'name'  => 'Company',
                'sub'   => array(
                    array(
                        'name'  => 'Add Company',
                        'url'   => 'addcompany.php'
                    ),
                    array(
                        'name'  => 'ViewCompany',
                        'url'   => 'viewcompany.php'
                    )
                )
            ),
            array(
                'name'  => 'Suppliers',
                'sub'   => array(
                    array(
                        'name'  => 'Add Supplier',
                        'url'   => 'addsupplier.php'
                    ),
                    array(
                        'name'  => 'View Suppliers',
                        'url'   => 'viewsupplier.php'
                    )
                )
            ), 
            array(
                'name'  => 'Customers',
                'sub'   => array(
                    array(
                        'name'  => 'Add customer',
                        'url'   => 'addcustomer.php'
                    ),
                    array(
                        'name'  => 'View Customers',
                        'url'   => 'viewcustomer.php'
                    ) 
                )
            ),
            array(
                'name'  => 'Items',
                'sub'   => array(
                    array(
                        'name'  => 'Add Item',
                        'url'   => 'additem.php'
                    ),
                    array(
                        'name'  => 'View Item',
                        'url'   => 'viewitems.php'
                    )
                )
            ),
             array(
                'name'  => 'Brands',
                'sub'   => array(
                    array(
                        'name'  => 'Add Brand',
                        'url'   => 'addbrand.php'
                    ),
                     array(
                        'name'  => 'Add Brand Model',
                        'url'   => 'addbrandmodel.php'
                    )
                )
            ),
              array(
                'name'  => 'Atttributes',
                'sub'   => array(
                    array(
                        'name'  => 'Add Attribute Capacity',
                        'url'   => 'addattributecat.php'
                    ),
                    array(
                        'name'  => 'Add Attribute Colour',
                        'url'   => 'addattribute.php'
                    )
                )
            ),
              array(
                'name'  => 'Cash Type',
                'sub'   => array(
                    array(
                        'name'  => 'Add Type',
                        'url'   => 'addcashtype.php'
                    )
                )
            ),
              array(
                'name'  => 'Taxs',
                'sub'   => array(
                    array(
                        'name'  => 'Add Tax',
                        'url'   => 'addtax.php'
                    )
                )
            ),
              array(
                'name'  => 'Payment Terms',
                'sub'   => array(
                    array(
                        'name'  => 'Add PayTerms',
                        'url'   => 'addpayterms.php'
                    )
                )
            )
        )
    ), 
    /*array(
        'name'  => 'eCommerce',
        'icon'  => 'gi gi-shopping_cart',
        'sub'   => array(
            array(
                'name'  => 'Dashboard',
                'url'   => 'page_ecom_dashboard.php'
            ),
            array(
                'name'  => 'Orders',
                'url'   => 'page_ecom_orders.php'
            ),
            array(
                'name'  => 'Order View',
                'url'   => 'page_ecom_order_view.php'
            ),
            array(
                'name'  => 'Products',
                'url'   => 'page_ecom_products.php'
            ),
            array(
                'name'  => 'Product Edit',
                'url'   => 'page_ecom_product_edit.php'
            ),
            array(
                'name'  => 'Customer View',
                'url'   => 'page_ecom_customer_view.php'
            )
        )
    ),  */
    
      array(
        'name'  => 'Stock Items',
        'icon'  =>'fa fa-database',
        'name'  => 'Stock Items',
        'url'   => 'stockitems.php'
                    
    ),
     array(
        'name'  => 'Add Stock Inventory',
        'icon'  =>'fa fa-database',
        'name'  => 'Add Stock Inventory',
        'url'   => 'addstockinventory.php'
                    
    ),
    array(
        'name'  => 'Purchase',
        'icon'  =>'gi gi-shopping_cart ',
        'sub'   => array(
                    array(
                        'name'  => 'Purchase order',
                        'url'   => 'purchaseorder.php'
                    ),
                    array(
                        'name'  => 'Purchase Order list',
                        'url'   => 'purchaseorderlist.php'
                    )
                )
    ),
    array(
        'name'  => 'Sales',
        'icon'  =>'gi gi-money',
        'sub'   => array(
                    array(
                        'name'  => 'Sales order',
                        'url'   => 'salesorder.php'
                    ),
                    array(
                        'name'  => 'Sales Order list',
                        'url'   => 'salesorderlist.php'
                    )
                )
    ),
/*    array(
        'name'  => 'Reports',
        'url'   => 'report.php',
        'icon'  => 'gi gi-charts'
    ),
   */
   
);