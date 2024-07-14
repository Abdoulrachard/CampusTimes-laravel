const CACHE_NAME = 'Campustimes'
const OFFLINE_URL = '/public/offline.html'


self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open(CACHE_NAME)
        .then(function(cache) {
          return cache.addAll([
            '/public/css/app.css',
            '/public/css/timetablejs.css',
            '/public/js/timetable.js',
            '/public/js/timetables.js',
            '/public/js/app.js',
            '/public/storage/image/books.svg',
            '/public/storage/image/dash-icon-01.svg',
            '/public/storage/image/dash-icon-03.svg',
            '/public/storage/image/default.svg',
            '/public/storage/image/logouac.png',
            '/public/storage/default.svg',
            '/public/storage/image/cover.jpg',
            '/public/favicon.ico',
            "https://unpkg.com/boxicons@2.0.9/css/boxicons.min.cs",
            "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css",
            "https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css",
            "https://code.jquery.com/jquery-3.7.1.min.js",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js",
            "https://cdn.datatables.net/2.0.8/js/dataTables.js",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",
            "https://cdn.datatables.net/2.0.8/js/dataTables.js",
            "https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.all.min.js",
            "https://cdn.jsdelivr.net/npm/chart.js",
            "https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js",
            '/public/vendor/flasher/flasher-toastr.min.js',
            '/public/vendor/flasher/flasher.min.css',
            '/public/vendor/flasher/flasher.min.js',
          ]);
        })
    );
    self.skipWaiting()
  });
 
self.addEventListener("activate", (event) => {
  event.waitUntil(
    (async () => {
      // Enable navigation preload if it's supported.
      // See https://developers.google.com/web/updates/2017/02/navigation-preload
      if ("navigationPreload" in self.registration) {
        await self.registration.navigationPreload.enable();
      }
    })()
  );

  // Tell the active service worker to take control of the page immediately.
  self.clients.claim();
});

self.addEventListener("fetch", (event) => {
  // Only call event.respondWith() if this is a navigation request
  // for an HTML page.
  if (event.request.mode === "navigate") {
    event.respondWith(
      (async () => {
        try {
          // First, try to use the navigation preload response if it's
          // supported.
          const preloadResponse = await event.preloadResponse;
          if (preloadResponse) {
            return preloadResponse;
          }

          // Always try the network first.
          const networkResponse = await fetch(event.request);
          return networkResponse;
        } catch (error) {
          // catch is only triggered if an exception is thrown, which is
          // likely due to a network error.
          // If fetch() returns a valid HTTP response with a response code in
          // the 4xx or 5xx range, the catch() will NOT be called.
          console.log("Fetch failed; returning offline page instead.", error);

          const cache = await caches.open(CACHE_NAME);
          const cachedResponse = await cache.match(OFFLINE_URL);
          return cachedResponse;
        }
      })()
    );
  }

  // If our if() condition is false, then this fetch handler won't
  // intercept the request. If there are any other fetch handlers
  // registered, they will get a chance to call event.respondWith().
  // If no fetch handlers call event.respondWith(), the request
  // will be handled by the browser as if there were no service
  // worker involvement.
});