function loadPeople() {
    fetch('fetch_people.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('people-list').innerHTML = data;
      })
      .catch(err => {
        document.getElementById('people-list').innerHTML = "Error loading data.";
      });
  }
  
  // Load every 5 seconds
  setInterval(loadPeople, 5000);
  
  // Load immediately on first visit
  loadPeople();
  