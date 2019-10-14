import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';

class Compositions extends Component {
  constructor(props){
    super(props);
    this.itemService = new ItemService();
    this.getCompositions = this.getCompositions.bind(this);

    this.state = {
      compositions: null,
      msg: 'My message to me.'
    }
  }

  componentDidMount(){
    this.getCompositions();
  }

  render(){
    const comps = this.state.compositions;
    //if(!comps) return null;

    return (
      <div className="CompositionsApp">
        <h1>Compositions</h1>

        <div>
        {
          this.props.testData.map(
            comp =>
            <p key={comp.id}>
              <a href={'/comps/'+comp.id}>
                {comp.title + ' -OR- ' + this.props.testData[parseInt(comp.id)-1].title}

              </a>
              <br />

              {/* year: {comp.year} <br />
              instruments: {comp.instruments} <br />
              total_movements: {comp.total_movements} <br />
              versions: {comp.versions} <br />
              total_time: {comp.total_time} <br />
              music_genre_id: {comp.music_genre_id} <br /> */}

              <span style={{marginLeft: '20px'}}><small>Created on {comp.created_at}</small></span>
            </p>
          )
        }
        </div>
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
  var testData = JSON.parse(document.getElementById('Compositions').getAttribute('data-testData'));
  document.getElementById('Compositions').setAttribute('data-testData', '')
  console.dir(testData);
  ReactDOM.render(<Compositions testData={testData} />, document.getElementById('Compositions'));
}

export default Compositions;
