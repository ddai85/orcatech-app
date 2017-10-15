import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';
import ListEntry from './ListEntry.jsx'


class List extends React.Component {
  constructor(props) {
    super(props);
    this.state = {

    };
  }


  render() {
    return (
      <div>
        <p>I am a List</p>
        <ListEntry/>
        <ListEntry/>
        <ListEntry/>
        <ListEntry/>
      </div>
    );
  }
}

export default List;
