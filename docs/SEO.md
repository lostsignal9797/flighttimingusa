# FlightTimingUSA SEO V1

## URL structure
- / — flight-time calculator
- /flight-time/{origin}-to-{destination} — dynamic route page
- /city/{city} — city hub page
- /sitemap.xml — dynamic XML sitemap

## Route-page SEO
Each route generates a unique title, meta description, canonical URL, Open Graph metadata, Twitter metadata, WebSite JSON-LD, FAQPage JSON-LD and internal links.

## Content
Pages explain that calculations are modeled estimates rather than live airline schedules. Actual flight duration can change with aircraft, routing, winds, air traffic and operations.

## Scaling
The possible city-to-city combinations are much larger than the number of useful initial SEO pages. V1 therefore does not publish every possible combination in the sitemap. V2 can add segmented sitemaps and route-priority rules.

## Census
The official 2026 Census National Places Gazetteer is the planned production source for city/place coordinates. The import script is separate so the dataset can be refreshed without changing application code.
