=== System Fonts ===
Contributors: nilovelez
Tags: front-end, typography
Requires at least: 4.6
Tested up to: 6.0
Requires PHP: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Enqueues a stylesheet that lets you use the native font on each operating system.
 
== Description ==

System Fonts enqueues a stylesheet that lets you use the native font on each operating system and defines a system-ui css @font-face that you can use on the customizer, your theme’s settings or your own code.

= Usage example =

The Twenty Seventeen theme uses this css selector for the body text:

`body, button, input, select, textarea {
  font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}`

We are going to replace it with the default system font.
In you WordPress site, go to `Appearance > Customize > Additional CSS` and paste this code

`body, button, input, select, textarea {
  font-family: system-ui;
}`

Appart from them font-family, there are other font-properties available:

* font-style: normal or italic;
* font-weight: 300 (light), 400 (regular), 500 (medium), 700 (bold);

For example this is the code make an element's text semibold and cursive:

`#my-element {
  font-family: system-ui;
  font-weight: 500;
  font-style: italic;
}`  

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/system-fonts` directory, or install the plugin through the WordPress plugins screen.
2. Activate the plugin through the 'Plugins' screen in WordPress

