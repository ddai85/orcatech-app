import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';
import Banner from './components/Banner.jsx';
import List from './components/List.jsx';



class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {

    };
  }

  ComponentDidMount() {
    $.ajax({
      url: '/items/read.php'),
      method: 'GET',
      success: (data) => {
        console.log(data);
        this.reloadData();
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
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
