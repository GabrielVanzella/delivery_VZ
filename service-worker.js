self.addEventListener('install', function (e) {
    e.waitUntil(
        caches.open('pwadelivery').then(function (cache) {
            console.log('install');
            return cache.addAll([]);
        })
    );
});

self.addEventListener('fetch', function (e) {
    console.log(e.request.url);
    e.respondWith(
        caches.match(e.request).then(function (response) {
            return response || fetch(e.request);
        })
    );
});