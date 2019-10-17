import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';

class Compositions extends Component {
  constructor(props){
    super(props);
    this.itemService = new ItemService();
    this.initializeApp = this.initializeApp.bind(this);
    this.apiRouter = this.apiRouter.bind(this);
    this.getApiToken = this.getApiToken.bind(this);
    this.getUser = this.getUser.bind(this);
    this.getCompositions = this.getCompositions.bind(this);

    this.state = {
      compositions: null,
      token: null,
      user: null,
      msg: 'My message to me.'
    }

    this.initializeApp();
  }

  initializeApp(){
    // local vars
    var params;

    // set local vars
    params = null;

    this.apiRouter(function(){
      this.getUser(params);
      this.getCompositions(params);
    }.bind(this));

    // testing on delay, also sample calls
    //setTimeout(function(){
      //this.apiRouter(function(){
        //this.getCompositions(params);
        //this.getUser(params);
      //}.bind(this));
    //}.bind(this), 5000);
  }

  componentDidMount(){
    //this.initializeApp();
  }

  render(){
    const user = this.state.user;
    const comps = this.state.compositions;

    // display data for troubleshooting
    console.log('user:'); console.dir(user);
    console.log('comps:'); console.dir(comps);
    
    if(!comps || !user) return null;

    return (
      <div className="CompositionsApp">
        <h1>Compositions</h1>

        <div>
        {
          comps.map(
            comp =>
            <p key={comp.id}>
              <a href={'/comps/'+comp.id}>
                {comp.title}
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

        <div>
          <p>User value: {this.state.user.name}</p>
        </div>

        {/* <div>
          <p>Token value: {this.state.token}</p>
        </div> */}
      </div>
    );
  }

  apiRouter(runBatchHandler){
    if(this.state.token == null){
      this.getApiToken(
        function(){
          return runBatchHandler();
        }.bind(this)
      );
    }
    else{
      return runBatchHandler();
    }
  }

  getApiToken(runActionRequest){
    this.itemService.retrieveToken(function(token){
      this.setState({
        token: token.access_token
      });

      return runActionRequest();
    }.bind(this));
  }

  getCompositions(params){
    this.itemService.retrieveItems(
      function(items){
        this.setState({
          compositions: items
        });

        // display data for troubleshooting
        //console.log('items:'); console.dir(items);
        //console.log('params:'); console.dir(params);
      }.bind(this)
    );
  }

  getUser(params){
    this.itemService.retrieveUser(this.state.token,
      function(user){
        this.setState({
          user: user
        });

        // display data for troubleshooting
        //console.log('user:'); console.dir(user);
        //console.log('params:'); console.dir(params);
      }.bind(this)
    );
  }
}

if(document.getElementById('Compositions')){
  ReactDOM.render(<Compositions />, document.getElementById('Compositions'));
}

export default Compositions;
