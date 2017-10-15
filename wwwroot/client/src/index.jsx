import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';
import Banner from './components/Banner.jsx';
import List from './components/List.jsx';



class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      items: []
    };
  }

  componentDidMount() {
    console.log('whatip');
    $.ajax({
      url: '/items',
      method: 'GET',
      contentType : 'application/json',
      success: (data) => {
        console.log('is this firing', data)
        //this.setState({items: JSON.parse(data)})
        //console.log(this.state.items)
      },
      error: (err) => {
        console.log(err);
      }
    });
  }
  
  handleClick() {

    let data = {
      "name": "Dans Computer",
      "model": "Macbook Pro",
      "mac_address": "01010101"
    };

    $.ajax({
      url: '/items',
      method: 'POST',
      contentType : 'application/json',
      data: JSON.stringify(data),
      success: (data) => {
        console.log(data)
      },
      error: (err) => {
        console.log(err);
      }
    });
  }

  render() {
    return (
      <div>
        <Banner/>
        <List/>
        <button onClick={this.handleClick}>Click to submit</button>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
