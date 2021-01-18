if(navigator.geolocation){
  navigator.geolocation.getCurrentPosition(async (pos) => {
    let lat = pos.coords.latitude; 
    let lon = pos.coords.longitude;

    let dockList = await fetch('/wp-json/alltomhavet/v1/get_dock_coords');
    dockList = await dockList.text();
    dockList = JSON.parse(dockList);

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


    let closestDock = dockList[0];

    // TODO - Make a button/link with closestDock and place it in the header
  })
}