# v1.4.0
## 07/16/2025

1. [](#new)
    * Added support in the Showcase template for displaying slides in fullscreen mode
    * Added lazy-loading support for images in the Showcase template
2. [](#improved)
    * Updated features styling: equal height blocks, centered icons, hover shadow, and consistent spacing
    * Optimized styles and asset loading to improve Lighthouse performance
    * Updated `features.md` demo page

# v1.3.1
## 06/30/2025

1. [](#bugfix)
    * Fixed thumbnail display issue for local videos by changing `videoItem.thumbnail` to `videoItem.local_thumbnail` in gallery template

# v1.3.0
## 06/29/2025

1. [](#new)
    * New modular template for image galleries, featuring [GLightbox JS](https://biati-digital.github.io/glightbox/) integration—responsive, lightweight, and customizable, with native support for both local videos (MP4/WebM/OGV) and embedded content (YouTube/Vimeo).

# v1.2.0
## 06/21/2025

1. [](#improved)
    * Removed **Bourbon Sass** dependency and all related imports/mixins from SCSS files
    * Removed **Color-Schemer** functionality from Sass files
    * Removed all references to **Pure CSS** framework throughout the theme
    * Enhanced CSS classes for better styling and functionality in the theme's admin panel
    * Restructured all SCSS files that previously relied on Bourbon, implementing native Sass solutions where needed

# v1.1.2
## 06/04/2025

1. [](#improved)
    * Added `archives.yaml` to demo content
    * Added demo page and extra documentation links to README 

# v1.1.1
## 03/27/2025

1. [](#improved)
    * Added `blog_url` variable to Archives blueprint 
2. [](#bugfix)
    * Fixed taxonomy and archives link paths in Archive template

# v1.1.0
## 03/27/2025

1. [](#new)
    * New RelatedPages template for blog pages
    * Added sidebar widget text in blueprints
    * Added dynamic listing titles based on URL parameters (category, tag, author, archives_month) in blog template
2. [](#improved)
    * Updated translations
    * Refactored code for the Sidebar
    * Fixed featured image size in blog articles
    * Updated `item.html.twig` to pass `big_header` dynamically

# v1.0.1
## 03/20/2025

1. [](#new)
    * Added demo content
2. [](#bugfix)
    * Fixed `z-index` in back-to-top button

# v1.0.0
## 03/18/2025

1. [](#new)
    * ChangeLog started...

