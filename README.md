# DeliverNext Theme for Grav

![DeliverNext](assets/readme_1.png)

DeliverNext theme is a port of the [Grav Deliver](https://github.com/getgrav/grav-theme-deliver) by [Grav Team](https://getgrav.org). Whether you’re a creative looking to show off your portfolio, or a business looking to promote your company, this theme is for you.

# Features

* Fully responsive
* Automatic and custom navigation menus included
* Showcase section with stunning animated slideshow module
* Services grid with custom FontAwesome icons
* Portfolio grid with modal window popup previews for portfolio item details. Both frontpage (minimal) and full featured versions included
* Footer section with custom menus, contact info, and more
* About layout with social icons module and custom styling
* Services layout with FontAwesome 4.7 icons and pricing tables
* Archive layout with blog posts archives list
* Full featured blog with support for custom authors and post dates via `translate-date` and `twig-extensions` plugins
* Contact us layout with Simple Form plugin support
* SEO optimization options (meta tags, open graph data)
* Multi-language support (English and Spanish translations included)
* Customizable alert boxes, button types/colors, and page title styles
* Back-to-top button and flexible page image configuration
* Automatic loading of `custom.css` and `custom.js` files
* SCSS files included for deeper customization options

# Installation

Installing the DeliverNext theme can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.

The theme by itself is useful, but you may have an easier time getting up and running by installing a skeleton. The [DeliverNext Site Skeleton](https://github.com/pmoreno-rodriguez/grav-skeleton-delivernext-site) is a self-contained repository for a complete sites which includes: sample content, configuration, theme, and plugins.

## GPM Installation (Preferred)

The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install delivernext

This will install the DeliverNext theme into your `/user/themes` directory within Grav. Its files can be found under `/your/site/grav/user/themes/delivernext`.

## Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/site/grav/user/themes`. Then, rename the folder to `delivernext`. You can find these files either on [GitHub](https://github.com/pmoreno-rodriguez/grav-theme-delivernext) or via [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all the theme files under

    /your/site/grav/user/themes/delivernext

>> NOTE: This theme requires the [Grav](http://github.com/getgrav/grav), [Error](https://github.com/getgrav/grav-theme-error), [Problems](https://github.com/getgrav/grav-plugin-problems), [Translate Date](https://github.com/Karmalakas/grav-plugin-translate-date) and [Twig Extensions](https://github.com/bitstarr/grav-plugin-twig-extensions) plugins.

# Updating

As development for the DeliverNext theme continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating DeliverNext is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update delivernext

This command will check your Grav install to see if your DeliverNext theme is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The theme will automatically update and clear Grav's cache.

## Manual Update

Manually updating DeliverNext is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/themes/delivernext` directory.
* Download the new version of the DeliverNext theme from either [GitHub](https://github.com/pmoreno-rodriguez/grav-theme-delivernext) or [GetGrav.org](http://getgrav.org/downloads/themes).
* Unzip the zip file in `your/site/user/themes` and rename the resulting folder to `delivernext`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

# Setup

If you want to set DeliverNext as the default theme, you can do so by following these steps:

* Navigate to `/your/site/grav/user/config`.
* Open the **system.yaml** file.
* Change the `theme:` setting to `theme: delivernext`.
* Save your changes.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in Terminal and typing `bin/grav clear-cache`.

Once this is done, you should be able to see the new theme on the frontend. Keep in mind any customizations made to the previous theme will not be reflected as all of the theme and templating information is now being pulled from the **delivernext** folder.

# Default Options

DeliverNext comes with a variety of configuration options that can be set site-wide. These options are organized into sections for easier management:

```yaml
enabled:                      # Enable or disable the theme.
dropdown.enabled:             # Enable or disable the dropdown menu.
sticky_menu.enabled:          # Enable or disable the sticky menu.
production-mode:              # Enable production mode to use minified CSS.
custom_css:                   # Enable/disable custom CSS (automatically loads `custom.css` if present).
custom_js:                    # Enable/disable custom JavaScript (automatically loads `custom.js` if present).
social_enabled:               # Enable or disable social media icons.
social:                       # Add social media icons with name, URL, target, and icon options.
page_title_type:              # Choose page title style (e.g., "hero", "minimal").
featured_image:               # Configure display of page's main image.
footer.copyright_text:        # Custom copyright text in the footer.
footer.contact_section_label: # Label for the "Contact" section.
footer.quick_links_label:     # Label for the "Quick Links" section.
footer.about.description:     # Description for the "About" section.
footer.gps:                   # GPS coordinates for contact section.
footer.address:               # Address lines for contact section.
footer.quick_links_items:     # Quick links with text, URL, and target.
footer.other_menu:            # Additional menu items.
custommenus.enabled:          # Enable/disable custom menus.
custommenu:                   # Custom menu items with text, icon, URL, and target.
theme_logo_enabled:           # Enable/disable custom logo.
type_logo_header:             # Logo header type: "image", "text", or "both".
theme_logo:                   # Custom logo for desktop (supports .png, .jpg, .svg).
theme_logo_mobile:            # Custom mobile logo.
favicon:                      # Custom favicon (supports .png, .ico).
back_to_top_button.enabled:   # Enable back-to-top button.
seo_options:                  # SEO settings (meta descriptions, open graph data).
alert_boxes:                  # Configure colored alert box styles.
button_types:                 # Define custom button types and colors.
```
To make modifications, you can copy the `user/themes/delivernext/delivernext.yaml` file to `user/config/themes/` folder and modify, or you can use the admin plugin.

> NOTE: Do not modify the `user/themes/delivernext/delivernext.yaml` file directly or your changes will be lost with any updates.

## Custom Assets & Branding

**Logos**  
Place logo files in `user/themes/delivernext/images/logo` (supports .png, .jpg, .svg). Configure via YAML or admin panel:

```yaml
custom_logo:
    - name: 'my-logo.png'
custom_logo_mobile:
    - name: 'mobile-logo.png'    
```

**Favicon**  
Upload a `.png` or `.ico` file through the theme options or place it in `user/themes/delivernext/images` and reference it in your YAML.

**Custom CSS/JS**  
Create `custom.css` or `custom.js` files in `user/themes/delivernext/css` or `.../js` respectively. They will load automatically when enabled in theme options.

# Demo page

[https://delivernext.pmdesign.dev](https://delivernext.pmdesign.dev)

# Documentation 

You can read extra documentation of DeliverNext Theme at [https://pmoreno-rodriguez.github.io/#/./gravthemes/delivernext/index](https://pmoreno-rodriguez.github.io/#/./gravthemes/delivernext/index). This is [Spanish document site for DeliverNext Theme](https://pmdesign.dev/temas/delivernext)

# To do

- [ ] Improve css classes for image type logo
- [ ] Create an Image Gallery template with Glightbox or similar library
- [ ] Add featured articles module to the sidebar
- [ ] Add article categories module to the sidebar
- [ ] Update to latest FontAwesome icons