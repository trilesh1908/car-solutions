<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mauritius Road Rescue</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
  <div class="container py-5">
    <header class="text-center mb-4">
      <h1 class="display-5 fw-bold">Depanaz</h1>
      <p class="text-muted">Emergency Garage & Towing Services</p>
    </header>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="card-title text-danger d-flex align-items-center"><i class="bi bi-exclamation-circle me-2"></i> Emergency SOS</h5>
            <button class="btn btn-danger w-100 py-3 mt-3" onclick="alert('Emergency SOS activated! Help is on the way.')">One-Tap Emergency</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="card-title text-primary d-flex align-items-center"><i class="bi bi-geo-alt-fill me-2"></i> Find Nearest Garage</h5>
            <input type="text" class="form-control my-2" id="locationInput" placeholder="Enter your location or use GPS">
            <button class="btn btn-primary w-100" onclick="getLocationAndSearchGarage()">Locate Garage</button>
            <div id="gpsStatus" class="text-muted small mt-2"></div>
            <div id="garageResults" class="mt-3 text-secondary small"></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="card-title text-success d-flex align-items-center"><i class="bi bi-truck me-2"></i> Towing & Breakdown Support</h5>
            <button class="btn btn-success w-100 mt-3" onclick="alert('Tow truck requested. Estimated arrival: 15 minutes.')">Request Tow Truck</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="card-title text-warning d-flex align-items-center"><i class="bi bi-tools me-2"></i> Schedule a Repair</h5>
            <form onsubmit="event.preventDefault(); alert('Repair appointment booked. We will contact you soon.');">
              <input type="text" class="form-control my-2" placeholder="Describe the issue" required>
              <button type="submit" class="btn btn-warning w-100 text-white">Book Appointment</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="card-title text-purple d-flex align-items-center"><i class="bi bi-telephone-fill me-2"></i> Emergency Contacts</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">General Roadside Assistance: 999</li>
              <li class="list-group-item">Police: 148</li>
              <li class="list-group-item">Insurance Hotline: 211-HELP</li>
              <li class="list-group-item">Nearest Partner Garage: +230 5 250 0000</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center text-muted mt-5">
      &copy; 2025 Mauritius Road Rescue. All rights reserved.
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function getLocationAndSearchGarage() {
      const status = document.getElementById('gpsStatus');
      const input = document.getElementById('locationInput');
      const results = document.getElementById('garageResults');

      if (navigator.geolocation) {
        status.innerText = 'Getting your location...';
        navigator.geolocation.getCurrentPosition((position) => {
          const lat = position.coords.latitude;
          const lon = position.coords.longitude;
          input.value = `Lat: ${lat.toFixed(4)}, Lon: ${lon.toFixed(4)}`;
          status.innerText = 'Location retrieved successfully.';

          // Mock search for nearby garages using coordinates
          results.innerHTML = '<strong>Nearest Garages:</strong><br>' +
            '- ABC Auto Repairs (1.2km)<br>' +
            '- FastFix Garage (2.1km)<br>' +
            '- RoadPro Mechanics (2.4km)';
        }, () => {
          status.innerText = 'Unable to retrieve location.';
          results.innerHTML = '';
        });
      } else {
        status.innerText = 'Geolocation is not supported by this browser.';
        results.innerHTML = '';
      }
    }
  </script>
</body>
</html>
