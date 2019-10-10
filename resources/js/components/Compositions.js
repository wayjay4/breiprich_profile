import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';

class Compositions extends Component {
  constructor(props){
    super(props);
    this.itemService = new ItemService();
    this.getCompositions = this.getCompositions.bind(this);

    this.state = {
      compositions: [],
      msg: 'My message to me.'
    }
  }

  componentDidMount(){
    this.getCompositions();
  }

  render(){
    return (
      <div className="CompositionsApp">
        <p>Hello World! I am a Compositions Application.</p>

        {
          this.state.compositions.map(
            data =>
            <p>
              title: {data.title} <br />
              year: {data.year} <br />
              instruments: {data.instruments} <br />
              total_movements: {data.total_movements} <br />
              versions: {data.versions} <br />
              total_time: {data.total_time} <br />
              music_genre_id: {data.music_genre_id} <br />
            </p>
          )
        }
      </div>
    );
  }

  getCompositions(){
    this.itemService.retrieveItems(function(items){
      this.setState({
        compositions: items
      });
    }.bind(this));
  }
}

if(document.getElementById('Compositions')){
  ReactDOM.render(<Compositions />, document.getElementById('Compositions'));
}

export default Compositions;
