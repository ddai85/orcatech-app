import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';


class AddItem extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      name:'',
      model: '',
      mac_address: ''
    };
    this.handleClick = this.handleClick.bind(this);
  }
  
  handleClick() {
    this.props.insertData(this.state);
    this.setState({
      name:'',
      model: '',
      mac_address: ''
    });
  }

  handleChange(e, field) {
    this.setState({[field]: e.target.value})
  }

  render() {
    return (
      <div>
        <input value={this.state.name} type="text" onChange={e => this.handleChange(e, 'name')} placeholder="Name"/>
        <input value={this.state.model} type="text" onChange={e => this.handleChange(e, 'model')} placeholder="Model"/>
        <input value={this.state.mac_address} type="text" onChange={e => this.handleChange(e, 'mac_address')} placeholder="MAC Address"/>
        <button onClick={this.handleClick}>Click to submit</button>
      </div>
    );
  }
}

export default AddItem;
