const staticCacheName = 'site-static-v2'; 
const assets = [
'/', 
'/index.php', 
'https://pwaoptimizer.xyz/home/contact',
'https://pwaoptimizer.xyz/home/privacy', 
'https://pwaoptimizer.xyz/home/disclaimer', 
'https://pwaoptimizer.xyz/home/faq', 
'https://pwaoptimizer.xyz/home/pwafromstratch/', 
'https://pwaoptimizer.xyz/home/migration_to_pwa/', 
'https://pwaoptimizer.xyz/home/pwa_optimize/', 
'https://pwaoptimizer.xyz/home/pwa_seo/', 
'https://pwaoptimizer.xyz/home/pwa_maintenance/', 
'https://pwaoptimizer.xyz/home/work/', 
'https://pwaoptimizer.xyz/home/web_design/', 
'https://pwaoptimizer.xyz/home/web_development/',
'https://pwaoptimizer.xyz/home/soft_development/',
'https://pwaoptimizer.xyz/home/graphic_design',
'https://fonts.googleapis.com/icon?family=Material+Icons', 
'https://pwaoptimizer.xyz/resources/css/materialize.css', 
'https://pwaoptimizer.xyz/images/notification.jpg',
'https://pwaoptimizer.xyz/resources/fonts/css/all.css', 
'https://pwaoptimizer.xyz/resources/css/custom.css', 
'https://pwaoptimizer.xyz/images/offline_access.jpg', 
'https://pwaoptimizer.xyz/images/offline_purchase.jpg', 
'https://pwaoptimizer.xyz/images/fastest_b.jpg', 
'https://pwaoptimizer.xyz/resources/js/jquery.js', 
'https://pwaoptimizer.xyz/resources/fonts/js/all.js', 
'https://pwaoptimizer.xyz/resources/js/custom.js', 
'https://pwaoptimizer.xyz/resources/js/app.js', 
'https://fonts.gstatic.com/s/materialicons/v50/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2',
'https://pwaoptimizer.xyz/resources/fonts/webfonts/fa-brands-400.woff2', 
'https://pwaoptimizer.xyz/resources/fonts/webfonts/fa-solid-900.woff2', 
'https://pwaoptimizer.xyz/images/favicons/favicon-32x32.png', 
'https://pwaoptimizer.xyz/images/icons/icon-144x144.png',   

];
self.addEventListener('install', function(event)
{
	//console.log('[Service Worker] Installing Service Worker ...', event);
	event.waitUntil(
		caches.open(staticCacheName).then(cache => {
			console.log('caching all assets'); 
			cache.addAll(assets); 
		})
		); 
	
});

self.addEventListener('activate', function(event)
{
	// console.log('[Service Worker] Activating Service Worker ...', event);
	// return self.clients.claim();
	event.waitUntil(
		caches.keys().then(keys=>{
			//console.log(key);
			return Promis.all(keys
					.filter(key => key !== staticCacheName)
					.map(key => caches.delete(key))
				)
		})
	); 
});

self.addEventListener('fetch', function(event)
{
	// console.log('[Service Worker] Fetching Serviced  Worker ...', event);
	//event.respondWith(fetch(event.request));
	event.respondWith(
		caches.match(event.request).then(cacheRes =>{
			return cacheRes|| fetch(event.request); 
		})
	);

});