import React from "react";

function HomePage() {
  console.log("hi");
  const dynamicurl = "https://pokeapi.co/api/v2/pokemon?limit=151&offset=0";
  $.getJSON(dynamicurl, function (data) {
    console.log("example of json");
    console.log(data);
  });

  return (
    <div>
      <h1> Welcome to my homepage</h1>
    </div>
  );
}
export default HomePage;
