=== Mail Subscribe List ===
Contributors: webfwd
Donate link: 
Tags: mail, email, newsletter, subscribe, list, mailinglist, mail list, mailing list, campaignmonitor, mailchimp
Requires at least: 3.0
Tested up to: 3.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows users to enter their name and email address to subscribe to a simple mailing list which is available to modify in the wordpress admin area. 

== Description ==

This plugin allows users to enter their name and email address on an unstyled form which subscribes then to a simple mailing list which is available to view and modify in the wordpress admin area. 

The subscribe form can be displayed on any wordpress page using the shortcode [smlsubform] or from your wordpress theme by calling the php function &lt;?php echo smlsubform(); ?&gt;.

I developed this plugin as I could not find any plugin that simply allows users to submit their name and email address to a simple list viewable in the wordpress admin, all the plugins that I found had lots of extra features such as sending out mass emails and double opt-in which my clients do not need.

= Extra Options  =

I have developed some extra options which allow you to customise the way you use Mail Subscribe List.

Below is an explanation of what each option does:-

* "prepend"	->	Adds a paragraph of text just inside the top of the form.
* "showname"	->	If true, this with show the name label and input field for capturing the users name.
* "nametxt"	->	Text that is displayed to the left of the name input field.
* "emailtxt"	->	Text that is displayed to the left of the email input field.
* "submittxt"	->	Text/value that will be displayed on the form submit button.
* "jsthanks"	->	If true, this will display a JavaScript Alert Thank You message instead of a paragraph above the form.
* "thankyou"	->	Thank you message that will be displayed when soemone subscribes. (Will not show if blank)

= Extra Options - How to Use (Short Code Method) =

Here is an example of all default values in use as a shortcode.

[smlsubform prepend="" showname=true nametxt="Name:" emailtxt="Email:" submittxt="Submit" jsthanks=false thankyou="Thank you for subscribing to our mailing list"]

= Extra Options - How to Use (PHP Method) =

Here is an example of all the default values in use as php code for your template.

$args = array(
	'prepend' => '', 
	'showname' => true,
	'nametxt' => 'Name:', 
	'emailtxt' => 'Email:',
	'submittxt' => 'Submit', 
	'jsthanks' => false,
	'thankyou' => 'Thank you for subscribing to our mailing list'
);
echo smlsubform($args);

== Installation ==

1. Upload `mail-subscribe-list` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[smlsubform]` in any of your pages or &lt;?php echo smlsubform(); ?&gt; in your template.

== Screenshots ==

1. http://www.webfwd.co.uk/wp-plugins/mail-subscribe-list.jpg

== Frequently Asked Questions == 

If the feature that you require is small and I can see a need for it then I may develop it into future versions of this plugin, contact me via the [Webforward website here](http://www.webfwd.co.uk/).

== Changelog ==

= 1.1.1 =

* You can now specify the placeholder text.
* Extensions to the documentation.

= 1.1 =		

* Created a few extra options to customise the form.
* Check to see if the email address is already in the database.
* Customisable thank you for subscribing message.
* Ability to choose between a paragraph or JavaScript Alert based thank you message.
* Extended documentation.
        
= 1.0.1 =	

* Few fixes in the documentation.

= 1.0 =

* Developed Mail Subscribe List Plugin.

== Upgrade Notice == 

The current version of Mail Subscribe List requires WordPress 3.3 or higher. If you use older version of WordPress, you need to upgrade WordPress first.
