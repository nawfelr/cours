import { Component } from '@angular/core';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'mon-projet-angular';
  hello = 'hello world';
  isAuth = true;
  onClique(){
    alert('Cliqué !');
  }
  persoOne ='Adrien';
  persoTwo ='Guillaume';
  persoThree = 'Stephane';
  Present ='Présent';
  Absent ='Absent';

  presenceTab=[
    {
      name :"Emmanuelle",
      status: "Présent"
    },
      {
      name :"Robin",
      status: "Absent"
    },
      {
      name :"Dominique",
      status: "Présent"
    }

  ]

}
