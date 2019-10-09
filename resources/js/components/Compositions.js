import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class Compositions extends Component {
  constructor(props){
    super(props);

    this.state = {
      compositions: [],
      msg: 'My message to me.'
    }
  }

  componentDidMount(){
    axios.get('/api_test').then(response => {
      this.setState({
        compositions: response.data
      });
    })
    .catch((err)=> {
      console.log(err);
    });
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
}

if(document.getElementById('Compositions')){
  ReactDOM.render(<Compositions />, document.getElementById('Compositions'));
}

export default Compositions;
