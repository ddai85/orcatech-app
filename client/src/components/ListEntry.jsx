import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';



class ListEntry extends React.Component {
  constructor(props) {
  	super(props);
  	this.state = {
      id: 1
  	}

  	this.handleClick = this.handleClick.bind(this);
  }

  componentDidMount() {
  	this.setState({id: this.props.item.id})
  }
  
	handleClick () {
		this.props.delete(this.state.id);
	}

  render () {
	  return (
	    <tr>
	      <td>{this.props.item.id}</td>
	      <td>{this.props.item.name}</td>
	      <td>{this.props.item.model}</td>
	      <td>{this.props.item.mac_address}</td>
	      <td><button onClick={this.handleClick}>Delete</button></td>
	    </tr>
	  );
	}
};

export default ListEntry;
