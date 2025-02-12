=== Smart Send Logistics ===
Contributors: SmartSend
Donate link: http://www.SmartSend.dk/
Tags: shipping, pickup, pakkeboks, pakkeshop, hente selv, døgnboks, post danmark, gls, swipbox, bring, carrier, pacsoft, yourgls, mybring, postage, shipping method, your-gls, my-bring, pacosft-online, pacsoftonline, denmark, sweeden, posten, norway, post 
Requires at least: 3.0.1
Tested up to: 4.4
Stable tag: 7.0.17
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Pickup table rate shipping methods for WooCommerce. Pickup locations for Post Danmark, GLS, SwipBox and Bring. Allow for easy and cheap delivery.

== Description ==

Smart Send provides a great module for customers to choose a delivery point, directly from the checkout page.

The delivery points are listed by distance from the shipping information provided, such that the nearest delivery point will always be at the top of the list.

It's free to try for 30 days. Sign up on: [SmartSend.dk](http://smartsend.dk)

You can use delivery points provided from multiple carriers, like

* Post Danmark - Pacsoft Online
* GLS - YourGLS
* SwipBox
* Bring - MyBring

The list of delivery points are provided online from the carriers API. Your customers will therefore always see the newest list of delivery points on the checkout page.

[youtube http://www.youtube.com/watch?v=9da6kvp0Ajo]

This plugin replaces the two previous modules “Smart Send Labelgenerator” and “Smart Send Pickup Shipping”.

== Installation ==

1. Download and install the module/plugin.
1. Go to WooCommerce->settings->shipping and enter the table rates

You can now let your customers choose delivery points.

== Frequently Asked Questions ==

= Does it require a Smart Send subscription? =

Yes and no. You can try the module for free for 30 days but must have a valid Smart Send subscription to continue after that. Please see [SmartSend.dk](http://smartsend.dk)

= Can I try the module without subscribing at Smart Send =

Yes. You can try the module for free for 30 days.


== Screenshots ==

1. Setup multiple shipping methods and let the customer choose between them.
2. A dropdown with pickup points is shown for shipping methods where the customer collects the package at a store.
3. Table rate setup of shipping methods have never been easier.
4. Services for each carrier is easily setup in WooCommerce backend.

== Changelog ==

= 7.0.3 =
* Initial release for Wordpress.org

= 7.0.4 =
* Fixing problem with CSS for pickup point dropdown
* Fixing problem when shipping and billing country is not the same
* Adding the possibility to place pickup point dropdown using custom hook

= 7.0.5 =
* Fixing error with the possibility to place pickup point dropdown using custom hook
* Use live environment instead of development (by mistake)
* Fixing problem when no pickup points are found

= 7.0.6 =
* Adding support of WooCommerce 2.4
* Adding return labels
* Adding waybills
* Adding support for Shipment Tracking
* Changing standard value for settings
* Updating class files

= 7.0.7 =
* Fixing error when using vConnect checkout module
* Adding Post Danmark shipping methods; Post Danmark Privatpakker Norden Samsending, Post Danmark Parcel Economy and Post Danmark Private Priority
* Renaming shipping methods in table rate dropdown

= 7.0.8 =
* Cleaning up settings
* Fixing problem with country when adding a new table rate
* Fixing problem with pickup dropdown only visible for shipping country Denmark
* Fixing problem with label generation for pickup shipping methods, when using order grid actions
* If maximum weight or price is empty in table rate table then take it as infinity
* Only install shipping methods ‘Pickup’ and ‘Private’ when installing the plugin
* Remove carrier SwipBox
* Adding Danish translation

= 7.0.9 =
* Adding method to create a normal and a return label at the same time
* Adding support for vConnect All-in-one module
* A few PHP fixes

= 7.0.10 =
* Fixing problem where the billing address was used for vConnect shipping methods other than pickup
* Fixing small PHP notification

= 7.0.11 =
* Adding Track&Trace links to order
* Fixing problem with service Prenotification

= 7.0.12 =
* Fixing Danish (DK) translation problems
* Adding flex delivery support for vConnect module

= 7.0.13 =
* Tested with WordPress 4.5
* Tested with WooCommerce 2.5
* Fixing PHP notification when clearing table rates
* Fixing PHP notification causing JavaScript error when adding/deleting table rates with debug activated.
* Fixing checkout error message if no pickup point is choosen
* Adding Post Danmark shipping method ‘Last mile’ for food delivery
* Updating pickup point dropdown if zip code is changed during checkout
* Changing the default shipping table rates installed when module is activated

= 7.0.14 =
* Add support for plugin WooCommerce Sequential Order Numbers
* Adding Bring shipping methods 'express' and 'bulksplit'
* Fixing PHP notification problem caused by missing classes for default shipping methods.

= 7.0.15 =
* Fixing problem with missing arrow on dropdown menu
* Add Bring shipping method ‘Miniparcel’
* Add Post Danmark shipping method ‘Business Priority’
* Adding ‘Date shipped’ and removing unintended comma in tracking number when using Shipment Tracking plugin
* Formatting dropdown menu in settings
* Adding support for WooCommerce shipping method ‘Free shipping’
* Track and Trace codes are now added correctly to the order if multiple labels are create with one action
* Fixing problem with entering ‘*’ as all countries in the table settings
* Fixing incorrect weight if gram is used for product weight

= 7.0.16 =
* Change layout of pickup point dropdown menu. Now works with SSL.
* Fixing PHP error when updating WooCommerce plugin
* Add order comment when creating label

= 7.0.17 =
* Adding support for WooCommerce Sequential Order Numbers
* Bugfixes
* Adding notification function to notify about major updates
* Showing correct order numbers in succes/error messages when creating a label
* Remove text above frontend-dropdown showing pickup points