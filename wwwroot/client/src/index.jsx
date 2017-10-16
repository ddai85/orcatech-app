import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';
import Banner from './components/Banner.jsx';
import List from './components/List.jsx';
import AddItem from './components/AddItem.jsx';



class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      items: []
    };
    
    this.insertData = this.insertData.bind(this);
    this.delete = this.delete.bind(this);
  }

  componentDidMount() {
    this.getData();
  }

  getData() {
    $.ajax({
      url: '/items',
      method: 'GET',
      contentType : 'application/json',
      success: (data) => {
        this.setState({items: JSON.parse(data)})
      },
      error: (err) => {
        console.log(err);
      }
    });
  }
  
  insertData(data) {
    console.log('i got pinged back', data)
    $.ajax({
      url: '/items',
      method: 'POST',
      contentType : 'application/json',
      data: JSON.stringify(data),
      success: (data) => {
        this.getData();
      },
      error: (err) => {
        console.log(err);
      }
    });
  }

  delete(deleteId) {
    $.ajax({
      url: '/items?' + deleteId,
      method: 'GET',
      contentType : 'application/json',
      success: (data) => {
        this.getData();
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
        <AddItem insertData={this.insertData}/>
        <List items={this.state.items} delete={this.delete}/>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
