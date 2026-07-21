# v2.3.1
## 07/21/2026

1. [](#bugfix)
    * Fixed Featured Posts widget to ensure Grav 1.7 compatibility by removing Twig 3-specific functions and null coalescing operators

# v2.3.0
## 07/21/2026

1. [](#new)
    * Added Featured Posts widget to blog sidebar - displays highlighted articles based on `featured: true` flag in post frontmatter
    * Added `featured` toggle field to blog item blueprint for marking posts as featured
    * Added dedicated Blog configuration tab in theme settings with sidebar customization options
2. [](#improved)
    * Enhanced Taxonomy List with optional `filterend` parameter to limit displayed tags/categories per page
    * Optimized featured posts and related pages CSS using SCSS mixins to reduce code duplication
    * Translation keys restructured for better organization under `DELIVERNEXT.ADMIN.THEME.BLOG` namespace
3. [](#bugfix)
    * Fixed Team module grid alignment. Ensured consistent column width calculation across all breakpoints using calc()
    * Fixed range field min/max validation in Grav 2.x by using field-level properties instead of validate section

# v2.2.0
## 07/17/2026

1. [](#new)
    * Added `item_external_url` and `item_external_text` fields to Item blueprint for external links (original articles, reposts, etc.)
2. [](#improved)
    * Removed incorrect `markdown: true` configuration from `header.module_classes` field in all modular blueprints - this field contains only CSS class names and does not require markdown processing
    * Updated summary field help text in all languages to clearly document the new behavior
3. [](#bugfix)
    * Fixed Team template member description field not being processed as Markdown by adding `|markdown` filter
    * Fixed Blog summary configuration to properly separate concerns between blog listing and individual article pages

# v2.1.2
## 07/10/2026

1. [](#improved)
    * Added `latin-ext` subset to Google Fonts imports to support special characters like ė, ų, Ä, Ö, Ü
    * Added `content-wrapper` div to modular_alt, error, and gallery templates for proper content margins
2. [](#bugfix)
    * Fixed favicon type attribute not being rendered correctly by using proper object access to `favicon_data.type`
    * Fixed `show_title` option not being respected in default, blog, archive, modular_alt, and item templates

# v2.1.1
## 07/09/2026

1. [](#new)
    * Added `ICON_HELP` translation for social media icons field in all languages
2. [](#bugfix)
    * Changed `IMAGE_TITLE` to `TITLE` in GALLERY section of `en.yaml`
    
# v2.1.0
## 07/09/2026

1. [](#new)
    * Added French language. Thanks to ([@StudioDanton](https://github.com/StudioDanton/))
2. [](#improved)
    * Added improved handling of quicklink.url in the footer
    * Fixed wrong variable and missing new target for gps location in footer. Thanks to ([@StudioDanton](https://github.com/StudioDanton/))
    * Fixed custom css and js activation and remove them from admin mode. Thanks to ([@StudioDanton](https://github.com/StudioDanton/))
    * Added new `use-minified-css` configuration option with explicit fallback to `production-mode`
    * Fixed missing author field inside blog item admin page. Thanks to ([@StudioDanton](https://github.com/StudioDanton/))
    * Fixed double-escaping in meta_description by removing contradictory
    * Refactored JSON-LD schema generation to use json_encode() for proper
3. [](#bugfix)
    * Removed dependency on translate-date and twig-extensions plugins

# v2.0.0
## 07/07/2026

1. [](#new)
    * Dual compatibility: Full support for Grav 1.7 and Grav 2.0

2. [](#improved)
    * **Twig 3 modernization**:
    - Replaced deprecated `|defined` filter with Twig 3-compatible null-safe patterns
    - Updated Elvis operator `?:` to null-coalesce operator `??` for consistency
    - Normalized featured image handling: supports both `featured_image` and `featuredImage` header keys
    - Added `ignore missing` to template includes for enhanced robustness
    * **Blueprint modernization**:
    - Updated all page blueprints: changed `'@extends'` to `extends@` syntax (Grav 2.x native)
    - Normalized blueprint structure for consistency (formdata.yaml and 8 modular templates)
    * **Social media icon field refactor**:
    - Changed social media icon field from `iconpicker` to `text` type with flexible input formats
    - Added icon format normalization in template: accepts "facebook", "fa-facebook", or "fa fa-facebook" formats
    * **PHP 8.3 compatibility**:
    - Added explicit return type hints (`:void`) to event handler methods
    - Removed unused imports and legacy code
    * **Admin simplification**:
    - Removed `/admin/themes/grav/` customizations (no longer needed in Grav 2.x)
    - Theme now uses core Admin defaults for both Grav 1.7 and Grav 2.x

# v1.4.3
## 11/11/2025

1. [](#improved)
    * Set the dependency for the Grav version to 1.7.49.5

# v1.4.2
## 09/28/2025

1. [](#improved)
    * Improved thumbnail logic to prefer local images and fallback to title in gallery template
    * Improved styles for footer social icons and form buttons
    * Updated demo pages

# v1.4.1
## 07/26/2025

1. [](#improved)
    * **Fixed**: Added missing Slide effect to the transition options in the Showcase template

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
