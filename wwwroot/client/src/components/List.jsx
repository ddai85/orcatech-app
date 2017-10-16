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
        <table>
          <tbody>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Model</th>
              <th>MAC Address</th>
              <th></th>
            </tr>
            { this.props.items.map(item => <ListEntry key={item.id} item={item} delete={this.props.delete}/>) }
          </tbody>
        </table>
      </div>
    );
  }
}

export default List;
