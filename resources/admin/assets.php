<?php
/**
 * assets.php - load your custom assets below.
 */

/**
 * Theme assets
 */

Asset::add('code/main.css', asset_path('styles/main.css'), false, null, 'all');
Asset::add('code/main.js', asset_path('scripts/main.js'), ['jquery'],  null, true);