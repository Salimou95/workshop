import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-description',
  templateUrl: './description.component.html',
  styleUrls: ['./description.component.scss'],
})
export class DescriptionComponent  implements OnInit {

  titre: string = "Miami Beach";
  destination: string = "Destination Floride, Us";
  des: string = "un coucher de soleil magnifique";
  constructor() { }

  ngOnInit() {}

}
