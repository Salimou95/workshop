import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-mon-premier-component',
  templateUrl: './mon-premier-component.component.html',
  styleUrls: ['./mon-premier-component.component.css']
})
export class MonPremierComponentComponent implements OnInit {

  persoName: string = "Emmanuelle";
  persoStatus: string = "Présent";


  constructor() { }

  ngOnInit() {
  }

  getStatus() {
    return this.persoStatus;
  }

  getColor() {
return this.persoStatus;
}
}
