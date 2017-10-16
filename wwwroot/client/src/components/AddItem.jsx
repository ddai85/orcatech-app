import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';


class AddItem extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      name:'',
      model: '',
      mac_address: '',
      selectedOption: 'id'
    };
    this.handleClick = this.handleClick.bind(this);
    this.handleOptionChange = this.handleOptionChange.bind(this);
  }
  
  handleClick() {
    let data = {
      name: this.state.name,
      model: this.state.model,
      mac_address: this.state.mac_address
    }
    this.props.insertData(data);
    this.setState({
      name:'',
      model: '',
      mac_address: ''
    });
  }

  handleChange(e, field) {
    this.setState({ [field]: e.target.value })
  }

  handleOptionChange(e) {
    this.setState({ selectedOption: e.target.value });
    this.props.changeOrder(e.target.value);
  }

  render() {
    return (
      <div className="section">
        <div className="row">
          <button className="col s1 offset-s1 additem waves-effect waves-light btn" onClick={this.handleClick}>Submit</button>
          <div className="col s5 offset-s1">
          <input value={this.state.name} type="text" onChange={e => this.handleChange(e, 'name')} placeholder="Name"/>
          <input value={this.state.model} type="text" onChange={e => this.handleChange(e, 'model')} placeholder="Model"/>
          <input value={this.state.mac_address} type="text" onChange={e => this.handleChange(e, 'mac_address')} placeholder="MAC Address"/>
          </div>
          <div className="col offset-s1 s1">
            <label>Order By</label>
            <form action="#">
              <p>
                <input name="group1" type="radio" id="test1" value="id" checked={this.state.selectedOption === 'id'} onChange={this.handleOptionChange} />
                <label htmlFor="test1">ID</label>
              </p>
              <p>
                <input name="group1" type="radio" id="test2" value="name" checked={this.state.selectedOption === 'name'} onChange={this.handleOptionChange} />
                <label htmlFor="test2">Name</label>
              </p>
              <p>
                <input name="group1" type="radio" id="test3" value="model" checked={this.state.selectedOption === 'model'} onChange={this.handleOptionChange} />
                <label htmlFor="test3">Model</label>
              </p>
              <p>
                <input name="group1" type="radio" id="test4"  value="mac_address" checked={this.state.selectedOption === 'mac_address'} onChange={this.handleOptionChange} />
                <label htmlFor="test4">MAC Address</label>
              </p>
            </form>
          </div>
        </div>
      </div>
    );
  }
}

export default AddItem;
