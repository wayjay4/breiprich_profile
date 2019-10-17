import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';

class Compositions extends Component {
  constructor(props){
    super(props);
    this.itemService = new ItemService();
    this.getCompositions = this.getCompositions.bind(this);
    this.getApiToken = this.getApiToken.bind(this);
    this.getUser = this.getUser.bind(this);
    this.apiRouter = this.apiRouter.bind(this);

    this.state = {
      compositions: null,
      token: null,
      user: null,
      msg: 'My message to me.'
    }

    //this.getApiToken();
  }

  componentDidMount(){
    // local vars
    var params, actionRequest, actions;

    // set local vars
    params = null;
    actionRequest = 'getUser';
    actions = {
      actionRequest: actionRequest,
      params: params
    }

    this.apiRouter(null, function(){
      this.getCompositions(params);
      this.getUser(params);
    }.bind(this));

    // testing on delay, also sample calls
    //setTimeout(function(){
      //this.apiRouter(null, function(){
        //this.getCompositions(params);
        //this.getUser(params);
      //}.bind(this));
    //}.bind(this), 10000);

    // testing on delay, also sample calls
    //setTimeout(function(){
      //this.apiRouter(actions, null);
    //}.bind(this), 10000);
  }

  render(){
    const comps = this.state.compositions;
    if(!comps) return null;

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
          Token value: {this.state.token}
        </div>
      </div>
    );
  }

  apiRouter(actions, runbatchHandler){
    if(runbatchHandler != null){
      if(this.state.token == null){
        this.getApiToken(
          function(){
            return runbatchHandler();
          }.bind(this)
        );
      }
      else{
        return runbatchHandler();
      }
    }
    else{
      var runMe = 'this.'+actions.actionRequest+'(actions.params)';

      if(this.state.token == null){
        this.getApiToken(
          function(){
            return eval(runMe);
          }.bind(this)
        );
      }
      else{
        return eval(runMe);
      }
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
