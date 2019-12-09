import React, { Component } from 'react';

class Composition extends Component {
  constructor(props){
    super(props);

    this.state = {
      comp: this.props.comp
    }
  }

  render(){
    // local vars
    const comp = this.state.comp;

    // display data for troubleshooting
    //console.log('comp:'); console.dir(comp);


    if(!comp) return null;

    return (
      <div>
        <a data-toggle="collapse" href={'#collapseExample_'+comp.id} role="button" aria-expanded="false" aria-controls="collapseExample">
          {comp.title}
        </a>

        <span style={{ paddingLeft:'10px' }}>
          [
            <a href={'/comps/'+comp.id}>edit</a>
          ]
        </span>

        <div style={{marginLeft:'20px'}}>
          <div className="collapse" id={'collapseExample_'+comp.id}>
            <div className="card card-body">
              <ul className="list-group list-group-flu" aria-label="show/hide">
                <li className="list-group-item">id: {comp.id}</li>
                <li className="list-group-item">year: {comp.year}</li>
                <li className="list-group-item">instruments: {comp.instruments}</li>
                <li className="list-group-item">total_movements: {comp.total_movements}</li>
                <li className="list-group-item">versions: {comp.versions}</li>
                <li className="list-group-item">total_time: {comp.total_time}</li>
                <li className="list-group-item">music_genre_id: {comp.music_genre_id}</li>
                <li className="list-group-item">created on: <small>{comp.created_at}</small></li>
                <li className="list-group-item">updated on: <small>{comp.updated_at}</small></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default Composition;
