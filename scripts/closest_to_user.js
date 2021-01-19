if(navigator.geolocation){ // If the users browser supports and the user accepts geolocation
  navigator.geolocation.getCurrentPosition(async (pos) => {
    // Get the users position
    let lat = pos.coords.latitude; 
    let lon = pos.coords.longitude;

    // Get all docks with their respective coords from our custom endpoint in WP
    let dockList = await fetch('/wp-json/alltomhavet/v1/get_dock_coords');
    dockList = await dockList.text();
    dockList = JSON.parse(dockList);

    // Make a comparable list of distances per dock
    dockList = dockList
      .map(dock => {
        let distance = Math.abs(
          (Number(dock.latitude) - Number(lat)) + 
          (Number(dock.longitude) - Number(lon))
        );

        return {
          id: dock.id,
          name: dock.post_title,
          permalink: dock.permalink,
          distance,
        }
      })
      .sort((a,b) => a.distance - b.distance);

    let closestDockObj = dockList[0];
    
    // Add it to the DOM
    let navbar = document.querySelector('.navbar');
    let closestDockBtn = document.createElement('button');
    closestDockBtn.innerHTML = `Gå till ${closestDockObj.name}, din närmsta hamn`; 
    closestDockBtn.classList.add("aoh-btn-solid","aoh-max-width-250px");
    navbar.appendChild(closestDockBtn);
    closestDockBtn.addEventListener('click', e => {
      window.location.href = closestDockObj.permalink;
    })
  })
}