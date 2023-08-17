import { Component, Input, OnInit } from '@angular/core';
import {DataService} from './service/data.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title: string = 'Titre';
  constructor() { }
  ngOnInit() {
    ;

  }




  // title = 'mon-projet-angular';
  // hello = 'hello world';
  // isAuth = true;
  // onClique(){
  //   alert('Cliqué !');
  // }
  // persoOne ='Adrien';
  // persoTwo ='Guillaume';
  // persoThree = 'Stephane';
  // Present ='Présent';
  // Absent ='Absent';
  // presenceTab: any[];




}
