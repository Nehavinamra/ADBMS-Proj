import React from "react";

class Pokemon extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      results: [],
    };
  }

  componentDidMount() {
    fetch("https://pokeapi.co/api/v2/pokemon?limit=151&offset=0")
      .then((response) => response.json())
      .then((data) => this.setState({ results: data }));
  }

  render() {
    const { results } = this.state;

    return (
      <div>
        {results.map((item) => (
          <div key={item.id}>
            <h1>{item.title}</h1>
            <p>{item.body}</p>
          </div>
        ))}
      </div>
    );
  }
}

export default Pokemon;
