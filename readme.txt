=== Plugin Name ===
Plugin Name: Emfluence GForms
Description: Send form data to the Emfluence CRM using Gravity Form's Add-on Framework
version: 1.1
Author: Sage Age
Author URI: https://www.sageagestrategies.com/
License: GPLv3 or later
Text Domain: emfluence-gform
Domain Path: /languages

Sends Gravity Form data to Emfluence /v1/contacts/save RESTful endpoint.

== Description ==

For use only with Gravity Forms v1.9 or greater.

Most configuration settings are done on a form by form basis (see "Sending a Debug Email" below), and can be found under admin -> Forms -> Forms -> {form name} -> Settings -> Enfluence GForm.

Select the "Send this form to Emfluence" checkbox to attach the form. You will need the Emfluence account's 128-bit Access Token (GUID).

The production Emfluence Endpoint URL is provided, but may be edited if necessary.

Add any Emfluence Group IDs under Group IDs. These are usually a 6-digit number, but the length can vary. If you have more than one, separate them with a comma.

If you wish to send the user's IP, select Capture IP. You must not have "Prevent the storage of IP addresses during form submission" selected under the form's Personal Data configuration.

By default this plugin uses Remote Post (wp_remote_post) to send form data. This can be changed to to use cURL. If you have cURL installed and wish to use this method, select this checkbox.

To map the form fields, select the relevant Field (to be mapped for Emfluence) to the Form Field (from the Gravity Form).

The form field must be of the correct type. The mapping is as follows:

First Name -> textfield
Last Name -> textfield
Email Address -> email
Phone -> phone

So make sure when creating your form that you use the correct form field types for the Emfluence field mapping.

Sending a Debug Email

You can send a debug email for all submissions that contain logging information if you do not have logging enabled. This setting can be found under admin -> Forms -> Settings -> Emflunce GForm.

Select "Send a debug email" to enable this feature, and enter a valid email under "Debug email address". This will send an email containing logging information for all forms submitted to Emfluence.

== Changelog ==

= 1.1 =
* found that the incorrect sage age url snuck back in - corrected

= 1.0 =
* full release!!!
* updated Name field in main plugin file

= 0.6.3 =
* added language settings to main config form

= 0.6.2 =
* improved logging of submissions & form ids

= 0.6.1 =
* updated placeholder email address from 'someone@something.com' to 'someone@example.com'

= 0.6 =
* fixed unidentified index issue when submitting form after upgrading plugin
* added global debug email
* added error reporting for cURL
* improved error reporting & logging for Remote Post

= 0.5 =
* changed default method for posting to wp_remote_post with cURL as the non-default option
* improved logging for wp_remote_post
* improved help documents & description

= 0.4 =
* internal code standards review & correction
* added Wordpress Remost Post option for sending data (default is still cURL)

= 0.3.2 =
* Improvements to field descriptions and help documents.

= 0.3.1 =
* really fix that string offset issue

= 0.3 =
* fix Uninitialized string offset: 0 and Illegal string offset 'send_form' issue when loading send_form for a form that has not been configured to use emfluence

= 0.2 =
* debug & add read me and related secondary documents
* reset phone map from textfield to phone field
* build out add on settings page for uninstall button
* added instructions page

= 0.1 =
* First buildout.

== Upgrade Notice ==

= 0.0 =
Placeholder.


== Arbitrary section ==

This is arbitrary.