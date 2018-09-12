# gp-acf-hero-slider
How to add a hero slider with ACF Pro and GeneratePress Elements

Plugins: 
WCD Slick: https://github.com/WestCoastDigital/wcd-slick
Simple CSS (optional)



Create a home page and assign it as the static front page in the reading settings

Add a new custom field group

Add repeater field to house all our slides and give it an id of hero_slides
Add a text field for heading
Add a textarea for content
Add another repeater called buttons
In this second repeater add a link field called button, I use link as it makes it real easy to custom define external/internal links, open in new tab and custom text, all with one field
Under the main hero_slides repeater, add a image field for the background image

For Page Rules assign to Page Type Front Page
As it is for the hero, place it Under the Title so it sits above the content field

Edit home page and add some content to your page, set the layout to be content (no sidebar)

Go ahead and activate elements in the GP Pro settings

Paste shortcode in functions.php

Create a new header element
Content is shortcode we created [hero-slider]
Make everything full width
Merge with site header and make nav float right
Set display rules to Front Page


Ensure WCD Slick plugin is active
Create a slick post and add in the .hero-slide class
Configure settings as required


Configure settings in simple css (or style.css)
