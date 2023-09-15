import { Component,Input, OnInit } from '@angular/core';
import { DataService } from './service/data.service';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'mon-projet';
  isAuth = true;
  onClique() {
    alert('Cliqué !');
  }

  presenceTab :any[]
  constructor(private dataservice: DataService){}
  ngOnInit(){
    this.presenceTab = this.dataservice.presenceTab
  }
}
