import React from "react";

class Pokemon extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      results: [],
      isLoaded: false,
    };
  }

  componentDidMount() {
    fetch("https://pokeapi.co/api/v2/pokemon?limit=151&offset=0")
      .then((res) => res.json())
      .then((json) => {
        this.setState({
          isLoaded: true,
          results: json.results,
        });
      });
  }

  render() {
    const { results } = this.state;

    return (
      <div>
        {results.map((item) => (
          <h1>{item.name}</h1>
        ))}
      </div>
    );
  }
}

export default Pokemon;
