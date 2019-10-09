import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Compositions extends Component {
  constructor(props){
    super(props);
    console.log('helloworld!');
  }

  render(){
    return (
      <div className="CompositionsApp">
        <p>Hello World! I am a Compositions Application.</p>
      </div>
    );
  }
}

if(document.getElementById('Compositions')){
  ReactDOM.render(<Compositions />, document.getElementById('Compositions'));
}

export default Compositions;
