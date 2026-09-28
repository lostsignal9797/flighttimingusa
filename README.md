# FlightTimingUSA

Flight time, flight duration, air distance and travel-time information for US city-to-city routes.

## V1
- PHP 8.x / Apache
- SEO-friendly dynamic route URLs
- Flight-time and distance calculator
- Car, bus, train, walking and bicycle estimates
- Configurable assumptions
- JSON city data
- FAQ and JSON-LD structured data
- robots.txt and dynamic XML sitemap
- Census Places import/update script
- No database required

## Data
The production city dataset is designed to be generated from the U.S. Census Bureau 2026 National Places Gazetteer. The Census source provides geographic identifiers, names and representative latitude/longitude coordinates.

Source: https://www.census.gov/geographies/reference-files/2026/geo/gazetter-file.html

Run `php scripts/update-census.php` on PHP CLI when you want to refresh the city dataset.

## Deployment
Upload the repository to PHP 8.x+ Linux hosting with Apache and mod_rewrite enabled. Set the production domain in `config/settings.php`.
