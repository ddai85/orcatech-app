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
    $.ajax({
      url: '/server/items/read.php',
      method: 'GET',
      success: (data) => {
        this.setState({items: data})
        console.log(this.state.items)
      },
      error: (err) => {
        console.log(err);
      }
    });
  }
  
  handleClick() {

    let data = {
      name: 'Dans Computer',
      model: 'Macbook Pro',
      mac_address: '01010101'
    };

    $.ajax({
      url: '/server/items/create.php',
      method: 'POST',
      contentType : 'application/json',
      data: data,
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
